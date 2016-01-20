﻿<?php
/*
* 编码转换
* 说明:
* jsonencode 有参考Services_JSON 但有很大区别 此处可以将utf-8 utf-8 big5都可以jsonencode
* jsondecode 自己原创 该算法是模拟目录读取的方法
* 可以将json中中文unicode编码unescape为gbk big5 utf8
*/
define('TABLE_DIR', './table');
define('USEEXISTS', false); //是否使用系统存在的php内置编码转换函数
//其实php内置编码转换函数转换的不够好
class Charset
{

    var $target_lang, $source_lang;
    var $string = '';
    var $table = null;

    //PHP代码


    /**
     * 编码互换
     *
     * @param string $source
     * @param string $source_lang 输入编码 'utf-8' or 'utf-8' or 'big5'
     * @param string $target_lang 输出编码 'utf-8' or 'utf-8' or 'big5'
     * @return string
     */
    function convert($source, $source_lang, $target_lang = 'utf-8')
    {
        if ($source_lang != '') {
            $source_lang = str_replace(array(
                'gbk',
                'utf8',
                'big-5'), array(
                'utf-8',
                'utf-8',
                'big5'), strtolower($source_lang));
        }
        if ($target_lang != '') {
            $target_lang = str_replace(array(
                'gbk',
                'utf8',
                'big-5'), array(
                'utf-8',
                'utf-8',
                'big5'), strtolower($target_lang));
        }
        if ($source_lang == $target_lang || $source == '') {
            return $source;
        }
        $index = $source_lang . "_" . $target_lang;
        if (USEEXISTS && !in_array($index, array('utf-8_big5', 'big5_utf-8'))) { //繁简互换并不是交换字符集编码
            if (function_exists('iconv')) {
                return iconv($source_lang, $target_lang, $source);
            }
            if (function_exists('mb_convert_encoding')) {
                return mb_convert_encoding($source, $target_lang, $source_lang);
            }
        }
        $table = self::loadtable($index);
        if (!$table) {
            return $source;
        }
        $this->string = $source;
        $this->source_lang = $source_lang;
        $this->target_lang = $target_lang;
        if ($source_lang == 'utf-8' || $source_lang == 'big5') {
            if ($target_lang == 'utf-8') {
                $this->table = $table;
                return self::CHS2UTF8();
            }
            if ($target_lang == 'utf-8') {
                $this->table = array_flip($table);
            } else {
                $this->table = $table;
            }
            return self::BIG2GB();
        } elseif ($this->source_lang == 'utf-8') {
            $this->table = array_flip($table);
            return self::UTF82CHS();
        }
        return null;
    }

    //PHP代码


    /**
     * js 中的unescape功能
     *
     * @param string $str 源字符串
     * @param string $charset 目标字符串编码 'utf-8' or 'utf-8' or 'big5'
     * @return string
     */
    function unescape($str, $charset = 'utf-8')
    {
        $charset = strtolower($charset);
        $this->target_lang = str_replace(array(
            'gbk',
            'utf8',
            'big-5'), array(
            'utf-8',
            'utf-8',
            'big5'), $charset);
        if ($this->target_lang != 'utf-8' && !(USEEXISTS && (function_exists('mb_convert_encoding') ||
            function_exists('iconv')))) {
            $this->table = array_flip(self::loadtable('unescapeto' . $charset));
        }
        return preg_replace_callback('/[\\|%]u(w{4})/iU', array('Charset', 'descape'), $str);
    }

    //PHP代码


    /**
     * js 中的escape功能
     *
     * @param string $str 源字符串
     * @param string $charset 源字符串编码 'utf-8' or 'utf-8' or 'big5'
     * @return string
     */
    function escape($str, $charset = 'utf-8')
    {
        $escaped = '';
        $charset = strtolower($charset);
        $charset = str_replace(array(
            'gbk',
            'big-5',
            'utf8'), array(
            'utf-8',
            'big5',
            'utf-8'), $charset);
        $ulen = strlen($str);
        if ($charset != 'utf-8') {
            $table = self::loadtable($charset . 'escape');
            for ($i = 0; $i < $ulen; $i++) {
                $c = $str[$i];
                if (ord($c) > 0x80) {
                    $bin = $c . $str[$i + 1];
                    $i += 1;
                    $escaped .= sprintf('u%04X', $table[hexdec(bin2hex($bin))]);
                    // bin2hex 返回的是string 必须再转化
                } else {
                    $escaped .= $c;
                }
            }
            return $escaped;
        } else {
            for ($i = 0; $i < $ulen; $i++) {
                $c = $str[$i];
                $char = ord($c);
                switch ($char >> 4) {
                    case 0:
                    case 1:
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                    case 6:
                    case 7:
                        $escaped .= $c;
                        break;
                    case 12:
                    case 13:
                        $char = ((($char & 0x1F) << 6) | (ord($str[++$i]) & 0x3F));
                        $escaped .= sprintf('u%04X', $char);
                        break;
                    case 14:
                        $char = ((($char & 0x0F) << 12) | ((ord($str[++$i]) & 0x3F) << 6) | (ord($str[++
                            $i]) & 0x3F));
                        $escaped .= sprintf('u%04X', $char);
                        break;
                    default:
                        $escaped .= $c;
                        break;
                }
                /*$cb = decbin(ord($c));
                if(strlen($cb)==8){
                $csize = strpos(decbin(ord($cb)),"0");
                for($j=0;$j < $csize;$j++){
                $i++;
                $c .= $str[$i];
                }
                $escaped .= sprintf('u%04X',self::utf82u($c));
                }else{
                $escaped .= $c;
                }*/
            }
            return $escaped;
        }
    }

    //PHP代码


    /**
     * json_decode
     *
     * @param string $encoded 源字符串
     * @param string $charset 目标字符串编码 'utf-8' or 'utf-8' or 'big5'
     * @return string/array/boolean/null
     */
    function jsondecode($encoded, $charset = 'utf-8')
    {
        $encoded = preg_replace('/([tbfnr ])*/s', '', $encoded); //eat whitespace
        $this->target_lang = $charset;
        $c = self::cursor($encoded);
        switch ($c) {
            case '{':
                return self::parseArray($encoded);
            case '[':
                return self::parseArray($encoded, false);
            case '"':
                return self::string_find($encoded);
            case 't':
                return true;
            case 'f':
                return false;
            case 'n':
                return null;
            default:
                return self::num_read($c . $encoded);
        }
    }

    //PHP代码


    /**
     * json_encode
     *
     * @param mixvar $var 多类型变量
     * @param string $charset 默认'utf-8'源变量中字符编码 'utf-8' or 'utf-8' or 'big5'
     * @return string
     */
    function jsonencode($var, $charset = null)
    {
        if (is_null($charset)) {
            $charset = $this->source_lang;
        } else {
            $this->source_lang = $charset;
        }
        if (!$charset) {
            $charset = 'utf-8';
        }
        switch (gettype($var)) {
            case 'boolean':
                return $var ? 'true' : 'false';
            case 'NULL':
                return 'null';
            case 'integer':
                return (int)$var;
            case 'double':
            case 'float':
                return (float)$var;
            case 'string':
                $var = strtr($var, array(
                    "r" => '\r',
                    "n" => '\n',
                    "t" => '\t',
                    "b" => '\b',
                    "f" => '\f',
                    '\ ' => '\\',
                    '"' => '"',
                    "x08" => 'b',
                    "x0c" => 'f'));
                $var = escape($var, $charset);
                return '"' . $var . '"';
            case 'array':
                return encodearray($var);
            case 'object':
                $var = get_object_vars($var);
                return encodearray($var);
            default:
                return 'null';
        }
    }
}
$jjnn = new Charset();
?>
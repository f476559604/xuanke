<?
class qswhGBK
{
    var $qswhData;
    function qswhGBK($filename = "qswhGBK.php")
    {

        $this->qswhData = file($filename);
    }
    function gb2u($gb, $callback = "")
    {
        /******(qiushuiwuhen 2002-8-15)******/
        $ret = "";
        for ($i = 0; $i < strlen($gb); $i++) {
            if (($p = ord(substr($gb, $i, 1))) > 127) {

                $q = ord(substr($gb, ++$i, 1));
                $q = ($q - ($q > 128 ? 65 : 64)) * 4;
                $q = substr($this->qswhData[$p - 128], $q, 4);
            } else
                $q = dechex($p);
            if (empty($callback))
                $ret .= $q;
            else {
                $arr = array(
                    "htmlHex",
                    "htmlDec",
                    "escape",
                    "u2utf8");
                if (is_integer($callback)) {
                    if ($callback > count($arr))
                        die("Invalid Function");
                    $ret .= $this->$arr[$callback - 1]($q);
                } else
                    $ret .= $callback($q);
            }
        }
        return $ret;
    }

    function htmlHex($str)
    {
        return "&#x" . $str . ";";
    }

    function htmlDec($str)
    {
        return "&#" . hexdec($str) . ";";
    }

    function escape($str)
    {
        return hexdec($str) < 256 ? chr(hexdec($str)) : "%u" . $str;
    }

    function u2utf8($str)
    {
        /******(qiushuiwuhen 2002-8-15)******/
        $sp = "!'()*-.0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz~";
        $dec = hexdec($str);
        $bin = decbin($dec);
        $len = strlen($bin);
        $arr = array(
            "c0",
            "e0",
            "f0");
        if ($dec > 0x7f) {
            $ret = "";
            for ($i = $len, $j = -1; $i >= 0; $i -= 6, $j++) {
                if ($i > 6)
                    $ret = "%" . dechex(0x80 + bindec(substr($bin, $i - 6, 6))) . $ret;
                else
                    $ret = "%" . dechex(hexdec($arr[$j]) + bindec(substr($bin, 0, 6 - $i))) . $ret;
            }
        } else {
            if (strpos($sp, chr($dec)))
                $ret = chr($dec);
            else
                $ret = "%" . strtolower($str);
        }
        return $ret;
    }
    /**
     * 刘炜加
     * *php将实体字符转为utf-8汉字的方法
     *
     ***********************/
/*
    function gbk2utf8_arr($arr1)
    {   
        $rree=array();
        
        if(is_array($arr1)){
            for ($i = 0; $i < count($arr1); $i++) {
                if(is_array($arr1[$i])){
                     for ($j = 0; $j < count($arr1[$i]); $j++) {
                        $rree[$i][$j]=$this->gbk2utf8_arr($arr1[$i][$j]);
                     }
                }
                else{
                    $rree[$i]=$this->gbk2utf8_arr($arr1[$i]);
                }
                
            }
            
        }
        return $rree;
    }
    /**
     * 刘炜加
     * *php将实体字符转为utf-8汉字的方法
     *
     ***********************/
     /*
    function entity2utf8onechar($unicode_c)
    {
        $unicode_c_val = intval($unicode_c);
        $f = 0x80; // 10000000
        $str = ""; // U-00000000 - U-0000007F:   0xxxxxxx
        if ($unicode_c_val <= 0x7F) {
            $str = chr($unicode_c_val);
        } //U-00000080 - U-000007FF:  110xxxxx 10xxxxxx
        else
            if ($unicode_c_val >= 0x80 && $unicode_c_val <= 0x7FF) {
                $h = 0xC0; // 11000000
                $c1 = $unicode_c_val >> 6 | $h;
                $c2 = ($unicode_c_val & 0x3F) | $f;
                $str = chr($c1) . chr($c2);
            }
        //U-00000800 - U-0000FFFF:  1110xxxx 10xxxxxx 10xxxxxx
            else
                if ($unicode_c_val >= 0x800 && $unicode_c_val <= 0xFFFF) {
                    $h = 0xE0; // 11100000
                    $c1 = $unicode_c_val >> 12 | $h;
                    $c2 = (($unicode_c_val & 0xFC0) >> 6) | $f;
                    $c3 = ($unicode_c_val & 0x3F) | $f;
                    $str = chr($c1) . chr($c2) . chr($c3);
                }
        //U-00010000 - U-001FFFFF:  11110xxx 10xxxxxx 10xxxxxx 10xxxxxx
                else
                    if ($unicode_c_val >= 0x10000 && $unicode_c_val <= 0x1FFFFF) {
                        $h = 0xF0; // 11110000
                        $c1 = $unicode_c_val >> 18 | $h;
                        $c2 = (($unicode_c_val & 0x3F000) >> 12) | $f;
                        $c3 = (($unicode_c_val & 0xFC0) >> 6) | $f;
                        $c4 = ($unicode_c_val & 0x3F) | $f;
                        $str = chr($c1) . chr($c2) . chr($c3) . chr($c4);
                    }
        //U-00200000 - U-03FFFFFF:  111110xx 10xxxxxx 10xxxxxx 10xxxxxx 10xxxxxx
                    else
                        if ($unicode_c_val >= 0x200000 && $unicode_c_val <= 0x3FFFFFF) {
                            $h = 0xF8; // 11111000
                            $c1 = $unicode_c_val >> 24 | $h;
                            $c2 = (($unicode_c_val & 0xFC0000) >> 18) | $f;
                            $c3 = (($unicode_c_val & 0x3F000) >> 12) | $f;
                            $c4 = (($unicode_c_val & 0xFC0) >> 6) | $f;
                            $c5 = ($unicode_c_val & 0x3F) | $f;
                            $str = chr($c1) . chr($c2) . chr($c3) . chr($c4) . chr($c5);
                        }
        //U-04000000 - U-7FFFFFFF:  1111110x 10xxxxxx 10xxxxxx 10xxxxxx 10xxxxxx 10xxxxxx
                        else
                            if ($unicode_c_val >= 0x4000000 && $unicode_c_val <= 0x7FFFFFFF) {
                                $h = 0xFC; // 11111100
                                $c1 = $unicode_c_val >> 30 | $h;
                                $c2 = (($unicode_c_val & 0x3F000000) >> 24) | $f;
                                $c3 = (($unicode_c_val & 0xFC0000) >> 18) | $f;
                                $c4 = (($unicode_c_val & 0x3F000) >> 12) | $f;
                                $c5 = (($unicode_c_val & 0xFC0) >> 6) | $f;
                                $c6 = ($unicode_c_val & 0x3F) | $f;
                                $str = chr($c1) . chr($c2) . chr($c3) . chr($c4) . chr($c5) . chr($c6);
                            }
        return $str;
    }
    function entities2utf8($unicode_c)
    {
        $unicode_c = preg_replace("/\&\#([\da-f]{5})\;/es", "$this->entity2utf8onechar('\\1')",
            $unicode_c);
        return $unicode_c;
    }
    /**
     * 刘炜加
     * *php将实体字符转为utf-8汉字的方法
     *
     **********************
     

    function unicode2utf8_arr($arr1)
    {
        for ($i = 0; $i < count($arr1); $i++) {
            $arr1[$i] = $this->entities2utf8($arr1[$i]);
        }
    }*/
    function replace_gbk(&$rrpp){
        for($i=0;$i<count($rrpp);$i++){
            $rrpp[$i]['obj_name']=$this->gb2u($rrpp[$i]['obj_name'],3);
            $table_change = array('%'=>'##');
            //echo strtr("I Love you",$table_change);
            $rrpp[$i]['obj_name']=strtr($rrpp[$i]['obj_name'],$table_change);
        }
    }
    function replace_line(&$rrll){
            //$rrpp[0]['obj_name']=$this->gb2u($rrpp[0]['obj_name'],3);
            $table_change = array('##'=>'\\');
            //echo strtr("I Love you",$table_change);
            $rrll=strtr($rrll,$table_change);
    }

}

?>
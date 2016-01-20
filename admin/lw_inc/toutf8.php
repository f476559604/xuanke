<?php

 /**
     * 刘炜加
     * *php将实体字符转为utf-8汉字的方法
     *
     ***********************/

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
    $unicode_c = preg_replace("/\&\#([\da-f]{5})\;/es", "entity2utf8onechar('\\1')",
        $unicode_c);
    return $unicode_c;
}

?>
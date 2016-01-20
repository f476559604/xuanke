<?php

class string{


 /**
  * 切割字符串
  */
 function cut_str($sourcestr, $cutlength) {
  //对函数参数进行安全保护
  /*
  $sourcestr参数无需要保护，只要是字符串都可以，
  $cutlength参数要求为整数
  */
  if(!ctype_digit($cutlength) || empty($cutlength)){
   $cutlength=intval($cutlength);
  }//强制让第二个参数为数字

  if(!$cutlength) return $sourcestr;//如果长度为0或者空，直接返回整个字符串
  $returnstr ='' ;
  $i = 0;
  $n = 0;
  $str_length = strlen($sourcestr);
  while (($n < $cutlength) and ($i <= $str_length)) {
   $temp_str = substr($sourcestr, $i, 1);
   $ascnum = Ord($temp_str);
   if ($ascnum >= 224) {
    $returnstr = $returnstr . substr($sourcestr, $i, 3);
    $i = $i + 3;
    $n++;
   } elseif ($ascnum >= 192) {
    $returnstr = $returnstr . substr($sourcestr, $i, 2);
    $i = $i + 2;
    $n++;
   } elseif ($ascnum >= 65 && $ascnum <= 90) {
    $returnstr = $returnstr . substr($sourcestr, $i, 1);
    $i = $i + 1;
    $n++;
   } else {
    $returnstr = $returnstr . substr($sourcestr, $i, 1);
    $i = $i + 1;
    $n = $n + 0.5;
   } 
  } 
  return $returnstr;
 } 

 

 //将字符串转换为utf8
 function Getutf8($str){
  if(empty($str)) return $str;
  $tmp='';
  if(!$this->is_utf8($str)){
   //如果不是utf8，则先考虑是不是gbk
   $tmp=$this->chang_code($str,gbk,utf8);
   if(!$this->is_utf8($tmp)){
    $tmp=$this->chang_code($tmp,big5,utf8);
    if(!$this->is_utf8($tmp)){
     return $str;
    }else{
     return $tmp;
    }
   }else{
    return $tmp;
   }
  }else{
   return $str;
  }
 }

 //将字符串由$input_encoding转换为$output_encoding
 function chang_code($string,$input_encoding='',$output_encoding=''){
  if(empty($input_encoding)||empty($output_encoding)){
   return $string;
  }
  if(function_exists(mb_convert_encoding)){
   return mb_convert_encoding($string,$output_encoding,$input_encoding);
  }else if (!function_exists(mb_convert_encoding) && function_exists(iconv)) {
   return iconv($input_encoding, $output_encoding, $string);
  }else {
   return $string;
  }

 } // end func

 //判断字符集是否为utf8
 function is_utf8($string) {
  if(empty($string)) return false;
  return preg_match('%^(?:
  [\x09\x0A\x0D\x20-\x7E] 
  | [\xC2-\xDF][\x80-\xBF] 
  | \xE0[\xA0-\xBF][\x80-\xBF] 
  | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2} 
  | \xED[\x80-\x9F][\x80-\xBF] 
  | \xF0[\x90-\xBF][\x80-\xBF]{2} 
  | [\xF1-\xF3][\x80-\xBF]{3} 
  | \xF4[\x80-\x8F][\x80-\xBF]{2} 
  )*$%xs', $string);
 } 
}
$jjoo=new string();
?>

<?php
//header("Content-type:text/html;charset=utf-8");
$conn=mysql_connect("localhost","root","111") or die ("The database connection failed");
mysql_select_db("xuanke_sys",$conn) or die ("connection failed");
mysql_query("set names utf8")or die ("connection failed 2");   
//mysql_query("set names \'GBK\'")or die ("connection failed 3");
//mysql_query("SET CHARACTER SET 'UTF8'")or die ("connection failed 4"); 
//mysql_query("SET CHARACTER SET 'UTF8'"); 
//mysql_query("set collation_server=utf8"); 
//ini_set("display_errors", "On");
//***********************
function inputclean($input){
    if(strlen($input)>=6&&strlen($input)<=20){
        $clean=strtolower($input);
        $clean=preg_replace("/[^a-zA-Z_0-9]/","",$clean); //输入只有大小写数字下划线，且长度大于6小于等于20;
        return $clean;   
    }
    else{return NULL;}   
}
//************************
function mysqlclean($data){
    return(is_array($data)?NULL:mysql_real_escape_string($data));
}
//************************
function querynum($table){
    $sql="select * from `$table` ";
    $query=mysql_query($sql);
    $num=mysql_num_rows($query);
    return $num;
}
function lwreplace($lwchar){
    return(str_replace(' ','',$lwchar));
}
function encoding($str){  
	//$str = mb_convert_encoding( $str,'gbk','utf-8');
	$str = iconv("utf8","GBK//IGNORE",$str);  
	return $str;  
}  
?>
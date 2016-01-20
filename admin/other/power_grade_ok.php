<?php
header("Content-type:text/html;charset=utf-8"); 
include "../lw_inc/lw_conn.php";
$isallow=$_POST['tea_isallow'];
$sql="update tea_re_grade set isallow='$isallow' WHERE judge='1'";
//echo $sql;
$query=mysql_query($sql);
if($query){
    echo('<script>alert("设置完毕");window.history.go(-1);</script>');
}
else{
    exit('o……no!!');
}
?>
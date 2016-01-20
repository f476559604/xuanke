<?php
header("Content-type:text/html;charset=utf-8");  
include "lw_inc/lw_conn.php";
session_start();
echo $_SESSION['type'].'<p>';
$sql="select * from cou_choose limit 1";
$query=mysql_query($sql);
$re=mysql_fetch_array($query);
foreach($re as $key){
echo $key.'<p>';
}
?>
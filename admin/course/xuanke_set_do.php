<?php
header("Content-type:text/html;charset=utf-8"); 
include "../lw_inc/lw_conn.php";
$xuanke=$_POST['xuanke'];
$sql="update term_now set choose_allow='$xuanke' WHERE id='1'";
//echo $sql;
$query=mysql_query($sql);
if($query){
    echo('<script>alert("设置完毕，你需要重新登录系统");window.location.href="../lw_exit_ok.php";</script>');
}
?>
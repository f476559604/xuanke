<?php
header("Content-type:text/html;charset=utf-8"); 
include "../lw_inc/lw_conn.php";
$type=$_GET['type'];
$id=$_GET['id'];
if($type=='stu'){
    $sql="delete from user_stu where stu_id=$id limit 1";
}
else if($type=='tea'){
    $sql="DELETE FROM user_tea WHERE tea_id = '$id' limit 1";
    
}
//echo $sql;
if(mysql_query($sql)){
    echo('<script>alert("删除成功"); window.history.go(-1);</script>');
}
else{
     echo('<script>alert("操作失败");window.history.go(-1);</script>');
}
?>
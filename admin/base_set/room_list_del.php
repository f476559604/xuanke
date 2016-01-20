<?php
header("Content-type:text/html;charset=utf-8"); 
include "../lw_inc/lw_conn.php";
$id=$_GET['obj_id'];
$sql="delete from tea_room where id='$id'";
if(mysql_query($sql)){
    echo('<script lang="javascript">alert("删除成功");window.history.back(-1);</script>');
}
else{
    echo('<script lang="javascript">alert("删除失败");window.history.go(-1);</script>');
}
?>
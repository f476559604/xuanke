<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/lw_conn.php";
$obj_id=$_GET['obj_id'];
$sql="delete from obj_list where obj_id=$obj_id";
//echo($sql);
$query=mysql_query($sql);
if($query){
    echo('<script lang="javascript">alert("删除成功");window.history.back(-1);</script>');
}
else{
    echo('<script lang="javascript">alert("删除失败");window.history.go(-1);</script>');
}
?>



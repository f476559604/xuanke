<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/lw_conn.php";
include "../lw_inc/judge.php";
$id=$_POST['hp2'];
$new_s=trim($_POST['hp3']);

$sql="update user_stu set stu_pass='$new_s' where stu_id='$id'";
$query=mysql_query($sql);
if($query){
    echo('<script lang="javascript">alert("更改成功");window.history.go(-1);</script>');
}



?>
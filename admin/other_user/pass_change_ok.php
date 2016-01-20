<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/lw_conn.php";
session_start();
//$id=$_SESSION['user_id'];
$name=$_SESSION['name'];
$type=$_SESSION['type'];
$old_s=trim($_POST['old1']);
$old_nm=$old_s;
$new_s=trim($_POST['new1']);
$old_s=md5($old_s);
$old_s=md5($old_s);
$new_s=md5($new_s);
$new_s=md5($new_s);
if($type='admin_view'||$type='education'){
    $sql="select user_name from user_user where user_name='$name' and (user_pass='$old_s' or user_pass='$old_nm')";
    $table='user_user';
}
else{
    exit('未知错误');
}

$query=mysql_query($sql);
$re=mysql_fetch_row($query);
if($re[0]==''){
    echo('<script lang="javascript">alert("密码不正确");window.history.go(-1);</script>');
    exit();
}
else{
    $sql="update ".$table." set user_pass='$new_s' where user_name='$name'";
    $query=mysql_query($sql);
    if($query){
        echo('<script lang="javascript">alert("更改成功");window.history.go(-1);</script>');
    }
}


?>
<?php
header("Content-type:text/html;charset=utf-8");  
include "admin/lw_inc/lw_conn.php";
session_start();

$usertype=trim($_POST['DrpUserType']);
$identify=inputclean(trim($_POST['UserID1']));
$password=inputclean(trim($_POST['UserPwd1']));
$identify1=mysqlclean($identify);
//$identify1='201063502140';
//echo $usertype.'<br/>';
//echo $identify.'<br/>';
//echo $password.'<br/>';
//echo $identify1.'<br/>';
//学生
function term_now(){
    $sql="select term_now,choose_allow from term_now where 1";
    $query=mysql_query($sql);
    $result2=mysql_fetch_row($query);
    $_SESSION['term_now']=$result2[0];
    $_SESSION['choose_allow']=$result2[1];
    //$sql="select cou_time_begin_ch,cou_time_end_ch from cou_app_record"
}
if($usertype=='student'){
    $sql="select stu_id from `user_stu` where stu_id='".$identify1."' limit 1";
    $query=mysql_query($sql);
    $result=mysql_fetch_row($query);
    if($result[0]==$identify&&$result[0]==true){
        $sql="select user_name from `user_stu` where stu_id='".$identify1."' and (stu_pass='".md5(md5(mysqlclean($password)))."' or stu_pass='".mysqlclean($password)."') limit 1";
        //echo $sql;
        $query=mysql_query($sql);
        $result1=mysql_fetch_row($query);
        if($result1[0]==true){
            $_SESSION['user_id']=$identify1;
            //identify与identify1其实都是一样的，经过上面mysqlclean清理,另外统一的id及其它sess
            $_SESSION['userid']=$identify1;
            $_SESSION['type']=$usertype;
            $_SESSION['name']=$result1[0];
            $sql="select stu_sch,stu_maj,stu_gra,stu_clas from `user_stu` where stu_id='".$identify1."'limit 1";
            $query=mysql_query($sql);
            $result2=mysql_fetch_assoc($query);
            $_SESSION['sch_inf']=$result2;//2013，3，8加其它没有
            //设置学期
            term_now();
            echo "<script language='javascript' type='text/javascript'>window.location.href='admin/default.php';</script>";
        }
        else echo "<script language='javascript' type='text/javascript'>window.location.href='error.html';</script>";
    }
    else echo "<script language='javascript' type='text/javascript'>window.location.href='error.html';</script>";
}
//老师
else if($usertype=='teacher'){
    
    $sql="select tea_id from `user_tea` where tea_id='".$identify1."' limit 1";
    //echo $sql;
    $query=mysql_query($sql);
    $result=mysql_fetch_row($query);
    if($result[0]==$identify&&$result[0]==true){
        $sql="select user_name from `user_tea` where tea_id='".$identify1."' and (tea_pass='".md5(md5(mysqlclean($password)))."' or  tea_pass='".mysqlclean($password)."') limit 1";
        //echo $sql;
        $query=mysql_query($sql);
        $result1=mysql_fetch_row($query);
        if($result1[0]==true){
            $_SESSION['user_id']=$identify1;
            
            $_SESSION['type']=$usertype;
            $_SESSION['name']=$result1[0];
            term_now();
            echo "<script language='javascript' type='text/javascript'>window.location.href='admin/default.php'</script>";
        }
        else echo "<script language='javascript' type='text/javascript'>window.location.href='error.html';</script>";
    }
    else echo "<script language='javascript' type='text/javascript'>window.location.href='error.html';</script>";
}
//教务
else if($usertype=='education'){
    $sql="select user_name from `user_user` where user_name='".$identify1."' and user_type='admin' limit 1";
    $query=mysql_query($sql);
    $result=mysql_fetch_row($query);
    if($result[0]==$identify&&$result[0]==true){
        $sql="select user_name from `user_user` where user_name='".$identify1."' and  (user_pass='".md5(md5(mysqlclean($password)))."' or  user_pass='".mysqlclean($password)."') limit 1";
        $query=mysql_query($sql);
        $result1=mysql_fetch_row($query);
        if($result1[0]==true){
            $_SESSION['user_id']=$identify1;
            $_SESSION['type']=$usertype;
            $_SESSION['name']=$result1[0];
            term_now();
            echo "<script language='javascript' type='text/javascript'>window.location.href='admin/default.php'</script>";
        }
        else echo "<script language='javascript' type='text/javascript'>window.location.href='error.html';</script>";
    }
    else echo "<script language='javascript' type='text/javascript'>window.location.href='error.html';</script>";
}
else if($usertype=='admin_view'){
    $sql="select user_name from `user_user` where user_name='".$identify1."' and user_type='view' limit 1";
    $query=mysql_query($sql);
    $result=mysql_fetch_row($query);
    if($result[0]==$identify&&$result[0]==true){
        $sql="select user_name from `user_user` where user_name='".$identify1."' and  (user_pass='".md5(md5(mysqlclean($password)))."' or  user_pass='".mysqlclean($password)."') limit 1";
        $query=mysql_query($sql);
        $result1=mysql_fetch_row($query);
        if($result1[0]==true){
            $_SESSION['user_id']=$identify1;
            $_SESSION['type']=$usertype;
            $_SESSION['name']=$result1[0];
            term_now();
            echo "<script language='javascript' type='text/javascript'>window.location.href='admin/other_user/other_default.php'</script>";
        }
        else echo "<script language='javascript' type='text/javascript'>window.location.href='error.html';</script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>window.location.href='error.html';</script>";
        exit('未知错误');
    }
    
}
else {
    echo "<script language='javascript' type='text/javascript'>window.location.href='error.html';</script>";
    exit('未知错误');
    }
?>
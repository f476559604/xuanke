<?php
session_start();
 $addr='http://'.$_SERVER['HTTP_HOST'].'/xuankeSystem/index.html';
 if($_SESSION['user_id']!=NULL&&$_SESSION['name']!=NULL){
    if($_SESSION['type']=='teacher'||$_SESSION['type']=='student'||$_SESSION['type']=='education'){   
    }
    else if($_SESSION['type']=='admin_view'){}
    //else echo "<script language='javascript' type='text/javascript'>alert('sf');</script>";

    else{
         echo "<script language='javascript' type='text/javascript'>window.location.href='".$addr."';</script>";
        exit('未知错误');
    }
}
else{
    echo "<script language='javascript' type='text/javascript'>window.location.href='".$addr."';</script>";//用于包含在admin文件夹中的个个文件中
    //else echo "<script language='javascript' type='text/javascript'>alert('sfqqq');</script>";
    exit('未知错误');
} 
 ?>
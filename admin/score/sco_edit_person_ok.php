<?php
    header("Content-type:text/html;charset=utf-8");
    session_start();
    
    include "../lw_inc/lw_conn.php";
     $sql="select isallow from tea_re_grade limit 1";
    $query=mysql_query($sql);
    $re=mysql_fetch_row($query);
    if($_SESSION['type']==''){
        echo('出现未知错误');
        exit();
    }
    if($re[0]!=$_SESSION['type']){
        echo('此时间段不允许编辑');
        exit();
    }
    $cou_all_id=$_POST['cou_all_id'];
    $cou_stu_mark1=$_POST['cou_stu_mark1'];
    $cou_stu_mark2=$_POST['cou_stu_mark2'];
    $cou_stu_mark3=$_POST['cou_stu_mark3'];
    $cou_stu_mark=$_POST['cou_stu_mark'];
    $cou_checking1=$_POST['cou_checking1'];
    $cou_checking2=$_POST['cou_checking2'];
    $cou_checking=$_POST['cou_checking'];
    $sql="update cou_choose set cou_stu_mark1='$cou_stu_mark1',cou_stu_mark2='$cou_stu_mark2',cou_stu_mark3='$cou_stu_mark3',cou_stu_mark='$cou_stu_mark',cou_checking1='$cou_checking1',cou_checking2='$cou_checking2',cou_checking='$cou_checking' where cou_all_id='$cou_all_id'";
    //echo $sql;
    if(mysql_query($sql)){
        echo('<script lang="javascript">alert("更改成功");window.history.back(-1);</script>');
    }
?>
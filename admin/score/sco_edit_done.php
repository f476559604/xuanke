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
    $cou_all_id=$_POST["cou_all_id"];
    $cou_stu_mark1=$_POST['cou_stu_mark1'];
    $cou_stu_mark2=$_POST['cou_stu_mark2'];
    $cou_stu_mark3=$_POST['cou_stu_mark3'];
    $cou_stu_mark=$_POST['cou_stu_mark'];
    $cou_checking1=$_POST['cou_checking1'];
    $cou_checking2=$_POST['cou_checking2'];
    $cou_checking=$_POST['cou_checking'];
    $jud=1;
    for($i=0;$i<count($cou_all_id);$i++){
        $sql="update cou_choose set cou_stu_mark1='".$cou_stu_mark1[$i]."',cou_stu_mark2='".$cou_stu_mark2[$i]."',cou_stu_mark3='".$cou_stu_mark3[$i]."',cou_stu_mark='".$cou_stu_mark[$i]."',cou_checking1='".$cou_checking1[$i]."',cou_checking2='".$cou_checking2[$i]."',cou_checking='".$cou_checking[$i]."' where cou_all_id='".$cou_all_id[$i]."'";
        $query=mysql_query($sql);
        if(!$query){
            $jud=0;
        }
    }
    if($jud==1){
        echo('编辑成功');
    }

?>
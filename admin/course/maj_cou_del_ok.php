<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/lw_conn.php";
session_start();
$del_cou=$_POST['del_name'];
$num=$_GET['num'];
//print_r($del_cou);
$cou_sql="select cou_all from maj_course where class_id='".$num."' and cou_term='".$_SESSION['term_now']."'";
//echo $cou_sql;
$begin_c=mysql_query($cou_sql);
$begin_c=mysql_fetch_row($begin_c);
$i=0;
foreach($del_cou as $value){
    $del_class=$_POST[$value];
    $del_content='#'.$value.'#';
    
    $end_c=str_replace($del_content,'',$begin_c[0]);


   
    $cou_time=explode(',',$del_class);
    $cou_time_num=count($cou_time);
    //$cou_time_sql='';
    $cou_sql_up='';//这里是更新sql语句用的
    for($h=0;$h<$cou_time_num;$h++){
        //$cou_time_sql.="'".$cou_info_all."',";
        $cou_sql_up.=$cou_time[$h]."='',";
    }
    $cou_sql_up=substr($cou_sql_up,0,strlen($cou_sql_up)-1);
    $del_sql="update maj_course set ".$cou_sql_up." ,cou_all='".$end_c."' where class_id='".$num."' and cou_term='".$_SESSION['term_now']."'";
    //print_r($del_class);
    //echo $cou_time_num;
    if(mysql_query($del_sql)){
        $i=1;
    }
}
if($i==1){
    echo('<script>alert("删除成功");window.history.go(-1);</script>');
}
?>
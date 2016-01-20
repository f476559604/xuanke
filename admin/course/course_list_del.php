<?php
header("Content-type:text/html;charset=utf-8"); 
include "../lw_inc/lw_conn.php";
$id=$_GET['id'];
$del_cou=$_GET['time_cou'];
$sql="delete from cou_app_record where cou_id='$id'";
$query=mysql_query($sql);
echo $id;


//print_r($del_cou);
$cou_like='#'.$id.'#';

$cou_sql="select cou_all,tea_id from tea_course where cou_all like '%".$cou_like."%'";
echo $cou_sql;
$begin_c=mysql_query($cou_sql);
$begin_c=mysql_fetch_row($begin_c);
print_r($begin_c);
$i=0;
//foreach($del_cou as $value){
    //$del_class=$_POST[$value];
    $del_content='#'.$id.'#';
    
    $end_c=str_replace($del_content,'',$begin_c[0]);


   //echo $del_cou;
    $cou_time=explode(',',$del_cou);
    $cou_time_num=count($cou_time);
    //$cou_time_sql='';
    $cou_sql_up='';//这里是更新sql语句用的
    for($h=0;$h<$cou_time_num;$h++){
        //$cou_time_sql.="'".$cou_info_all."',";
        $cou_sql_up.=$cou_time[$h]."='',";
    }
    $cou_sql_up=substr($cou_sql_up,0,strlen($cou_sql_up)-1);
    $del_sql="update tea_course set ".$cou_sql_up." ,cou_all='".$end_c."' where tea_id='".$begin_c[1]."'";
    //echo $del_sql;
    //print_r($del_class);
    //echo $cou_time_num;
    if(mysql_query($del_sql)){
        $i=1;
    }
//}


$cou_sql="select cou_all,all_id from room_course where cou_all like '%".$cou_like."%'";
//echo $cou_sql;
$begin_c=mysql_query($cou_sql);
$begin_c=mysql_fetch_row($begin_c);
$j=0;
//foreach($del_cou as $value){
    //$del_class=$_POST[$value];
    $del_content='#'.$id.'#';
    
    $end_c=str_replace($del_content,'',$begin_c[0]);


   
    $cou_time=explode(',',$del_cou);
    $cou_time_num=count($cou_time);
    //$cou_time_sql='';
    $cou_sql_up='';//这里是更新sql语句用的
    for($h=0;$h<$cou_time_num;$h++){
        //$cou_time_sql.="'".$cou_info_all."',";
        $cou_sql_up.=$cou_time[$h]."='',";
    }
    $cou_sql_up=substr($cou_sql_up,0,strlen($cou_sql_up)-1);
    $del_sql="update room_course set ".$cou_sql_up." ,cou_all='".$end_c."' where all_id='".$begin_c[1]."'";
    //print_r($del_class);
    //echo $cou_time_num;
    if(mysql_query($del_sql)){
        $j=1;
    }
//}




if($query){
    echo('<script lang="javascript">alert("删除成功");//window.history.go(-1);</script>');
}
else{
    echo('<script lang="javascript">alert("删除失败");//window.history.go(-1);</script>');
}

?>
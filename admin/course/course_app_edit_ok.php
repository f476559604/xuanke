<?php
include_once "../lw_inc/lw_conn.php";
$cou_class=trim($_POST['cou_class']);
//echo $cou_grade;
if($cou_class==''){
    exit('错误');
}
//$cou_grade=trim($_POST['cou_grade']);
$tea_id=$_POST['teach_teacher'];
$old_class_info=trim($_POST['old_class_info']);
$old_time_info=trim($_POST['old_time_info']);
$cou_name=trim($_POST['cou_name']);
$cou_code=trim($_POST['cou_code']);
$cou_type=trim($_POST['cou_type']);
$cou_volume=trim($_POST['cou_volume']);
$cou_credit=trim($_POST['cou_credit']);
$cou_time_detail=trim($_POST['cou_time_detail']);
$cou_time_detail=rtrim($cou_time_detail, ','); //去除最后一个逗号
$cou_week_to=trim($_POST['cou_week_to']);
$teachering_material=trim($_POST['teachering_material']);
$cou_classroom=trim($_POST['cou_classroom']);
$cou_weekcycle=trim($_POST['cou_weekcycle']);
$other_note=trim($_POST['other_note']);
$cou_introduce=trim($_POST['cou_introduce']);
$idd=$_POST['idd'];
$sql="update cou_app_record set cou_name='$cou_name', class='$cou_class',cou_code='$cou_code',cou_type='$cou_type',cou_volume='$cou_volume',cou_credit='$cou_credit',cou_time_detail='$cou_time_detail',cou_week_to='$cou_week_to',teachering_material='$teachering_material',cou_classroom='$cou_classroom',cou_weekcycle='$cou_weekcycle',other_note='$other_note',cou_introduce='$cou_introduce' where cou_id='$idd'";
//echo $sql;
if(mysql_query($sql)){
    echo('第一步更新成功<br/>');
    //echo "<script language='javascript' type='text/javascript'>alert('更新成功');window.history.go(-1);</script>";
}
else{
    echo('第一步更新失败<br/>');
    //echo "<script language='javascript' type='text/javascript'>alert('更新失败');window.history.go(-1);</script>";
}
if($old_class_info==$cou_classroom&&$old_time_info==$cou_time_detail){
    echo('更新成功，不需要进行第二步');
}

else if($old_class_info==$cou_classroom&&$old_time_info!=$cou_time_detail){
    echo('进行第二步第一种情况');
    $sql="select cou_term from cou_app_record where cou_id='$idd' limit 1";
    $query=mysql_query($sql);
    $re=mysql_fetch_row($query);
    $ttmm=$re[0];
    
    $o_time=explode(',',$old_time_info);
    $c_time=explode(',',$cou_time_detail);
    $o_time_set='';
    foreach($o_time as $val){
        $o_time_set.=$val."='',";
    }
    unset($val);
    $o_time_set=rtrim($o_time_set, ','); 
    
    foreach($c_time as $val){
        $c_time_set.=$val."='".$idd.'#'.$cou_name.'('.$cou_classroom.")',";
    }
    unset($val);
    $c_time_set=rtrim($c_time_set, ',');
    
    //$add_now_cou=str_replace('#'.$idd.'#','',$cou_all);
    
    $sql="update room_course set $o_time_set where room_name='$old_class_info' and cou_term='$ttmm'";
    if(mysql_query($sql)){}
    else{exit('出现错误第二步第一种情况第一阶段');}
    $sql="update room_course set $c_time_set where room_name='$cou_classroom' and cou_term='$ttmm'";
    if(mysql_query($sql)){}
    else{exit('出现错误第二步第一种情况第二阶段');}
    echo('第二步第一种情况进行完毕，场地课表更新成功');
    
    //更新老师课表
    $sql="update tea_course set $o_time_set where tea_id='$tea_id' and cou_term='$ttmm'";
    if(mysql_query($sql)){}
    else{exit('出现错误更新教师课表第一阶段');}
    $sql="update tea_course set $c_time_set where tea_id='$tea_id' and cou_term='$ttmm'";
    if(mysql_query($sql)){}
    else{exit('出现错误更新教师课表第二阶段');}
    echo('第三步进行完毕，教师课表更新成功');
    
}
else{
    echo('进行第二步第二种情况');
    $sql="select cou_term from cou_app_record where cou_id='$idd' limit 1";
    $query=mysql_query($sql);
    $re=mysql_fetch_row($query);
    $ttmm=$re[0];
    
    $o_time=explode(',',$old_time_info);
    $c_time=explode(',',$cou_time_detail);
    $o_time_set='';
    foreach($o_time as $val){
        $o_time_set.=$val."='',";
    }
    unset($val);
    $o_time_set=rtrim($o_time_set, ','); 
    
    foreach($c_time as $val){
        $c_time_set.=$val."='".$idd.'#'.$cou_name.'('.$cou_classroom.")',";
    }
    unset($val);
    $c_time_set=rtrim($c_time_set, ',');
    
    
    $sql="select cou_all from room_course where room_name='$old_class_info' and cou_term='$ttmm' limit 1";
    $query=mysql_query($sql);
    $re=mysql_fetch_row($query);
    $old_cou_all=$re[0];
    $del_old_cou=str_replace('#'.$idd.'#','',$cou_all);
    
    $sql="select cou_all from room_course where room_name='$cou_classroom' and cou_term='$ttmm' limit 1";
    $query=mysql_query($sql);
    $re=mysql_fetch_row($query);
    $now_cou_all=$re[0];
    if(strpos($now_cou_all, $idd)){//判断是否存在于之中
   
    }
    else{
        $add_now_cou=$now_cou_all.'#'.$idd.'#';
    }
    //$add_now_cou=str_replace('#'.$idd.'#','',$cou_all);
    
    $sql="update room_course set $o_time_set,cou_all='$del_old_cou' where room_name='$old_class_info' and cou_term='$ttmm'";
    if(mysql_query($sql)){}
    else{exit('出现错误第二步第二种情况第一阶段');}
    $sql="update room_course set $c_time_set,cou_all='$add_now_cou' where room_name='$cou_classroom' and cou_term='$ttmm'";
    if(mysql_query($sql)){}
    else{exit('出现错误第二步第二种情况第二阶段');}
    echo('第二步第二种情况进行完毕，场地课表更新成功');
    //更新老师课表
    $sql="update tea_course set $o_time_set where tea_id='$tea_id' and cou_term='$ttmm'";
    if(mysql_query($sql)){}
    else{exit('出现错误更新教师课表第一阶段');}
    $sql="update tea_course set $c_time_set where tea_id='$tea_id' and cou_term='$ttmm'";
    if(mysql_query($sql)){}
    else{exit('出现错误更新教师课表第二阶段');}
    echo('第三步进行完毕，教师课表更新成功');
}

?>

                                
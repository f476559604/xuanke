<?php
$sql="select max(last_insert_id(cou_id))as cou_id from cou_app_record";
$query=mysql_query($sql);
$re=mysql_fetch_row($query);//课程id
/**function judge_true($v){
    if ($v!=''){
    	return true;
    	}
     return false;
}

*room***插入
*/
//global $cou_term;
$sql="select all_id from room_course where room_name='$cou_classroom' and cou_term='$cou_term'";
$query=mysql_query($sql);
$re0=mysql_fetch_row($query);//教室id
//echo $sql;
if($re0[0]==''){
    $sql="insert room_course (room_name,cou_term) values('$cou_classroom','$cou_term')";
    $query=mysql_query($sql);//如果没有则插入教室
    if($query){
        
    }
}


//for($i=0;$i<count($name_name);$i++){
//$cou_info=$_POST[$name_name[$i]];
$cou_info_all=$re[0].'#'.$cou_name.'('.$cou_classroom.')';
    //查询课程时间是否冲突
/*
$jud_cou_time="select ".$cou_time_detail." from room_course where room_name='".$cou_classroom."'";
    //echo $jud_cou_time;
$jud_cou_re=mysql_query($jud_cou_time);
$jud_cou_re=mysql_fetch_row($jud_cou_re);
    //print_r($jud_cou_re);
@$jud_cou_re=array_filter($jud_cou_re,'judge_true');

if(count($jud_cou_re)!=0){
    echo('<script>alert("该申报课程与其它课程占用教室冲突");</script>');
}*/

//为更新语句做准备
$cou_time_de=split(',',$cou_time_detail);
$cou_time_num=count($cou_time_de);
$cou_time_sql='';
$cou_sql_up='';
for($h=0;$h<$cou_time_num;$h++){
    $cou_time_sql.="'".$cou_info_all."',";
    $cou_sql_up.=$cou_time_de[$h]."='".$cou_info_all."',";//更新语句
}
$cou_time_sql=substr($cou_time_sql,0,strlen($cou_time_sql)-1);
$cou_sql_up=substr($cou_sql_up,0,strlen($cou_sql_up)-1);
$couse_all_sql="select cou_all from room_course where room_name='".$cou_classroom."' and cou_term='$cou_term'";
//echo($couse_all_sql);
$couse_all_re=mysql_query($couse_all_sql);
$couse_all_re=mysql_fetch_row($couse_all_re);
$couse_all=$couse_all_re[0].'#'.$re[0].'#';
$cou_sql="update room_course set ".$cou_sql_up." ,cou_all='".$couse_all."' where room_name='".$cou_classroom."' and cou_term='$cou_term'";
//echo($cou_sql);
$query1=mysql_query($cou_sql);
/**
*tea_course***插入


$sql="select a.tea_id from tea_course as a INNER JOIN user_tea as b on a.tea_id=b.tea_id WHERE b.tea_id='$teach_teacher' and a.cou_term='$cou_term'";
$query=mysql_query($sql);
$re0=mysql_fetch_row($query);//老师id
$day=date("YmdHis");
$tea_sch=1;//默认为1
$tea_id=$re0[0];*/
$tea_id=$teach_teacher;
$sql="select tea_id from tea_course where tea_id='".$tea_id."' and cou_term='$cou_term'";
$query=mysql_query($sql);
$re0=mysql_fetch_row($query);
if($re0[0]==''){
    $sql="insert tea_course (tea_id,cou_term) values('$tea_id','$cou_term')";
    $query=mysql_query($sql);
}


$cou_info_all=$re[0].'#'.$cou_name.'('.$cou_classroom.')';
    //查询课程时间是否冲突


//为更新语句做准备
$cou_time_de=split(',',$cou_time_detail);
$cou_time_num=count($cou_time_de);
$cou_time_sql='';
$cou_sql_up='';
for($h=0;$h<$cou_time_num;$h++){
    $cou_time_sql.="'".$cou_info_all."',";
    $cou_sql_up.=$cou_time_de[$h]."='".$cou_info_all."',";//更新语句
}
$cou_time_sql=substr($cou_time_sql,0,strlen($cou_time_sql)-1);
$cou_sql_up=substr($cou_sql_up,0,strlen($cou_sql_up)-1);
$couse_all_sql="select cou_all from tea_course where tea_id='".$tea_id."' and cou_term='$cou_term'";
//echo($couse_all_sql);
$couse_all_re=mysql_query($couse_all_sql);
$couse_all_re=mysql_fetch_row($couse_all_re);
$couse_all=$couse_all_re[0].'#'.$re[0].'#';
$cou_sql="update tea_course set ".$cou_sql_up." ,cou_all='".$couse_all."' where tea_id='".$tea_id."'";
//echo($cou_sql);
$query2=mysql_query($cou_sql);




?>
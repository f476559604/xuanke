<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/lw_conn.php";
session_start();
$name_name=$_POST['name_name'];
//var_dump($stu_cou_choose);
$ii='';
function judge_true($v){
    if ($v!=''){
    	return true;
    	}
     return false;
}
for($i=0;$i<count($name_name);$i++){
    $cou_info=$_POST[$name_name[$i]];
    $cou_info_all=$name_name[$i].'#'.$cou_info[0].'('.$cou_info[2].')';
    //查询课程时间是否冲突

    $jud_cou_time="select ".$cou_info[1]." from stu_course where stu_id='".$_SESSION['user_id']."' and cou_term='".$_SESSION['term_now']."'";
    //echo $jud_cou_time;
    $jud_cou_re=mysql_query($jud_cou_time);
    $jud_cou_re=mysql_fetch_row($jud_cou_re);
    //print_r($jud_cou_re);
    @$jud_cou_re=array_filter($jud_cou_re,'judge_true');
    
    /**
     * 判断别一个表maj_class预置的课有没有
     */
     
     $jud_cou_time_0="select ".$cou_info[1]." from maj_course as a INNER JOIN user_stu as b on a.class_id=b.stu_gra where b.stu_id='".$_SESSION['user_id']."' and cou_term='".$_SESSION['term_now']."'";
     //echo $jud_cou_time_0;
     $jud_query=mysql_query($jud_cou_time_0);
     $jud_re=mysql_fetch_row($jud_query);
     @$jud_re=array_filter($jud_re,'judge_true');
     /**
     * ******************************
     */
    if(count($jud_cou_re)!=0||count($jud_re)!=0){
        echo('<script>alert("课程'.$name_name[$i].'与其它课程时间冲突");window.location.href="cou_choose.php";</script>');
    }
    else{
    //为更新语句做准备
        $cou_time=split(',',$cou_info[1]);
        $cou_time_num=count($cou_time);
        $cou_time_sql='';
        $cou_sql_up='';
        for($h=0;$h<$cou_time_num;$h++){
            $cou_time_sql.="'".$cou_info_all."',";
            $cou_sql_up.=$cou_time[$h]."='".$cou_info_all."',";
        }
        $cou_time_sql=substr($cou_time_sql,0,strlen($cou_time_sql)-1);
        $cou_sql_up=substr($cou_sql_up,0,strlen($cou_sql_up)-1);
        $judge_sql="select stu_id from stu_course where stu_id='".$_SESSION['user_id']."' and cou_term='".$_SESSION['term_now']."'";
        
        $judge_sql=mysql_fetch_row(mysql_query($judge_sql));
    
        if($judge_sql[0]!=NULL){
            $couse_all_sql="select cou_all from stu_course where stu_id='".$_SESSION['user_id']."' and cou_term='".$_SESSION['term_now']."'";
            //echo($couse_all_sql);
            $couse_all_re=mysql_query($couse_all_sql);
            $couse_all_re=mysql_fetch_row($couse_all_re);
            $couse_all=$couse_all_re[0].'#'.$name_name[$i].'#';
            $cou_sql="update stu_course set ".$cou_sql_up." ,cou_all='".$couse_all."' where stu_id='".$_SESSION['user_id']."' and cou_term='".$_SESSION['term_now']."'";
            //echo($cou_sql);
        }
        else{$cou_sql="insert into stu_course(stu_id,".$cou_info[1].",cou_all,cou_term) values('".$_SESSION['user_id']."',".$cou_time_sql.",'#".$name_name[$i]."#','".$_SESSION['term_now']."')";}
        //echo $cou_sql;
        if(mysql_query($cou_sql)){
            $ii=1;
        }
    }
}
if($ii=='1'){
    echo('<script>alert("选课成功");window.location.href="cou_choose.php";</script>');
}
//print_r($cou_sql);

/*$stu_cou_choose=$_POST['stu_cou_choose'];
if($stu_cou_choose){
    $cou_detail=$_POST['cou_detail'];
    $cou_name=$_POST['cou_name'];
    $cou_classroom=$_POST['cou_classroom'];
    
    for($i=0;$i<count($stu_cou_choose);$i++){
        $inf_html=$stu_cou_choose[$i].'#'.$cou_name[$i].'('.$cou_classroom[$i].')';
        $cou_time=split(',',$cou_detail[$i]);
        $cou_time_num=count($cou_time);
        $cou_time_sql='';
        for($h=0;$h<$cou_time_num;$h++){
            $cou_time_sql.=$cou_name[$i].',';
        }
        $cou_time_sql=substr($cou_time_sql,0,strlen($cou_time_sql)-1);
        //print_r($cou_time);
        //echo($inf_html);
        $sql="insert into stu_course(".$cou_detail[$i].") values('','".$cou_name_sql."')";
        echo $sql;
        print_r($cou_name);
    }
}*/


//$aa=array('1','22');
//var_dump($cou_detail);
//print_r($stu_cou_choose);
//print_r($cou_detail);
//print_r($cou_name);
//print_r($cou_classroom);


/*$grade_t='';
if(is_array($grade)){
    //echo 'sdfsd';
    foreach($grade as $value){
       $grade_t.=$value.'#';
    }
}

unset($value);
$grade_t=substr($grade_t,0,strlen($grade_t)-1);

$sql="insert into cou_app_record (cou_id,open_school,major,grade,cou_name,cou_code,cou_type,cou_volume,cou_selected
,cou_alltime,cou_credit,cou_grade_state,cou_time_detail,cou_time_begin_ch,cou_time_end_ch,teach_school,teach_teacher
,teachering_material,cou_time_begin,cou_time_end,cou_classroom,cou_nums,cou_weekcycle,state,register_user
,other_note,register_time,register_ip,cou_introduce) values('','$school','$major','$grade_t','$cou_name','$cou_code','$cou_type'
,'$cou_volume','$cou_selected','$cou_alltime','$cou_credit','$cou_grade_state','$cou_time_detail','$cou_time_begin_ch','$cou_time_end_ch'
,'$teach_school','$teach_teacher','$teachering_material','$cou_time_begin','$cou_time_end','$cou_classroom','$cou_nums'
,'$cou_weekcycle','$state','$register_user','$other_note','$register_time','$register_ip','$cou_introduce')";
//print($grade_t);
$query=mysql_query($sql);
if($query){
    echo('<script>alert("录入成功");history.go(-1);</script>');
}
else{
    echo('<script>alert("录入失败");history.go(-1);</script>');
}*/
?>
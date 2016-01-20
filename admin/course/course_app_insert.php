<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/lw_conn.php";
//由于jquery提交时用的是utf-8编码，所以这里为了方便，与其它页面编码不一样
include "../lw_inc/getip.php";
session_start();
//require_once("../lw_inc/utf82gbk.php");
//$qswh=new qswhU("../lw_inc/qswhU.php");
//$qswh->decode("%u4E2D%u6587Abc",2);
$school=$_POST['school'];
$major=$_POST['major'];
$grade=$_POST['grade'];//20130828改后录成班级，年级这块不要了吧，为空，不过里面的值是班级
//echo $school.'&&&'.$major.'^^^^'.$grade;
//$cou_name=$qswh->decode(urlencode(trim($_POST['cou_name'])),1);//先通过编码，再转码，再通过服务器误别得到从utf8->gbk的转换
$cou_name=trim($_POST['cou_name']);
$cou_code==$_POST['cou_code'];
//$cou_type=$qswh->decode(urlencode($_POST['cou_type']),1);
$cou_type=$_POST['cou_type'];
//echo $cou_type;
$cou_volume=$_POST['cou_volume'];
//$cou_selected=$_POST['cou_selected'];
//$cou_alltime=$_POST['cou_alltime'];
$cou_credit=$_POST['cou_credit'];
//$cou_grade_state=$_POST['cou_grade_state'];
$cou_time_detail=lwreplace(trim($_POST['cou_time_detail']));//详细课时
$cou_week_to=trim($_POST['cou_week_to']);
//echo $cou_week_to;
//$cou_time_begin_ch=$_POST['cou_time_begin_ch'];
//$cou_time_end_ch=$_POST['cou_time_end_ch'];
//$teach_school=$qswh->decode(urlencode($_POST['teach_school']),1);
$teach_teacher=$_POST['teach_teacher'];
//$teachering_material=$qswh->decode(urlencode($_POST['teachering_material']),1);
$teachering_material=$_POST['teachering_material'];
//$cou_term=$qswh->decode(urlencode($_POST['cou_term']),1);
$cou_term=$_POST['cou_term'];
//$cou_time_begin=$_POST['cou_time_begin'];
//$cou_time_end=$_POST['cou_time_end'];
//$cou_classroom=$qswh->decode(urlencode($_POST['cou_classroom']),1);
$cou_classroom=$_POST['cou_classroom'];
//$cou_nums=$_POST['cou_nums'];
//echo $cou_weekcycle.'fsdf';
//$cou_weekcycle=$qswh->decode(urlencode($_POST['cou_weekcycle']),1);
$cou_weekcycle=$_POST['cou_weekcycle'];
//$state=$_POST['state'];
$register_user=$_SESSION['user_id'];
$other_note=$_POST['other_note'];
//$other_note=$qswh->decode(urlencode($_POST['other_note']),1);
$register_time=date("Y-m-d H:i:s");
$register_ip=get_ip();
//$cou_introduce=$qswh->decode(urlencode($_POST['cou_introduce']),1);
$cou_introduce=$_POST['cou_introduce'];
//echo $cou_name;
/*$grade_t='';
if(is_array($grade)){
    //echo 'sdfsd';
    foreach($grade as $value){
       $grade_t.=$value.'#';
    }
}

unset($value);
$grade_t=substr($grade_t,0,strlen($grade_t)-1);
*/
//$sql="insert into cou_app_record (open_school,major,grade,cou_name,cou_code,cou_type,cou_volume
$sql="insert into cou_app_record (open_school,major,class,cou_name,cou_code,cou_type,cou_volume
,cou_credit,cou_time_detail,cou_week_to,teach_teacher
,teachering_material,cou_term,cou_classroom,cou_weekcycle,register_user
,other_note,register_time,register_ip,cou_introduce) values('$school','$major','$grade','$cou_name','$cou_code','$cou_type'
,'$cou_volume','$cou_credit','$cou_time_detail','$cou_week_to'
,'$teach_teacher','$teachering_material','$cou_term','$cou_classroom'
,'$cou_weekcycle','$register_user','$other_note','$register_time','$register_ip','$cou_introduce')";
//print($grade_t);
/**
*插入room_class与maj_class
*/
$jud_cou_time="select ".$cou_time_detail." from room_course where room_name='".$cou_classroom."' and cou_term='".$cou_term."'";
    //echo $jud_cou_time;
$jud_cou_re=mysql_query($jud_cou_time);
$jud_cou_re=mysql_fetch_row($jud_cou_re);
   // print_r($jud_cou_re);
function judge_true($v){
	if($v!=''){
		return true;
	}
	return false;
}
@$jud_cou_re=array_filter($jud_cou_re,'judge_true');
if(count($jud_cou_re)!=0){
    echo('2');
}
else{
    //global $cou_term;
    $query0=mysql_query($sql);
    include "app_to_room_tea.php";
    //echo $cou_term;
    if($query0&&$query1&&$query2){
        //echo('<script>alert("录入成功");history.go(-1);</script>');
        echo('1');
    }
    else{
        //echo('<script>alert("录入失败");history.go(-1);</script>');
        echo('0');
    }
    
}
/**
*************************
*/
/*$query=mysql_query($sql);
if($query){
    //echo('<script>alert("录入成功");history.go(-1);</script>');
    echo('1');
}
else{
    //echo('<script>alert("录入失败");history.go(-1);</script>');
    echo('0');
}*/
?>
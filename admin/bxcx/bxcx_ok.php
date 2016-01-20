<?php
//header("Content-type:text/html;charset=utf-8"); 
include "../lw_inc/lw_conn.php";
$ss_id=$_POST['stu_id'];
$cc_id=$_POST['cou_id'];
$r_type=$_POST['r_type'];

$sql="select user_name from user_stu where stu_id='$ss_id' limit 1";
                        //echo $sql.'<p>';
$query=mysql_query($sql);
$re1=mysql_fetch_assoc($query);
if($re1['user_name']==''){
    echo('<script>alert("该学生不存在");window.location.href="bxcx.php";</script>');
}
if(!is_numeric($cc_id)){
    echo('<script>alert("请输入课程id，而不是课程名！！");window.location.href="bxcx.php";</script>');
}
else{

    $sql="select cou_name,cou_credit,cou_term from `cou_app_record` where cou_id='$cc_id' limit 1";
    //echo $sql.'<p>';
    $query=mysql_query($sql);
    $re=mysql_fetch_assoc($query);
    $sql="insert into cou_choose(cou_id,cou_choose_stu,cou_name,cou_credit,cou_term,cxbx) values('$cc_id','$ss_id','$re[cou_name]','$re[cou_credit]','$re[cou_term]','$r_type')";
    //echo $sql;
    if(mysql_query($sql)){
    
        echo('<script>alert("录入成功");window.location.href="bxcx.php?ss_id='.$ss_id.'&cc_id='.$cc_id.'&r_type='.$r_type.'";</script>');
    }
}
//else{echo('<script>alert("录入失败");window.location.href="bxcx.php";</script>');}
?>
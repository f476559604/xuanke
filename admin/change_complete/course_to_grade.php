<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/lw_conn.php";
$grade="10103";
$lesson_id='173';
$lesson='汉语综合';
exit('LIUWEI');
$sql="SELECT stu_id FROM `user_stu` WHERE stu_gra='$grade'";
$query=mysql_query($sql);
while($re=mysql_fetch_row($query)){
    $sql0="INSERT INTO cou_choose VALUES ('','$lesson_id','$re[0]','$lesson','','','','','','','','',NULL,'2012-2013第二学期')";
    //echo $sql0;
    //echo('<p>');
    $query0=mysql_query($sql0);
}
if($query0){
    echo('成功');
}
//echo $class_info['open_school_1'];

?>
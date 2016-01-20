<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/db_class.php";
//session_start();
//require_once("../lw_inc/utf82gbk.php");
//$qswh=new qswhU("../lw_inc/qswhU.php");
$termnow='search_id';
$aid1=$_POST['bb'];
//$qswh->decode(urlencode($_POST['bb']),1);
//$stu_id=$_SESSION['user_id'];
//echo $term_now;
include "stu_score_list.php";
stu_score_list($termnow,$aid1);

?>
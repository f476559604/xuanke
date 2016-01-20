<?php
    //ini_set("display_errors", "On");
	include "lw_inc/lw_conn.php";
	session_start();
	ini_set("display_errors", "On");
	
	//echo 'sss';
	//$sql="delete from room_course where room_name='育秀506' and cou_term='2015-2016第一学期'";
	//$query=mysql_query($sql);
	echo $_SESSION['term_now'];
	$sql="select mo1,mo2 from room_course where room_name='育秀506' and cou_term='2015-2016第一学期'";
	
	$query=mysql_query($sql);
	while($re=mysql_fetch_row($query)){
	//echo $re[0];
		//foreach($re as $val){
		//	echo $val.' w ';
		//}
		print_r($re);
	    echo('<p>');
	}
?>
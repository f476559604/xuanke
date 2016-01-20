<?php
//header("Content-type:text/html;charset=utf-8");
include "lw_conn1.php";
$sql="select * from before_cou limit 5";
$query=mysql_query($sql);
while($re=mysql_fetch_array($query)){
	foreach($re as $val){
		echo($val."   ");
	}
	echo('00<p>');
}
?>
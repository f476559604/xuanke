<?php
    include "../lw_inc/lw_conn.php";
    include_once('../lw_inc/JSON.php');
    //require_once("../lw_inc/gbk2utf8.php");
    //$qswh=new qswhGBK("../lw_inc/qswhGBK.php");
    $gra1=trim($_POST['bb']);
    //$gra1=101;
    
    $Qgra='^'.$gra1.'[0-9][0-9][0-9][1-9]$';
    $sql1="select obj_id,obj_name from obj_list where obj_id REGEXP '$Qgra' order by obj_id asc";
    //echo $sql1;
    $query1=mysql_query($sql1);
    $re_gra=array();
    while($re1=mysql_fetch_assoc($query1)){
        array_push($re_gra,$re1);
    }
    //$qswh->replace_gbk($re_gra);
    $re=$jjss->encode($re_gra);
    //$qswh->replace_line($re);
    echo($re);
?>
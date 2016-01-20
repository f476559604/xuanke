<?php
    include "../lw_inc/lw_conn.php";
    include_once('../lw_inc/JSON.php');
    //require_once("../lw_inc/gbk2utf8.php");
    //$qswh=new qswhGBK("../lw_inc/qswhGBK.php");
    $maj1=trim($_POST['aa']);
    //$maj1=1;
    
    $Qmaj='^'.$maj1.'[0-9][1-9]$';
    $sql1="select obj_id,obj_name from obj_list where obj_id REGEXP '$Qmaj' ";
    //echo $sql1;
    $query1=mysql_query($sql1);
    $re_maj=array();
    while($re1=mysql_fetch_assoc($query1)){
        array_push($re_maj,$re1);
    }
    
    //$qswh->replace_gbk($re_maj);
    $re=$jjss->encode($re_maj);
    //$qswh->replace_line($re);
    echo($re);
?>
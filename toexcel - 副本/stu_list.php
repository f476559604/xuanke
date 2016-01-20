<?php
//header("Content-type:text/html;charset=utf-8");  
function stu_list($cla){
    include "../lw_inc/lw_conn.php";
    $sql="select stu_id,user_name,stu_sex,stu_nation from user_stu where stu_clas='$cla'";
    $query=mysql_query($sql);
    $re=mysql_fetch_assoc($query);
    return($re);
    //print_r($re);
}

?>
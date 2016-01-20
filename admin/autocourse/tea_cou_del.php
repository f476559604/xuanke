<?php
    header("Content-type:text/html;charset=utf-8");
    include "../lw_inc/lw_conn.php";
    $id=$_GET['id'];
    $sql="delete from cou_app_record where cou_id='$id'";
    //echo $sql;
    $query=mysql_query($sql);
    if($query){
        echo('<script lang="javascript">alert("删除成功");window.history.back(-1);</script>');
    }
?>
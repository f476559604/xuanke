<?php
include("../lw_inc/judge.php");
include("../lw_inc/getip.php");
include("../lw_inc/lw_conn.php");
if($_SESSION['term_now']==''){
    exit('错误');
}
if($_POST['password']=='qwerty'){
    

    $lw_sql="delete from `cou_choose` where cou_term='".$_SESSION['term_now']."'";
    if(mysql_query($lw_sql)){
        echo('<script>alert("操作成功，你现在可以重新整理课程了");window.history.back(-1);</script>');
    }
}
else{
    $lw_ip=get_ip();
    echo('<script>alert("非法操作，你的ip已经被记录!'.$lw_ip.'");window.history.back(-1);</script>');
}
unset($lw_sql);
?>
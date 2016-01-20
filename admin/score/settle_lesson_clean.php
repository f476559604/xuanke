<?php
header("Content-type:text/html;charset=utf-8");
//session_start();
$ttmm=$_POST['term'];
echo $ttmm;
/*if($_SESSION['user_id']!=NULL&&$_SESSION['type']='education'){
    settle_lesson_clean();
}
else{echo('闈炴硶鎿嶄綔');}*/

function settle_lesson_clean(){
    include "../lw_inc/lw_conn.php";
    
    $sql="delete from cou_choose where cou_term='$ttmm' and cxbx<>bx and cxbx<>cx";
    $query=mysql_query($sql);
    //echo $sql;
    
    if($query){
        echo('<script>alert("鍒犻櫎鎴愬姛");window.history.back(-1);</script>');
    }
    else{echo('<script>alert("鎿嶄綔澶辫触");//window.history.back(-1);</script>');}
    
}
?>
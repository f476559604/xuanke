<?php
header("Content-type:text/html;charset=utf-8");
session_start();
if($_SESSION['user_id']!=NULL&&$_SESSION['type']='education'){
    settle_chose_lesson();
}
else{echo('非法操作');}
function settle_chose_lesson(){
    include "../lw_inc/lw_conn.php";
    $sql="select stu_id,cou_all,cou_term from `stu_course` where cou_term='".$_SESSION['term_now']."'";
   
    //echo $sql;
    $query=mysql_query($sql);

    $jud=0;
    $jud1_re=array();
    //echo($sql);
    
    $sql_judge="select cou_term from cou_choose where cou_term='".$_SESSION['term_now']."' limit 1";
    //echo $sql;
    $query_jud1=mysql_query($sql_judge);
    $jud1_re=mysql_fetch_row($query_jud1);       
    
    if($jud1_re[0]==NULL){
        $jud=1;
        while($result=mysql_fetch_assoc($query)){
            //if($jud1==1){
                //$sql_judge="select cou_term from cou_choose where cou_term='".$result['cou_term']."' limit 1";
                //echo $sql;
               // $query_jud1=mysql_query($sql_judge);
                //$jud1_re=mysql_fetch_row($query_jud1);
                //echo $jud1_re[0];
                //$jud1=0;
       
                //}
        //echo($jud1[0].'sss');
        
        //echo($jud1[0].'sss');
         //if($jud1_re[0]==NULL){
                
                $course=explode('#',$result['cou_all']);
                foreach($course as $value){
                    if($value!=''){
                        $sql="select cou_name,cou_credit from cou_app_record where cou_id='".$value."'";
                        $query_cou=mysql_query($sql);
                        $re_cou=mysql_fetch_assoc($query_cou);
                        $sql="insert into cou_choose (cou_id,cou_choose_stu,cou_name,cou_credit,cou_term) values('".$value."','".$result['stu_id']."','".$re_cou['cou_name']."','".$re_cou['cou_credit']."','".$result['cou_term']."')";
                        //echo $sql;
                        if(mysql_query($sql)){
                            $jud=2;
                        }
                    }
                }
            }
        
    }
    if($jud!=0){
        $sql_maj="select class_id,cou_all,cou_term from `maj_course` where cou_term='".$_SESSION['term_now']."'";
        $query_maj=mysql_query($sql_maj);
        while($result=mysql_fetch_assoc($query_maj)){
            //20130828由此改$sql_1="select stu_id from user_stu where stu_clas='".$result['class_id']."'";
            $sql_1="select stu_id from user_stu where stu_clas='".$result['class_id']."'";
            $query_1=mysql_query($sql_1);
            $course=explode('#',$result['cou_all']);
            while($rr=mysql_fetch_row($query_1)){
                    
                    foreach($course as $value){
                        if($value!=''){
                            $sql="select cou_name,cou_credit from cou_app_record where cou_id='".$value."'";
                            $query_cou=mysql_query($sql);
                            $re_cou=mysql_fetch_assoc($query_cou);
                            $sql="insert into cou_choose (cou_id,cou_choose_stu,cou_name,cou_credit,cou_term) values('".$value."','".$rr[0]."','".$re_cou['cou_name']."','".$re_cou['cou_credit']."','".$result['cou_term']."')";
                            //echo $sql;
                            if(mysql_query($sql)){
                                $jud=2;
                            }
                        }
                    }
            }
        }
    }
    if($jud==2){
        echo('<script>alert("整理完毕，你现在可以录入成绩了");window.history.back(-1);</script>');
    }
    else{echo('<script>alert("操作失败，你已经整理完毕，不能再进行操作了");</script>');}
    
}
exit();
?>
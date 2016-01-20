<?php
    function sco_cla_list($term_now,$name,$n,$file){
        //include "../lw_inc/lw_conn.php";
        $sql="select cou_id, cou_name from cou_app_record where teach_teacher='".$name."'and cou_term='".$term_now."'";
        //echo $sql;
        $query=mysql_query($sql);//这里先由老师姓名筛选，以后在录入申报课时做了老师名册维护那么可以用老师的id来
        $script_html='';
        //echo $sql;
        while($result=mysql_fetch_assoc($query)){
            $script_html.="d.add('".$result['cou_id']."','".$n."','".$result['cou_name']."','score/".$file.".php?lesson=".$result['cou_id']."&ncou=".urlencode($result['cou_name'])."','".$result['name']."','main','','',true);";
        }
        echo $script_html;
        
    }
?>
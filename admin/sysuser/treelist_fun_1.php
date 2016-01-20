<?php
//header("Content-type:text/html;charset=utf-8");  
//include "../lw_inc/lw_conn.php";
function treelist_1(){
        global $term1;
        $sql="select a.cou_id, a.cou_name, b.user_name from cou_app_record as a left join user_tea as b on a.teach_teacher =b.tea_id where a.cou_term='$term1' order by a.cou_name";
        $query=mysql_query($sql);
        $js='';
        //if($type=='student'){
            $js="d.add('0','-1','  课程列表','','课程列表','','','');";
        
                while($re=mysql_fetch_assoc($query)){
                    $len=strlen($re['obj_id']);
                    
                    $js.="d.add('".$re['cou_id']."','0','".$re['cou_name']."','../score/sco_dis.php?lesson=".$re['cou_id']."&termnow=".$term1."&ncou=".urlencode($re['cou_name'])."&ntea=".urlencode($re['user_name'])."','".$re['cou_name']."','rightchild','','',false);";
                    
                   
                }
        //}
        
        echo $js;
}
?>

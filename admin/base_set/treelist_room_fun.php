<?php
header("Content-type:text/html;charset=utf-8");
//include "../lw_inc/lw_conn.php";
function treelist_room(){
    
        global $type;
        $sql="select id,name from tea_room";
        $query=mysql_query($sql);
        $js='';
        
        if($type=='room'){
            $js="d.add('0','-1','  教室课表','edit_room.php','教室课表','frameright','','');";
            while($re=mysql_fetch_assoc($query)){
               
                $js.="d.add('".$re['id']."','0','".$re['name']."','view_room_cou.php?nroom=".$re['name']."','".$re['name']."','frameright','','',false);";
                
            }
        }
       
       
        echo $js;
}
?>

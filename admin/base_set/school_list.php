<?php
    function school_list($type){
        global $db;
        $html='';
        $html.='<tr class="SkyTDTopLine" align="center">
                  <th scope="col">编号</th>

                  <th scope="col">名称</th>
                    <th scope="col">更改</th>
                  <th scope="col">删除</th>
                </tr>';
        $query=$db->list_query($type);
        //echo $type;
        while($re=mysql_fetch_assoc($query)){
            $html.='<tr  class="SkyTDLine" align="center"><td>'.$re['obj_id'].'</td><td>'.$re['obj_name'].'</td><td><a href="school_list_chang.php?obj_id='.$re['obj_id'].'">更改</a></td><td><a href="school_list_del.php?obj_id='.$re['obj_id'].'" onClick="return confirm('."'".'是否删除此条记录？'."'".')">删除</a></td></tr>';
        }
        //$html.='</table>';
        echo $html;
    }
    
?>
<?php
    function room_list($type){
        global $db;
        $html='';
        $html.='<tr class="SkyTDTopLine" align="center">
                  <th scope="col">编号</th>

                  <th scope="col">名称</th>
                    <th scope="col">更改</th>
                  <th scope="col">删除</th>
                </tr>';
        $sql='select id,name from tea_room';
        $query=mysql_query($sql);
        //echo $type;
        while($re=mysql_fetch_assoc($query)){
            $html.='<tr  class="SkyTDLine" align="center"><td>'.$re['id'].'</td><td>'.$re['name'].'</td><td><a href="room_list_chang.php?obj_id='.$re['id'].'">更改</a></td><td><a href="room_list_del.php?obj_id='.$re['id'].'" onClick="return confirm('."'".'是否删除此条记录？'."'".')">删除</a></td></tr>';
        }
        //$html.='</table>';
        echo $html;
    }
    
?>
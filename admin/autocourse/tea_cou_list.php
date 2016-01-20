<?php
    function tea_cou_list(){
        global $name;
        $sql="select cou_id,cou_name,cou_code,cou_type,cou_volume,cou_credit,cou_time_detail from cou_app_record where teach_teacher='$name'";
        //echo($sql);
        $query=mysql_query($sql);
        $html='<table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">';
        $html.='<tr class="SkyTDTopLine" align="center">
                          <th scope="col">课程名称</th>
                          <th scope="col">课程代码</th>
                          <th scope="col">课程类型</th>
                          <th scope="col">课程容量</th>
                          <th scope="col">课程学分</th>
                          <th scope="col">课程时间</th>
                          <th scope="col">查看</th>
                          <th scope="col">删除</th>
                        </tr>';
        while($re=mysql_fetch_assoc($query)){
            $html.='<tr class="SkyTDLine" align="center"><td>'.$re['cou_name'].'</td><td>'.$re['cou_code'].'</td><td>'.$re['cou_type'].'</td><td>'.$re['cou_volume'].'</td><td>'.$re['cou_credit'].'</td><td>'.$re['cou_time_detail'].'</td><td><a href="tea_cou_veiw.php?id='.$re['cou_credit'].'">查看</a></td><td><a href="../autocourse/tea_cou_del.php?id='.$re['cou_id'].'" onclick="return confirm('."'".'是否删除此条记录？'."'".')">删除</a></td></tr>';
        }
        $html.='</table>';
        echo $html;
    }
?>
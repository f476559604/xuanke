<?php
function cou_list(){
            global $page_size;
            global $p;
            global $term; 
            //$type='student';
            $html='<table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">';
            //echo $type;
            //echo $num;
            $sql="select cou_id,class,cou_name,cou_type,cou_time_detail,cou_week_to,cou_classroom from cou_app_record where cou_term='$term' order by cou_name desc";
            echo $sql;
            $html.='<tr class="SkyTDTopLine" align="center">
                      
                      <th style="width:10px;">序</th>
                      <th>课程id</th>
                      <th>开课班级</th>
                      <th>课程名称</th>
                      <th>课程类型</th>
                      <th>上课时间</th>
                      <th>上课周数</th>
                      <th>上课教室</th>
                      <th>查看</th>
                      <th>编辑</th>
                      <th>删除</th>
                    </tr>';

            
            $query=mysql_query($sql);
            //echo $sql;
            $vn=0;
            while($re=mysql_fetch_assoc($query)){
                $html.='<tr class="SkyTDLine" align="center"><td style="width:10px;">'.++$vn.'</td>';
                foreach($re as $key=>$value){
                    $html.='<td>'.$value.'</td>';
                    if($key=='cou_time_detail'){
                        $time_cou=$value;
                    }
                    
                }
                unset($value);
            
                $html.='<td><a href="course_app_display.php?id='.$re['cou_id'].'">查看</a></td><td><a href="course_app_edit.php?id='.$re['cou_id'].'">编辑</a></td>';
            
            
                $html.='<td><a href="course_list_del.php?id='.$re['cou_id'].'&time_cou='.$time_cou.'" onclick="return confirm('."'".'确认要删除吗？'."'".');">删除</a></td>';
                
                $html.='</tr>';
            }
            
            $html.='</table>';  
            echo $html;
}

?>

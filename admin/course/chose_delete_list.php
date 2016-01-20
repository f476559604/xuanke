<?php
    
    function cou_delete_display($table_name){
            /**************这里实现功能是通过查询备注与循环输出得到的*********************/
            if($_SESSION['choose_allow']==1){
                global $db;//引用外面的对象db
                //$cn_query=$db->get_table_note_colu($table_name);
                //$columns_note=mysql_fetch_assoc($cn_query);
                $table_head=' <tr class="SkyTDTopLine"><th>选择</th><th>序号</th><th>课程名称</th><th>课程代码</th><th>课程类型</th><th>课程容量</th><th>课程学分</th><th>开课时间</th><th>授课教师</th><th>课程周数</th><th>开课教室</th><th>开课节数</th><th>开课周期</th></tr>';
                
                $cou_sql='cou_id,cou_name,cou_code,cou_type,cou_volume,cou_credit,cou_time_detail,teach_teacher,cou_week_to,cou_classroom,cou_nums,cou_weekcycle';
                echo($table_head);
                
                
                $cou_chose="select cou_all from stu_course where stu_id='".$_SESSION['user_id']."' and cou_term='".$_SESSION['term_now']."'";
                //echo $cou_chose;
                $cou_chose=$db->query($cou_chose);
                $cou_chose=mysql_fetch_row($cou_chose);
                $cou_chose=explode('#',$cou_chose[0]);
                $cou_html='';
                //$tt=1;
                for($i=0;$i<count($cou_chose);$i++){
                   if($cou_chose[$i]!=NULL){
                        $cou_query="select ".$cou_sql." from cou_app_record where cou_id='".$cou_chose[$i]."'";
                        //echo $cou_query;
                        $cou_query=$db->query($cou_query);
                        $cou_query=mysql_fetch_assoc($cou_query);
                        $cou_html.='<tr class="SkyTDLine" align="center"><td><input type="checkbox" name="del_name[]" value="'.$cou_chose[$i].'"/></td>';
                        //if(is_array($cou_query)){
                            //echo $tt++;
                            foreach((array)$cou_query as $key=>$value){
                                if($key=='cou_time_detail'){
                                    $cou_html.='<td style="width:180px;"><input style="width:180px;border:0;text-align:center;" type="text" name="'.$cou_chose[$i].'" value="'.$value.'" readonly/></td>';
                                    
                                }
                                else{
                                    $cou_html.='<td>'.$value.'</td>';
                                    }
                            }
                        //}
                        $cou_html.='</tr>';
                        unset($value);
                   } 
                }
                
                
                
                //print_r($cou_query);
                echo $cou_html;
                unset($cou_html);
         
          }
          else{echo('对不起，不能操作课程');}  
    }
?>
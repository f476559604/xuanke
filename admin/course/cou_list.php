<?php
    
    function cou_list_display($table_name){
            /**************这里实现功能是通过查询备注与循环输出得到的*********************/
            if($_SESSION['choose_allow']=='1'){
                global $db;//引用外面的对象db
                //$cn_query=$db->get_table_note_colu($table_name);
                //$columns_note=mysql_fetch_assoc($cn_query);
                $table_head='<tr class="SkyTDTopLine"><th>选择</th><th>序号</th><th>课程名称</th><th>课程代码</th><th>课程类型</th><th>课程容量</th><th>课程学分</th><th>开课时间</th><th>授课教师</th><th>课程周数</th><th>开课教室</th><th>开课节数</th><th>开课周期</th></tr>';
                $cou_sql='cou_id,cou_name,cou_code,cou_type,cou_volume,cou_credit,cou_time_detail,teach_teacher,cou_week_to,cou_classroom,cou_nums,cou_weekcycle,';
                /**
                *时间比较
                **/
                $dt=date('Y-m-d');
                
                /**
                ***
                **/
                //$table_head=$columns_note['COLUMN_COMMENT'];
                echo($table_head);
                $cou_sql.='state';
                //$cou_sql=substr($cou_sql,0,strlen($cou_sql)-1);
                $cou_sql="select\n".$cou_sql."\nfrom\n".$table_name."\nwhere";
                $cou_sql_g=$cou_sql."\nclass\nlike\n'%".$_SESSION['sch_inf']['stu_clas']."%' and cou_term='".$_SESSION['term_now']."' and cou_type='选修'";
                
                //$cou_sql_g=$cou_sql."\ngrade\nlike\n".$_SESSION['sch_inf']['stu_gra'];
                
                //$cou_sql_m=$cou_sql."\ngrade\nlike\n'%".$_SESSION['sch_inf']['stu_maj']."%'";
                //$cou_sql_s=$cou_sql."\ngrade\nlike\n'%".$_SESSION['sch_inf']['stu_sch']."%'";
                //echo($cou_sql_g);
                $table_body='';
                $cou_query=$db->query($cou_sql_g);
                //$name_bef='sel';
                //$iii=0;
                while($cou_inf=mysql_fetch_assoc($cou_query)){
                    //echo $cou_inf['state'].'<br>';
                    //echo $cou_inf['cou_term'].'<br>';
                    //echo $_SESSION['term_now'];
                    //echo('dsfsd_');
                    //echo
                    //echo $cou_inf['cou_term'];
                    //echo $_SESSION['term_now'];
                    //if($cou_inf['cou_term']==$_SESSION['term_now']){
                    //echo('aaa_');
                    
                        $cou_No1=1;
                        $table_body.='<tr class="SkyTDLine" align="center">';
                        
                        foreach($cou_inf as $key=>$value){
                            //echo('qqq_');
                            
                            if($cou_No1=='1'){
                                $sql_box="select cou_all from stu_course where stu_id='".$_SESSION['user_id']."' and cou_all like '%#".$value."#%' and cou_term='".$_SESSION['term_now']."'";
                                //$iii=$iii+1;
                                //$name_name=$name_bef.$iii;
                                //echo $sql_box;
                                $sql_box=$db->query($sql_box);
                                $sql_box1="select cou_all from maj_course where class_id='".$_SESSION['sch_inf']['stu_clas']."' and cou_all like '%#".$value."#%' and cou_term='".$_SESSION['term_now']."'";
                                //echo $sql_box;
                                $sql_box1=$db->query($sql_box1);
                                
                                $sql_box=mysql_fetch_row($sql_box);
                                $sql_box1=mysql_fetch_row($sql_box1);
                                //echo $sql_box[0];
                                if($sql_box!=NULL||$sql_box1!=''){
                                   $table_body.='<td></td>';
                                }
                                else{$table_body.='<td><input type="checkbox" name="name_name[]" value="'.$value.'"/></td>';}
                                $name_val=$value; 
                                $cou_No1='';
                                
                            }
                            if($key=='state'||$key=='cou_term'){
                                
                            }
                            else if($key=='cou_name'){
                                $table_body.='<td style="width:85px;"><input style="border:0;text-align:center;width:100%;" type="text" name="'.$name_val.'[]" value="'.$value.'" readonly/></td>';
                            }
                            else if($key=='cou_time_detail'){
                                $table_body.='<td style="width:180px;"><input style="width:180px;border:0;text-align:center;" type="text" name="'.$name_val.'[]" value="'.$value.'" readonly/></td>';
                            }
                            else if($key=='cou_classroom'){
                                $table_body.='<td style="width:85px;"><input style="width:100%;border:0;text-align:center;" type="text" name="'.$name_val.'[]" value="'.$value.'" readonly/></td>';
                            }
                            else{$table_body.='<td>'.$value.'</td>';}
                        }
                        unset($value);
                        $table_body.='</tr>';
                        
                    //}
                   
                }  
                 echo($table_body);
                 unset($table_body);
         }
         else{echo('现在不是选课时间');}
    }
?>
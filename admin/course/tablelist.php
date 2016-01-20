<?php
    
    function table_list_display($table_name){
            /**************这里实现功能是通过查询备注与循环输出得到的*********************/
            /*根据特定id查询表中内容*/
            global $db;//引用外面的对象db
            $query=$db->query("select * from cou_app_record where cou_id=1");//查询数据表cou_app_record中的课程数据
            $need_info=mysql_fetch_assoc($query);//生成相应的数组
            
            //$si_query=$db->query("select * from `user_stu` where stu_id='201063502140'");
            //$need_info=mysql_fetch_assoc($si_query);
            //
            
            /*查询表中各列备注*/
            
            $cn_query=$db->get_table_note_colu($table_name);
            $columns_note=mysql_fetch_assoc($cn_query);
            //echo(mysql_fetch_assoc($cn_query));
            $lw_i=1;//用于下面对学院，专业，年级的赋值
            while($columns_note=mysql_fetch_assoc($cn_query)){
                 //echo($columns_note['COLUMN_COMMENT']);
            //$lw_type='text';   
                if($i%2==0){echo "<tr class='MeNewTDLine'>";}
            //$COLUMN_NAME=$columns_note['COLUMN_NAME'];
         ?>
          <td align="center" class="SkyTDTopLine" width="100"> <?php echo($columns_note['COLUMN_COMMENT']);?> </td>
          <td class="SkyTDLine" >
         <?php
                if($columns_note['COLUMN_COMMENT']=='密码') {      
         ?>
          <a href="http://www.baidu.com" target="_blank" onclick="changekey()"><input type="password" name="<?php echo($columns_note['COLUMN_NAME']);?>" value="12345678" /></a>
          
         <?php   
            }
                //这一部分是用来对学院专业班级的录入与导出的
                /*else if($columns_note['COLUMN_COMMENT']=='学院'||$columns_note['COLUMN_COMMENT']=='专业'||$columns_note['COLUMN_COMMENT']=='班级'||$columns_note['COLUMN_COMMENT']=='年级'){
                    $lw_query=$db->list_query($columns_note['COLUMN_COMMENT']);
                    //echo($need_info[$columns_note['COLUMN_NAME']]);
                    echo("<select name='".$columns_note['COLUMN_NAME']."'>"); 
                    while($lw_result=mysql_fetch_assoc($lw_query)){
                        $selected=NULL;
                        if($need_info[$columns_note['COLUMN_NAME']]==$lw_result['obj_name']){
                            //echo($need_info[$columns_note['COLUMN_NAME']]."ss".$lw_result['obj_name']);
                            //echo 333;
                            $selected="selected='selected'";
                            //$selected=$need_info[$columns_note['COLUMN_NAME']]."ss".$lw_result['obj_name'];
                        } 
                        echo("<option ".$selected.">".$lw_result['obj_name']."</option>");
                    }
                    echo("</select>");
                }
                //这一部分是用来显示分学院专业和年级的，考虑到实现起来对数据库服务器压力比较大，于是用js作。
                else if($columns_note['COLUMN_COMMENT']=='开课学院'||$columns_note['COLUMN_COMMENT']=='开课专业'||$columns_note['COLUMN_COMMENT']=='开课年级'){
                    
                    $lw_info='info'.$i;
                    $$lw_info=$need_info[$columns_note['COLUMN_NAME']];
                    $i++;
                    echo $$lw_info.'<br />';  
                    //echo $columns_note['COLUMN_COMMENT'];
                }*/
                else {
         ?>
         
          <input type="text" name="<?php echo($columns_note['COLUMN_NAME']);?>" <?php if($columns_note['COLUMN_COMMENT']=='学号') echo("readonly='readonly'");?> value="<?php echo $need_info[$columns_note['COLUMN_NAME']];?>"/>
        
        <?php
                }
        echo"</td>";
        if($i%2!=0){echo "</tr>";}
        $i++;
        }
    }
?>
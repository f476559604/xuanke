<?php

function app_list_display($table_name)
{
    /**************这里实现功能是通过查询备注与循环输出得到的*********************/
    /*根据特定id查询表中内容*/
    global $cid;
    //echo $cid;
    global $db; //引用外面的对象db
    $query = $db->query("select * from cou_app_record where cou_id='$cid'"); //查询数据表cou_app_record中的课程数据
    $need_info = mysql_fetch_assoc($query); //生成相应的数组

    //$si_query=$db->query("select * from `user_stu` where stu_id='201063502140'");
    //$need_info=mysql_fetch_assoc($si_query);
    //

    /*查询表中各列备注*/
    $i = 0; //为后面的分行计数;
    $sql="select user_name from user_tea where tea_id='".$need_info['teach_teacher']."'";
    $query=mysql_query($sql);
    $re=mysql_fetch_row($query);
    echo ('<tr class=\'MeNewTDLine\'>          <td align="center" class="SkyTDTopLine" width="100"> 开课学院 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="open_school"  value="' . $need_info['open_school'] .
        '"/>

        

        </td></tr><tr class=\'MeNewTDLine\'>          <td align="center" class="SkyTDTopLine" width="100"> 开课专业 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="major"  value="' . $need_info['major'] . '"/>

        

        </td>          <td align="center" class="SkyTDTopLine" width="100"> 开课班级 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="grade"  value="' . $need_info['class'] . '"/>

        

        </td></tr><tr class=\'MeNewTDLine\'>          <td align="center" class="SkyTDTopLine" width="100"> 课程名称 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="cou_name"  value="' . $need_info['cou_name'] .
        '"/>

        

        </td>          <td align="center" class="SkyTDTopLine" width="100"> 课程代码 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="cou_code"  value="' . $need_info['cou_code'] .
        '"/>

        

        </td></tr><tr class=\'MeNewTDLine\'>          <td align="center" class="SkyTDTopLine" width="100"> 课程类型 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="cou_type"  value="' . $need_info['cou_type'] .
        '"/>

        

        </td>          <td align="center" class="SkyTDTopLine" width="100"> 课程容量 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="cou_volume"  value="' . $need_info['cou_volume'] .
        '"/>

        

        </td></tr><tr class=\'MeNewTDLine\'>          <td align="center" class="SkyTDTopLine" width="100"> 已选人数 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="cou_selected"  value="' . $need_info['cou_selected'] .
        '"/>

        

        </td>         </tr><tr class=\'MeNewTDLine\'>          <td align="center" class="SkyTDTopLine" width="100"> 课程学分 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="cou_credit"  value="' . $need_info['cou_credit'] .
        '"/>

        

        </td>          <td align="center" class="SkyTDTopLine" width="100"> 成绩录入 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="cou_grade_state"  value="' . $need_info['cou_grade_state'] .
        '"/>

        

        </td></tr><tr class=\'MeNewTDLine\'>          <td align="center" class="SkyTDTopLine" width="100"> 开课时间 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="cou_time_detail"  value="' . $need_info['cou_time_detail'] .
        '"/>

        

        </td>          </tr><tr class=\'MeNewTDLine\'>  
                         <td align="center" class="SkyTDTopLine" width="100"> 授课学院 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="teach_school"  value="国交学院"/>

        

        </td></tr><tr class=\'MeNewTDLine\'>          <td align="center" class="SkyTDTopLine" width="100"> 授课教师 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="teach_teacher"  value="' . $re[0] .
        '"/>

        

        </td>          <td align="center" class="SkyTDTopLine" width="100"> 教材名称 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="teachering_material"  value="' . $need_info['teachering_material'] .
        '"/>

        

        </td></tr><tr class=\'MeNewTDLine\'>          <td align="center" class="SkyTDTopLine" width="100"> 上课学期 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="cou_term"  value="' . $need_info['cou_term'] .
        '"/>

        

        </td>         </tr><tr class=\'MeNewTDLine\'> <td align="center" class="SkyTDTopLine" width="100"> 开课教室 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="cou_classroom"  value="' . $need_info['cou_classroom'] .
        '"/>

        

        </td></tr><tr class=\'MeNewTDLine\'>             <td align="center" class="SkyTDTopLine" width="100"> 开课周期 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="cou_weekcycle"  value="' . $need_info['cou_weekcycle'] .
        '"/>

        

        </td></tr><tr class=\'MeNewTDLine\'>           <td align="center" class="SkyTDTopLine" width="100"> 注册用户 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="register_user"  value="' . $need_info['register_user'] .
        '"/>

        

        </td></tr><tr class=\'MeNewTDLine\'>          <td align="center" class="SkyTDTopLine" width="100"> 备注 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="other_note"  value="' . $need_info['other_note'] .
        '"/>

        

        </td>          <td align="center" class="SkyTDTopLine" width="100"> 注册时间 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="register_time"  value="' . $need_info['register_time'] .
        '"/>

        

        </td></tr><tr class=\'MeNewTDLine\'>          <td align="center" class="SkyTDTopLine" width="100"> 注册IP </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="register_ip"  value="' . $need_info['register_ip'] .
        '"/>

        

        </td>          <td align="center" class="SkyTDTopLine" width="100"> 课程介绍 </td>

          <td class="SkyTDLine" >

                  

          <input type="text" name="cou_introduce"  value="' . $need_info['cou_introduce'] .
        '"/>

        

        </td></tr>');

}
?>
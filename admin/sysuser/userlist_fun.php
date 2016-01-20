<?php
function userlist(){
    

              
            global $type1;
            global $num;
            if($type1==''&&$num==''){
                exit('出现未知错误');
            }
            //$type='student';
            $html='<table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">';
            //echo $type;
            //echo $num;
            if($type1=='student'){
                $sql="select stu_id,user_name,nature,stu_sex,stu_nation,contact_way from user_stu where stu_clas=$num order by stu_id desc";
                //echo $sql;
                $html.='<tr class="SkyTDTopLine" align="center">
                           <th>序号</th>
                          <th>学号</th>
                          <th>中文名</th>
                          <th>性质</th>
                          <th>性别</th>
                          <th>国籍</th>
                          <th>联系方式</th>
                          <th>信息</th>
                          <th>课表</th>
                          <th>成绩单</th>
                          <th>成绩</th>
                          <th>删除</th>
                        </tr>';
            }
            else if($type1=='teacher'){
                $sql="select tea_id, user_name,tea_sex from user_tea where tea_sch=$num";
                 $html.='<tr class="SkyTDTopLine" align="center">
                          <th>序号</th>
                          <th>编号</th>
                          <th>姓名</th>
                          <th>性别</th>
                          <th>信息</th>
                          <th>课表</th>
                          <th >删除</th>
                        </tr>';
            }
            $query=mysql_query($sql);
            //echo $sql;
            $lv=0;
            while($re=mysql_fetch_row($query)){
                $html.='<tr class="SkyTDLine" align="center"><td>'.++$lv.'</td>';
                foreach($re as $value){
                    $html.='<td>'.$value.'</td>';
                    
                }
                unset($value);
                if($type1=='student'){
                    //$html.='<td><a href="usermanageself.php?id='.$re[0].'">信息</a></td><td><a href="../autocourse/viewstucourse.php?id='.$re[0].'&name='.$re[1].'">课表</a></td><td><a href="../other_user/scoview_tab.php?iidd1='.$re[0].'&name='.$re[1].'">成绩单</a></td><td><a href="../score/stu_sco_view.php?iidd1='.$re[0].'&name='.$re[1].'">成绩</a></td><td><a href="del_user.php?type=stu&id='.$re[0].'">删除</a></td>';
                    $html.='<td><a href="usermanageself.php?id='.$re[0].'">信息</a></td><td><a href="../autocourse/viewstucourse.php?id='.$re[0].'&name='.$re[1].'">课表</a></td><td><a href="../other_user/scoview_tab.php?iidd1='.$re[0].'&name='.$re[1].'">成绩单</a></td><td><a href="../score/stu_sco_view.php?iidd1='.$re[0].'&name='.$re[1].'">成绩</a></td><td><a href="del_user.php?type=stu&id='.$re[0].'" onclick="return confirm(\'确定要删除吗？\');">删除</a></td>';
                
                }
                else if($type1=='teacher'){
                    //$html.='<td><a href="teamanageself.php?id='.$re[0].'">信息</a></td><td><a href="../autocourse/viewteachercourse.php?id='.$re[0].'&name='.$re[1].'">课表</a></td><td><a href="del_user.php?type=tea&id='.$re[0].'">删除</a></td>';
                    $html.='<td><a href="teamanageself.php?id='.$re[0].'">信息</a></td><td><a href="../autocourse/viewteachercourse.php?id='.$re[0].'&name='.$re[1].'">课表</a></td><td><a href="del_user.php?type=tea&id='.$re[0].'" onclick="return confirm(\'确定要删除吗？\');">删除</a></td>';
                }
                $html.='</tr>';
            }
            
            $html.='</table>';  
            echo $html;
}

?>

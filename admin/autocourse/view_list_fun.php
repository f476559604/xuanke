<?php
function view_list(){
    

              
            $type=$_GET['type'];
            $num=$_GET['num'];
            //$type='student';
            $html='<table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">';
            //echo $type;
            //echo $num;
            if($type=='stu_cou'){
                $sql="select stu_id,user_name,en_name,stu_sex,stu_nation,contact_way from user_stu where stu_clas=$num";
                //echo $sql;
                $html.='<tr class="SkyTDTopLine" align="center">
                          <th scope="col">学号</th>
                          <th scope="col">中文名</th>
                          <th scope="col">英文名</th>
                          <th scope="col">性别</th>
                          <th scope="col">国籍</th>
                          <th scope="col">联系方式</th>
                          <th scope="col">查看</th>
                        </tr>';
            }
            else if($type=='tea_cou'){
                $sql="select tea_id, user_name,tea_sex from user_tea where tea_sch=$num";
                 $html.='<tr class="SkyTDTopLine" align="center">
                          <th scope="col">编号</th>
                          <th scope="col">姓名</th>
                          <th scope="col">性别</th>
                          <th scope="col">查看</th>
                        </tr>';
            }
            $query=mysql_query($sql);
            //echo $sql;
            while($re=mysql_fetch_row($query)){
                $html.='<tr class="SkyTDLine" align="center">';
                foreach($re as $value){
                    $html.='<td>'.$value.'</td>';
                    
                }
                unset($value);
                if($type=='stu_cou'){
                    $html.='<td><a href="usermanageself.php?id='.$re[0].'&name='.$re[1].'">查看</a></td>';
                }
                else if($type=='tea_cou'){
                    $html.='<td><a href="viewteachercourse.php?id='.$re[0].'&name='.$re[1].'">查看</a></td>';
                }
                $html.='</tr>';
            }
            
            $html.='</table>';  
            echo $html;
}

?>

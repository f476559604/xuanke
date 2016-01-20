 <?php
    function sco_dis($lesson,$termnow){
        $sql="select a.cou_all_id,b.stu_id, b.user_name,b.stu_clas,a.cou_name,a.cou_stu_mark1,a.cou_stu_mark2,a.cou_stu_mark3,a.cou_stu_mark,a.cou_checking1,a.cou_checking2,a.cou_checking from cou_choose as a left join user_stu as b on a.cou_choose_stu=b.stu_id where a.cou_id='".$lesson."' and a.cou_term='".$termnow."'";
        //echo $sql;
        //echo $sql;
        $query=mysql_query($sql);
        
        $num=1;
        $head_html='<table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;"><tr class="SkyTDTopLine" align="center"><th>序号</th><th>编号</th><th>学号</th><th>学生姓名</th><th>学生班级</th><th>课程名称</th><th>平时成绩及表现</th><th>期中成绩</th><th>期末成绩</th><th>总成绩</th><th>1-9周考勤</th><th>10-18周考勤</th><th>本学期考勤</th><th>编辑</th></tr>';
        $html_body='';
        while($result=mysql_fetch_assoc($query)){
            $html_body.='<tr class="SkyTDLine" align="center"><td>'.$num.'</td>';
            $num++;
            foreach($result as $value){
            $html_body.='<td>'.$value.'</td>';
            }
            $html_body.='<td><a href="sco_edit_person.php?iidd='.$result['cou_all_id'].'&nnaa='.$result['user_name'].'">编辑</a></td>';
            $html_body.='</tr>';
        }
        $html=$head_html.$html_body.'</table>';
        echo $html;
    }
    
    
    
 ?>
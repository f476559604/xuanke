 <?php
    function sco_edit($lesson,$term_now){
        $sql="select a.cou_all_id,b.stu_id,b.user_name,a.cou_name,a.cou_stu_mark1,a.cou_stu_mark2,a.cou_stu_mark3,a.cou_stu_mark,a.cou_checking1,a.cou_checking2,a.cou_checking from cou_choose as a left join user_stu as b on a.cou_choose_stu=b.stu_id where cou_id='".$lesson."' and cou_term='".$term_now."'";
        //echo $sql;
        $query=mysql_query($sql);
        $num=1;
        $head_html='<table name="score_list" class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;"><tr class="SkyTDTopLine" align="center"><th>序号</th><th>编号</th><th>学号</th><th>学生姓名</th><th>课程名称</th><th>平时成绩及表现</th><th>期中成绩</th><th>期末成绩</th><th><a href="#" onclick="calculate_score()">总成绩</a></th><th>1-9周考勤</th><th>10-18周考勤</th><th><a href="#" onclick="calculate_checking()">本学期考勤</a></th></tr>';
        $html_body='';
        while($result=mysql_fetch_assoc($query)){
            $html_body.='<tr class="SkyTDLine" align="center">';
            $html_body.='<td>'.$num.'</td>';$num++;
            foreach($result as $key=>$value){
                
                if($key=='user_name'||$key=='cou_all_id'||$key=='cou_stu_mark'||$key=='cou_checking'||$key=='stu_id'||$key=='cou_name'){
                    $html_body.='<td name="'.$key.'">'.$value.'</td>';
                }
                else{
                    $html_body.='<td><input type="text" name="'.$key.'" value="'.$value.'" /></td>';
                }
            }
            $html_body.='</tr>';
        }
        $html=$head_html.$html_body.'</table>';
        echo $html;
    }
    
    
    
 ?>
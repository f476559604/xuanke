<?php
///header("Content-type:text/html;charset=utf-8");

function stu_sco_list($aid=0){
    global $db;
    global $name;
    //$stu_id=$_SESSION['user_id'];
    //$query=$db->get_table_note_colu('cou_choose');
    $head_html='<table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">';
    $head_html.='<tr class="SkyTDTopLine" align="center"><th scope="col">序号</th><th scope="col">课程名称</th><th scope="col">学分</th><th scope="col">平时成绩及表现</th><th scope="col">期中成绩</th><th scope="col">期末成绩</th><th scope="col">总成绩</th><th scope="col">1-9周考勤</th><th scope="col">10-18周考勤</th><th scope="col">本学期考勤</th><th scope="col">学期</th></tr>';
    $body_html='';
    //echo "ssdd";
        $sql="select * from cou_choose where cou_choose_stu='".$aid."' order by cou_term";
        $sql1="select cou_all_id,cou_name,cou_credit,cou_stu_mark,cou_term from before_cou where cou_choose_stu='".$aid."'order by cou_term";
        
    
    //echo $sql;
    $query=$db->query($sql);
    while($head_info1=mysql_fetch_assoc($query)){
        $body_html.='<tr class="SkyTDLine" align="center">';
        foreach($head_info1 as $key=>$value){
            if($key=='cou_all_id'||$key=='cou_choose_stu'||$key=='cou_edit_ok'||$key=='cxbx'){
                
            }
            else{$body_html.='<td>'.$value.'</td>';}
        }
        //$body_html.='<td><a href="sco_edit_person.php?iidd='.$head_info1['cou_all_id'].'&nnaa='.$name.'">编辑</a></td>';
        $body_html.='</tr>';
        ///if($head_info1['cou_all_id']&&$head_info1['cou_choose_stu']&&$head_info1['cou_edit_ok']&&$head_info1['cou_term'])
    }
    if($sql1!=''){    
        $query=$db->query($sql1);
        while($head_info1=mysql_fetch_assoc($query)){
            $body_html.='<tr class="SkyTDLine" align="center">';
            $body_html.='<td>0</td><td>'.$head_info1['cou_name'].'</td><td>'.$head_info1['cou_credit'].'</td><td></td><td></td><td></td>';            
            $body_html.='<td>'.$head_info1['cou_stu_mark'].'</td><td></td><td></td><td></td><td>'.$head_info1['cou_term'].'</td><td></td>';
            //$body_html.='<td><a href="sco_edit_person.php?iidd='.$head_info1['cou_all_id'].'&nnaa='.$name.'">编辑</a></td>';
            $body_html.='</tr>';
            ///if($head_info1['cou_all_id']&&$head_info1['cou_choose_stu']&&$head_info1['cou_edit_ok']&&$head_info1['cou_term'])
        }
    }            
    $html=$head_html.$body_html.'<table>';
    echo $html;
}

?>
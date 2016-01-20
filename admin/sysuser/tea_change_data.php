<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/db_class.php";
$hp1=$_POST['bb1'];
function stu_change_list($hp1=0){
    global $db;
    //$query=$db->get_table_note_colu('cou_choose');
    $head_html='<table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">';
    $head_html.='<tr class="SkyTDTopLine" align="center"><th scope="col">编号</th><th scope="col">姓名</th><th scope="col">性别</th><th scope="col">操作</th></tr>';
    $body_html='';
    //echo "ssdd";
    $sql="select tea_id,user_name,tea_sex from user_tea where tea_id='".$hp1."'";
      // echo $sql;
    //echo $sql;
    $query=$db->query($sql);
    while($head_info1=mysql_fetch_assoc($query)){
        $body_html.='<tr class="SkyTDLine" align="center"><td>'.$head_info1['tea_id'].'</td><td>'.$head_info1['user_name'].'</td><td>'.$head_info1['tea_sex'].'</td>';

        $body_html.='<td><a href="tea_reset.php?hp2='.$head_info1['tea_id'].'&hpn='.$head_info1['user_name'].'">修改密码</a></td></tr>';
        ///if($head_info1['cou_all_id']&&$head_info1['cou_choose_stu']&&$head_info1['cou_edit_ok']&&$head_info1['cou_term'])
    }
    $html=$head_html.$body_html.'<table>';
    echo $html;
}
stu_change_list($hp1);
?>
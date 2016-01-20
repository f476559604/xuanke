<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/db_class.php";
$hp1=$_POST['bb1'];
function stu_change_list($hp1=0){
    global $db;
    //$query=$db->get_table_note_colu('cou_choose');
    $head_html='<table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">';
    $head_html.='<tr class="SkyTDTopLine" align="center"><th scope="col">学号</th><th scope="col">姓名</th><th scope="col">性别</th><th scope="col">国籍</th><th scope="col">联系方式</th><th scope="col">操作</th></tr>';
    $body_html='';
    //echo "ssdd";
    $sql="select stu_id,user_name,stu_sex,stu_nation,contact_way from user_stu where stu_id='".$hp1."'";
       // echo $sql;
    //echo $sql;
    $query=$db->query($sql);
    while($head_info1=mysql_fetch_assoc($query)){
        $body_html.='<tr class="SkyTDLine" align="center"><td>'.$head_info1['stu_id'].'</td><td>'.$head_info1['user_name'].'</td><td>'.$head_info1['stu_sex'].'</td><td>'.$head_info1['stu_nation'].'</td><td>'.$head_info1['contact_way'].'</td>';

        $body_html.='<td><a href="reset_word.php?hp2='.$head_info1['stu_id'].'&hpn='.$head_info1['user_name'].'">修改密码</a></td></tr>';
        ///if($head_info1['cou_all_id']&&$head_info1['cou_choose_stu']&&$head_info1['cou_edit_ok']&&$head_info1['cou_term'])
    }
    $html=$head_html.$body_html.'<table>';
    echo $html;
}
stu_change_list($hp1);
?>
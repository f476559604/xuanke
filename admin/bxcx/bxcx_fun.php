<?php
function bxcx_info($ss_id,$cc_id,$r_type){
    if($ss_id!='' and $cc_id!='' and $r_type!=''){
        include "../lw_inc/lw_conn.php";
        $sql="select cou_name,cou_credit from cou_choose where cou_choose_stu='$ss_id' and cou_id='$cc_id' and cxbx='$r_type' limit 1";
        //echo $sql.'<p>';
        $query=mysql_query($sql);
        $re=mysql_fetch_assoc($query);
        $sql="select user_name from user_stu where stu_id='$ss_id' limit 1";
        //echo $sql.'<p>';
        $query=mysql_query($sql);
        $re1=mysql_fetch_assoc($query);
        //echo('')
        //echo($ss_id.$re1['user_name'].$cc_id.$re['cou_name'].$re['cou_credit'].$r_type);
        $html='<table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">';
        $html.='<tr class="SkyTDTopLine" align="center">
                      <th>学生学号</th>
                      <th>学生姓名</th>
                      <th>课程id</th>
                      <th>课程名称</th>
                      <th>课程学分</th>
                      <th>选择属性</th>
                      </tr>';
        $html.='<tr class="SkyTDLine" align="center">';
        $html.="<td>$ss_id</td><td>$re1[user_name]</td><td>$cc_id</td><td>$re[cou_name]</td><td>$re[cou_credit]</td><td>$r_type</td>";
        $html.='</tr>';
        echo $html;
     }
     
}

?>
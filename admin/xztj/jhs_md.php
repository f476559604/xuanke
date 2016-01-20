<?php 
header("Content-type:text/html;charset=utf-8"); 
include "../lw_inc/lw_conn.php";
//$ss_id=$_GET['ss_id'];
//$cc_id=$_GET['cc_id'];
//$r_type=$_GET['r_type'];
//$sql="select nature,count(id) from (select distinct nature from user_stu) ";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
    本科生名单
</title>

<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery/jquery-1.8.2.js"></script>
<style media=print type="text/css">   
.noprint{visibility:hidden}   
</style>
</head>

<body>
 
	
            <div class="divTbg noprint">
                <div class="divTbgL">
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle">
                    交换生名单</div>
                    
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle" style="float: right;">
                        <a href="javascript:window.print()" style="float: right;color:white;" target="_self">打印</a>
                    </div>
                </div>
                
            </div>
            <div class="divTbgF noprint">
            </div>

            <div class="divInfoContext">
                <div style="text-align: center;">交换生名单</div>
                <table width="100%" border="1" cellpadding="0" cellspacing="0" class="SkyTableLine">
                    <tr>
                        <td width="8" align="center" class="SkyTDTitle">
                                序号
                            </td>
                        <td width="100" align="center" class="SkyTDTitle">
                            班级
                        </td>
                        <td width="100" align="center" class="SkyTDTitle">
                            学号
                        </td>
                        <td width="100" align="center" class="SkyTDTitle">
                            姓名
                        </td>
                        <td width="100" align="center" class="SkyTDTitle">
                            入学时间
                        </td>
                        
                        <td width="100" align="center" class="SkyTDTitle">
                            性别
                        </td>
                        <td width="100" align="center" class="SkyTDTitle">
                            性质
                        </td>
                        <td width="100" align="center" class="SkyTDTitle">
                            国籍
                        </td>
                        
                    </tr>
                    
                    <?php
                    $sql="select stu_clas,stu_id,user_name,entrydate,stu_sex,nature,stu_nation from user_stu where nature<>'本科' and nature<>''and stu_clas<='1010902' order by nature asc";
                    //$sql="select nature,count(stu_auto_id) from user_stu group by nature;";
                    $query=mysql_query($sql);
                    $n1=0;
                    while($re=mysql_fetch_assoc($query)){
                        //if($re[0]!=''){
                            $html='<tr><td class="SkyTDInfo">'.++$n1.'</td>';
                            $html.='<td class="SkyTDInfo">'.$re['stu_clas'].'</td><td class="SkyTDInfo">'.$re['stu_id'].'</td>';
                            $html.='<td class="SkyTDInfo">'.$re['user_name'].'</td>';
                            $html.='<td class="SkyTDInfo">'.$re['entrydate'].'</td><td class="SkyTDInfo">'.$re['stu_sex'].'</td>';
                            $html.='<td class="SkyTDInfo">'.$re['nature'].'</td><td class="SkyTDInfo">'.$re['stu_nation'].'</td>';
                            $html.='</tr>';
                            echo($html);
                            
                            //echo('<tr><td class="SkyTDInfo">'.$re['stu_class'].'</td>'.'<td class="SkyTDInfo">'.$re['stu_class'].'</td></tr>');
                        //}
                    }
                    
                    ?>
                        
                    
                    
                </table>
            </div>
<script type="text/javascript">$(document).ready(function(){
    
    $("tr").each(function(){
        var ww=$(this).find("td:eq(0)").html();
        switch (ww)
            {case "1010101":$(this).find("td:eq(0)").html("一上1");break;case "1010102":$(this).find("td:eq(0)").html("一上2");break;case "1010201":$(this).find("td:eq(0)").html("一中1");break;case "1010202":$(this).find("td:eq(0)").html("一中2");break;case "1010301":$(this).find("td:eq(0)").html("一下1");break;case "1010302":$(this).find("td:eq(0)").html("一下2");break;case "1010401":$(this).find("td:eq(0)").html("二上1");break;case "1010402":$(this).find("td:eq(0)").html("二上2");break;case "1010501":$(this).find("td:eq(0)").html("二下1");break;case "1010502":$(this).find("td:eq(0)").html("二下2");break;case "1010601":$(this).find("td:eq(0)").html("三上1");break;case "1010602":$(this).find("td:eq(0)").html("三上2");break;case "1010701":$(this).find("td:eq(0)").html("三下1");break;case "1010801":$(this).find("td:eq(0)").html("四上1");break;case "1010702":$(this).find("td:eq(0)").html("三下2");break;case "1010802":$(this).find("td:eq(0)").html("四上2");break;case "1010901":$(this).find("td:eq(0)").html("四下1");break;case "1010902":$(this).find("td:eq(0)").html("四下2");break;case "1010103":$(this).find("td:eq(0)").html("一上3");break;case "1011001":$(this).find("td:eq(0)").html("五上1");break;case "1011002":$(this).find("td:eq(0)").html("五上2");break;case "1011102":$(this).find("td:eq(0)").html("五下2");break;case "1011101":$(this).find("td:eq(0)").html("五下1");break;} }); });
</script>


</body>
</html>

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
    性质统计
</title>

<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
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
                    性质统计</div>
                    
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
                <div style="text-align: center;">性质统计</div>
                <table width="100%" border="1" cellpadding="0" cellspacing="0" class="SkyTableLine">
                     <tr>
                            <td width="8" align="center" class="SkyTDTitle">
                                序号
                            </td>
                            <td width="100" align="center" class="SkyTDTitle">
                                学生性质
                            </td>
                            <td width="100" align="center" class="SkyTDTitle">
                                学生人数
                            </td>
                            
                        </tr>
                    
                    <?php
                        $sql="select nature,count(stu_auto_id) from user_stu where stu_clas<='1010902' group by nature;";
                        $query=mysql_query($sql);
                        $n1=0;
                        while($re=mysql_fetch_row($query)){
                            if($re[0]!=''){
                                echo('<tr><td class="SkyTDInfo">'.++$n1.'</td><td class="SkyTDInfo">'.$re[0].'</td>'.'<td class="SkyTDInfo">'.$re[1].'</td></tr>');
                            }
                        }
                        
                        ?>
                            
                    
                    
                </table>
            </div>


</body>
</html>

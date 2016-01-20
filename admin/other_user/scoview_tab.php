<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/db_class.php";
include "scoview_tab_fun.php";
include "../lw_inc/obj_name.php";
session_start();
$num=$_GET['iidd1'];
if($num==''){
    $num=$_SESSION['user_id'];
    
}
else if($num==''){
    exit('发生未知错误');
}
$sql="select stu_gra,user_name,stu_sex,entrydate,gradate from user_stu where stu_id='$num' limit 1";
//echo $sql;
$query=mysql_query($sql);
$re=mysql_fetch_assoc($query);
$class=obj_name($re['stu_gra']);
$filenm=$re['user_name'].'成绩单.xls';
$year=date('Y');
$term=array();
$sql="select distinct cou_term from cou_choose where cou_choose_stu='$num'";
$query=mysql_query($sql);
while($ret=mysql_fetch_row($query)){
    array_push($term,$ret[0]);
    //echo('<p>'.$ret[0]);
}
$tot_c=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
<title>
    烟台大学国际交流学院
</title>

<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
<style media="print" type="text/css">   
.noprint{visibility:hidden}
</style>
<style type="text/css">
/*.no_topborder{
    border-bottom: 1px;
    border-right: 1px;
    border-left: 1px;
    border-color: #000;
    border-style:solid;
    
} */
.tab_1{
    border:1px #000 solid;
    text-align:center;
    margin-left: auto;
    margin-right:auto;
    clear:both;
}
.tab_1 td{border:1px #000 solid;}
.img1{
    position:absolute;
    z-index:100;
    width:180px;
    margin-top:-30px;
    margin-left: -50px;
 
}

</style>
</head>

<body>
 
	
            <div class="divTbg noprint">
                <div class="divTbgL">
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle">
                    成绩表</div>
                    
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle" style="float: right;">
                        <a href="javascript:window.print()" style="float: right;color:white;" target="_self">打印</a>
                    </div>
                </div>
                
            </div>
            <div class="divTbgF noprint">
            </div>

            <div class="divInfoContext" style="background-image: url(33.png);background-repeat:no-repeat;background-position:center;">
                <!--<div style="text-align: center;font-size:18px;">烟台大学留学生成绩表</div>-->
                <!--<div style="width: 802px;margin-left:auto;margin-right:auto;">
                    <div style="float: left;"><img src="aall.png" width="80" height="80" style="margin-left: 150px;" /></div>
                    <div style="float: left; font-size:28px; margin-top:30px; margin-left:50px;">烟台大学留学生成绩单</div>
                </div>-->
                <div style="width: 802px;margin-left:auto;margin-right:auto;font-size:28px;text-align:center;line-height:80px;height:80px;">
                    
                    烟台大学留学生成绩单
                </div>
               
                 <table class="tab_1"  width="800" border="0" cellpadding="0" cellspacing="0">
                    <tr style="color:white;display:none;">
                        <td style="width: 42px">姓名</td>
                        <td style="width: 84px"></td>
                        <td style="width: 42px">学号</td>
                        <td style="width: 63px;"></td>
                        <td style="width: 63px;"></td>
                        <td style="width: 63px;">性别</td>
                        <td style="width: 42px;"></td>
                        <td style="width: 63px;">院系</td>
                        <td style="width: 168px;"></td>
                        <td style="width: 63px;">专业</td>
                        <td style="width: 63px;"></td>
                        <td style="width: 42px;"></td>  
                    </tr>
                    <tr>
                        <td style="width: 42px;">姓名</td>
                        <td style="width: 84px;"><?php echo($re['user_name']);?></td>
                        <td style="width: 42px;">学号</td>
                        <td colspan="2"><?php echo($num);?></td>
                        <td style="width: 63px;">性别</td>
                        <td style="width: 42px;"><?php echo($re['stu_sex']);?></td>
                        <td style="width: 63px">院系</td>
                        <td style="width: 168px;">国际教育交流学院</td>
                        <td style="width: 63px;">专业</td>
                        <td colspan="2" style="width: 105px;">汉语言</td>
                    </tr>
                    <tr>
                    <td>班级</td>
                    <td><?php echo($class);?></td>
                    <td colspan="2" style="width:105px ;">入学日期</td>
                    <td colspan="2"><?php echo($re['entrydate']);?></td>
                    <td colspan="2">毕业日期</td>
                    <td><?php echo($re['gradate']);?></td>
                    <td>学制</td>
                    <td colspan="2"></td>

                    
                    </tr>
                    <tr>
                    <td colspan="4" style="width: 231px;">课程名</td>
                    <td style="width: 63px;">学分</td>
                    <td>成绩</td>
                    <td>属性</td>
                    <td colspan="2">课程名</td>
                    <td style="width: 63px;">学分</td>
                    <td style="width: 63px;">成绩</td>
                    <td style="width: 42px;">属性</td>
                    
                    </tr>
                    <tr>
                    <?php stu_sco_tab($num,$term,$tot_c);?>
                    </tr>
                    <!--
                    <tr>
                        <td colspan="7" style="border:0;">
                            <table width="404" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="width: 230px;">&nbsp;</td>
                                    <td style="width: 63px;"></td>
                                    <td style="width: 63px;"></td>
                                    <td style="width: 42px;"></td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="5" style="border:0;">
                            <table width="404" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="width: 232px;">&nbsp;</td>
                                    <td style="width: 62px;"></td>
                                    <td style="width: 62px;"></td>
                                    <td style="width: 42px;"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                    <td colspan="4">&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    -->
                    <tr>
                    <td colspan="2">已获得总学分：</td>
                    <td colspan="2"><?php echo($tot_c);?></td>
                    <td colspan="2">获得学位：</td>
                    <td></td>
                    <td colspan="2" rowspan="3" style="text-align: left;vertical-align: text-top;">&nbsp;院长签字：</td>
                    <td colspan="3" rowspan="3" style="text-align: left;vertical-align: text-top;">&nbsp;公章：<img class="img1" src="bb.png" /></td>

                    </tr>
                    <tr>
                    <td colspan="2">第二学位专业：</td>
                    <td colspan="2"></td>
                    <td colspan="2">获得学位：</td>
                    <td></td>
                  
                    </tr>
                    <tr>
                    <td colspan="2">备注：</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td></td>

                    </tr>
                    
                    
                </table>
            </div>


</body>
</html>

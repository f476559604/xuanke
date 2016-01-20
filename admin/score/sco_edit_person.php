<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/lw_conn.php";
//include "sco_edit_fun.php";

$iidd = $_GET['iidd'];
$nnaa = $_GET['nnaa'];
$sql = "";
$sql = "select * from cou_choose where cou_all_id='" . $iidd . "'";
$query=mysql_query($sql);
$re=mysql_fetch_assoc($query);

?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	成绩查询
</title>

<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <form name="Form1" method="post"id="Form1" action="sco_edit_person_ok.php">
   <div id="UpdatePanel1">
	
            <div class="divTbg">
                <div class="divTbgL">
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle">
                        成绩列表</div>
                </div>
            </div>
            <div class="divTbgF">
            </div>
            
            <div class="divInfo">
                <div class="divInfoTopList">
                    <div class="listLeft">
                        <ul>
                            <li>
                                <div>
                                    <img src="../style/green/images/index.gif" /></div>
                            </li>
                            <li><?php echo($nnaa);?></li>
                        </ul>
                    </div>
                    <div class="listRight">
                        <ul>
                            <li class="listRightwidth">
                                <a id="LnkBExcel" href="javascript:__doPostBack('LnkBExcel','')">导出</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
                    <div id="score_tab">
	
        <table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">
        <tr class="SkyTDTopLine" align="center">
        <th>编号</th>
        <th>学号</th>
        <th>学生姓名</th>
        <th>课程名称</th>
        <th>平时成绩及表现</th>
        <th>期中成绩</th>
        <th>期末成绩</th>
        <th>总成绩</th>
        <th>1-9周考勤</th>
        <th>10-18周考勤</th>
        <th>本学期考勤</th>
        </tr>
        <tr class="SkyTDLine" align="center">
        
        <td><?php echo($re['cou_all_id']);?></td>
        <td><?php echo($re['cou_choose_stu']);?></td>
        <td><?php echo($nnaa);?></td>
        <td><?php echo($re['cou_name']);?></td>
        <td><input name="cou_stu_mark1" type="text" value="<?php echo($re['cou_stu_mark1']);?>" /></td>
        <td><input name="cou_stu_mark2" type="text" value="<?php echo($re['cou_stu_mark2']);?>"/></td>
        <td><input name="cou_stu_mark3" type="text" value="<?php echo($re['cou_stu_mark3']);?>"/></td>
        <td><input name="cou_stu_mark" type="text" value="<?php echo($re['cou_stu_mark']);?>"/></td>
        <td><input name="cou_checking1" type="text" value="<?php echo($re['cou_checking1']);?>"/></td>
        <td><input name="cou_checking2" type="text" value="<?php echo($re['cou_checking2']);?>"/></td>
        <td><input name="cou_checking" type="text" value="<?php echo($re['cou_checking']);?>"/></td>
        </tr>
        </table>	               </div>
                    
                </div>
            </div>
            
         <div class="divSave">
                <input name="cou_all_id" type="hidden" value="<?php echo($re['cou_all_id']);?>" />
                <input type="submit" id="btnSubmit" value="保存" class="SkyButtonFocus" />

                <input type="button" id="btnSubmitClose" class="SkyButtonFocus" onclick="" value="取消" />

            </div>
</div>
   


</form>

</body>
</html>


<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/lw_conn.php";
$idd=$_GET['id'];
$sql="select * from cou_app_record where cou_id=$idd";
$query=mysql_query($sql);
$re=mysql_fetch_assoc($query);
//echo $class_info['open_school_1'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"  />
<head id="Head1">
    <title>课程申报</title>

    <link href="../style/green/skin.css" rel="stylesheet" type="text/css"/>
    
    
</head>
<body>
    
            <div id="tbMain">
                <div class="divTbg">
                    <div class="divTbgL">
                    </div>
                    <div class="divTbgInfo">
                        <div class="divTbgTitle">
                            课程申报</div>
                    </div>
                </div>
                <div class="divTbgF">
                </div>
                <div class="divTNavBG" id="topURL">
                    <ul id="topURLul">
                        <li class="divURLed" id="div1">
                            <div>
                                <img src="../style/green/images/mini_icons_046.gif" width="10" height="10" />
                                基本信息</div>
                        </li>
                    </ul>
                </div>
<form id="Form1" action="course_app_edit_ok.php" method="post" onsubmit="return jud_null1(Form1)">
                <div id="mypanel">
                    <div class="divInfo" id="ddiv1">
                        <div class="divInfoTop">
                            <div class="listLeft">
                                <ul>
                                    <li>
                                        <div>
                                            <img src="../style/green/images/basic.gif" /></div>
                                    </li>
                                    <li>基本信息</li>
                                </ul>
                            </div>
                        </div>
                        <div class="divInfoContext">
                            <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" class="SkyTDLine">
                                

                                
                                <tr class="MeNewTDLine">
                                <!--
                                <td align="center" class="SkyTDTopLine" width="100">开课年级</td>
                                <td class="SkyTDLine"><input type="text" name="cou_grade" value="<?php echo($re['grade']);?>" /></td>
                                -->
                                <td align="center" class="SkyTDTopLine" width="100">开课班级</td>
                                <td class="SkyTDLine" colspan="3"><input type="text" name="cou_class"  style="width: 80%;" value="<?php echo($re['class']);?>" /><span class="red_note">&nbsp;*</span></td>
                                
                                </tr>
                                <tr class="MeNewTDLine">
                                <td align="center" class="SkyTDTopLine" width="100">课程名称</td>
                                <td class="SkyTDLine"><input type="text" name="cou_name" value="<?php echo($re['cou_name']);?>" /><span class="red_note">&nbsp;*</span></td>
                                <td align="center" class="SkyTDTopLine" width="100">课程代码</td>
                                <td class="SkyTDLine"><input type="text" name="cou_code" value="<?php echo($re['cou_code']);?>" /></td>
                                </tr>
                                <tr class="MeNewTDLine">
                                <td align="center" class="SkyTDTopLine" width="100">课程类型</td>

                                <td class="SkyTDLine"><input type="text" name="cou_type" value="<?php echo($re['cou_type']);?>" /></td>
                                
                                <td align="center" class="SkyTDTopLine" width="100">课程容量</td>
                                <td class="SkyTDLine"><input type="text" name="cou_volume" value="<?php echo($re['cou_volume']);?>" /></td>
                                </tr>
                                <tr class="MeNewTDLine">
                                
                                <td align="center" class="SkyTDTopLine" width="100">课程学分</td>
                                <td class="SkyTDLine"><input type="text" name="cou_credit" value="<?php echo($re['cou_credit']);?>" /></td>
                                <td align="center" class="SkyTDTopLine" width="100">授课教师</td>
                                <td class="SkyTDLine"><input type="text" readonly="readonly" name="teach_teacher"  value="<?php echo($re['teach_teacher']);?>" /></td>
                                </tr>
                                <tr class="MeNewTDLine">
                                <td align="center" class="SkyTDTopLine" width="100">开课时间</td>
                                <td class="SkyTDLine"><input type="text" name="cou_time_detail" value="<?php echo($re['cou_time_detail']);?>" /><span class="red_note">&nbsp;*格式：mo1,mo2</span></td>
                                <!--
                                <td align="center" class="SkyTDTopLine" width="100">选课开始时间</td>
                                <td class="SkyTDLine">
                                <input type="text" name="cou_time_begin_ch" value="" onClick="WdatePicker({skin:'whyGreen',isShowClear:false,readOnly:true,dateFmt:'yyyy-MM-dd'});" />
                                </td>-->
                                </tr>
                                <tr class="MeNewTDLine">
                                <td align="center" class="SkyTDTopLine" width="100">上课周数</td>
                                <td class="SkyTDLine"><input type="text" name="cou_week_to" value="<?php echo($re['cou_week_to']);?>" /><span class="red_note">&nbsp;&nbsp;格式：1-18</span></td>
                                
                                <!--
                                <td align="center" class="SkyTDTopLine" width="100">授课学院</td>
                                <td class="SkyTDLine"><input type="text" name="teach_school" value="" /></td>
                                -->
                                </tr>
                                <tr class="MeNewTDLine">
                                
                                <td align="center" class="SkyTDTopLine" width="100">教材名称</td>
                                <td class="SkyTDLine"><input type="text" name="teachering_material" value="<?php echo($re['teachering_material']);?>" /></td>
                                <td></td>
                                <td></td>
                                </tr>
                                
                                <tr class="MeNewTDLine">
                                <td align="center" class="SkyTDTopLine" width="100">开课教室</td>
                                <td class="SkyTDLine"><input type="text" name="cou_classroom" value="<?php echo($re['cou_classroom']);?>" /></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr class="MeNewTDLine">
                                <td align="center" class="SkyTDTopLine" width="100">开课周期</td>
                                <td class="SkyTDLine"><input type="text" name="cou_weekcycle" value="<?php echo($re['cou_weekcycle']);?>" /></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr class="MeNewTDLine">
                                <td align="center" class="SkyTDTopLine" width="100">备注</td>
                                <td class="SkyTDLine"><input type="text" name="other_note" value="<?php echo($re['other_note']);?>" /></td>
                                <td align="center" class="SkyTDTopLine" width="100">课程介绍</td>
                                <td class="SkyTDLine"><input type="text" name="cou_introduce" value="<?php echo($re['cou_introduce']);?>" /></td>
                                </tr>
                                
                                
                          </table>
                        </div>
                    </div>
                </div>
                <div class="divSave">
                    <input type="hidden" name="old_time_info" value="<?php echo($re['cou_time_detail']);?>" />
                    <input type="hidden" name="old_class_info" value="<?php echo($re['cou_classroom']);?>" />
                    <input type="hidden" name="idd" value="<?php echo($idd);?>" />
                    <input type="submit" id="btnSubmit" value="更新" class="SkyButtonFocus" />
                    <input type="button" id="btnSubmitClose" class="SkyButtonFocus" onclick="" value="取消" />
                </div>
            </div>
        
    </form>
</body>
<script type="text/javascript">

function jud_null1(form){
  
  if(form.cou_class.value==""){
        alert("开课班级不能为空！");
        return(false);
    }
    /*if(!(form.stu_sex[0].checked||form.stu_sex[1].checked)){
        alert("请选择性别!");
        return(false);
    }*/
    if(form.cou_time_detail.value==""){
        alert("开课时间不能为空！");
        return(false);
    }

    if(form.cou_classroom.value==""){
        alert("开课教室不能为空！");
        return(false);
    }

    
}

</script>
</html>

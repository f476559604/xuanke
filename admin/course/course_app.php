<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/db_class.php";
include "../lw_inc/list_name.php";

//echo $class_info['open_school_1'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"  />
<head id="Head1">
    <title>课程申报</title>
    <script language="javascript" src="../js/jquery/jquery-1.8.2.js" type="text/jscript"></script>

    <script language="javascript" src="course_app_list.js" type="text/javascript"></script>
    <!--<script language="javascript" src="../My97DatePicker/WdatePicker.js" type="text/jscript"></script>-->
    <link href="../style/green/skin.css" rel="stylesheet" type="text/css"/>
    
    <style type="text/css">  
    #chkTimeInfo,#lefttable {background-color:#CCCCCC;}
    #chkTimeInfo11 tr td {
		width:20%;
    }
	#lefttable  tr td,#chkTimeInfo tr td{font-size: 12px;background-color: #FFFFFF;height:33px;
		line-height:11px;
		}
    </style>
    
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
                                <tr class="MeNewTDLine" id="s1">
                                      
                                    <td width="100" align="center" class="SkyTDTopLine">
                                        开课院系
                                    </td>
                                    <td class="SkyTDLine">
                                    <?php
$query = $db->list_query('学院');

echo '<select name="school1" onchange="getmajor(this)">';
echo '<option value="123" selected="selected">请选择学院</option>';
while ($result = mysql_fetch_assoc($query)) {

    echo '<option value="' . $result['obj_id'] . '">' . $result['obj_name'] .
        '</option>';

}
echo '</select> <a href="#" id="del_sch1" onclick="del_sch(this)" style="display:none;"> 删除这个院系</a> <a href="#" id="add_sch1" style="display:none;" onclick="add_sch(this)"> 添加院系</a> ';
?>  
                                    </td>
                                    <td width="100">
                                        
                                    </td>
                                    <td class="SkyTDLine">
                                        
                                    </td>
                                    
                                </tr>
                                                               
                                <tr class="MeNewTDLine" id="s11">
                                    <td align="center" class="SkyTDTopLine" width="100">
                                        开课专业
                                    </td>
                                    <td class="SkyTDLine">
                                    <select name="major11" onchange="getgrade(this)">
                                    <option value="" selected="selected">请选择专业</option>
                                    </select>
                                    <a href="#" id="del_11" onclick="del_major(this)" style="display:none;"> 删除这个专业</a><a href="#" style="display:none;" id="add_maj11" onclick="add_maj(this)"> 添加专业</a>
                                        
                                    </td>
                                     <td class="SkyTDLine">
                                        
                                    </td>
                                    <td class="SkyTDLine">
                                    
                                     
                                    </td>
                                </tr>
                                 <tr class="MeNewTDLine" id="s11">
                                    <td align="center" class="SkyTDTopLine" width="100">
                                        开课年级
                                    </td>
                                    <td class="SkyTDLine" colspan="3">
                                    <a href="#" id="allchoose11" onclick="choose_all(this)">全选</a>&nbsp;&nbsp;&nbsp;&nbsp; 
                                    <span id="spangrade11">
                                        
                                    </span> 
                                     
                                    </td>
                                    
                                </tr>
                                <tr id="sch_line"><td colspan="4"><hr /></td></tr>
<form id="Form1">
                                <tr class="MeNewTDLine">
                                <td align="center" class="SkyTDTopLine" width="100">课程名称</td>
                                <td class="SkyTDLine"><input type="text" name="cou_name" value="" /><span class="red_note">&nbsp;*</span></td>
                                <td align="center" class="SkyTDTopLine" width="100">课程代码</td>
                                <td class="SkyTDLine"><input type="text" name="cou_code" value="" /></td>
                                </tr>
                                <tr class="MeNewTDLine"><td align="center" class="SkyTDTopLine" width="100">课程类型</td>
                                <td class="SkyTDLine">
                                <select name="cou_type">
                                <option value="" selected="selected">--请选择--</option>
                                <option value="必修">必修</option>
                                <option value="选修">选修</option>
                                <option value="其它">其它</option>
                                </select>
                                </td>
                                <td align="center" class="SkyTDTopLine" width="100">课程容量</td>
                                <td class="SkyTDLine"><input type="text" name="cou_volume" value="" /></td>
                                </tr>
                                <tr class="MeNewTDLine">
                                
                                <td align="center" class="SkyTDTopLine" width="100">课程学分</td>
                                <td class="SkyTDLine"><input type="text" name="cou_credit" value="" /></td>
                                </tr>
                                <tr class="MeNewTDLine">
                                <td align="center" class="SkyTDTopLine" width="100">开课时间</td>
                                <td class="SkyTDLine"><input type="text" name="cou_time_detail" value="" /><span class="red_note">&nbsp;*格式：mo1,mo2</span></td>
                                <!--
                                <td align="center" class="SkyTDTopLine" width="100">选课开始时间</td>
                                <td class="SkyTDLine">
                                <input type="text" name="cou_time_begin_ch" value="" onClick="WdatePicker({skin:'whyGreen',isShowOther:false,readOnly:true,dateFmt:'yyyy-MM-dd'});" />
                                </td>-->
                                </tr>
                                <tr class="MeNewTDLine">
                                <td align="center" class="SkyTDTopLine" width="100">上课周数</td>
                                <td class="SkyTDLine"><input type="text" name="cou_week_to" value="" /><span class="red_note">&nbsp;&nbsp;格式：1-18</span></td>
                                
                                <!--
                                <td align="center" class="SkyTDTopLine" width="100">授课学院</td>
                                <td class="SkyTDLine"><input type="text" name="teach_school" value="" /></td>
                                -->
                                </tr>
                                <tr class="MeNewTDLine">
                                <td align="center" class="SkyTDTopLine" width="100">授课教师</td>
                                <td class="SkyTDLine">
                                <select name="teach_teacher">
                                <option value="" selected="selected">--请选择--</option>
                                    <?php list_name('option','user_tea','tea_id','user_name');?>
                                </select>
                                <span class="red_note">*</span>
                                </td>
                                <td align="center" class="SkyTDTopLine" width="100">教材名称</td>
                                <td class="SkyTDLine"><input type="text" name="teachering_material" value="" /></td>
                                </tr>
                                <tr class="MeNewTDLine">
                                <td align="center" class="SkyTDTopLine" width="100">上课学期</td>
                                <td class="SkyTDLine">
                                <select name="cou_term">
                                <option value="" selected="selected">--请选择--</option>
                                <?php list_term();?>
                                </select><span class="red_note">&nbsp;*</span>
                                </td>
                                
                                </tr>
                                <tr class="MeNewTDLine">
                                
                                <td align="center" class="SkyTDTopLine" width="100">开课教室</td>
                                <td class="SkyTDLine">
                                <select name="cou_classroom">
                                <option value="" selected="selected">--请选择--</option>
                                <?php list_room();?>
                                </select><span class="red_note">&nbsp;*</span>
                                </td>
                                </tr>
                                <tr class="MeNewTDLine">
                                <td align="center" class="SkyTDTopLine" width="100">开课周期</td>
                                <td class="SkyTDLine">
                                <select name="cou_weekcycle">
                                <option value="" selected="selected">--请选择--</option>
                                <option value="连续">连续</option>
                                <option value="单周">单周</option>
                                <option value="双周">双周</option>
                                </select>
                                </td>
                                </tr>
                                <tr class="MeNewTDLine">
                                <td align="center" class="SkyTDTopLine" width="100">备注</td>
                                <td class="SkyTDLine"><input type="text" name="other_note" value="" /></td>
                                <td align="center" class="SkyTDTopLine" width="100">课程介绍</td>
                                <td class="SkyTDLine"><input type="text" name="cou_introduce" value="" /></td>
                                </tr> 
                                
                          </table>
                        </div>
                    </div>
                </div>
                <div class="divSave">
                    <input type="button" id="btnSubmit" value="保存" class="SkyButtonFocus" onclick="jud_null(Form1)" />
                    <input type="button" id="btnSubmitClose" class="SkyButtonFocus" onclick="" value="取消" />
                </div>
            </div>
        
    </form>
</body>
<script type="text/javascript">

function jud_null(form){
  
  if(form.cou_name.value==""){
        alert("请填写课程名称！");
        return(false);
    }
    /*if(!(form.stu_sex[0].checked||form.stu_sex[1].checked)){
        alert("请选择性别!");
        return(false);
    }*/
    if(form.teach_teacher.value==""){
        alert("请选择授课教师！");
        return(false);
    }
    if(form.cou_term.value==""){
        alert("请选择上课学期！");
        return(false);
    }
    if(form.cou_classroom.value==""){
        alert("请选择开课教室！");
        return(false);
    }
    if(form.cou_time_detail.value==""){
        alert("请填写开课时间！");
        return(false);
    }
    sub_mit();

    
}

</script>
</html>

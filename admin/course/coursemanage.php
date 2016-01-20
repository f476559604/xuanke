<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/db_class.php";

//echo $class_info['open_school_1'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title>课程申报</title>
    <asp:Literal ID="litregscript" runat="server" Text=""></asp:Literal>

    <script language="javascript" src="/admin/js/SystemPage.js" type="text/jscript"></script>

    <script language="javascript" src="/admin/My97DatePicker/WdatePicker.js" type="text/jscript"></script>

    <script language="javascript" type="text/javascript">
        //页面加载状态
        //2010-06-11
        $(document).ready(function() {
           chkState();
           if($("#chkIsLimitDate").attr("checked"))
                {
                    $("#divDate").show();
                }
                else
                {
                    $("#divDate").hide();
                }
                //限制不能删除
                $("#txtStartDate").attr("readonly","readonly");
                $("#txtEndDate").attr("readonly","readonly");
        });
        //查看成绩限制状态
        //2010-06-11
        function chkState()
        {
            $("#chkIsLimitDate").click( function () { 
                if($("#chkIsLimitDate").attr("checked"))
                {
                    $("#chkIsEdit").attr("checked",true);
                    $("#divDate").show();
                }
                else
                {
                    $("#divDate").hide();
                }
             });
             
             $("#chkIsEdit").click( function () { 
                if($("#chkIsEdit").attr("checked"))
                {
                    
                }
                else
                {
                    $("#divDate").hide();
                    $("#chkIsLimitDate").attr("checked",false);
                }
             });
        }
        function goRoomCourse() {
            //$("#drpRoomID");
            var sName = $("#drpRoomID").find("option:selected").text();
            var sID = $("#drpRoomID").find("option:selected").val();
            if (sID == "-1") {return;}
            var url = "/admin/autocourse/viewroomcourse.aspx?id=" + sID + "&name=" + encodeURI(sName);
            return SysOpenNew(url);
        }
    </script>

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
    <asp:Literal runat="server" ID="litCss"></asp:Literal>
</head>
<body onload="win_onLoad();">
    <form id="Form1" method="post" runat="server">
      <asp:ScriptManager ID="ScriptManager1" runat="server">
    </asp:ScriptManager>
    <asp:UpdatePanel ID="UpdatePanel1" runat="server">
        <ContentTemplate>
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
                                
                                      <?php
                                            /**************这里实现功能是通过查询备注与循环输出得到的*********************/
                                            /*根据特定id查询表中内容*/
                                            /*$query=$db->query("select * from cou_app_record where cou_id=1");
                                            //$class_info=mysql_fetch_assoc($query);
                                            //$si_query=$db->query("select * from `user_stu` where stu_id='201063502140'");
                                            //$stu_info=mysql_fetch_assoc($si_query);
                                            /*查询表中各列备注*/
                                            $cn_query=$db->get_table_note_colu('user_stu');
                                            $columns_note=mysql_fetch_assoc($cn_query);
                                            //echo(mysql_fetch_assoc($cn_query));
                                            
                                            while($columns_note=mysql_fetch_assoc($cn_query)){
                                                 //echo(sdfsdfsd);
                                            //$lw_type='text';   
                                                if($i%2==0){echo "<tr class='MeNewTDLine'>";}
                                            //$COLUMN_NAME=$columns_note['COLUMN_NAME'];
                                         ?>
                                          <td align="center" class="SkyTDTopLine" width="100"> <?php echo($columns_note['COLUMN_COMMENT']);?> </td>
                                          <td class="SkyTDLine" >
                                         <?php
                                                if($columns_note['COLUMN_COMMENT']=='密码') {
                                         ?>
                                          <a href="http://www.baidu.com" target="_blank" onclick="changekey()"><input type="password" name="<?php echo($columns_note['COLUMN_NAME']);?>" value="12345678" /></a>
                                          
                                         <?php   
                                            }
                                                else if($columns_note['COLUMN_COMMENT']=='学院'||$columns_note['COLUMN_COMMENT']=='专业'||$columns_note['COLUMN_COMMENT']=='班级'||$columns_note['COLUMN_COMMENT']=='年级'){
                                                    $lw_query=$db->list_query($columns_note['COLUMN_COMMENT']);
                                                    //echo($stu_info[$columns_note['COLUMN_NAME']]);
                                                    echo("<select name='".$columns_note['COLUMN_NAME']."'>"); 
                                                    while($lw_result=mysql_fetch_assoc($lw_query)){
                                                        $selected=NULL;
                                                        if($stu_info[$columns_note['COLUMN_NAME']]==$lw_result['obj_name']){
                                                            //echo($stu_info[$columns_note['COLUMN_NAME']]."ss".$lw_result['obj_name']);
                                                            //echo 333;
                                                            $selected="selected='selected'";
                                                            //$selected=$stu_info[$columns_note['COLUMN_NAME']]."ss".$lw_result['obj_name'];
                                                        } 
                                                        echo("<option ".$selected.">".$lw_result['obj_name']."</option>");
                                                    }
                                                    echo("</select>");
                                                }
                                                else {
                                         ?>
                                         
                                          <input type="text" name="<?php echo($columns_note['COLUMN_NAME']);?>" <?php if($columns_note['COLUMN_COMMENT']=='学号') echo("readonly='readonly'");?> value="<?php echo $stu_info[$columns_note['COLUMN_NAME']];?>"/>
                         
                                        <?php
                                                }
                                        echo"</td>";
                                        if($i%2!=0){echo "</tr>";}
                                        $i++;
                                            }
                                    ?>
                                <tr>
                                    <td width="100" align="center" class="SkyTDTopLine">
                                        开课院系 
                                    </td>
                                    <td class="SkyTDLine">
                                        <select>
                                        <option>sdfsdf</option>
                                        <option>sdfsdf</option>
                                        </select>
                                    </td>
                                    <td align="center" class="SkyTDTopLine" width="100">
                                        开课专业
                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:DropDownList ID="drpSkyTID" runat="server" AutoPostBack="True" Width="200px">
                                        </asp:DropDownList>
                                    </td>
                                    
                                </tr>
                                                               
                                <tr class="MeNewTDLine">
                                    <td align="center" class="SkyTDTopLine" width="100">
                                        开课年级
                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:DropDownList ID="drpSkyCID" runat="server" AutoPostBack="True" Width="200px">
                                            <asp:ListItem Value="-1">-请选择-</asp:ListItem>
                                        </asp:DropDownList>
                                    </td>
                                    <td align="center" class="SkyTDTopLine" width="100">
                                        开课季度
                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:DropDownList ID="drpSkyTID" runat="server" AutoPostBack="True" Width="200px">
                                        </asp:DropDownList>
                                    </td>
                                </tr>
                                <tr><td colspan="4"><hr /></td></tr>
                                <tr class="MeNewTDLine">
                                    <td align="center" class="SkyTDTopLine" width="100">
                                        开课学期
                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:TextBox ID="txtSkyDepartCourseID" runat="server" Width="200px"></asp:TextBox>
                                    </td>
                                    <td align="center" class="SkyTDTopLine" width="100">
                                        课程编号
                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:TextBox ID="txtCourseName" runat="server" Width="200px" CssClass="1" ToolTip="班级课程名称"></asp:TextBox>
                                    </td>
                                </tr>
                                <tr class="MeNewTDLine">
                                    <td align="center" class="SkyTDTopLine" width="100">
                                        课程容量
                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:TextBox ID="txtSkyDepartCourseID" runat="server" Width="200px"></asp:TextBox>
                                    </td>
                                    <td align="center" class="SkyTDTopLine" width="100">
                                        课程编号
                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:TextBox ID="txtCourseName" runat="server" Width="200px" CssClass="1" ToolTip="班级课程名称"></asp:TextBox>
                                    </td>
                                </tr>
                                <tr class="MeNewTDLine">
                                    <td align="center" class="SkyTDTopLine" width="100">
                                        课程名称
                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:DropDownList ID="drpCourseType" runat="server" Width="200px">
                                            <asp:ListItem Value="CourseType">code</asp:ListItem>
                                        </asp:DropDownList>
                                    </td>
                                    <td align="center" class="SkyTDTopLine" width="100">
                                       课程类型
                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:DropDownList ID="drpCourseSType" runat="server" Width="200px">
                                            <asp:ListItem Value="CourseSType">code</asp:ListItem>
                                        </asp:DropDownList>
                                    </td>
                                </tr>
                                <tr class="MeNewTDLine">
                                    <td width="100" align="center" class="SkyTDTopLine">
                                        课程学时
                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:DropDownList ID="drpCourseHours" runat="server" Width="200px">
                                            <asp:ListItem Value="CourseHours">code</asp:ListItem>
                                        </asp:DropDownList>
                                    </td>
                                    <td width="100" align="center" class="SkyTDTopLine">
                                        课程学分                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:DropDownList ID="drpCourseCredit" runat="server" Width="200px">
                                            <asp:ListItem Value="CourseCredit">code</asp:ListItem>
                                        </asp:DropDownList>
                                    </td>
                                </tr>
                                <tr class="MeNewTDLine">
                                    <td align="center" class="SkyTDTopLine" width="100">
                                        成绩录入
                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:CheckBox ID="chkIsEdit" runat="server" Text="可以编辑(选择后才可以编辑成绩)" />
                                    </td>
                                    <td width="100" align="center" class="SkyTDTopLine">
                                        审核情况                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:CheckBox ID="chkIsCheck" runat="server" Text="已审核(选择为已通过审核)" />
                                    </td>
                                </tr>
                                <tr class="MeNewTDLine">
                                    <td align="center" class="SkyTDTopLine" width="100">
                                        限时选课
                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:CheckBox ID="chkIsLimitDate" runat="server" Text="限制(选择后将限制编辑时间)" />
                                    </td>
                                    <td width="100" align="center" class="SkyTDTopLine">
                                        申请时间                                    </td>
                                    <td class="SkyTDLine"><div id="divDate" style="display:none">
                                        <asp:TextBox ID="txtStartDate" runat="server" onfocus="var txtEndDate=$dp.$('txtEndDate');WdatePicker({onpicked:function(){txtEndDate.focus();},maxDate:'#F{$dp.$D(\'txtEndDate\')}',isShowClear:false,dateFmt:'yyyy-MM-dd'});"
                                            Width="80px">2010-01-01</asp:TextBox>
                                        至<asp:TextBox ID="txtEndDate" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'txtStartDate\',{d:0})}',isShowClear:false,dateFmt:'yyyy-MM-dd'});"
                                            runat="server" Width="80px">2011-12-31</asp:TextBox></div>
                                    </td>
                                </tr>
                                <tr class="MeNewTDLine">
                                    <td align="center" class="SkyTDTopLine" width="100">
                                        已选人数
                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:DropDownList ID="drpAID" runat="server" Width="200px" AutoPostBack="True" OnSelectedIndexChanged="drpAID_SelectedIndexChanged">
                                        </asp:DropDownList>
                                    </td>
                                    <td width="100" align="center" class="SkyTDTopLine">
                                        开课教室                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:DropDownList ID="drpRoomID" runat="server" Width="200px">
                                        </asp:DropDownList>
                                        <a href="#" onclick="goRoomCourse();">『查看课表』</a>
                                    </td>
                                </tr>
                                <tr class="MeNewTDLine">
                                    <td align="center" class="SkyTDTopLine" width="100">
                                        授课院系
                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:DropDownList ID="drpSkyDIDUser" runat="server" AutoPostBack="True" Width="200px"
                                            OnSelectedIndexChanged="drpSkyDIDUser_SelectedIndexChanged">
                                        </asp:DropDownList>
                                    </td>
                                    <td width="100" align="center" class="SkyTDTopLine">
                                        授课教师                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:DropDownList ID="drpUserID" runat="server" Width="200px" AutoPostBack="True"
                                            OnSelectedIndexChanged="drpUserID_SelectedIndexChanged">
                                        </asp:DropDownList>
                                    </td>
                                </tr>
                                <tr class="MeNewTDLine" style="display:none">
                                    <td align="center" class="SkyTDTopLine" width="100">&nbsp;
                                  </td>
                                    <td class="SkyTDLine">&nbsp;
                                  </td>
                                    <td width="100" align="center" class="SkyTDTopLine">
                                        手动课程编号</td>
                                    <td class="SkyTDLine">
                                        <asp:TextBox ID="txtCourseNumber" runat="server" ToolTip="手动课程编号" Width="200px"></asp:TextBox>
                                    </td>
                                </tr>
                                <tr class="MeNewTDLine">
                                    <td align="center" class="SkyTDTopLine" width="100">
                                        开课节数 
                                    </td>
                                    <td class="SkyTDLine">
                                        <asp:DropDownList ID="drpFestival" runat="server" Width="200px">
                                        </asp:DropDownList>
                                    </td>
                                    <td width="100" align="center" class="SkyTDTopLine">
                                        开课周期                                  </td>
                                    <td class="SkyTDLine">
                                        <asp:TextBox ID="txtCourseZQ" runat="server" ToolTip="开课周期要求（例如：1-16周）" 
                                            Width="200px"></asp:TextBox>
                                    </td>
                                </tr>
                                <tr class="MeNewTDLine">
                                    <td align="center" class="SkyTDTopLine" width="100">
                                        开课时间
                                    </td>
                                    <td class="SkyTDLine" colspan="3">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr class="SkyTDTopLine">
                                                <td width="120" align="center">
                                                    课程/节数
                                                </td>
                                                <td>
                                                    <asp:Label ID="LabTop" runat="server" Text=""></asp:Label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="SkyTDLine">
                                                    <asp:Label ID="LabLeft" runat="server" Text=""></asp:Label>
                                                </td>
                                                <td valign="top">
                                                    <asp:CheckBoxList  ID="chkTimeInfo" RepeatColumns="7" runat="server"
                                                        Width="100%" CellPadding="1" CellSpacing="1">
                                                    </asp:CheckBoxList>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="MeNewTDLine">
                                    <td width="100" align="center" class="SkyTDTopLine">
                                        课程备注
                                    </td>
                                    <td class="SkyTDLine" colspan="3">
                                        <asp:TextBox ID="txtCourseInfo" runat="server" Width="600px" Height="50px" TextMode="MultiLine"></asp:TextBox>
                                    </td>
                                </tr>
                          </table>
                        </div>
                    </div>
                </div>
                <div class="divSave">
                    <asp:Button ID="btnSubmit" runat="server" Text="保存(S)" CssClass="SkyButtonFocus"
                        OnClick="btnSubmit_Click" AccessKey="S" CommandName="save"></asp:Button>
                    <asp:Button ID="btnSubmitClose" runat="server" CommandName="saveclose" CssClass="SkyButtonFocus"
                        OnClick="btnSubmit_Click" Text="取消(C)" />
                </div>
            </div>
        </ContentTemplate>
    </asp:UpdatePanel>
    <asp:UpdateProgress ID="UpdateProgress1" runat="server" AssociatedUpdatePanelID="UpdatePanel1">
        <ProgressTemplate>
            <div id="divLoading">
                <img src="/admin/images/loading.gif" />
            </div>
        </ProgressTemplate>
    </asp:UpdateProgress>
    </form>
</body>
</html>

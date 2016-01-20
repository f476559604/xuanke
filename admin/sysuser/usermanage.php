
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
<title>用户管理</title>
<asp:Literal ID="litregscript" runat="server" Text=""></asp:Literal>
<script language="javascript" src="/admin/js/SystemPage.js" type="text/jscript"></script>
<link href="../style/green/skin.css" rel="stylesheet" type="text/css">
</head>
<body onload="win_onLoad();">
<form id="Form1" method="post" runat="server">
  <asp:ScriptManager ID="ScriptManager1" runat="server"> </asp:ScriptManager>
  <asp:UpdatePanel ID="UpdatePanel1" runat="server">
    <ContentTemplate>
      <div id="tbMain">
        <div class="divTbg">
          <div class="divTbgL"></div>
          <div class="divTbgInfo">
            <div class="divTbgTitle">用户管理</div>
          </div>
        </div>
        <div class="divTbgF"></div>
        <div class="divTNavBG" id="topURL">
          <ul id="topURLul">
            <li class="divURLed" id="div1">
              <div><img src="../style/green/images/mini_icons_046.gif" width="10" height="10" /> 基本信息</div>
            </li>
          </ul>
        </div>
        <div id="mypanel">
          <div class="divInfo" id="ddiv1">
            <div class="divInfoTop">
              <div class="listLeft">
                <ul>
                  <li>
                    <div><img src="../style/green/images/basic.gif"/></div>
                  </li>
                  <li>基本信息</li>
                </ul>
              </div>
            </div>
            <div class="divInfoContext">
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" class="SkyTDLine">
                <tr class="MeNewTDLine">
                  <td align="center" class="SkyTDTopLine" width="100"> 用户编号 </td>
                  <td class="SkyTDLine"><asp:TextBox ID="txtUserID" runat="server" CssClass="7" ToolTip="用户编号" Width="200px"></asp:TextBox>
                    (不能修改，登录使用) </td>
                  <td align="center" class="SkyTDTopLine" width="100"> 用户名称 </td>
                  <td class="SkyTDLine"><asp:TextBox ID="txtUserName" runat="server" CssClass="1" ToolTip="用户名称" Width="200px"></asp:TextBox>
                  </td>
                </tr>
                <tr class="MeNewTDLine">
                  <td align="center" class="SkyTDTopLine" width="100"> 用户密码 </td>
                  <td class="SkyTDLine"><asp:TextBox ID="txtUserPwd" runat="server" CssClass="1" ToolTip="用户密码" Width="200px"></asp:TextBox>
                  </td>
                  <td align="center" class="SkyTDTopLine" width="100"> 用户角色 </td>
                  <td class="SkyTDLine"><asp:DropDownList ID="drpRoleID" runat="server" Width="200px"> </asp:DropDownList>
                  </td>
                </tr>
                <tr class="MeNewTDLine">
                  <td align="center" class="SkyTDTopLine" width="100"> 用户性别 </td>
                  <td class="SkyTDLine"><asp:DropDownList ID="drpUSex" runat="server" Width="200px">
                      <asp:ListItem Value="Sex">code</asp:ListItem>
                    </asp:DropDownList>
                  </td>
                  <td align="center" class="SkyTDTopLine" width="100"> 用户电话 </td>
                  <td class="SkyTDLine"><asp:TextBox ID="txtUTel" runat="server" CssClass="6" ToolTip="用户电话" Width="200px"></asp:TextBox>
                  </td>
                </tr>
                <tr class="MeNewTDLine">
                  <td align="center" class="SkyTDTopLine" width="100"> 联系地址 </td>
                  <td class="SkyTDLine"><asp:TextBox ID="txtUAddr" runat="server" AutoPostBack="True" 
                          Width="200px"></asp:TextBox>
                  </td>
                  <td align="center" class="SkyTDTopLine" width="100">管理院系</td>
                  <td class="SkyTDLine">
                      <asp:DropDownList ID="drpSkyDID" runat="server" Width="200px">
                          
                      </asp:DropDownList>
                    </td>
                </tr>
                <tr class="MeNewTDLine">
                  <td align="center" class="SkyTDTopLine" width="100"> 用户备注 </td>
                  <td class="SkyTDLine"><asp:TextBox ID="txtUInfo" runat="server" Width="200px" Height="50px" TextMode="MultiLine"></asp:TextBox>
                  </td>
                  <td align="center" class="SkyTDTopLine" width="100">&nbsp;</td>
                  <td class="SkyTDLine">↑如果能全部管理则不选择院系</td>
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
      <div id="divLoading"> <img src="/admin/images/loading.gif" /> </div>
    </ProgressTemplate>
  </asp:UpdateProgress>
</form>
</body>
</html>

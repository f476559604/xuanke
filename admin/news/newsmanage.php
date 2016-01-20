<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
<title>新闻管理</title>
<script language="javascript" src="/admin/js/SystemPage.js" type="text/jscript"></script>
<link href="../style/green/skin.css" rel="stylesheet" type="text/css">
</head>
<body onload="win_onLoad();">
<form id="Form1" method="post" runat="server">

      <div id="tbMain">
        <div class="divTbg">
          <div class="divTbgL"></div>
          <div class="divTbgInfo">
            <div class="divTbgTitle">新闻管理</div>
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
                  <td width="100" align="center" class="SkyTDTopLine"> 新闻标题 </td>
                  <td class="SkyTDLine"><asp:TextBox ID="txtNName" runat="server"  CssClass="1" ToolTip="新闻标题" Width="400px">新闻标题</asp:TextBox>
                  </td>
                </tr>
                <tr class="MeNewTDLine">
                  <td align="center" class="SkyTDTopLine" width="100"> 新闻内容 </td>
                  <td class="SkyTDLine"><FCKeditorV2:FCKeditor ID="fckPInfo" runat="server" Height="400px" 
                                                                                                    Width="700px"> </FCKeditorV2:FCKeditor>
                  </td>
                </tr>
                <tr class="MeNewTDLine">
                  <td align="center" class="SkyTDTopLine" width="100"> 新闻流量 </td>
                  <td class="SkyTDLine"><asp:TextBox ID="txtNFlux" runat="server"  CssClass="2" ToolTip="新闻流量" Width="200px">0</asp:TextBox>
                  </td>
                </tr>
                <tr class="MeNewTDLine">
                  <td width="100" align="center" class="SkyTDTopLine"> 新闻附件 </td>
                  <td class="SkyTDLine"><asp:TextBox ID="txtNAdd" runat="server" Width="400px"></asp:TextBox>
                    <a href="#" onClick="SkyOpen('txtNAdd');">[选择]</a>
                    
                    <a href="#" onclick="SkyView('txtNAdd');">[查看]</a>
                     </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="divSave">
          <input type="button" id="btnSubmit" value="保存(S)" class="SkyButtonFocus" onclick="btnSubmit_Click" AccessKey="S" CommandName="save" />
          <input type="button" id="btnSubmitClose" CommandName="saveclose" class="SkyButtonFocus" onclick="btnSubmit_Click" value="取消(C)" />
        </div>
      </div>


      <div id="divLoading"> <img src="/admin/images/loading.gif" /> </div>

</form>
</body>
</html>

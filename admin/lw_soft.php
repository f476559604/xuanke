<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>软件信息</title>
    <base target="_self" />
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <link href="style/green/skin.css" rel="stylesheet" type="text/css" />
</head>
</head>
<body>
    <form id="form1" runat="server">
    <div id="tbMain">
        <div class="divTbg">
            <div class="divTbgL">
            </div>
            <div class="divTbgInfo">
                <div class="divTbgTitle">
                    软件信息</div>
            </div>
        </div>
        <div class="divTbgF">
        </div>
        <div id="mypanel">
            <div class="divInfo" id="ddiv1">
                <div class="divInfoContext">
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" class="SkyTableLine">
                        <tr>
                            <td width="100" align="center" class="SkyTDTopLine">
                                软件名称
                            </td>
                            <td class="SkyTDInfo">
                                <asp:Literal ID="LiteralSoftName" runat="server" Text="悠索科技高校教务管理系统"></asp:Literal>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="SkyTDTopLine">
                                软件版本
                            </td>
                            <td class="SkyTDInfo">
                                <asp:Literal ID="LiteralSoftAssembly" runat="server"></asp:Literal>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="SkyTDTopLine">
                                软件版权
                            </td>
                            <td class="SkyTDInfo">
                                <asp:Literal ID="LiteralCompany" runat="server" Text=""></asp:Literal>
                                保留所有权利
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="SkyTDTopLine">
                                说明信息
                            </td>
                            <td class="SkyTDInfo">
                                <asp:Literal ID="LiteralDescription" runat="server"></asp:Literal>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="SkyTDTopLine">
                                授权类型
                            </td>
                            <td class="SkyTDInfo">
                                <asp:Literal ID="LiteralUserType" runat="server"></asp:Literal>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="SkyTDTopLine">
                                授权学校
                            </td>
                            <td class="SkyTDInfo">
                                <asp:TextBox ID="txtWebName" runat="server" CssClass="1" Width="400px" Enabled="False"></asp:TextBox>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="SkyTDTopLine">
                                <span class="SkyTDLine">在线人数</span>
                            </td>
                            <td class="SkyTDInfo">
                                <asp:TextBox ID="txtWebOnline" runat="server" CssClass="1" Width="400px" Enabled="False"></asp:TextBox>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="divSave">
            <input name="btnClose" type="button" value="关闭(C)" onclick="window.close()" class="SkyButtonFocus" />
        </div>
    </div>
    </form>
</body>
</html>

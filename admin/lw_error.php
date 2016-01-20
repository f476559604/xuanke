
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>错误提示</title>
    <link href="style/green/skin.css" rel="stylesheet" type="text/css" />
    <script language="javascript" src="/admin/js/SystemPage.js" type="text/jscript"></script>
    </head>
</head>
<body onload="win_onLoad();">
    <form id="form1" runat="server">
   <div id="tbMain">
        <div class="divTbg">
          <div class="divTbgL"></div>
          <div class="divTbgInfo">
            <div class="divTbgTitle">错误提示</div>
          </div>
        </div>
        <div class="divTbgF"></div>
        <div id="mypanel">
          <div class="divInfo" id="ddiv1">
            <div class="divInfoTop">
              <div class="listLeft">
                <ul>
                  <li>
                    <div><img src="style/green/images/basic.gif"/></div>
                  </li>
                  <li>错误提示</li>
                </ul>
              </div>
            </div>
            <div class="divInfoContext">
              <table width="99%" border="0" align="center" cellpadding="5" cellspacing="1" class="SkyTableLine">
                <tr>
                  <td colspan="2" align="left" class="SkyTDLine">　　
                      <span style="color:Red"><asp:Literal ID="LiteralInfo" runat="server"></asp:Literal></span>
                   　　</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </form>
</body>
</html>

﻿<?php
include "../lw_inc/judge.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>顶部框架区</title>
<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../js/SystemPage.js" type="text/jscript"></script>
</head>
<body>
    <form id="form1">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="26" background="../style/green/images/main_03.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="227" height="26" background="../style/green/images/main_01.gif" >&nbsp;</td>
          <td background="../style/green/images/main_03.gif">&nbsp;</td>
          <td width="60"><img src="../style/green/images/main_05.gif" width="60" height="26" /></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="64"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="227" height="64" background="../style/green/images/main_06.gif" nowrap="nowrap" valign="middle" align="right" ><asp:Literal ID="litImages" runat="server"></asp:Literal></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="26" background="../style/green/images/main_07.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="26"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="300" height="26"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="30"><div align="center"><img src="../style/green/images/top_1.gif" width="14" height="14" /></div></td>
                                  <td  nowrap="nowrap" class="SkyTopFont1"><!--在这里是左边-->当前登录用户：<?php echo($_SESSION['name']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用户角色：<?php echo($_SESSION['type']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo($_SESSION['term_now']);?></td>
                                </tr>
                              </table></td>
                            <td width="19"><img src="../style/green/images/main_09.gif" width="19" height="26" /></td>
                            <td width="352" align="right">
                            <!--在这里是右边-->
                            </td>
                          </tr>
                        </table></td>
                      <td width="12"><img src="../style/green/images/main_13.gif" width="12" height="26" /></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td height="38" background="../style/green/images/main_15.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="38"><table border="0" cellspacing="0" cellpadding="0">
<tr><td width="75" height="26" style="cursor: hand" >
                        &nbsp;</td>
                  <td width="75" height="26" style="cursor: hand" onmouseover="this.style.backgroundImage='url(../style/green/images/main_18.gif)';this.style.borderStyle='solid';this.style.borderWidth='1';borderColor='#adb9c2'; "
                                                                onmouseout="this.style.backgroundImage='url()';this.style.borderStyle='none'">
                                                          <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td>
                                                                            <div align="center">
                                                                                <img src="../style/green/images/top_8.gif" width="16" height="16" /></div>
                                                                        </td>
                                                                        <td>
                                                                            <div align="center">
                                                                                <span class="SkyTopFont2"><a href="../lw_index.php" target="frameright" class="v1">系统首页</a></span></div>
                                                                      </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <?php
                                                            if($_SESSION['type']=='education'){
                                                            ?>
                                                      <td width="75" style="cursor: hand" onmouseover="this.style.backgroundImage='url(../style/green/images/main_18.gif)';this.style.borderStyle='solid';this.style.borderWidth='1';borderColor='#adb9c2'; "
                                                                onmouseout="this.style.backgroundImage='url()';this.style.borderStyle='none'">
                                                          <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td>
                                                                            <div align="center">
                                                                                <img src="../style/green/images/top_9.gif" width="20" height="20" /></div>
                                                                        </td>
                                                                        <td>
                                                                            <div align="center">
                                                                                <span class="SkyTopFont2"><a href="../lw_info.php" target="frameright" class="v1">系统说明</a></span></div>
                                                                      </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <?
                                                            }
                                                            ?>
                                                      <td width="75" style="cursor: hand" onmouseover="this.style.backgroundImage='url(../style/green/images/main_18.gif)';this.style.borderStyle='solid';this.style.borderWidth='1';borderColor='#adb9c2'; "
                                                                onmouseout="this.style.backgroundImage='url()';this.style.borderStyle='none'">
                                                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td>
                                                                            <div align="center">
                                                                                <img src="../style/green/images/top_10.gif" width="20" height="20" /></div>
                                                                        </td>
                                                                        <td>
                                                                            <div align="center">
                                                                                <span class="SkyTopFont2"><a href="../lw_help.php" target="frameright" class="v1">软件帮助</a></span></div>
                                                                      </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                           <td width="75" style="cursor: hand" onmouseover="this.style.backgroundImage='url(../style/green/images/main_18.gif)';this.style.borderStyle='solid';this.style.borderWidth='1';borderColor='#adb9c2'; "
                                                                onmouseout="this.style.backgroundImage='url()';this.style.borderStyle='none'">
                                                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td>
                                                                            <div align="center">
                                                                                <img src="../style/green/images/top_9.gif" width="20" height="20" /></div>
                                                                        </td>
                                                                        <td>
                                                                            <div align="center">
                                                                                <span class="SkyTopFont2"><a href="pass_change.php" target="frameright" class="v1">更改密码</a></span></div>
                                                                      </td>
                                                                    </tr>
                                                                </table>
                                                            </td>                                 
                          <td width="75" style="cursor: hand" onmouseover="this.style.backgroundImage='url(../style/green/images/main_18.gif)';this.style.borderStyle='solid';this.style.borderWidth='1';borderColor='#adb9c2'; "
                                                                onmouseout="this.style.backgroundImage='url()';this.style.borderStyle='none'">
                                                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td>
                                                                            <div align="center">
                                                                                <img src="../style/green/images/top_13.gif" width="20" height="20" /></div>
                                                                        </td>
                                                                        <td>
                                                                            <div align="center">
                                                                                <span class="SkyTopFont2"><a href="../lw_exit.php" target="frameright" class="v1">退出系统</a></span></div>
                                                                      </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            
                          
                                                           
                            </tr>
                                                    </table>
                                                    
                                                   
                                                    
                                                    
                                                    </td>
                      <td width="60" ><div align="right"><img src="../style/green/images/main_17.gif" width="60" height="38" /></div></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
    </form>
</body>
</html>

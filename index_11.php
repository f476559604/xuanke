<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>国际教育交流学院选课系统</title>
    <link rel="stylesheet" href="admin/skin/new/login.css" type="text/css">

    <script language="javascript" src="admin/skin/new/login.js"></script>
</head>

<body>
    <form name="FrmReg" method="post" target="_self" action="" id="FrmReg">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
        <tr>
            <td valign="middle">
                <table width="796" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table width="796" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td height="342" align="center" valign="bottom" class="tdbg">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td height="30">
                                                    <table border="0" align="center" cellpadding="3" cellspacing="2" class="skyLoginFont">
                                                        <tr>
                                                            <td>
                                                                <img src="admin/skin/new/1.jpg" width="31" height="27" />
                                                            </td>
                                                            <td>
                                                                身 份：
                                                            </td>
                                                            <td>
                                                                <select name="DrpUserType" id="DrpUserType" class="skyLoginInput">
                                                                    <option value="1000">学生角色</option>
                                                                    <option value="1001">教师角色</option>
                                                                    <option value="1002">教务处角色</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <img src="admin/skin/new/2.jpg" width="31" height="27" />
                                                            </td>
                                                            <td>
                                                                用户编号：
                                                            </td>
                                                            <td>
                                                                <input name="UserID1" type="text" maxlength="30" id="UserID1" class="skyLoginInput">
                                                            </td>
                                                            <td>
                                                                <img src="admin/skin/new/3.jpg" width="31" height="27" />
                                                            </td>
                                                            <td>
                                                                密 码：
                                                            </td>
                                                            <td>
                                                                <input name="UserPwd1" type="password" maxlength="30" id="UserPwd1" class="skyLoginInput">
                                                            </td>
                                                            <td>
                                                                <input name="openwindow" type="checkbox" id="openwindow" />
                                                                <label for="openwindow" title="后台屏蔽菜单等导航功能">
                                                                    登录后全屏</label>
                                                            </td>
                                                            <td>
                                                                <input type="image" name="imageField" id="imageField" src="admin/skin/new/btnlogin.jpg"
                                                                    onclick="return SkyUserLogin();" title="进入教务管理系统" />
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="80" align="center">
                                                    <div class="skyCopyFont">
                                                       
                                                    </div>
                                                    <div class="skyOnlineUser">
                                                        当前人在线</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>

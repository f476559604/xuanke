<?php
header("Content-type:text/html;charset=utf-8");
//include "../lw_inc/lw_conn.php";
session_start();
//$id=$_SESSION['user_id'];
//echo $id;
$llhp=$_SESSION['name'];
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title>信息管理</title>

    <link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
    <script lang="javascript" src="../js/check.js"></script>
</head>
<body>
            <div class="divTbg">
                <div class="divTbgL">
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle">
                        密码修改</div>
                </div>
            </div>
            <div class="divTbgF">
            </div>
        
<form id="Form1" method="post" action="pass_change_ok.php">    
            <div class="divInfo">
                <div class="divInfoTopList">
                    <div class="listLeft">
                        <ul>
                            <li>
                                <div>
                                    <img src="../style/green/images/index.gif" /></div>
                            </li>
                            <li>
                                密码修改</li>
                        </ul>
                    </div>
                    <div class="listRight">
                        <ul>
                            <li>
                               
                            </li>
                            <li class="listRightwidth">
                                <label for="checkSelect" id="allchoose1">
                                   </label>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
 
                    <table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">
                        
                        <tr class="SkyTDTopLine" align="center"><th scope="col">用户名</th><th scope="col">原来密码</th><th scope="col">现在密码</th></tr>
                        <tr class="SkyTDLine" align="center">
                        <?php
                        $html='<td>'.$name.'</td><td><input name="old1" value="" type="password"/></td><td><input name="new1" value="" type="password"/></td>';
                        echo $html;
                        ?>
                        
                        </tr>
                        </table>
                </div>
            </div>
            <div class="divSave">

                <input type="submit" name="submit" id="btnSubmit"  onclick="return check_secret('old1','new1');" value="确认修改" class="SkyButtonFocus"/>
            </div>
    </form>
</body>
</html>

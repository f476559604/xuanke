<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/lw_conn.php";
$hp2=$_GET['hp2'];
//echo $id;
$hpn=$_GET['hpn'];
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
        
<form id="Form1" method="post" action="tea_reset_ok.php">    
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
                    
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
 
                    <table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">
                        
                        <tr class="SkyTDTopLine" align="center"><th scope="col">编号</th><th scope="col">姓名</th><th scope="col">新密码</th></tr>
                        <tr class="SkyTDLine" align="center">
                        <?php
                        $html='<td>'.$hp2.'</td><td>'.$hpn.'</td><td><input name="hp3" value="" type="text"/></td>';
                        echo $html;
                        ?>
                        
                        </tr>
                        </table>
                </div>
            </div>
            <div class="divSave">
                <input name="hp2" type="hidden" value="<?php echo($hp2);?>" />
                <input type="submit" name="submit" id="btnSubmit"  onclick="return check_this_con('hp3');" value="确认修改" class="SkyButtonFocus"/>
            </div>
    </form>
</body>
</html>

<?php
header("Content-type:text/html;charset=utf-8"); 
include "../lw_inc/db_class.php";

session_start();
include "chose_delete_list.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title>选课管理</title>
    <script language="javascript" src="../js/jquery/jquery-1.8.2.js" type="text/jscript"></script>
    
    <link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
</head>
<body>
            <div class="divTbg">
                <div class="divTbgL">
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle">
                        已选课程删除</div>
                </div>
            </div>
            <div class="divTbgF">
            </div>
           
    <form id="Form1" method="post" action="chose_delete_ok.php">    
            <div class="divInfo">
                <div class="divInfoTopList">
                    <div class="listLeft">
                        <ul>
                            <li>
                                <div>
                                    <img src="../style/green/images/index.gif" /></div>
                            </li>
                            <li>
                                课程列表</li>
                        </ul>
                    </div>

            </div>
            <div class="divInfoContext">
                <div style="font: 2px; line-height: 2px;">
                    &nbsp;</div>

                <table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">
                    
                    <?php
                        cou_delete_display('cou_app_record');
                    ?>
                </table>
                
            </div>
    </div>
            <div class="divSave">

                <input type="submit" name="submit" id="btnSubmit" value="删除" class="SkyButtonFocus"/>
            </div>
    </form>
</body>
</html>

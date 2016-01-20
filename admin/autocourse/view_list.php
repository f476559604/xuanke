<?php 
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/lw_conn.php";
//session_start();
include "view_list_fun.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	课表查看
</title>

<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <form name="Form1" method="post"id="Form1">
   <div id="UpdatePanel1">
	
            <div class="divTbg">
                <div class="divTbgL">
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle">
                        课表查看</div>
                </div>
            </div>
            <div class="divTbgF">
            </div>
            
            <div class="divInfo">
                <div class="divInfoTopList">
                    <div class="listLeft">
                        <ul>
                            <li>
                                <div>
                                    <img src="../style/green/images/index.gif" /></div>
                            </li>
                            <li>老师列表</li>
                        </ul>
                    </div>
                    <div class="listRight">
                        <ul>
                            <li class="listRightwidth">
                                <a id="LnkBExcel" href="javascript:__doPostBack('LnkBExcel','')">导出</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
                    <div id="score_tab">
	
        <?php view_list(); ?>  
                </div>
            </div>
            
        
</div>
   


</form>
</body>
</html>

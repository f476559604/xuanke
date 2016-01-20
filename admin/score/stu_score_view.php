<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/db_class.php";
include "stu_score_list.php";
session_start();
$score_view=$_POST['view_con'];
//echo $score_view;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	成绩查询
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
                        全部成绩</div>
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
                            <li>成绩列表</li>
                        </ul>
                    </div>
                    <div class="listRight">
                       
                    </div>
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
                    <div id="score_tab">
	
        <?php stu_score_list($score_view);?>
	               </div>
                    
                </div>
            </div>
            
        
</div>
   


</form>
</body>
</html>

<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/db_class.php";
include "scoview_list.php";
$termnow='search_id';
$name=$_GET['name'];
$iidd1=$_GET['iidd1'];
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
                        成绩列表</div>
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
                            <li><?php echo($name);?></li>
                        </ul>
                    </div>
                    <div class="listRight">
                        <ul>
                            <li style="list-style-type: none;">
                                <a id="LnkBExcel" href="../toexcel/stu_grade.php?iidd2=<?php echo($iidd1);?>">导出成绩表</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
                    <div id="score_tab">
	
        <?php stu_sco_list($iidd1);?>
	               </div>
                    
                </div>
            </div>
            
        
</div>
   


</form>
</body>
</html>

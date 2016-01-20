<?php 
header("Content-type:text/html;charset=utf-8"); 
include "../lw_inc/lw_conn.php";
session_start();
$type1=$_GET['type1'];
$num=$_GET['num'];
include "userlist_fun.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
    详细列表
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
                        <?php
                        if($type1=='teacher'){
                            echo('全部老师');
                        }
                        else{echo('班级学生');}
                        ?></div>
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
                            <li><?php
                        if($type1=='teacher'){
                            echo('全部老师');
                        }
                        else{echo('班级学生');}
                        ?></li>
                        </ul>
                    </div>
                    <div class="listRight">
                        <ul>
                            <li style="list-style: none;">
                            <?php 
                            if($type1=='student'){
                            ?>
                                <a id="LnkBExcel" href="../toexcel/stu_record.php?clas=<?php echo($num);?>">导出班级学生记录表</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;<a id="LnkBExcel" href="../toexcel/stu_info.php?clas=<?php echo($num);?>">导出班级学生信息表</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;<a id="LnkBExcel" href="../toexcel/class_grade.php?clas=<?php echo($num);?>">导出班级成绩表</a>
                            <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
                    <div id="score_tab">
	
        <?php userlist(); ?>  
                </div>
            </div>
            
        
</div>
   


</form>
</body>
</html>

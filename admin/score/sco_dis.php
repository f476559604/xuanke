<?php
    header("Content-type:text/html;charset=utf-8");
    include "../lw_inc/lw_conn.php";
    include "../lw_inc/obj_name.php";
    session_start();
    include "sco_dis_fun.php";
    
    $lesson=$_GET['lesson'];
    $ncou=$_GET['ncou'];
    $ntea=$_GET['ntea'];
    //echo $lesson;
    $termnow=$_SESSION['term_now'];
    if($_GET['termnow']!=""){
        $termnow=$_GET['termnow'];
       // echo $termnow;
    }

    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	成绩查询
</title>

<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery/jquery-1.8.2.js"></script>
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
                         <ul>
                            <li style="list-style-type: none;">
                                <a id="LnkBExcel" href="../toexcel/stu_record_clas.php?iidd0=<?php echo($lesson);?>&ncou=<?php echo($ncou);?>&ntea=<?php echo($ntea);?>&termnow=<?php echo($termnow);?>">导出课程记录表</a>
                            </li>
                            
                            <li style="list-style-type: none;">
                                <a id="LnkBExcel" href="../toexcel/grade_record.php?iidd0=<?php echo($lesson);?>&ncou=<?php echo($ncou);?>&ntea=<?php echo($ntea);?>&termnow=<?php echo($termnow);?>">导出课程成绩表</a>
                            </li>                        
                        </ul>
                    </div>
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
                    <div id="score_tab">
	
        <?php sco_dis($lesson,$termnow);?>
	               </div>
                    
                </div>
            </div>
            
        
</div>
   


</form>
<?php obj_name_js();?>
<script type="text/javascript">
$(document).ready(function(){
    
    $("tr").each(function(){
        var ww=$(this).find("td:eq(9)").html();
        //alert(parseInt(ww));
        if(parseInt(ww)<60){
            $(this).find("td:eq(9)").css('color','red');
        }
		//$(this).find("td:eq(2)").html(ww) 
		}); 
	});
</script>
</body>
</html>

<?php 
header("Content-type:text/html;charset=utf-8"); 
//include "../lw_inc/lw_conn.php";
$ss_id=$_GET['ss_id'];
$cc_id=$_GET['cc_id'];
$r_type=$_GET['r_type'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
    重修补修录入
</title>

<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
</head>

<body>
 
   <div id="UpdatePanel1">
	
            <div class="divTbg">
                <div class="divTbgL">
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle">
                    重修补修录入</div>
                </div>
            </div>
            <div class="divTbgF">
            </div>
<form name="Form1" method="post"id="Form1" action="bxcx_ok.php">            
             <div class="divInfo">
                <div class="divInfoTop">
                    <div class="listLeft">
                        <ul>
                            <li>
                                <div>
                                    <img src="../style/green/images/search.gif" /></div>
                            </li>
                            <li>重修补修录入选择</li>
                        </ul>
                    </div>
                </div>
                <div class="divInfoContext">
                    <table width="100%" border="0" cellpadding="0" cellspacing="1" class="SkyTableLine">
                        <tr>
                            <td width="100" align="center" class="SkyTDTitle">
                                学生学号
                            </td>
                            <td class="SkyTDInfo">
                                <div class="clearsearch">
                                    <p>
                                       
                                           <input name="stu_id" type="text" />
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <label for="drpSkyTID">
                                            所重修/补修_课程id：</label>
                                            <input name="cou_id" type="text" />
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <label for="drpSkyTID">
                                            选课属性：</label>
                                            <select name="r_type">
                                            <option value="重修">重修</option>
                                            <option value="补修">补修</option>
                                            </select>
                                            <input type="submit" id="button_search"  class="SkyButtonFocus" value="确认录入"/>
                                      
                                    </p>
                                    
                                </div>
                            </td>
                            
                        </tr>
                        
                    </table>
                </div>
            </div>
</form>            
            <div class="divInfo">
                <div class="divInfoTopList">
                    <div class="listLeft">
                        <ul>
                            <li>
                                <div>
                                    <img src="../style/green/images/index.gif" /></div>
                            </li>
                            <li>本次重修补修录入信息</li>
                        </ul>
                    </div>
                    <div class="listRight">
                        
                    </div>
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
                    <div id="score_tab">

	               
                    <?php 
                    echo('输入信息：'.$ss_id.'&nbsp;&nbsp;'.$cc_id.'&nbsp;&nbsp;'.$r_type);
                    include "bxcx_fun.php";
                    bxcx_info($ss_id,$cc_id,$r_type);
                    ?>  
                </div>
            </div>
            
        
    </div>
</div> 



</body>
</html>

<?php 
header("Content-type:text/html;charset=utf-8"); 
include "../lw_inc/lw_conn.php";
//$type1=$_GET['type1'];
//$num=$_GET['num'];

$k_type=$_POST['type1'];
$k_k=$_POST['key1'];
include "sco_find_fun.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
    成绩查询
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
                       成绩查询</div>
                </div>
            </div>
            <div class="divTbgF">
            </div>
<form name="Form1" method="post"id="Form1" action="">            
             <div class="divInfo">
                <div class="divInfoTop">
                    <div class="listLeft">
                        <ul>
                            <li>
                                <div>
                                    <img src="../style/green/images/search.gif" /></div>
                            </li>
                            <li>条件选择</li>
                        </ul>
                    </div>
                </div>
                <div class="divInfoContext">
                    <table width="100%" border="0" cellpadding="0" cellspacing="1" class="SkyTableLine">
                        <tr>
                            <td width="100" align="center" class="SkyTDTitle">
                                查找方式
                            </td>
                            <td class="SkyTDInfo">
                                <div class="clearsearch">
                                    <p>
                                        <label for="drpSkyTID">
                                            </label>
                                            <select name="type1"  id="type1">
                                                <option selected="selected" value="stu_id">学号</option>
                                                <option value="user_name">姓名</option>
                                                <option value="stu_nation">国籍</option>
                                                <option value="entrydate">入学年份</option>
                                                <option value="gradate">毕业年份</option>
                                            
                                            </select> 
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <label for="drpSkyTID">
                                            关键字：</label>
                                            <input name="key1" type="text" />
                                            <input type="submit" id="button_search"  class="SkyButtonFocus" value="查找"/>
                                      
                                    </p>
                                    
                                </div>
                            </td>
                            <td width="100" align="center" class="SkyTDTitle">
                                本次查找方式
                            </td>
                             <td class="SkyTDInfo">
                                <?php
                                if($k_k!=''){
                                    switch($k_type){
                                        case 'stu_id':
                                        echo('学号：');break;
                                        case 'user_name':
                                        echo('姓名：');break;
                                        case 'stu_nation':
                                        echo('国籍：');break;
                                        case 'entrydate':
                                        echo('入学日期：');break;
                                        case 'gradate':
                                        echo('毕业日期：');break;
                                    }
                                    echo($k_k);
                                }
                                ?>
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
                            <li>查询结果</li>
                        </ul>
                    </div>
                    <div class="listRight">
                        
                    </div>
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
                    <div id="score_tab">
	
        <?php sco_find_fun($k_type,$k_k);?>  
                </div>
            </div>
            
        
    </div>
</div> 



</body>
</html>

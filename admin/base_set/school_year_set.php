<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/lw_conn.php";
include "../lw_inc/list_name.php";
$term=$_POST['term'];
if($term!=''){
    $sql="update term_now set term_now='".$term."'";
    $query=mysql_query($sql);
    if($query){
        echo('<script>alert("设置完毕，你需要重新登录系统");window.location.href="../lw_exit_ok.php";</script>');
    }
}
$sql="select term_now from term_now";
$query=mysql_query($sql);
$re=mysql_fetch_assoc($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	学年设置
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
                        学年设置</div>
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
                            <li>学年设置</li>
                        </ul>
                    </div>
                    <div class="listRight">
                        
                    </div>
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
                    <div id="score_tab">
	<form action="" method="post">
        <table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">
         <tr class='MeNewTDLine'>
             
              <td align="center" class="SkyTDTopLine" width="100"> 学期 </td>
              <td class="SkyTDLine" >
              <select name="term">
              <?php list_term_sel($re['term_now']);?>
              </select>
            </tr>
            </table>
             </div>
            </div>
          <div class="divSave">
                    <input type="submit" id="btnSubmit" value="设置" class="SkyButtonFocus" onclick="" />
          </div>  
     </form>   
</div>
   


</form>
</body>
</html>

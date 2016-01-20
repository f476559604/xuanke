<?php
header("Content-type:text/html;charset=utf-8");  
include "../lw_inc/lw_conn.php";
$sql="select choose_allow from term_now";
$query=mysql_query($sql);
$r3='';
$r2='';
$r1='checked="checked"'; 
$re=mysql_fetch_row($query);
if($re[0]=='1'){
    $r2='checked="checked"'; 
    $r1='';
}
else if($re[0]=='2'){
    $r3='checked="checked"';
    $r1='';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head id="Head1" >

<title>用户管理</title>

<!--lw-->


<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />

</head>

<body>

<form id="Form1" action="xuanke_set_do.php" method="post">

      <div id="tbMain">

        <div class="divTbg">

          <div class="divTbgL"></div>

          <div class="divTbgInfo">

            <div class="divTbgTitle">选课设置</div>

          </div>

        </div>

        <div class="divTbgF"></div>

        <div class="divTNavBG" id="topURL">

          <ul id="topURLul">

            <li class="divURLed" id="div1">

              <div><img src="../style/green/images/mini_icons_046.gif" width="10" height="10" /> 基本设置</div>

            </li>

          </ul>

        </div>

        <div id="mypanel">

          <div class="divInfo" id="ddiv1">

            <div class="divInfoTop">

              <div class="listLeft">

                <ul>

                  <li>

                    <div><img src="../style/green/images/basic.gif"/></div>

                  </li>

                  <li>基本设置</li>

                </ul>

              </div>

            </div>

            <div class="divInfoContext">

              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" class="SkyTDLine">

                <tr class="MeNewTDLine">

                
                  <td align="center" class="SkyTDTopLine" width="100"> 允许选课 </td>

                  <td class="SkyTDLine">
                    <label> <input name="xuanke" <?php echo($r3);?>  type="radio" value="2" /> 教务 </label>
                  <label> <input name="xuanke" <?php echo($r2);?>  type="radio" value="1" /> 学生 </label>

                  <label> <input name="xuanke" <?php echo($r1);?>  type="radio" value="0" /> 关闭 </label>

                  

                  </td>

                </tr>    

                

                                              

              </table>

            </div>

          </div>

        </div>

        <div class="divSave">

          <input type="submit" class="SkyButtonFocus"  value="确认"/>


        </div>

      </div>

</form>

</body>

</html>


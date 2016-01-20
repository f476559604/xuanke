<?php
header("Content-type:text/html;charset=utf-8");  
include "../lw_inc/lw_conn.php";
$sql="select isallow from tea_re_grade limit 1";
$query=mysql_query($sql);
$r1='';
$r2='';
$r3='checked="checked"';
$re=mysql_fetch_row($query);
//echo $re[0];
if($re[0]=='education'){
$r1='checked="checked"'; 
$r2='';
$r3='';
}
else if($re[0]=='teacher'){
  $r1='';
  $r2='checked="checked"';
  $r3='';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head id="Head1" >

<title>录入成绩控制</title>

<!--lw-->


<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />

</head>

<body>

<form id="Form1" action="power_grade_ok.php" method="post">

      <div id="tbMain">

        <div class="divTbg">

          <div class="divTbgL"></div>

          <div class="divTbgInfo">

            <div class="divTbgTitle">录入成绩控制</div>

          </div>

        </div>

        <div class="divTbgF"></div>

        <div class="divTNavBG" id="topURL">

          <ul id="topURLul">

            <li class="divURLed" id="div1">

              <div><img src="../style/green/images/mini_icons_046.gif" width="10" height="10" /> 录入成绩控制</div>

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

                  <li>录入成绩控制</li>

                </ul>

              </div>

            </div>

            <div class="divInfoContext">

              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" class="SkyTDLine">

                <tr class="MeNewTDLine">

                
                  <td align="center" class="SkyTDTopLine" width="200"> 老师录入成绩控制 </td>

                  <td class="SkyTDLine">
                  <label> <input name="tea_isallow" <?php echo($r1);?>  type="radio" value="education" /> 教务允许 </label>
                    <label> <input name="tea_isallow" <?php echo($r2);?>  type="radio" value="teacher" /> 老师允许 </label>
                  <label> <input name="tea_isallow" <?php echo($r3);?>  type="radio" value="no" /> 关闭 </label>

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


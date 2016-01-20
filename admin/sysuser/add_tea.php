<?php
header("Content-type:text/html;charset=utf-8");
include "add_user_fun.php";
//$query="select COLUMN_COMMENT, COLUMN_NAME from information_schema.columns where table_schema='choose_lesson_system' and table_name='user_stu'";
//$cn_query=mysql_query($query);
//$result_1=mysql_fetch_row($query);
//echo($result_1[0]);
//print_r($result);

function lwreplace($lwchar){
    return(str_replace(' ','',$lwchar));
}
if(trim($_POST['user_name'])!=NULL){
        //echo($_POST['user_name']);
        //echo("<script>alert('锟斤拷锟斤拷晒锟絪s');</script>");
        //******************************锟斤拷锟斤拷锟斤拷一些锟斤拷锟斤拷没锟叫革拷锟斤拷锟睫革拷权锟斤拷*****锟斤拷锟斤拷说学院
        $tea_id=lwreplace(trim($_POST['tea_id']));
        $tea_pass=$tea_id;
        //$tea_pass=trim($_POST['tea_pass']);
        $user_name=trim($_POST['user_name']);
        $tea_sex=trim($_POST['tea_sex']);
        $tea_sch=trim($_POST['tea_sch']);
        
        $jud=add_tea_user($tea_id,$tea_sch,$tea_pass,$user_name,$tea_sex);
        if($jud){
        echo('<script>alert("锟斤拷锟接成癸拷")</script>');
    }
        //$sql="update `user_stu` set ch_name='$user_name', en_name='$en_name', stu_sex='$stu_sex', stu_maj='$stu_maj', stu_gra='$stu_gra', stu_clas='$stu_clas', stu_bir='$stu_bir', passport_id='$passport_id', stu_nation='$stu_nation', stu_address1='$stu_address1', stu_address2='$stu_address2', contact_way='$contact_way', fri_contact_way='$fri_contact_way' where stu_id='201063502140'"; 

        
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>锟矫伙拷锟斤拷锟斤拷</title>

<!--lw-->

<script language="javascript" src="/admin/js/SystemPage.js" type="text/jscript"></script>
<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
</head>

<body onload="win_onLoad();">
<form id="Form1" action="" method="post">
  <div id="tbMain">
    <div class="divTbg">
      <div class="divTbgL"></div>
      <div class="divTbgInfo">
        <div class="divTbgTitle">锟矫伙拷锟斤拷锟斤拷</div>
      </div>
    </div>
    <div class="divTbgF"></div>
    <div class="divTNavBG" id="topURL">
      <ul id="topURLul">
        <li class="divURLed" id="div1">
          <div><img src="../style/green/images/mini_icons_046.gif" width="10" height="10" /> 锟斤拷锟斤拷锟斤拷息</div>
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
              <li>锟斤拷锟斤拷锟斤拷息</li>
            </ul>
          </div>
        </div>
        <div class="divInfoContext">
          <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" class="SkyTDLine">
          <tr class="MeNewTDLine">
              <td align="center" class="SkyTDTopLine" width="100"> 锟斤拷锟斤拷学院 </td>
              <td class="SkyTDLine"><select name='tea_sch'>
                  <?php sel_option('学院');?>
              </select><span class="red_note">&nbsp;*</span></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="MeNewTDLine">
              <td align="center" class="SkyTDTopLine" width="100"> 锟绞猴拷 </td>
              <td class="SkyTDLine"><input type="text" name="tea_id"/><span class="red_note">&nbsp;*</span></td>
              <!--<td align="center" class="SkyTDTopLine" width="100"> 锟斤拷锟斤拷 </td>
              <td class="SkyTDLine">
                <input type="password" name="tea_pass"  /><span class="red_note">&nbsp;*</span>
              </td>-->
            </tr>
            <tr class="MeNewTDLine">
              <td align="center" class="SkyTDTopLine" width="100"> 锟斤拷锟斤拷 </td>
              <td class="SkyTDLine"><input type="text" name="user_name"  /><span class="red_note">&nbsp;*</span></td>
              <td align="center" class="SkyTDTopLine" width="100"> 锟皆憋拷 </td>
              <td class="SkyTDLine"><label>
                  <input name="tea_sex"  type="radio" value="锟斤拷" />
                  锟斤拷</label>
                <label>
                  <input name="tea_sex" type="radio" value="女" />
              女</label></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="divSave">
      <input type="submit" class="SkyButtonFocus"  value="锟斤拷锟斤拷"/>
      <input type="button"  class="SkyButtonFocus" value="取锟斤拷" />
    </div>
  </div>
</form>
</body>
</html>

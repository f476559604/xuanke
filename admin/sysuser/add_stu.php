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
        $stu_id=lwreplace(trim($_POST['stu_id']));
        //$stu_pass=trim($_POST['stu_pass']);
        $stu_pass=$stu_id;
        $user_name=trim($_POST['user_name']);
        $en_name=trim($_POST['en_name']);
        $stu_sex=trim($_POST['stu_sex']);
        $stu_sch=trim($_POST['stu_sch']);
        $stu_maj=trim($_POST['stu_maj']);
        $stu_gra=trim($_POST['stu_gra']);
        $stu_clas=trim($_POST['stu_clas']);
        $stu_clas=$stu_gra.$stu_clas;
        $stu_bir=trim($_POST['stu_bir']);
        $passport_id=trim($_POST['passport_id']);
        $stu_nation=trim($_POST['stu_nation']);
        $stu_address1=trim($_POST['stu_address1']);
        $stu_address2=trim($_POST['stu_address2']);
        $contact_way=trim($_POST['contact_way']);
        $fri_contact_way=trim($_POST['fri_contact_way']);
        $entrydate=trim($_POST['entrydate']);
        $gradate=trim($_POST['gradate']);
        $nature=trim($_POST['nature']);
        $comment=trim($_POST['comment']);
        if(is_exist($stu_id)!=0){
            exit('学锟斤拷锟截革拷锟斤拷锟斤拷锟斤拷锟斤拷锟斤拷锟斤拷');
        }
        $jud=add_stu_user($stu_id,$stu_pass,$user_name,$en_name,$stu_sex,$stu_sch,$stu_maj,$stu_gra,$stu_clas,$stu_bir,$passport_id,$stu_nation,$stu_address1,$stu_address2,$contact_way,$fri_contact_way,$entrydate,$gradate,$nature,$comment);
        if($jud){
        echo('<script>alert("锟斤拷锟接成癸拷");window.location.href="add_stu.php"</script>');
        //echo('<script>alert("'.$stu_clas.'")</script>');
    }
    else{echo('<script>alert("锟斤拷锟斤拷失锟斤拷");</script>');}
        //$sql="update `user_stu` set ch_name='$user_name', en_name='$en_name', stu_sex='$stu_sex', stu_maj='$stu_maj', stu_gra='$stu_gra', stu_clas='$stu_clas', stu_bir='$stu_bir', passport_id='$passport_id', stu_nation='$stu_nation', stu_address1='$stu_address1', stu_address2='$stu_address2', contact_way='$contact_way', fri_contact_way='$fri_contact_way' where stu_id='201063502140'"; 

        
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>锟矫伙拷锟斤拷锟斤拷</title>

<!--lw-->

<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../My97DatePicker/WdatePicker.js" type="text/javascript"></script>
</head>

<body>
<form id="Form1" action="" method="post" onsubmit="return test(this)">
  <div id="tbMain">
    <div class="divTbg">
      <div class="divTbgL"></div>
      <div class="divTbgInfo">
        <div class="divTbgTitle">锟斤拷锟斤拷学锟斤拷</div>
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
            <tr class='MeNewTDLine'>
              <td align="center" class="SkyTDTopLine" width="100"> 学锟斤拷 </td>
              <td class="SkyTDLine" ><input type="text" name="stu_id"/><span class="red_note">&nbsp;*</span></td>
              <td></td>
              <td></td>
              <!--
              <td align="center" class="SkyTDTopLine" width="100"> 锟斤拷锟斤拷 </td>
              <td class="SkyTDLine" ><input type="password" name="stu_pass" /><span class="red_note">&nbsp;*</span></td>
                -->
            </tr>
            <tr class='MeNewTDLine'>
              <td align="center" class="SkyTDTopLine" width="100"> 锟斤拷锟斤拷锟斤拷 </td>
              <td class="SkyTDLine" ><input type="text" name="user_name"/><span class="red_note">&nbsp;*</span></td>
              <td align="center" class="SkyTDTopLine" width="100"> 英锟斤拷锟斤拷 </td>
              <td class="SkyTDLine" ><input type="text" name="en_name"/></td>
            </tr>
            <tr class='MeNewTDLine'>
              <td align="center" class="SkyTDTopLine" width="100"> 锟皆憋拷 </td>
              <td class="SkyTDLine" >
              &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="stu_sex" value="锟斤拷"/>&nbsp;锟斤拷
              &nbsp;&nbsp;<input type="radio" name="stu_sex" value="女"/>&nbsp;女</td>
              <td align="center" class="SkyTDTopLine" width="100"> 学院 </td>
              <td class="SkyTDLine" ><select name='stu_sch'>
                  <?php sel_option('学院');?>
              </select><span class="red_note">&nbsp;*</span></td>
            </tr>
            <tr class='MeNewTDLine'>
              <td align="center" class="SkyTDTopLine" width="100"> 专业 </td>
              <td class="SkyTDLine" ><select name='stu_maj'>
                   <?php sel_option('专业');?>
              </select><span class="red_note">&nbsp;*</span></td>
              <td align="center" class="SkyTDTopLine" width="100"> 锟疥级 </td>
              <td class="SkyTDLine" ><select name='stu_gra'>
              <option value="">--锟斤拷选锟斤拷--</option>
                   <?php sel_option('锟疥级');?>
              </select><span class="red_note">&nbsp;*</span></td>
            </tr>
            <tr class='MeNewTDLine'>
              <td align="center" class="SkyTDTopLine" width="100"> 锟洁级 </td>
              <td class="SkyTDLine" ><select name='stu_clas'>
              <option value="">--锟斤拷选锟斤拷--</option>
                   <?php sel_option('锟洁级');?>
              </select><span class="red_note">&nbsp;*</span></td>
              <td align="center" class="SkyTDTopLine" width="100"> 锟斤拷锟斤拷锟斤拷锟斤拷 </td>
              <td class="SkyTDLine" ><input type="text" name="stu_bir" onclick="WdatePicker({skin:'whyGreen',readOnly:true,dateFmt:'yyyy-MM-dd'});"/></td>
            </tr>
            <tr class='MeNewTDLine'>
              <td align="center" class="SkyTDTopLine" width="100"> 锟斤拷锟斤拷 </td>
              <td class="SkyTDLine" ><input type="text" name="passport_id"/></td>
              <td align="center" class="SkyTDTopLine" width="100"> 锟斤拷锟斤拷 </td>
              <td class="SkyTDLine" ><input type="text" name="stu_nation"/></td>
            </tr>
            <tr class='MeNewTDLine'>
              <td align="center" class="SkyTDTopLine" width="100"> 锟斤拷锟斤拷住址 </td>
              <td class="SkyTDLine" ><input type="text" name="stu_address1"/></td>
              <td align="center" class="SkyTDTopLine" width="100"> 锟斤拷台住址 </td>
              <td class="SkyTDLine" ><input type="text" name="stu_address2"/></td>
            </tr>
            <tr class='MeNewTDLine'>
              <td align="center" class="SkyTDTopLine" width="100"> 锟斤拷系锟斤拷式 </td>
              <td class="SkyTDLine" ><input type="text" name="contact_way"/></td>
              <td align="center" class="SkyTDTopLine" width="100"> 锟斤拷锟斤拷锟斤拷系锟斤拷式 </td>
              <td class="SkyTDLine" ><input type="text" name="fri_contact_way"/></td>
            </tr>
            <tr class='MeNewTDLine'>
              <td align="center" class="SkyTDTopLine" width="100"> 锟斤拷学锟斤拷锟斤拷 </td>
              <td class="SkyTDLine" ><input type="text" name="entrydate" onclick="WdatePicker({skin:'whyGreen',readOnly:true,dateFmt:'yyyy-MM-dd'});"/><span class="red_note">&nbsp;*</span></td>
              <td align="center" class="SkyTDTopLine" width="100"> 锟斤拷业锟斤拷锟斤拷 </td>
              <td class="SkyTDLine" ><input type="text" name="gradate" onclick="WdatePicker({skin:'whyGreen',readOnly:true,dateFmt:'yyyy-MM-dd'});"/></td>
            </tr>
            <tr class='MeNewTDLine'>
              <td align="center" class="SkyTDTopLine" width="100"> 锟斤拷锟斤拷 </td>
              
              
              <td class="SkyTDLine" ><input type="text" name="nature"/><span class="red_note">&nbsp;*</span></td>
              <td align="center" class="SkyTDTopLine" width="100"> 锟斤拷注 </td>
              <td class="SkyTDLine" ><input type="text" name="comment"/></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="divSave">
      <input type="submit" class="SkyButtonFocus"  value="锟斤拷锟斤拷" />
      <input type="button"  class="SkyButtonFocus" value="取锟斤拷" />
    </div>
  </div>
</form>
</body>
<script type="text/javascript">
function test(form){
  
  if(form.stu_id.value==""){
        alert("锟斤拷锟斤拷写学锟脚ｏ拷");
        return(false);
    }
    if(!(form.stu_sex[0].checked||form.stu_sex[1].checked)){
        alert("锟斤拷选锟斤拷锟皆憋拷!");
        return(false);
    }
    if(form.stu_gra.value==""){
        alert("锟斤拷选锟斤拷锟疥级锟斤拷");
        return(false);
    }
    if(form.stu_clas.value==""){
        alert("锟斤拷选锟斤拷嗉讹拷锟?);
        return(false);
    }
    if(form.user_name.value==""){
        alert("锟斤拷锟斤拷写锟斤拷锟斤拷锟斤拷");
        return(false);
    }
    if(form.entrydate.value==""){
        alert("锟斤拷锟斤拷写锟斤拷学锟斤拷锟节ｏ拷");
        return(false);
    }
    if(form.nature.value==""){
        alert("锟斤拷锟斤拷写锟斤拷锟绞ｏ拷");
        return(false);
    }
}
</script>
</html>



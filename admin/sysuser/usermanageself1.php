﻿<?php
header("Content-type:text/html;charset=utf-8"); 
include "../lw_inc/db_class.php";
session_start();
$user_id=$_GET['id'];
$utype=$_SESSION['type'];
if($user_id==''){
    $user_id=$_SESSION['userid'];//有问题，为什么user_id不行
}
//$query="select COLUMN_COMMENT, COLUMN_NAME from information_schema.columns where table_schema='choose_lesson_system' and table_name='user_stu'";
//$cn_query=mysql_query($query);
//$result_1=mysql_fetch_row($query);
//echo($result_1[0]);
//print_r($result);
if(trim($_POST['user_name'])!=NULL){
        //echo($_POST['user_name']);
        //echo("<script>alert('保存成功ss');</script>");
        //******************************这里有一些数据没有给予修改权限*****比如说学院
        $user_name=trim($_POST['user_name']);
        $en_name=trim($_POST['en_name']);
        $stu_sex=trim($_POST['stu_sex']);
        $stu_maj=trim($_POST['stu_maj']);
        $stu_gra=trim($_POST['stu_gra']);
        $stu_clas=trim($_POST['stu_clas']);
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
        $user_id=$_POST['user_id'];
        $stu_clas=$stu_gra.$stu_clas;
        //echo $stu_clas;
        //$sql="update `user_stu` set ch_name='$user_name', en_name='$en_name', stu_sex='$stu_sex', stu_maj='$stu_maj', stu_gra='$stu_gra', stu_clas='$stu_clas', stu_bir='$stu_bir', passport_id='$passport_id', stu_nation='$stu_nation', stu_address1='$stu_address1', stu_address2='$stu_address2', contact_way='$contact_way', fri_contact_way='$fri_contact_way' where stu_id='201063502140'"; 
        $query=$db->query("update `user_stu` set user_name='$user_name', en_name='$en_name', stu_sex='$stu_sex', stu_maj='$stu_maj', stu_gra='$stu_gra', stu_clas='$stu_clas', stu_bir='$stu_bir', passport_id='$passport_id', stu_nation='$stu_nation', stu_address1='$stu_address1', stu_address2='$stu_address2', contact_way='$contact_way', fri_contact_way='$fri_contact_way', entrydate='$entrydate', gradate='$gradate', nature='$nature', comment='$comment' where stu_id='$user_id'");      
        
        //echo("update `user_stu` set user_name='$user_name', en_name='$en_name', stu_sex='$stu_sex', stu_maj='$stu_maj', stu_gra='$stu_gra', stu_clas='$stu_clas', stu_bir='$stu_bir', passport_id='$passport_id', stu_nation='$stu_nation', stu_address1='$stu_address1', stu_address2='$stu_address2', contact_way='$contact_way', fri_contact_way='$fri_contact_way' where stu_id='$user_id'");//$query=mysql_query($sql);
        if($query){
            echo("<script>alert('保存成功');history.back(-1);</script>");
        }
        
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
<title>用户管理</title>
<!--lw-->
<script language="javascript" src="/admin/js/SystemPage.js" type="text/jscript"></script>
<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
</head>
<body onload="win_onLoad();">
<form id="Form1" action="usermanageself.php" method="post">
      <div id="tbMain">
        <div class="divTbg">
          <div class="divTbgL"></div>
          <div class="divTbgInfo">
            <div class="divTbgTitle">用户管理</div>
          </div>
        </div>
        <div class="divTbgF"></div>
        <div class="divTNavBG" id="topURL">
          <ul id="topURLul">
            <li class="divURLed" id="div1">
              <div><img src="../style/green/images/mini_icons_046.gif" width="10" height="10" /> 基本信息</div>
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
                  <li>基本信息</li>
                </ul>
              </div>
            </div>
            <div class="divInfoContext">
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" class="SkyTDLine">
                <?php
                    /**************这里实现功能是通过查询备注与循环输出得到的*********************/
                    /*根据特定id查询表中内容*/
                    $si_query=$db->query("select * from `user_stu` where stu_id='$user_id'");
                    //echo $_SESSION['qqaaaa'];
                    //echo $_SESSION['type'];
                    //echo $_SESSION['name'];
                    $stu_info=mysql_fetch_assoc($si_query);
                    /*查询表中各列备注*/
                    if($stu_info['stu_sex']=='男'){
                        $sel_0='checked="checked"';
                    }
                    else{
                        $sel_1='checked="checked"';
                    }
                    
                    echo('<tr class=\'MeNewTDLine\'>                  <td align="center" class="SkyTDTopLine" width="100"> 学号 </td>
                  <td class="SkyTDLine" >
                                  
                  <input type="text" name="stu_id" readonly=\'readonly\' value="'.$stu_info['stu_id'].'"/>
 
                </td>                  <td align="center" class="SkyTDTopLine" width="100"> 密码 </td>
                  <td class="SkyTDLine" >
                                   <a href="#" target="_self" onclick="changekey()"><input type="password" name="stu_pass" value="12345678" /></a>
                  
                 </td></tr><tr class=\'MeNewTDLine\'>                  <td align="center" class="SkyTDTopLine" width="100"> 中文名 </td>
                  <td class="SkyTDLine" >
                                  
                  <input type="text" name="user_name"  value="'.$stu_info['user_name'].'"/>
 
                </td>                  <td align="center" class="SkyTDTopLine" width="100"> 英文名 </td>
                  <td class="SkyTDLine" >
                                  
                  <input type="text" name="en_name"  value="'.$stu_info['en_name'].'"/>
 
                </td></tr><tr class=\'MeNewTDLine\'>     
                  <td align="center" class="SkyTDTopLine" width="100"> 性别 </td>
                  <td class="SkyTDLine" >
                                 
                  &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="stu_sex"  value="男" '.$sel_0.'/>&nbsp;男
                  &nbsp;&nbsp;<input type="radio" name="stu_sex"  value="女" '.$sel_1.'/>&nbsp;女
 
                </td>                  <td align="center" class="SkyTDTopLine" width="100"> 学院 </td>
                  <td class="SkyTDLine" >
                 <select name=\'stu_sch\'><option value="1">语言学系</option></select></td></tr><tr class=\'MeNewTDLine\'>                  <td align="center" class="SkyTDTopLine" width="100"> 专业 </td>
                  <td class="SkyTDLine" >
                 <select name=\'stu_maj\'><option value="101">汉语言</option></select></td>                  <td align="center" class="SkyTDTopLine" width="100"> 年级 </td>
                  <td class="SkyTDLine" >
                 <select name=\'stu_gra\'><option value="10101">一上</option><option value="10102">一中</option><option value="10103">一下</option><option value="10104">二上</option><option value="10105">二下</option><option value="10106">三上</option><option value="10107">三下</option><option value="10108">四上</option><option value="10109">四下</option><option value="10110">五上</option><option value="10111">五下</option><option value="10112">六上</option><option value="10113">六下</option></select></td></tr><tr class=\'MeNewTDLine\'>                  <td align="center" class="SkyTDTopLine" width="100"> 班级 </td>
                  <td class="SkyTDLine" >
                 <select name=\'stu_clas\'><option value="01">一班</option><option value="02">二班</option><option value="03">三班</option><option value="04">四班</option><option value="05">五班</option></select></td>                  <td align="center" class="SkyTDTopLine" width="100"> 出生年月 </td>
                  <td class="SkyTDLine" >
                                  
                  <input type="text" name="stu_bir"  value="'.$stu_info['stu_bir'].'"/>
 
                </td></tr><tr class=\'MeNewTDLine\'>                  <td align="center" class="SkyTDTopLine" width="100"> 护照 </td>
                  <td class="SkyTDLine" >
                                  
                  <input type="text" name="passport_id"  value="'.$stu_info['passport_id'].'"/>
 
                </td>                  <td align="center" class="SkyTDTopLine" width="100"> 国籍 </td>
                  <td class="SkyTDLine" >
                                  
                  <input type="text" name="stu_nation"  value="'.$stu_info['stu_nation'].'"/>
 
                </td></tr><tr class=\'MeNewTDLine\'>                  <td align="center" class="SkyTDTopLine" width="100"> 国外住址 </td>
                  <td class="SkyTDLine" >
                                  
                  <input type="text" name="stu_address1"  value="'.$stu_info['stu_address1'].'"/>
 
                </td>                  <td align="center" class="SkyTDTopLine" width="100"> 烟台住址 </td>
                  <td class="SkyTDLine" >
                                  
                  <input type="text" name="stu_address2"  value="'.$stu_info['stu_address2'].'"/>
 
                </td></tr>
                <tr class=\'MeNewTDLine\'> 
                                 <td align="center" class="SkyTDTopLine" width="100"> 联系方式 </td>
                  <td class="SkyTDLine" >
                                  
                  <input type="text" name="contact_way"  value="'.$stu_info['contact_way'].'"/>
 
                </td>                  <td align="center" class="SkyTDTopLine" width="100"> 朋友联系方式 </td>
                  <td class="SkyTDLine" >
                                  
                  <input type="text" name="fri_contact_way"  value="'.$stu_info['fri_contact_way'].'"/>
 
                </td></tr>
                <tr class=\'MeNewTDLine\'> 
                                 <td align="center" class="SkyTDTopLine" width="100"> 入学日期 </td>
                  <td class="SkyTDLine" >
                                  
                  <input type="text" name="entrydate"  value="'.$stu_info['entrydate'].'"/>
 
                </td>                  <td align="center" class="SkyTDTopLine" width="100"> 毕业日期 </td>
                  <td class="SkyTDLine" >
                                  
                  <input type="text" name="gradate"  value="'.$stu_info['gradate'].'"/>
 
                </td></tr>
                <tr class=\'MeNewTDLine\'> 
                                 <td align="center" class="SkyTDTopLine" width="100"> 性质 </td>
                  <td class="SkyTDLine" >
                                  
                  <input type="text" name="nature"  value="'.$stu_info['nature'].'"/>
 
                </td>                  <td align="center" class="SkyTDTopLine" width="100"> 备注 </td>
                  <td class="SkyTDLine" >
                                  
                  <input type="text" name="comment"  value="'.$stu_info['comment'].'"/>
 
                </td></tr>
                ');
                $jsgra=(int)substr($stu_info['stu_clas'],3,2);
                $jsclas=substr($stu_info['stu_clas'],6,1);
                //echo $jsgra;
                    ?>
                
                                             
              </table>
            </div>
          </div>
        </div>
        <?php
        if($utype!='student')
        {
        echo ('<div class="divSave">
           <input type="hidden" name="user_id" value="'.$user_id.'" />
          <input type="submit" class="SkyButtonFocus"  value="保存"/>
          <input type="button"  class="SkyButtonFocus" value="取消" />
        </div>');
        }
        ?>
      </div>
      
</form>
</body>
</html>
<script type="text/javascript">
    
    document.getElementsByName('stu_gra')[0].options[<?php echo($jsgra-1);?>].selected=true;
    document.getElementsByName('stu_clas')[0].options[<?php echo($jsclas-1);?>].selected=true;
    function changekey(){
        if(!confirm('请问你要修改密码吗？'))
        {
            window.event.returnValue = false;
        }
        else{
            window.location.href="secret_change.php";
        }
         //alert("你要修改密码吗？");
    }


    
</script>
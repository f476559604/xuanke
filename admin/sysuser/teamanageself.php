<?php
header("Content-type:text/html;charset=utf-8");  
include "../lw_inc/lw_conn.php";
session_start();
$id=$_GET['id'];
if($id==''){
    $id=$_SESSION['user_id'];
}
$sql="select * from `user_tea` where tea_id='$id'";
$query=mysql_query($sql);
$result=mysql_fetch_assoc($query);
//print_r($result);
if(trim($_POST['user_name'])!=NULL){
        $user_name=trim($_POST['user_name']);
        $tea_sex=trim($_POST['tea_sex']);
        $id=trim($_POST['tea_id']);
        $sql="update `user_tea` set user_name='$user_name', tea_sex='$tea_sex' where tea_id='$id'";
        //echo $sql;
        $query=mysql_query($sql);
        if($query){
            echo("<script>alert('保存成功');history.back(-1);</script>");
        }
        
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" >
<title>用户管理</title>
<!--lw-->
<script language="javascript" src="/admin/js/SystemPage.js" type="text/jscript"></script>
<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
</head>
<body onload="win_onLoad();">
<form id="Form1" action="teamanageself.php" method="post">
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
                <tr class="MeNewTDLine">
                  <td align="center" class="SkyTDTopLine" width="100"> 帐号 </td>
                  <td class="SkyTDLine">
                  <input type="text" name="tea_id" value="<?php echo $result['tea_id'];?>" readonly="ture" />
                    </td>
                  <td align="center" class="SkyTDTopLine" width="100"> 密码 </td>
                  <td class="SkyTDLine">
                 <a href="#" onclick="changekey()" target="_blank"><input type="password" name="tea_pass" value="12345678"  /></a>
                  </td>
                </tr>
                 <tr class="MeNewTDLine">
                  <td align="center" class="SkyTDTopLine" width="100"> 姓名 </td>
                  <td class="SkyTDLine">
                   <input type="text" name="user_name" value="<?php echo $result['user_name'];?>"  />
                   </td>
                  <td align="center" class="SkyTDTopLine" width="100"> 性别 </td>
                  <td class="SkyTDLine">
                  <label><input name="tea_sex" <?php if($result['tea_sex']=='男'){ echo 'checked="checked"';}?> type="radio" value="男" />男</label>
                  <label><input name="tea_sex"  <?php if($result['tea_sex']=='女'){ echo 'checked="checked"';}?> type="radio" value="女" />女</label>
                  
                  </td>
                </tr>    
                
                                              
              </table>
            </div>
          </div>
        </div>
        <div class="divSave">
          <input type="submit" class="SkyButtonFocus"  value="保存"/>
          <input type="button"  class="SkyButtonFocus" value="取消" />
        </div>
      </div>
</form>
</body>
</html>
<script type="text/javascript">
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
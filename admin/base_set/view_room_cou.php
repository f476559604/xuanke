<?php
header("Content-type:text/html;charset=utf-8");
session_start();
$nroom=$_GET['nroom'];
$term=$_SESSION['term_now'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>
	锟洁级锟轿程憋拷
</title><link href="../style/green/style.css" rel="stylesheet" type="text/css" />

<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
   
</head>
<body>
    <form name="form1" method="post" action="" id="form1">


    <div id="UpdatePanel1">

</div>
    <div id="UpdateProgress1" style="display:none;">
	
            <div id="divLoading">
                <img src="/admin/style/default/images/loading.gif" />
            </div>
        
</div>
    <div id="tbMain">
        <div class="divTbg">
            <div class="divTbgL">
            </div>
            <div class="divTbgInfo">
                <div class="divTbgTitle">
                     锟轿程憋拷</div>
            </div>
        </div>
        <div class="divTbgF">
        </div>
        
        <div id="mypanel">
            <div class="divInfoContext">
                <div class="divInfo">
                    <div class="divInfoblack">
                        <div class="divInfoTopList">
                            <div class="listLeft">
                                <div class="navtitle">
                                    <?php echo($nroom);?>锟轿程憋拷</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divInfo">
                    <table width="100%" border="0" cellpadding="0" cellspacing="1" class="tablist" id="mainlist">
                        <tr class="tablisttr">
                            <td width="100" class="tablisttitle">
                                锟斤拷锟斤拷学锟斤拷
                            </td>
                            <td class="tabmanagertr" align="left" style="width:40%">
                                <?php echo($_SESSION['term_now']);?>
                            </td>
                            <td width="100" class="tablisttitle">
                               <!-- 锟斤拷锟斤拷锟斤拷锟斤拷-->
                            </td>
                            <td class="tabmanagertr" align="left" style="width:40%">
                               <!-- <p id="searchSubmit">
                                <input type="submit" name="btnSearch" value="锟斤拷锟斤拷锟斤拷锟斤拷" id="btnSearch" class="SkyButtonFocus" style="width:78px;" />
                                </p>-->
                            </td>
                        </tr>
                        <tr class="tablisttr">
                            <td colspan="4">
                                <div style="width: 100%;">
                                 <?php
                                 include "room_cou_tab.php";
                                 room_cou_tab('room_course');
                                 ?>   
                                </div>
                            </td>
                        </tr>
                        
                        
                    </table>
                    
                </div>
            </div>
        </div>
    </div>

    


</form>
</body>
</html>

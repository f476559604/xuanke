<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/lw_conn.php";
include "room_list.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head id="Head1"><title>

	教室列表

</title>



<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../js/jquery/jquery-1.8.2.js" type="text/jscript"></script>

</head>



<body>

   <div id="UpdatePanel1">
<form name="obj" method="post" action="add_obj_room.php">
	

            <div class="divTbg">

                <div class="divTbgL">

                </div>

                <div class="divTbgInfo">

                    <div class="divTbgTitle">

                        教室列表</div>

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

                            <li>全部教室</li>

                        </ul>

                    </div>

                    <div class="listRight">

                        <ul>

                            <li class="listRightwidth">

                                <a id="LnkBExcel" href="javascript:__doPostBack('LnkBExcel','')">导出</a>

                            </li>

                        </ul>

                    </div>

                </div>

                <div class="divInfoContext">

                    <div style="font: 2px; line-height: 2px;">

                        &nbsp;</div>

                    <div id="score_tab">
                        <table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">
	                   <?php room_list($type);?>
                    
                    </table>
                </div>

            </div>
            <div class="divSave">
                            <input type="button" id="btnSubmit" value="增加" class="SkyButtonFocus" onclick="add_obj()" />
                             <input type="submit" id="btnSubmit" value="确认" class="SkyButtonFocus" onclick="" />
            </div>  
    </form>

        

</div>


</body>

</html>
<script lang="javascript" type="text/javascript">
    function add_obj(){
        $('table').append('<tr class="SkyTDLine" align="center"><td><input name="insert_id[]" type="text" value="" /></td><td><input name="insert_name[]" type="text" value="" /></td><td></td><td></td></tr>');
    }
</script>


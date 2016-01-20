<?php
header("Content-type:text/html;charset=utf-8");
//include 'stu_score_list.php';
include "../lw_inc/lw_conn.php";
include "../lw_inc/judge.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">

<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../js/jquery/jquery-1.8.2.js" type="text/jscript"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
    $('#button_change').click( function(){
        get_val();
    })
        
        });

function get_val(){
     var bb1=$('input[name="key1"]').val();
    // alert(bb);
        $.post("tea_change_data.php",{"bb1":bb1},function(data){
            $("#change_tab").html(data);
        });
}

</script>
</head>

<body>
   <div id="UpdatePanel1">
	
            <div class="divTbg">
                <div class="divTbgL">
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle">
                        修改老师密码</div>
                </div>
            </div>
            <div class="divTbgF">
            </div>
            <div class="divInfo">
                <div class="divInfoTop">
                    <div class="listLeft">
                        <ul>
                            <li>
                                <div>
                                    <img src="../style/green/images/search.gif" /></div>
                            </li>
                            <li>请选择</li>
                        </ul>
                    </div>
                </div>
                <div class="divInfoContext">
                    <table width="100%" border="0" cellpadding="0" cellspacing="1" class="SkyTableLine">
                        <tr>
                            
                            <td class="SkyTDInfo">
                                <div class="clearsearch">
                                    <p>
                                        <label for="drpSkyTID">
                                            查找方式：</label>
                                            <select name="type1" onchange="" id="type1">
                                            <option selected="selected" value="stu_id1">编号</option>
                                            </select> 
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <label for="drpSkyTID">
                                            关键字：</label>
                                            <input name="key1" type="text" />
                                            <input type="button" id="button_change"  class="SkyButtonFocus" value="查找"/>
                                      
                                    </p>
                                    
                                </div>
                            </td>
                        </tr>
                       
                    </table>
                </div>
            </div>
            <div class="divInfo">
                <div class="divInfoTopList">
                    <div class="listLeft">
                        <ul>
                            <li>
                                <div>
                                    <img src="../style/green/images/index.gif" /></div>
                            </li>
                            <li>老师列表</li>
                        </ul>
                    </div>
                    <div class="listRight">
                       
                    </div>
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
                    <div id="change_tab">
	               </div>
                    
                </div>
            </div>
            
        
</div>
   


</body>
</html>

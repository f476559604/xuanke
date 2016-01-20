<?php
header("Content-type:text/html;charset=utf-8");
//include 'stu_score_list.php';
include "../lw_inc/lw_conn.php";
session_start();
$term1=$_SESSION['term_now'];
$id1=$_SESSION['user_id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	成绩查询
</title>

<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../js/jquery/jquery-1.8.2.js" type="text/jscript"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
        $('select[name="termnow"]').change(function(){
                get_term_now();
            })
           get_term_now();
           //alert('sdfd');
        });

function get_term_now(){
    //alert('sdfd');
        var bb=$('select[name="termnow"] option:selected').val();
        $.post("stu_score_term.php",{"bb":bb},function(data){
            $("#score_tab").html(data);
        });
        
    }
</script>
</head>

<body>
    <form name="Form1" method="post" id="Form1">
   <div id="UpdatePanel1">
	
            <div class="divTbg">
                <div class="divTbgL">
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle">
                        学期成绩</div>
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
                            <li>条件选择</li>
                        </ul>
                    </div>
                </div>
                <div class="divInfoContext">
                    <table width="100%" border="0" cellpadding="0" cellspacing="1" class="SkyTableLine">
                        <tr>
                            <td width="100" align="center" class="SkyTDTitle">
                                学期选择
                            </td>
                            <td class="SkyTDInfo">
                                <div class="clearsearch">
                                    <p>
                                        <label for="drpSkyTID">
                                            开课学期：</label>
                                    <?php
                                    $sql="select distinct cou_term from cou_choose where cou_choose_stu='".$id1."'";
                                    $query=mysql_query($sql);
                                    $html='<select name="termnow" onchange="" id="termnow">';
                                    //echo $term1;
                                    while($re=mysql_fetch_row($query)){
                                        if($re[0]==$term1){
                                            $selected='selected="selected"';
                                        }
                                        else{$selected='';}
                                        $html.='<option '.$selected.' value="'.$re[0].'">'.$re[0].'</option>';
                                        
                                    }
                                    $html.='</select>';
                                    echo $html;
                                    ?>
                                      
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
                            <li>成绩列表</li>
                        </ul>
                    </div>
                    <div class="listRight">
                       
                    </div>
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
                    <div id="score_tab">
	               </div>
                    
                </div>
            </div>
            
        
</div>
   


</form>
</body>
</html>

<?php
    header("Content-type:text/html;charset=utf-8");
    include "../lw_inc/lw_conn.php";
    session_start();
    include "sco_edit_fun.php";
    
    $lesson=$_GET['lesson'];
    $term_now=$_SESSION['term_now'];

    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	成绩查询
</title>

<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../js/jquery/jquery-1.8.2.js"></script>
<script type="text/javascript" lang="javascript" src="sco_edit_js.js"></script>
</head>

<body>
    <form name="Form1" method="post"id="Form1">
   <div id="UpdatePanel1">
	
            <div class="divTbg">
                <div class="divTbgL">
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle">
                        全部成绩</div>
                </div>
            </div>
            <div class="divTbgF">
            </div>
            <!-- ******-->
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
                                比例设置
                            </td>
                            <td class="SkyTDInfo">
                                <div id="searchBox" class="clearsearch">
                                    <p>
                                        <label for="drpSkyTID">
                                            平时成绩：</label>
                                        <input style="width: 50px;" type="text" name="f1" value="0" />
                                    </p>
                                   <p>
                                        <label for="drpSkyTID">
                                            期中成绩：</label>
                                        <input style="width: 50px;" type="text" name="f2" value="0" />
                                    </p>
                                    <p>
                                        <label for="drpSkyTID">
                                            期末成绩：</label>
                                        <input style="width: 50px;" type="text" name="f3" value="1" />
                                    </p>
                                    <p>
                                        <label for="drpSkyTID">
                                            1-9考勤：</label>
                                        <input style="width: 50px;" type="text" name="f4" value="0" />
                                    </p>
                                    <p>
                                        <label for="drpSkyTID">
                                            10-18考勤：</label>
                                        <input style="width: 50px;" type="text" name="f5" value="0" />
                                    </p>
                                    
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <!--*************-->
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
                   
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
                    <div id="score_tab">
	
        <?php sco_edit($lesson,$term_now);?>
	               </div>
                    
                </div>
            </div>
            
            <div class="divSave">

                <input type="button" id="btnSubmit" value="保存" class="SkyButtonFocus" onclick="sumbit_score()" />

                <input type="button" id="btnSubmitClose" class="SkyButtonFocus" onclick="" value="取消" />

            </div>

</div>
   


</form>
</body>
</html>

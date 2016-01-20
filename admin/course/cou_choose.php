<?php
header("Content-type:text/html;charset=utf-8"); 
include "../lw_inc/db_class.php";

session_start();
include "cou_list.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" >
    <title>选课管理</title>

    <script language="javascript" src="../js/jquery/jquery-1.8.2.js" type="text/jscript"></script>

    <script language="javascript" type="text/javascript">
       
        $(document).ready(function() {
           //chkState();
           $('#allchoose1').toggle(function(){
                $("input[name='name_name[]']").attr("checked",true);
            
           },function(){
                $("input[name='name_name[]']").attr("checked",false);
           });
        });
        
        
    </script>





    <link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
</head>
<body>
            <div class="divTbg">
                <div class="divTbgL">
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle">
                        课程选择</div>
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
                            <li>基本信息</li>
                        </ul>
                    </div>
                </div>
                <div class="divInfoContext">
                    <table width="100%" border="0" cellpadding="0" cellspacing="1" class="SkyTableLine">
                        <tr>
                            <td width="100px" align="center" class="SkyTDTitle">
                                基本信息
                            </td>
                            <td class="SkyTDInfo">
                                <div id="searchBox" class="clearsearch">
                                     <p>
                                        <label for="drpSkyTID">
                                            开课学期：</label>
                                        <input type="text" readonly="true" value="<?php echo($_SESSION['term_now']);?>"/>
                                    </p>
                                    <p>
                                        <label for="drpSkyTID">
                                            开课学院：</label>
                                        <input type="text" readonly="true" value="<?php echo($_SESSION['sch_inf']['stu_sch']);?>"/>
                                    </p>
                                    <p>
                                        <label for="drpSkyDID">
                                            开课专业：</label>
                                        <input type="text" readonly="true" value="<?php echo($_SESSION['sch_inf']['stu_maj']);?>"/>
                                    </p>
                                    <p>
                                        <label for="drpSkyPID">
                                            开课年级：</label>
                                        <input type="text" readonly="true" value="<?php echo($_SESSION['sch_inf']['stu_gra']);?>"/>
                                    </p>
                                    <p>
                                        <label for="drpSkyCID">
                                            开课班级：</label>
                                        <input type="text" readonly="true" value="<?php echo($_SESSION['sch_inf']['stu_clas']);?>"/>
                                    </p>
                                    
                                    
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
<form id="Form1" method="post" action="cou_choose_insert.php">    
            <div class="divInfo">
                <div class="divInfoTopList">
                    <div class="listLeft">
                        <ul>
                            <li>
                                <div>
                                    <img src="../style/green/images/index.gif" /></div>
                            </li>
                            <li>
                                课程列表</li>
                        </ul>
                    </div>
                    <div class="listRight">
                        <ul>
                            <li>
                               
                            </li>
                            <li class="listRightwidth">
                                <label for="checkSelect" id="allchoose1">
                                    全选</label>
                            </li>
                            <!--
                            <li>
                                <div>
                                    <img src="../style/default/tab/22.gif" width="14" height="14" /></div>
                            </li>
                            <li class="listRightwidth">
                                <a id="LnkBAdd" disabled="disabled">新增</a>
                            </li>
                            <li>
                                <div>
                                    <img src="../style/default/tab/33.gif" width="14" height="14" /></div>
                            </li>
                            <li class="listRightwidth">
                                <a id="LnkBModify" disabled="disabled">修改</a>
                            </li>
                            <li>
                                <div>
                                    <img src="../style/default/tab/11.gif" width="14" height="14" />
                                </div>
                            </li>
                            <li class="listRightwidth">
                                <a id="LnkBDelete" disabled="disabled">删除</a>
                            </li>
                            <li>
                                <div>
                                    <img src="../style/default/tab/44.gif" width="14" height="14" /></div>
                            </li>
                            <li class="listRightwidth">
                                <a id="LnkBExcel" href="javascript:__doPostBack('LnkBExcel','')">导出</a>
                            </li>
                            -->
                        </ul>
                    </div>
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
 
                    <table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">
                        
                        <?php
                            cou_list_display('cou_app_record');
                        ?>
                    </table>
                    
                </div>
            </div>
            <div class="divSave">

                <input type="submit" name="submit" id="btnSubmit" value="确认" class="SkyButtonFocus"/>
            </div>
    </form>
</body>
</html>

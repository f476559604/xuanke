<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/lw_conn.php";
$obj_id=$_GET['obj_id'];
$new_id=$_POST['new_id'];
//echo $new_id;
$new_name=$_POST['new_name'];
//echo $new_name;
if($new_id!=''&&$new_name!=''){
    //echo 'sdf';
    $sql="update tea_room set name='".$new_name."' where id='".$new_id."'";
    //echo $sql;
    $query=mysql_query($sql);
    if($query){
        echo('<script lang="javascript">alert("更新成功")</script>');
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head id="Head1"><title>

	教室编辑

</title>



<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />

</head>



<body>

    <form name="Form1" method="post" id="Form1" action="">

   <div id="UpdatePanel1">

	

            <div class="divTbg">

                <div class="divTbgL">

                </div>

                <div class="divTbgInfo">

                    <div class="divTbgTitle">

                        教室编辑</div>

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

                            <li>教室编辑</li>

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
<form action="" method="post">
                <div class="divInfoContext">

                    <div style="font: 2px; line-height: 2px;">

                        &nbsp;</div>

                    <div id="score_tab">
                    
                    <?php
                    $sql="select id,name from tea_room where id='".$obj_id."'";
                    //echo $sql;
                    $query=mysql_query($sql);
                    $re=mysql_fetch_assoc($query);
                    $html='<table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">';
                    $html.='<tr class="SkyTDTopLine" align="center">
                              <th scope="col">编号</th>
                              <th scope="col">名称</th>
                              </tr>';
                    $html.='<tr class="SkyTDLine" align="center">';
                    $html.='<td><input name="new_id" readonly type="text" value="'.$re['id'].'"/></td><td><input name="new_name" type="text" value="'.$re['name'].'"/></td>';    
                    $html.='</tr></table>';
                    echo($html);
                    ?>
	               
                </div>

            </div>
            <div class="divSave">
                             <input type="submit" id="btnSubmit" value="确认" class="SkyButtonFocus"/>
            </div>  
            
</form>
        

</div>

   





</form>

</body>

</html>


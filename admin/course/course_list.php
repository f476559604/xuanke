<?php
/**
 * @author 刘炜
 * @copyright 2013
 *
 *与cou_list.php不一样，这是查看，那是编缉 
 */
header("Content-type:text/html;charset=utf-8");  
include_once "../lw_inc/lw_conn.php";
session_start();
$term=$_SESSION['term_now'];
/*
//得到当前是第几页  
$pageCurrent=$_GET["p"]; 

//每页显示的条数  

$page_size=20;  
$p1=$pageCurrent-1;
if($p1>=0){
    $p=$p1*$page_size;
}
else if($p==''){
    $p=0;
}*/
include_once "course_list_fun.php";
include "../lw_inc/obj_name.php";
/*
require_once "../lw_inc/SubPages.php";


//总条目数  
if($aass==''){
  $nums=querynum('cou_app_record');
  $aass=1;
}
//每次显示的页数  

  $sub_pages=3;  


  //if(!$pageCurrent) $pageCurrent=1;  

     
*/
  


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	全部课程
</title>

<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery/jquery-1.8.2.js"></script>
<style type="text/css">
table{table-layout:fixed;}
table tr th:nth-child(3){
    width:200px;
    white-space:nowrap;overflow:hidden;

}
table tr td:nth-child(3){
    width:200px;
    white-space:nowrap;overflow:auto;

}
table tr td:nth-child(6){
    white-space:nowrap;overflow:auto;

}


</style>
</head>

<body>
    <form name="Form1" method="post"id="Form1">
   <div id="UpdatePanel1">
	
            <div class="divTbg">
                <div class="divTbgL">
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle">
                        全部课程</div>
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
                            <li>课程列表</li>
                        </ul>
                    </div>
                    <div class="listRight">
                        <!--<ul>
                            <li class="listRightwidth">
                                <a id="LnkBExcel" href="javascript:__doPostBack('LnkBExcel','')">导出</a>
                            </li>
                        </ul>-->
                    </div>
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
                    <div>
	                   <?php cou_list();?>
                    </div>
                    <div style="text-align: right;">
                        <?php //$subPages=new SubPages($page_size,$nums,$pageCurrent,$sub_pages,"course_list.php?p=",2);  ?>
                   </div>

            </div>
            
        
</div>
   


</form>
<?php obj_name_js1();?>
<script type="text/javascript">
//alert('ww');
/*
$(document).ready(function(){
    
    $("tr").each(function(){
        var ww=$(this).find("td:eq(2)").html();
        if(typeof  ww == 'undefined'){
        //return  alert('XXXX 没有定义');
        }
        else{
            ww=ww.replace("1010101","一上1");
		ww=ww.replace("1020101","二班");
		ww=ww.replace("1010102","一上2");
		ww=ww.replace("1010201","一中1");
		ww=ww.replace("1010202","一中2");
		ww=ww.replace("1010301","一下1");
		ww=ww.replace("1010302","一下2");
		ww=ww.replace("1010401","二上1");
		ww=ww.replace("1010402","二上2");
		ww=ww.replace("1010501","二下1");
		ww=ww.replace("1010502","二下2");
		ww=ww.replace("1010601","三上1");
		ww=ww.replace("1010602","三上2");
		ww=ww.replace("1010701","三下1");
		ww=ww.replace("1010801","四上1");
		ww=ww.replace("1010702","三下2");
		ww=ww.replace("1010802","四上2");
		ww=ww.replace("1010901","四下1");
		ww=ww.replace("1010902","四下2");
		ww=ww.replace("1010103","一上3");
		ww=ww.replace("1011001","五上1");
		ww=ww.replace("1011002","五上2");
		ww=ww.replace("1011102","五下2");
		ww=ww.replace("1011101","五下1");
		$(this).find("td:eq(2)").html(ww) 
            
        }
        //ww=ww.replace("1010101","一上1");
		
        //console.log(ww);
       //alert(ww);
	});
    }); */   
</script>
</body>
</html>

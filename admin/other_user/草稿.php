<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/db_class.php";
include "scoview_tab_fun.php";
include "../lw_inc/obj_name.php";
$num=$_GET['iidd1'];
$sql="select stu_gra,user_name,stu_sex,entrydate,gradate from user_stu where stu_id='$num' limit 1";
$query=mysql_query($sql);
$re=mysql_fetch_assoc($query);
$class=obj_name($re['stu_gra']);
$filenm=$re['user_name'].'鎴愮哗鍗?xls';
$year=date('Y');
$term=array();
$sql="select distinct cou_term from cou_choose where cou_choose_stu='$num'";
$query=mysql_query($sql);
while($ret=mysql_fetch_row($query)){
    array_push($term,$ret[0]);
    //echo('<p>'.$ret[0]);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
    鐑熷彴澶у鐣欏鐢熸垚缁╄〃
</title>

<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
<style media="print" type="text/css">   
.noprint{visibility:hidden}
</style>
<style type="text/css">
/*.no_topborder{
    border-bottom: 1px;
    border-right: 1px;
    border-left: 1px;
    border-color: #000;
    border-style:solid;
    
} */
.tab_1{
    border:1px #000 solid;
    text-align:center;
}
.tab_1 td{border:1px #000 solid;}
.in_tab{
    border:0px;
} 
.in_tab td{
    border:1px red solid
}

</style>
</head>

<body>
 
	
            <div class="divTbg noprint">
                <div class="divTbgL">
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle">
                    鎴愮哗琛?/div>
                    
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle" style="float: right;">
                        <a href="javascript:window.print()" style="float: right;color:white;" target="_self">鎵撳嵃</a>
                    </div>
                </div>
                
            </div>
            <div class="divTbgF noprint">
            </div>

            <div class="divInfoContext">
                <div style="text-align: center;">鐑熷彴澶у鐣欏鐢熸垚缁╄〃</div>
               
                 <table class="tab_1"  width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr style="color:white;display:none;">
                        <td style="width: 5.2%;">濮撳悕</td>
                        <td style="width: 10.5%;"></td>
                        <td style="width: 5.2%;">瀛﹀彿</td>
                        <td style="width: 7.8%;"></td>
                        <td style="width: 7.8%;"></td>
                        <td style="width: 7.8%;">鎬у埆</td>
                        <td style="width: 5.2%;"></td>
                        <td style="width: 7.8%;">绯绘墍鍚?/td>
                        <td style="width: 21.5%;"></td>
                        <td style="width: 7.8%;">涓撲笟鍚?/td>
                        <td style="width: 7.8%;"></td>
                        <td style="width: 5.2%;"></td>  
                    </tr>
                    <tr>
                        <td style="width: 5.2%;">濮撳悕</td>
                        <td style="width: 10.5%;"><?php echo($re['user_name']);?></td>
                        <td style="width: 5.2%;">瀛﹀彿</td>
                        <td colspan="2"><?php echo($num);?></td>
                        <td style="width: 7.8%;">鎬у埆</td>
                        <td style="width: 5.2%;"><?php echo($re['stu_sex']);?></td>
                        <td style="width: 7.8%;">绯绘墍鍚?/td>
                        <td style="width: 21.5%;">鍥介檯鏁欒偛浜ゆ祦瀛﹂櫌</td>
                        <td style="width: 7.8%;">涓撲笟鍚?/td>
                        <td colspan="2" style="width: 13%;">姹夎瑷€</td>
                    </tr>
                    <tr>
                    <td>鐝骇</td>
                    <td><?php echo($class);?></td>
                    <td colspan="2" style="width:13% ;">鍏ュ鏃ユ湡</td>
                    <td colspan="2"><?php echo($re['entrydate']);?></td>
                    <td colspan="2">姣曚笟鏃ユ湡</td>
                    <td><?php echo($re['gradate']);?></td>
                    <td>瀛﹀埗</td>
                    <td colspan="2"></td>

                    
                    </tr>
                    <tr>
                    <td colspan="4">璇剧▼鍚?/td>
                    <td>瀛﹀垎</td>
                    <td>鎴愮哗</td>
                    <td>灞炴€?/td>
                    <td colspan="2">璇剧▼鍚?/td>
                    <td>瀛﹀垎</td>
                    <td style="width: 7.8%;">鎴愮哗</td>
                    <td style="width: 5.2%;">灞炴€?/td>
                    
                    </tr>
                    <tr style="border:0;margin:0;">
                        <td colspan="7">
                            <table class="in_tab" width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="width: 57.4%;">&nbsp;</td>
                                    <td style="width: 15.6%;"></td>
                                    <td style="width: 15.6%;"></td>
                                    <td style="width: 10.2%;"></td>
                                </tr>
                            </table>
                        </td>
                        <td colspan="5">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                    <td colspan="4">&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
        
                    <tr>
                    <td colspan="2">宸茶幏寰楁€诲鍒嗭細</td>
                    <td colspan="2"></td>
                    <td colspan="2">鑾峰緱瀛︿綅锛?/td>
                    <td></td>
                    <td colspan="2" rowspan="3" style="text-align: left;vertical-align: text-top;">&nbsp;闄㈤暱绛惧瓧锛?/td>
                    <td colspan="3" rowspan="3" style="text-align: left;vertical-align: text-top;">&nbsp;鍏珷锛?/td>

                    </tr>
                    <tr>
                    <td colspan="2">绗簩瀛︿綅涓撲笟锛?/td>
                    <td colspan="2"></td>
                    <td colspan="2">鑾峰緱瀛︿綅锛?/td>
                    <td></td>
                  
                    </tr>
                    <tr>
                    <td colspan="2">澶囨敞锛?/td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td></td>

                    </tr>
                    
                    
                </table>
            </div>


</body>
</html>

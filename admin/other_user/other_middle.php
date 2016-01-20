<?php
include "../lw_inc/judge.php";

$ty='treelist_other.php';


?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>中间框架区</title>
<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
<script>
function switchSysBar(){ 
var locate=location.href.replace('other_middel.php','');
var ssrc=document.all("img1").src.replace(locate,'');
if (ssrc=="../style/green/images/main_30.gif")
{ 
document.all("img1").src="../style/green/images/main_30_1.gif";
document.all("frmTitle").style.display="none" 
} 
else
{ 
document.all("img1").src="../style/green/images/main_30.gif";
document.all("frmTitle").style.display="" 
} 
} 
</script>

</head>

<body style="overflow:hidden">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="156" id=frmTitle noWrap name="fmTitle" align="center" valign="top">
	<iframe name="I1" height="100%" width="100%" src="<?php echo($ty);?>"  border="0" frameborder="0" scrolling="auto">
	浏览器不支持嵌入式框架，或被配置为不显示嵌入式框架。</iframe>
    </td>
    
  </tr>
</table>
</body>
</html>
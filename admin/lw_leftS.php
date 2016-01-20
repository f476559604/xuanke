<?php
header("Content-type:text/html;charset=utf-8");  
include "lw_inc/lw_conn.php";
//include "tablelist.php";
//echo $class_info['open_school_1'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>侧部导航区</title>
    <link href="images/dtree/dtree.css" type="text/css" rel="stylesheet"/>

    <script lang="javascript" src="images/dtree/dtree.js"></script>

    <script src="js/SystemPage.js" type="text/javascript"></script>

    <script lang="javascript" src="images/dtree/dtreedefault.js"></script>
<script>
var Scrolling=false;
function $(o){return document.getElementById(o)}
function ScroMove(){Scrolling=true}
document.onmousemove=function(e){if(Scrolling==false)return;ScroNow(e)}
document.onmouseup=function(e){Scrolling=false}
function ScroNow(event){
 var event=event?event:(window.event?window.event:null);
 var Y=event.clientY-$("Scroll").getBoundingClientRect().top-$("ScroLine").clientHeight/2;
 var H=$("ScroRight").clientHeight-$("ScroLine").clientHeight;
 var SH=Y/H*($("ScroLeft").scrollHeight-$("ScroLeft").clientHeight);
 if (Y<0)Y=0;if (Y>H)Y=H;
 $("ScroLine").style.top=Y+"px";
 $("ScroLeft").scrollTop=SH;
 }
function ScrollWheel(){
 var Y=$("ScroLeft").scrollTop;
 var H=$("ScroLeft").scrollHeight-$("ScroLeft").clientHeight;
 if (event.wheelDelta >=120){Y=Y-80}else{Y=Y+80}
 if(Y<0)Y=0;if(Y>H)Y=H;
 $("ScroLeft").scrollTop=Y;
 var SH=Y/H*$("ScroRight").clientHeight-$("ScroLine").clientHeight;
 if(SH<0)SH=0;
 $("ScroLine").style.top=SH+"px";
}
</script>
    <link href="style/green/skin.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        BODY
        {
            margin: 0px;
            font-family: Arial, Helvetica, sans-serif,宋体;
            font-size: 12px;
            line-height: 25px;
        }
        .STYLE1
        {
            font-size: 12px;
            color: #ffffff;
        }
        .STYLE3
        {
            font-size: 12px;
            color: #033d61;
        }
    </style>
    <style type="text/css">
        .menu_title SPAN
        {
            font-weight: bold;
            left: 3px;
            color: #ffffff;
            position: relative;
            top: 2px;
        }
        .menu_title2 SPAN
        {
            font-weight: bold;
            left: 3px;
            color: #ffcc00;
            position: relative;
            top: 2px;
        }
    </style>
    <style>
/*主窗*/
#Scroll {
	width:155px;
	height:400px;
	background:#FFFFFF
}
/*左边内容区*/
#ScroLeft {
	float:left;
	height:400px;
	width:145px;
	overflow:hidden
}
/*滚动条背景*/
#ScroRight {
	position:relative;
	float:right;
	height:100%;
	width:5px;
	background:#F1F1F1;
	overflow:hidden;
}
/*滚动条*/
#ScroLine {
	position:absolute;
	z-index:1;
	top:0px;
	left:0px;
	width:100%;
	height:47px;
	overflow:hidden;
	background-image: url(style/default/scoll.gif);
	background-repeat: no-repeat;
	background-position: center center;
}
</style>
</head>
<body>
    <table width="156" height="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" valign="top">
                <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="33" background="style/green/images/main_21.gif">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <div id="Scroll" onselectstart="return false" onmousewheel="ScrollWheel()">
                                <div id="ScroLeft">
                               <table width="160" border="0" align="center" cellpadding="0" cellspacing="0" id="tablew">
<tr>
<td><div style="OVERFLOW:hidden; WIDTH:150px" id="divw">
<?php
    echo('<script language="javascript">');
    echo('d = new dTree("d","");');
    echo("d.add('0','-1',' 国交学院教学管理系统','','国交学院教学管理系统','','','');");
	
    $sql="select ID,parentID,mName,mUrl,mToolTip,mTarget,mIopen,mIclose from `lwmenu` where isDel='N' and (mExpand='S' or mExpand='B') order by showID asc";
    $query=mysql_query($sql);
    while($res=mysql_fetch_row($query)){
        echo("d.add('$res[0]','$res[1]','$res[2]','$res[3]','$res[4]','$res[5]','$res[6]','$res[7]');");
    }
	
	echo('document.write(d)');
	echo('</script>');
?>
</div></td>
</tr>
</table>
                                </div>
                                <div id="ScroRight" onclick="ScroNow(event)">
                                    <div id="ScroLine" onmousedown="ScroMove()" title="滚动条,可以上下拖动">
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td height="20" align="center" background="style/green/images/main_37.gif" class="SkyTopFontTop">
                        
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <script>
        function showsubmenu(sid)
        {
        whichEl = eval("submenu" + sid);
        imgmenu = eval("imgmenu" + sid);
        if (whichEl.style.display == "none")
        {
        eval("submenu" + sid + ".style.display=\"\";");
        imgmenu.background="style/default/main_47.gif";
        }
        else
        {
        eval("submenu" + sid + ".style.display=\"none\";");
        imgmenu.background="style/default/main_48.gif";
        }
        }
		
		//document.getElementById("divw").style.height=he;

    </script>

    <script>
        var he=document.body.clientHeight-70;
        var s=document.getElementById("ScroLeft");
        s.style.height=he;
        var s1=document.getElementById("Scroll");
        s1.style.height=he;
        //document.write("<div id=tt style=height:"+he+";overflow:hidden>")
    </script>

</body>
</html>

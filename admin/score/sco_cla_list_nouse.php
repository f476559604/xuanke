<?php
    header("Content-type:text/html;charset=utf-8");
    include "sco_cla_list_fun.php";
    session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <title>锟洁级锟轿筹拷锟斤拷锟斤拷</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
    <link href="../images/dtree/dtree.css" type="text/css" rel="stylesheet" />

    <script language="javascript" src="../images/dtree/dtree.js"></script>

    <script language="javascript" src="../images/dtree/dtreedefault1.js"></script>

    
</head>
<body>
    <form name="Form1" method="post" action="" id="Form1">


    <table width="100%" border="0" cellpadding="0" cellspacing="0" height="100%">
        <tr>
            <td width="180" valign="top">
                <div id="tbMain">
                    <div class="divTbg">
                        <div class="divTbgL">
                        </div>
                        <div class="divTbgInfo">
                            <div class="divTbgTitle">
                                锟轿筹拷学锟斤拷锟介看</div>
                        </div>
                    </div>
                    <div class="divTbgF">
                    </div>
                    <div id="mypanel">
                        <div class="divInfo" id="ddiv1">
                            <div class="divInfoContext">
                                <script language="javascript">
d = new dTree("d","");
d.add('0','-1','  锟斤拷学锟节课筹拷','','锟斤拷学锟节课筹拷','','','');
<?php
    sco_cla_list($_SESSION['term_now'],$_SESSION['name']);
?>
document.write(d);
</script></div>
                        </div>
                        <div class="divInfo">
                            <div class="divInfoContextN">
                                <p>锟洁级锟轿筹拷锟斤拷锟矫癸拷锟杰ｏ拷</p>
                                <p>1锟斤拷锟斤拷锟斤拷锟截的班级锟斤拷锟斤拷锟揭侧即锟缴匡拷锟斤拷锟斤拷学锟节ｏ拷锟斤拷锟洁级要锟斤拷锟斤拷目纬蹋锟?/p>
                                <p>2锟斤拷锟斤拷锟斤拷要锟斤拷锟矫匡拷锟轿的斤拷锟斤拷锟斤拷锟斤拷师锟斤拷锟斤拷锟斤拷锟斤拷息锟斤拷</p>
                                <p>3锟斤拷锟斤拷锟斤拷锟皆碉拷锟斤拷撞锟斤拷谋锟斤拷妫拷锟斤拷锟斤拷锟斤拷莸锟斤拷锟斤拷菘猓拷锟斤拷一锟斤拷锟洁级锟斤拷锟轿碉拷锟斤拷锟矫ｏ拷</p>
                                <p>4锟斤拷锟斤拷也锟斤拷锟皆碉拷锟斤拷薷慕锟斤拷懈呒锟斤拷目纬锟斤拷锟斤拷茫锟斤拷锟斤拷锟斤拷纬痰锟皆わ拷锟斤拷锟较拷锟斤拷茫锟?/p>
                                <p>5锟斤拷锟剿达拷锟侥课程癸拷锟斤拷=锟斤拷学锟狡伙拷锟斤拷锟杰ｏ拷</p>
                                </div>
                        </div>
                    </div>
                </div>
            </td>
            <td height="100%" valign="top">
                <iframe src="" width="100%" height="100%" id="frameright" name="frameright" frameborder="0"
                    scrolling="auto"></iframe>
            </td>
        </tr>
    </table>
    
    </form>
</body>
</html>

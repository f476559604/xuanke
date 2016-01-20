<?php
header("Content-type:text/html;charset=utf-8"); 
include "../lw_inc/lw_conn.php";
include "treelist_room_fun.php";
$type=$_GET['type'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <title>锟洁级锟轿筹拷选锟斤拷</title>
    <link href="../style/green/skin.css" rel="stylesheet" type="text/css">
    <link href="../images/dtree/dtree.css" type="text/css" rel="stylesheet">

    <script language="javascript" src="../images/dtree/dtree.js"></script>

    <script language="javascript" src="../images/dtree/dtreedefault1.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

    <table width="100%" border="0" cellpadding="0" cellspacing="0" height="100%">
        <tr>
            <td width="180" valign="top">
                <div id="tbMain">
                    <div class="divTbg">
                        <div class="divTbgL">
                        </div>
                        <div class="divTbgInfo">
                            <div class="divTbgTitle">
                            <?php
                            if($type=='room'){
                                echo '锟斤拷锟斤拷锟叫憋拷';
                                
                            }
                            
                            
                            ?>
                                </div>
                        </div>
                    </div>
                    <div class="divTbgF">
                    </div>
                    <div id="mypanel">
                        <div class="divInfo" id="ddiv1">
                            <div class="divInfoContext">
                                <script language="javascript">
d = new dTree("d","");

<?php treelist_room();?>
document.write(d);
</script></div>
                        </div>
                        <div class="divInfo">
                            <div class="divInfoContextN">
                                <p>锟洁级锟轿筹拷选锟斤拷锟杰ｏ拷</p>
                                <p>1锟斤拷锟斤拷锟斤拷锟截的班级锟斤拷锟斤拷锟揭诧拷选锟斤拷学锟节ｏ拷锟斤拷锟洁级要锟斤拷锟斤拷目纬蹋锟?/p>
                                <p>2锟斤拷选锟斤拷纬毯螅锟斤拷锟阶诧拷锟斤拷锟芥功锟杰帮拷钮锟斤拷锟斤拷锟斤拷锟斤拷锟矫憋拷学锟节ｏ拷锟斤拷锟洁级要锟斤拷锟斤拷目纬蹋锟?/p>
                                <p>3锟斤拷锟斤拷学锟节ｏ拷锟斤拷锟洁级要锟斤拷锟斤拷目纬蹋锟斤拷锟斤拷锟揭拷锟斤拷锟揭伙拷锟斤拷锟斤拷每锟斤拷蔚慕锟斤拷锟斤拷锟斤拷锟绞︼拷锟斤拷锟斤拷锟斤拷锟较拷锟?/p></div>
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

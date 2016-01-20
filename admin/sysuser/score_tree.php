<?php
header("Content-type:text/html;charset=utf-8"); 
include "../lw_inc/lw_conn.php";
    /*$term=array();
    $year=date('Y');
    $year1=$year-1;
    $year2=$year-2;
    $year3=$year-3;
    $year4=$year-4;
    array_push($term,($year1.'-'.$year.'第一学期'));
    array_push($term,($year1.'-'.$year.'第二学期'));
    array_push($term,($year2.'-'.$year1.'第一学期'));
    array_push($term,($year3.'-'.$year2.'第二学期'));
    array_push($term,($year3.'-'.$year2.'第一学期'));
    array_push($term,($year3.'-'.$year2.'第二学期'));
    array_push($term,($year4.'-'.$year3.'第一学期'));
    array_push($term,($year4.'-'.$year3.'第二学期'));*/
    $sql_t="select cou_term from maj_course group by cou_term";
    $query_t=mysql_query($sql_t);
    //$term=mysql_fetch_row($query_t);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <title>班级课程选择</title>
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
                            学期列表                                </div>
                        </div>
                    </div>
                    <div class="divTbgF">
                    </div>
                    <div id="mypanel">
                        <div class="divInfo" id="ddiv1">
                            <div class="divInfoContext">
                                <script language="javascript">
d = new dTree("d","");

d.add('0','-1','  选择学期','','选择学期','','','');
<?php
$nn=1;
while($term=mysql_fetch_row($query_t))
//foreach($term as $value)
{
    
    echo("d.add('$nn','0','$term[0]','treelist_1.php?term1=$term[0]','$term[0]','frameright','','',false);");
    $nn++;
}
?>


document.write(d);
</script></div>
                        </div>
                        <div class="divInfo">
                            <div class="divInfoContextN">
                                <p>班级课程选择功能：</p>
                                <p>1、点击相关的班级，在右侧选择本学期，本班级要开设的课程；</p>
                                <p>2、选择课程后，点击底部保存功能按钮，即可设置本学期，本班级要开设的课程；</p>
                                <p>3、本学期，本班级要开设的课程，您还要再下一步设置开课的节数，教师，教室信息；</p></div>
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

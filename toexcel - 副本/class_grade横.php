<?php
require_once 'Spreadsheet/Excel/Writer.php';
//include "stu_list.php";
session_start();
include "../lw_inc/lw_conn.php";
include "../lw_inc/obj_name.php";
$cla=$_GET['clas'];
if($cla==''){
    exit('操作失败');
}
$class=obj_name($cla);
//$class='班级：'.$class;
//$cla='1010101';
$sql="select a.stu_id,a.user_name,a.stu_sex,a.nature,b.cou_name,b.cou_credit,b.cou_stu_mark,b.cou_id,c.cou_type from user_stu as a left join cou_choose as b on a.stu_id=b.cou_choose_stu left join cou_app_record as c on b.cou_id=c.cou_id where a.stu_clas='$cla' and b.cou_term='$_SESSION[term_now]'";
$query=mysql_query($sql);
//$re=mysql_fetch_assoc($query);
$workbook = new Spreadsheet_Excel_Writer();

$format_bold =& $workbook->addFormat();
$format_bold->setBold();
$format_bold->setBorder(2);

$format_bold_1 =& $workbook->addFormat();
$format_bold_1->setBold();
$format_bold_1->setBorder(1);


$format_merge_b_1 =& $workbook->addFormat();
$format_merge_b_1->setBold();
//$format_merge_b_1->setAlign('merge');

$format_title =& $workbook->addFormat();
$format_title->setBold();
//$format_title->setColor('yellow');
//$format_title->setPattern(1);
//$format_title->setFgColor(0);
$format_title->setSize('16');

// let's merge
//$format_title->setAlign('merge');

$format_text =& $workbook->addFormat();
$format_text->setNumFormat('000000000000');
$format_text->setBorder(1);
$format_text->setBold();

$format_cell_1=& $workbook->addFormat();
$format_cell_1->setBorder(1);


$worksheet =& $workbook->addWorksheet();
$worksheet->setLandscape();
//$wordsheet->setPaper(9);

$worksheet->write(0, 0, "烟台大学班级成绩".$_SESSION['term_now'], $format_title);
// Couple of empty cells to make it look better

//$worksheet->write(1, 0, '班级：'.$class, $format_merge_b_1);
$worksheet->write(1, 0, '班级：', $format_bold_1);
$worksheet->write(1, 1, $class, $format_bold_1);
$worksheet->write(1, 2, '', $format_bold_1);
$worksheet->write(1, 3, '', $format_bold_1);
$worksheet->write(2, 0, '', $format_bold_1);
$worksheet->write(2, 1, '', $format_bold_1);
$worksheet->write(2, 2, '', $format_bold_1);
$worksheet->write(2, 3, '', $format_bold_1);
$worksheet->write(3, 0, '', $format_bold_1);
$worksheet->write(3, 1, '', $format_bold_1);
$worksheet->write(3, 2, '', $format_bold_1);
$worksheet->write(3, 3, '', $format_bold_1);
$worksheet->write(4, 0, '序号', $format_bold_1);
$worksheet->write(4, 1, '课程名', $format_bold_1);
$worksheet->write(4, 2, '性质', $format_bold_1);
$worksheet->write(4, 3, '学分', $format_bold_1);
$ll=3;
$nn=0;
$ournm='';
//$ourcou='';//课程
$cou_ar=array();//课程数组
$lw_nm=0;//课程数
$lw_c=4;
$ak=array();
while($re=mysql_fetch_assoc($query)){
    $ak=array_keys($cou_ar,$re['cou_id']);
    if($ournm!=$re['stu_id']){
        $ll++;
        $ournm=$re['stu_id'];
        $worksheet->write(1, $ll, ++$nn, $format_bold_1);
        $worksheet->write(2, $ll, $re['stu_id'], $format_text);
        $worksheet->write(3, $ll, $re['user_name'], $format_bold_1);
        $worksheet->write(4, $ll, $re['nature'], $format_bold_1);
        
        
        if($ak==array()){
            $lw_nm++;
            array_push($cou_ar,$re['cou_id']);
            $worksheet->write($lw_nm+$lw_c, 0, $lw_nm, $format_bold_1);
            $worksheet->write($lw_nm+$lw_c, 1, $re['cou_name'], $format_bold_1);
            $worksheet->write($lw_nm+$lw_c, 2, $re['cou_type'], $format_bold_1);
            $worksheet->write($lw_nm+$lw_c, 3, $re['cou_credit'], $format_bold_1);
            $worksheet->write($lw_nm+$lw_c, $ll, $re['cou_stu_mark'], $format_bold_1);
        }
        else{
            $worksheet->write($ak[0]+$lw_c+1, $ll, $re['cou_stu_mark'], $format_bold_1);
        }
        
        
    }
    else{
        if($ak==array()){
            $lw_nm++;
            array_push($cou_ar,$re['cou_id']);
            $worksheet->write($lw_nm+$lw_c, 0, $lw_nm, $format_bold_1);
            $worksheet->write($lw_nm+$lw_c, 1, $re['cou_name'], $format_bold_1);
            $worksheet->write($lw_nm+$lw_c, 2, $re['cou_type'], $format_bold_1);
            $worksheet->write($lw_nm+$lw_c, 3, $re['cou_credit'], $format_bold_1);
            $worksheet->write($lw_nm+$lw_c, $ll, $re['cou_stu_mark'], $format_bold_1);
        }
        else{
            $worksheet->write($ak[0]+$lw_c+1, $ll, $re['cou_stu_mark'], $format_bold_1);
        }
    }
    
}
for($ww=0;$ww<=$ll;$ww++){
$worksheet->setColumn($ww,$ww,12);
}
$worksheet->mergeCells(0,0,0,$ll);



//$worksheet->mergeCells(1,0,1,40);

//$worksheet->write(3, 1, 0);

$workbook->send("烟台大学班级成绩".$_SESSION['term_now'].'.xls');
$workbook->close();
?>
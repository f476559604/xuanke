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
$sql="select stu_id,user_name,stu_sex,nature,stu_nation,en_name,stu_bir,passport_id,stu_address1,stu_address2,contact_way from user_stu where stu_clas='$cla'";
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
$format_merge_b_1->setBorder(1);
$format_merge_b_1->setAlign('merge');

$format_title =& $workbook->addFormat();
$format_title->setBold();
//$format_title->setColor('yellow');
//$format_title->setPattern(1);
//$format_title->setFgColor(0);
$format_title->setSize('16');

// let's merge
$format_title->setAlign('merge');

$format_text =& $workbook->addFormat();
$format_text->setNumFormat('000000000000');
$format_text->setBorder(1);

$format_cell_1=& $workbook->addFormat();
$format_cell_1->setBorder(1);


$worksheet =& $workbook->addWorksheet();
$worksheet->setLandscape();
//$wordsheet->setPaper(9);
$worksheet->setColumn(0,0,4);
$worksheet->setColumn(1,1,12);
$worksheet->setColumn(2,2,6);
$worksheet->setColumn(3,4,4);
$worksheet->setColumn(5,5,6);
$worksheet->setColumn(10,10,12);
$worksheet->setColumn(12,12,12);
$worksheet->setColumn(9,9,26);
$worksheet->setColumn(6,6,20);
$worksheet->setColumn(7,7,10);
$worksheet->setColumn(8,8,10);
$worksheet->write(0, 0, "烟台大学留学生电子档案".$_SESSION['term_now'], $format_title);
// Couple of empty cells to make it look better
$worksheet->write(0, 1, "", $format_title);
$worksheet->write(0, 2, "", $format_title);
$worksheet->write(0, 3, "", $format_title);
$worksheet->write(0, 4, "", $format_title);
$worksheet->write(0, 5, "", $format_title);
$worksheet->write(0, 6, "", $format_title);
$worksheet->write(0, 7, "", $format_title);
$worksheet->write(0, 8, "", $format_title);
$worksheet->write(0, 9, "", $format_title);
$worksheet->write(0, 10, "", $format_title);
$worksheet->write(0, 11, "", $format_title);
$worksheet->write(0, 12, "", $format_title);

$worksheet->write(1, 0, '班级：'.$class, $format_merge_b_1);
$worksheet->write(1, 1, "", $format_merge_b_1);
$worksheet->write(1, 2, "", $format_merge_b_1);
$worksheet->write(1, 3, "", $format_merge_b_1);
$worksheet->write(1, 4, "", $format_merge_b_1);
$worksheet->write(1, 5, "", $format_merge_b_1);
$worksheet->write(1, 6, "", $format_merge_b_1);
$worksheet->write(1, 7, "", $format_merge_b_1);
$worksheet->write(1, 8, "", $format_merge_b_1);
$worksheet->write(1, 9, "", $format_merge_b_1);
$worksheet->write(1, 10, "", $format_merge_b_1);
$worksheet->write(1, 11, "", $format_merge_b_1);
$worksheet->write(1, 12, "", $format_merge_b_1);


$worksheet->write(2, 0, "序号", $format_bold_1);
$worksheet->write(2, 1, "学号", $format_bold_1);
$worksheet->write(2, 2, "姓名", $format_bold_1);
$worksheet->write(2, 3, "性别", $format_bold_1);
$worksheet->write(2, 4, "性质", $format_bold_1);
$worksheet->write(2, 5, "国籍", $format_bold_1);
$worksheet->write(2, 6, "英文姓名", $format_bold_1);
$worksheet->write(2, 7, "出生年月", $format_bold_1);
$worksheet->write(2, 8, "护照号码", $format_bold_1);
$worksheet->write(2, 9, "现住所", $format_bold_1);
$worksheet->write(2, 10, "国外家庭住址", $format_bold_1);
$worksheet->write(2, 11, "家长姓名", $format_bold_1);
$worksheet->write(2, 12, "本人电话号码", $format_bold_1);

$ii=1;$jj=3;
while($re=mysql_fetch_assoc($query)){
    $worksheet->write($jj, 0, $ii,$format_cell_1);
    $ii++;
    $worksheet->write($jj, 1, $re['stu_id'],$format_text);
    $worksheet->write($jj, 2, $re['user_name'],$format_cell_1);
    $worksheet->write($jj, 3, $re['stu_sex'],$format_cell_1);
    $worksheet->write($jj, 4, $re['nature'],$format_cell_1);
    $worksheet->write($jj, 5, $re['stu_nation'],$format_cell_1);
    $worksheet->write($jj, 6, $re['en_name'],$format_cell_1);
    $worksheet->write($jj, 7, $re['stu_bir'],$format_cell_1);
    $worksheet->write($jj, 8, $re['passport_id'],$format_cell_1);
    $worksheet->write($jj, 9, $re['stu_address2'],$format_cell_1);
    $worksheet->write($jj, 10, $re['stu_address1'],$format_cell_1);
    $worksheet->write($jj, 11, '',$format_cell_1);
    $worksheet->write($jj, 12, $re['contact_way'],$format_cell_1);
    $jj++;
}



//$worksheet->mergeCells(1,0,1,40);

//$worksheet->write(3, 1, 0);

$workbook->send('信息表_'.$class.'_'.$_SESSION['term_now'].'.xls');
$workbook->close();
?>
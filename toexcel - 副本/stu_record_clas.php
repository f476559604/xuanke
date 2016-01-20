<?php
require_once 'Spreadsheet/Excel/Writer.php';
//include "stu_list.php";
include "../lw_inc/lw_conn.php";
include "../lw_inc/obj_name.php";
session_start();
$lesson=$_GET['iidd0'];
if($lesson==''){
    exit('操作失败');
}
$ncou=urldecode($_GET['ncou']);
//$ntea=urldecode($_GET['ntea']);
if($_GET['termnow']){
    $termnow=$_GET['termnow'];
}
else{$termnow=$_SESSION['term_now'];}
if($_GET['ntea']){
    $ntea=urldecode($_GET['ntea']);
}
else{$ntea=$_SESSION['name'];}

//$cla='1010101';
$sql="select b.stu_id, b.user_name, b.stu_sex, b.stu_clas, b.stu_nation from cou_choose as a left join user_stu as b on a.cou_choose_stu=b.stu_id where cou_id='".$lesson."' and cou_term='".$termnow."'";      
$query=mysql_query($sql);
//$re=mysql_fetch_assoc($query);
$workbook = new Spreadsheet_Excel_Writer();

$format_bold =& $workbook->addFormat();
$format_bold->setBold();
$format_bold->setBorder(2);

$format_bold_1 =& $workbook->addFormat();
$format_bold_1->setBold();
$format_bold_1->setBorder(1);

$format_bold_border_both =& $workbook->addFormat();
$format_bold_border_both->setBold();
$format_bold_border_both->setTop(2);
$format_bold_border_both->setBottom(2);

$format_bold_border_three_l=& $workbook->addFormat();
$format_bold_border_three_l->setBold();
$format_bold_border_three_l->setTop(2);
$format_bold_border_three_l->setBottom(2);
$format_bold_border_three_l->setleft(2);

$format_bold_border_l_1=& $workbook->addFormat();
$format_bold_border_l_1->setBold();
$format_bold_border_l_1->setTop(2);
$format_bold_border_l_1->setBottom(2);
$format_bold_border_l_1->setleft(1);
$format_bold_border_l_1->setRight(2);

$format_bold_border_m_1=& $workbook->addFormat();
$format_bold_border_m_1->setBold();
$format_bold_border_m_1->setTop(2);
$format_bold_border_m_1->setBottom(2);
$format_bold_border_m_1->setleft(1);
$format_bold_border_m_1->setRight(1);

$format_bold_border_three_r=& $workbook->addFormat();
$format_bold_border_three_r->setBold();
$format_bold_border_three_r->setTop(2);
$format_bold_border_three_r->setBottom(2);
$format_bold_border_three_r->setRight(2);

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

$format_cell_r_2=& $workbook->addFormat();
$format_cell_r_2->setLeft(1);
$format_cell_r_2->setRight(2);
$format_cell_r_2->setTop(1);
$format_cell_r_2->setBottom(1);

$format_bold_tr_2=& $workbook->addFormat();
$format_bold_tr_2->setLeft(1);
$format_bold_tr_2->setRight(2);
$format_bold_tr_2->setTop(2);
$format_bold_tr_2->setBottom(1);
$format_bold_tr_2->setBold();

$format_cell_b_2=& $workbook->addFormat();
$format_cell_b_2->setBorder(2);
$format_cell_b_2->setAlign('merge');

$format_cell_b_2_al=& $workbook->addFormat();
$format_cell_b_2_al->setBorder(2);
$format_cell_b_2_al->setBold();
$format_cell_b_2_al->setBold();
$format_cell_b_2_al->setLocked();

$worksheet =& $workbook->addWorksheet();
$worksheet->setLandscape();
//$wordsheet->setPaper(9);
$worksheet->setColumn(0,0,4);
$worksheet->setColumn(1,1,12);
$worksheet->setColumn(2,2,6);
$worksheet->setColumn(3,4,4);
$worksheet->setColumn(5,5,6);
$worksheet->setColumn(6,40,2);
$worksheet->write(0, 0, "烟台大学留学生教学记录表(".$termnow.')', $format_title);
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
$worksheet->write(0, 13, "", $format_title);
$worksheet->write(0, 14, "", $format_title);
$worksheet->write(0, 15, "", $format_title);
$worksheet->write(0, 16, "", $format_title);
$worksheet->write(0, 17, "", $format_title);
$worksheet->write(0, 18, "", $format_title);
$worksheet->write(0, 19, "", $format_title);
$worksheet->write(0, 20, "", $format_title);
$worksheet->write(0, 21, "", $format_title);
$worksheet->write(0, 22, "", $format_title);
$worksheet->write(0, 23, "", $format_title);
$worksheet->write(0, 24, "", $format_title);
$worksheet->write(0, 25, "", $format_title);
$worksheet->write(0, 26, "", $format_title);
$worksheet->write(0, 27, "", $format_title);
$worksheet->write(0, 28, "", $format_title);
$worksheet->write(0, 29, "", $format_title);
$worksheet->write(0, 30, "", $format_title);
$worksheet->write(0, 31, "", $format_title);
$worksheet->write(0, 32, "", $format_title);
$worksheet->write(0, 33, "", $format_title);
$worksheet->write(0, 34, "", $format_title);
$worksheet->write(0, 35, "", $format_title);
$worksheet->write(0, 36, "", $format_title);
$worksheet->write(0, 37, "", $format_title);
$worksheet->write(0, 38, "", $format_title);
$worksheet->write(0, 39, "", $format_title);
$worksheet->write(0, 40, "", $format_title);
$worksheet->write(1, 0, '课程：'.$ncou.'    教师：'.$ntea, $format_bold_border_three_l);
$worksheet->write(1, 1, "", $format_bold_border_both);
$worksheet->write(1, 2, "", $format_bold_border_both);
$worksheet->write(1, 3, "", $format_bold_border_both);
$worksheet->write(1, 4, "", $format_bold_border_both);
$worksheet->write(1, 5, "", $format_bold_border_both);
$worksheet->write(1, 6, "", $format_bold_border_both);
$worksheet->write(1, 7, "", $format_bold_border_both);
$worksheet->write(1, 8, "", $format_bold_border_both);
$worksheet->write(1, 9, "", $format_bold_border_both);
$worksheet->write(1, 10, "", $format_bold_border_both);
$worksheet->write(1, 11, "", $format_bold_border_both);
$worksheet->write(1, 12, "", $format_bold_border_both);
$worksheet->write(1, 13, "", $format_bold_border_both);
$worksheet->write(1, 14, "", $format_bold_border_both);
$worksheet->write(1, 15, "", $format_bold_border_both);
$worksheet->write(1, 16, "", $format_bold_border_both);
$worksheet->write(1, 17, "", $format_bold_border_both);
$worksheet->write(1, 18, "", $format_bold_border_both);
$worksheet->write(1, 19, "", $format_bold_border_both);
$worksheet->write(1, 20, "", $format_bold_border_both);
$worksheet->write(1, 21, "", $format_bold_border_both);
$worksheet->write(1, 22, "", $format_bold_border_both);
$worksheet->write(1, 23, "", $format_bold_border_both);
$worksheet->write(1, 24, "", $format_bold_border_both);
$worksheet->write(1, 25, "", $format_bold_border_both);
$worksheet->write(1, 26, "", $format_bold_border_both);
$worksheet->write(1, 27, "", $format_bold_border_both);
$worksheet->write(1, 28, "", $format_bold_border_both);
$worksheet->write(1, 29, "", $format_bold_border_both);
$worksheet->write(1, 30, "", $format_bold_border_both);
$worksheet->write(1, 31, "", $format_bold_border_both);
$worksheet->write(1, 32, "", $format_bold_border_both);
$worksheet->write(1, 33, "", $format_bold_border_both);
$worksheet->write(1, 34, "", $format_bold_border_both);
$worksheet->write(1, 35, "", $format_bold_border_both);
$worksheet->write(1, 36, "", $format_bold_border_both);
$worksheet->write(1, 37, "", $format_bold_border_both);
$worksheet->write(1, 38, "", $format_bold_border_both);
$worksheet->write(1, 39, "", $format_bold_border_both);
$worksheet->write(1, 40, "", $format_bold_border_three_r);

$worksheet->write(2, 0, "序号", $format_bold_1);
$worksheet->write(2, 1, "学号", $format_bold_1);
$worksheet->write(2, 2, "姓名", $format_bold_1);
$worksheet->write(2, 3, "性别", $format_bold_1);
$worksheet->write(2, 4, "班级", $format_bold_1);
$worksheet->write(2, 5, "国籍", $format_bold_tr_2);
$worksheet->write(2, 6, "1", $format_bold_border_m_1);
$worksheet->write(2, 7, "2", $format_bold_border_m_1);
$worksheet->write(2, 8, "3", $format_bold_border_m_1);
$worksheet->write(2, 9, "4", $format_bold_border_m_1);
$worksheet->write(2, 10, "5", $format_bold_border_l_1);
$worksheet->write(2, 11, "1", $format_bold_border_m_1);
$worksheet->write(2, 12, "2", $format_bold_border_m_1);
$worksheet->write(2, 13, "3", $format_bold_border_m_1);
$worksheet->write(2, 14, "4", $format_bold_border_m_1);
$worksheet->write(2, 15, "5", $format_bold_border_l_1);
$worksheet->write(2, 16, "1", $format_bold_border_m_1);
$worksheet->write(2, 17, "2", $format_bold_border_m_1);
$worksheet->write(2, 18, "3", $format_bold_border_m_1);
$worksheet->write(2, 19, "4", $format_bold_border_m_1);
$worksheet->write(2, 20, "5", $format_bold_border_m_1);
$worksheet->write(2, 21, "1", $format_bold_border_l_1);
$worksheet->write(2, 22, "2", $format_bold_border_m_1);
$worksheet->write(2, 23, "3", $format_bold_border_m_1);
$worksheet->write(2, 24, "4", $format_bold_border_m_1);
$worksheet->write(2, 25, "5", $format_bold_border_l_1);
$worksheet->write(2, 26, "1", $format_bold_border_m_1);
$worksheet->write(2, 27, "2", $format_bold_border_m_1);
$worksheet->write(2, 28, "3", $format_bold_border_m_1);
$worksheet->write(2, 29, "4", $format_bold_border_m_1);
$worksheet->write(2, 30, "5", $format_bold_border_l_1);
$worksheet->write(2, 31, "1", $format_bold_border_m_1);
$worksheet->write(2, 32, "2", $format_bold_border_m_1);
$worksheet->write(2, 33, "3", $format_bold_border_m_1);
$worksheet->write(2, 34, "4", $format_bold_border_m_1);
$worksheet->write(2, 35, "5", $format_bold_border_l_1);
$worksheet->write(2, 36, "1", $format_bold_border_m_1);
$worksheet->write(2, 37, "2", $format_bold_border_m_1);
$worksheet->write(2, 38, "3", $format_bold_border_m_1);
$worksheet->write(2, 39, "4", $format_bold_border_m_1);
$worksheet->write(2, 40, "5", $format_bold_border_l_1);
$ii=1;$jj=3;
while($re=mysql_fetch_assoc($query)){
    $class=obj_name($re['stu_clas']);
    //echo('dd'.$class.'dd');
    $worksheet->write($jj, 0, $ii,$format_cell_1);
    $ii++;
    $worksheet->write($jj, 1, $re['stu_id'],$format_text);
    $worksheet->write($jj, 2, $re['user_name'],$format_cell_1);
    $worksheet->write($jj, 3, $re['stu_sex'],$format_cell_1);
    $worksheet->write($jj, 4, $class,$format_cell_1);
    $worksheet->write($jj, 5, $re['stu_nation'],$format_cell_r_2);
    for($kk=6;$kk<=40;$kk++){
        if($kk%5==0){
            $worksheet->write($jj, $kk, '',$format_cell_r_2);
        }
        else{$worksheet->write($jj, $kk, '',$format_cell_1);}
    }
    $jj++;
    
}
for($hh=0;$hh<10;$hh++){
    $worksheet->write($jj, 0, $ii,$format_cell_1);
    for($kk=1;$kk<5;$kk++){
        $worksheet->write($jj, $kk, '',$format_cell_1);
    }
    for($kk=5;$kk<=40;$kk++){
        if($kk%5==0){
            $worksheet->write($jj, $kk, '',$format_cell_r_2);
        }
        else{$worksheet->write($jj, $kk, '',$format_cell_1);}
    }
    
    $jj++;
    $ii++;
}
$worksheet->write($jj, 0, $ii,$format_cell_b_2);
$worksheet->write($jj, 1, '事假：△',$format_cell_b_2);
$worksheet->write($jj, 2, '病假：×',$format_cell_b_2_al);
$worksheet->write($jj, 3, '',$format_cell_b_2_al);
$worksheet->write($jj, 4, '',$format_cell_b_2_al);
$worksheet->write($jj, 5, '',$format_cell_b_2_al);
$worksheet->write($jj, 6, '旷课：○',$format_cell_b_2_al);
$worksheet->write($jj, 7, '',$format_cell_b_2_al);
$worksheet->write($jj, 8, '',$format_cell_b_2_al);
$worksheet->write($jj, 9, '',$format_cell_b_2_al);
$worksheet->write($jj, 10, '',$format_cell_b_2_al);
$worksheet->write($jj, 11, '迟到：/',$format_cell_b_2_al);
$worksheet->write($jj, 12, '',$format_cell_b_2_al);
$worksheet->write($jj, 13, '',$format_cell_b_2_al);
$worksheet->write($jj, 14, '',$format_cell_b_2_al);
$worksheet->write($jj, 15, '',$format_cell_b_2_al);
$worksheet->write($jj, 16, '早退：-',$format_cell_b_2_al);
$worksheet->write($jj, 17, '',$format_cell_b_2_al);
$worksheet->write($jj, 18, '',$format_cell_b_2_al);
$worksheet->write($jj, 19, '',$format_cell_b_2_al);
$worksheet->write($jj, 20, '',$format_cell_b_2_al);
$worksheet->write($jj, 21, '特殊事由：&记录体验，办护照的',$format_cell_b_2_al);
$worksheet->write($jj, 22, '',$format_cell_b_2_al);
$worksheet->write($jj, 23, '',$format_cell_b_2_al);
$worksheet->write($jj, 24, '',$format_cell_b_2_al);
$worksheet->write($jj, 25, '',$format_cell_b_2_al);
$worksheet->write($jj, 26, '',$format_cell_b_2_al);
$worksheet->write($jj, 27, '',$format_cell_b_2_al);
$worksheet->write($jj, 28, '',$format_cell_b_2_al);
$worksheet->write($jj, 29, '',$format_cell_b_2_al);
$worksheet->write($jj, 30, '',$format_cell_b_2_al);
$worksheet->write($jj, 31, '',$format_cell_b_2_al);
$worksheet->write($jj, 32, '',$format_cell_b_2_al);
$worksheet->write($jj, 33, '',$format_cell_b_2_al);
$worksheet->write($jj, 34, '',$format_cell_b_2_al);
$worksheet->write($jj, 35, '备注：出勤不记',$format_cell_b_2_al);
$worksheet->write($jj, 36, '',$format_cell_b_2_al);
$worksheet->write($jj, 37, '',$format_cell_b_2_al);
$worksheet->write($jj, 38, '',$format_cell_b_2_al);
$worksheet->write($jj, 39, '',$format_cell_b_2_al);
$worksheet->write($jj, 40, '',$format_cell_b_2_al);
$worksheet->mergeCells($jj,2,$jj,5);
$worksheet->mergeCells($jj,6,$jj,10);
$worksheet->mergeCells($jj,11,$jj,15);
$worksheet->mergeCells($jj,16,$jj,20);
$worksheet->mergeCells($jj,21,$jj,34);
$worksheet->mergeCells(1,0,1,40);

//$worksheet->write(3, 1, 0);
if($_SESSION['type']=='education'){
    $workbook->send('记录表_'.$ncou.'_'.$ntea.'_'.$termnow.'.xls');
}
else{
    $workbook->send('记录表_'.$ncou.'_'.$_SESSION['name'].'_'.$termnow.'.xls');
}
unset($ntea);
$workbook->close();
?>
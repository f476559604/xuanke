<?php
require_once 'Spreadsheet/Excel/Writer.php';
//include "stu_list.php";
session_start();
include "../lw_inc/lw_conn.php";
include "../lw_inc/obj_name.php";
$cla=$_GET['clas'];
if($cla==''){
    exit('����ʧ��');
}
date_default_timezone_set('PRC');
$class=obj_name($cla);
$class=encoding($class);
$sql="select cou_id from cou_choose where cou_term='$_SESSION[term_now]' limit 1";
$query=mysql_query($sql);
$re=mysql_fetch_row($query);
if($re[0]==''){
    exit('û�гɼ���Ϣ');
}
//$class='�༶��'.$class;
//$cla='1010101';
$sql="select a.stu_id,a.user_name,a.stu_clas,b.cou_name,b.cou_credit,b.cou_stu_mark,b.cou_id from user_stu as a left join cou_choose as b on a.stu_id=b.cou_choose_stu where a.stu_clas='$cla' and b.cou_term='$_SESSION[term_now]'";
//echo $sql;
$query=mysql_query($sql);
//echo $query;
//$re=mysql_fetch_assoc($query);
$workbook = new Spreadsheet_Excel_Writer();

//$format_merge_b_1 =& $workbook->addFormat();
//$format_merge_b_1->setAlign('center');

$format_title =& $workbook->addFormat();
$format_title->setBold();
$format_title->setSize('16');
$format_title->setAlign('center');

// let's merge
//$format_title->setAlign('merge');

$format_text =& $workbook->addFormat();
$format_text->setNumFormat('000000000000');
$format_text->setBorder(1);

$format_cell_1=& $workbook->addFormat();
$format_cell_1->setBorder(1);


$worksheet =& $workbook->addWorksheet();
//$worksheet->setLandscape();
//$wordsheet->setPaper(9);
$worksheet->setColumn(0,0,4);
$worksheet->setColumn(1,1,12);
$worksheet->setColumn(2,3,6);

$worksheet->write(0, 0, "��̨��ѧ".$class."�༶�ɼ�".encoding($_SESSION['term_now']), $format_title);

//$worksheet->write(1, 0, '�༶��'.$class, $format_merge_b_1);


$worksheet->write(1, 0, "���", $format_cell_1);
$worksheet->write(1, 1, "ѧ��", $format_cell_1);
$worksheet->write(1, 2, "����", $format_cell_1);
$worksheet->write(1, 3, "�༶", $format_cell_1);


$cou_ar=array();//�γ�����,������ǿγ�id������Ϊ0��1��2������Ȼ�����λ�ö�Ӧ�ı���λ�����ҵ����ſ����ĸ�λ����
$cs=1;//��ʼ��������ѧ���ɼ���֮ǰ������
$csline=3;//��ʼ��������Ӧ�ڿγ̵�λ��
$nn=0;//���
$cou_nn=0;//�γ���;
$stu='';//ѧ��
while($re=mysql_fetch_assoc($query)){
  $re['user_name']=encoding($re['user_name']);
  $re['cou_name']=encoding($re['cou_name']);
  $re['cou_stu_mark']=encoding($re['cou_stu_mark']);
  $ak=array_keys($cou_ar,$re['cou_id']);
    if($stu!=$re['stu_id']){
        $nn++;
        $stu=$re['stu_id'];
        $worksheet->write($cs+$nn, 0, $nn, $format_cell_1);
        $worksheet->write($cs+$nn, 1, $re['stu_id'], $format_text);
        $worksheet->write($cs+$nn, 2, $re['user_name'], $format_cell_1);
        $worksheet->write($cs+$nn, 3, $class, $format_cell_1);
        
        
        if($ak==array()){
            $cou_nn++;
            array_push($cou_ar,$re['cou_id']);
            $worksheet->write($cs, $cou_nn+$csline, $re['cou_name'], $format_cell_1);
            $worksheet->write($cs+$nn, $cou_nn+$csline, $re['cou_stu_mark'], $format_cell_1);
        }
          else{
            $worksheet->write($cs+$nn, $ak[0]+$csline+1, $re['cou_stu_mark'], $format_cell_1);
        }
        
        
    }
    else{
        if($ak==array()){
            $cou_nn++;
            array_push($cou_ar,$re['cou_id']);
            $worksheet->write($cs, $cou_nn+$csline, $re['cou_name'], $format_cell_1);
            $worksheet->write($cs+$nn, $cou_nn+$csline, $re['cou_stu_mark'], $format_cell_1);
        }
        else{
             $worksheet->write($cs+$nn, $ak[0]+$csline+1, $re['cou_stu_mark'], $format_cell_1);
        }
    }
   
    
}
//for($ww=4;$ww<=$cou_nn+$csline;$ww++){
$worksheet->setColumn(4,$cou_nn+$csline,8);
//}
$worksheet->mergeCells(0,0,0,$cou_nn+$csline);
//$worksheet->mergeCells(1,0,1,$cou_nn+$csline);



$workbook->send("��̨��ѧ".$class."�༶�ɼ�".encoding($_SESSION['term_now']).'.xls');
$workbook->close();
?>
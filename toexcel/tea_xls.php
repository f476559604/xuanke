<?php
include "../lw_inc/lw_conn.php";
require_once 'Spreadsheet/Excel/Writer.php';
$teaid=$_GET['teaid'];
$name=$_GET['name'];
$term=$_GET['nterm'];
//$nroom='����111';
//echo $nroom;�ļ�gbk���룬���ݿ�utf8����utf8;
//$term='2015-2016��һѧ��';
if($teaid==''||$term==''){
	exit('Invalid request');
}
$cou_sql="select * from `tea_course` where tea_id='".$teaid."' and cou_term='".$term."' limit 1";
//echo $cou_sql;/**

$cou_sql=mysql_fetch_assoc(mysql_query($cou_sql));
$filenm=iconv("utf8","gb2312",$name)."��ʦ�γ̱�";

$workbook = new Spreadsheet_Excel_Writer();
//$workbook->setVersion(8);

$format_title =& $workbook->addFormat();
$format_title->setBold();
$format_title->setSize('16');
$format_title->setAlign('merge');


$format_border=& $workbook->addFormat();
$format_border->setBorder(1);
$format_border->setAlign('top');
$format_border->setUnLocked();
$format_border->setTextWrap();

$format_border_l=& $workbook->addFormat();
$format_border_l->setBorder(1);
$format_border_l->setAlign('vcenter');
$format_border_l->setUnLocked();
$format_border_l->setTextWrap();

$format_border_t=& $workbook->addFormat();
$format_border_t->setTop(2);
$format_border_t->setBottom(1);
$format_border_t->setRight(1);
$format_border_t->setLeft(1);
$format_border_t->setAlign('center');


$format_border_no=& $workbook->addFormat();
$format_border_no->setBorder(0);
$format_border_no->setAlign('right');

$worksheet =& $workbook->addWorksheet();

$worksheet->setInputEncoding('utf-8');

$worksheet->write(0, 0, $filenm, $format_title);
$worksheet->write(0, 1, "", $format_title);
$worksheet->write(0, 2, "", $format_title);//0,1��ʾ��0�е�1��
$worksheet->write(0, 3, "", $format_title);
$worksheet->write(0, 4, "", $format_title);
$worksheet->write(0, 5, "", $format_title);
$worksheet->write(0, 6, "", $format_title);
$worksheet->write(0, 7, "", $format_title);

$worksheet->write(1, 0,'', $format_border_t);
$worksheet->write(1, 1, '����һ', $format_border_t);
$worksheet->write(1, 2, '���ڶ�', $format_border_t);
$worksheet->write(1, 3, '������', $format_border_t);
$worksheet->write(1, 4, '������', $format_border_t);
$worksheet->write(1, 5, '������', $format_border_t);
$worksheet->write(1, 6, '������', $format_border_t);
$worksheet->write(1, 7, '������', $format_border_t);

$worksheet->write(2, 0, '��һ��(08��00-08��45)', $format_border_l);
$worksheet->write(3, 0, '�ڶ���(08��55-09��40)', $format_border_l);
$worksheet->write(4, 0, '������(10��00-10��45)', $format_border_l);
$worksheet->write(5, 0, '���Ľ�(10��55-11��40)', $format_border_l);
$worksheet->write(6, 0, '�����(14��00-14��45)', $format_border_l);
$worksheet->write(7, 0, '������(15��55-15��40)', $format_border_l);
$worksheet->write(8, 0, '���߽�(16��00-16��45)', $format_border_l);
$worksheet->write(9, 0, '�ڰ˽�(16��55-17��40)', $format_border_l);
for($i=1;$i<=8;$i++){
	$worksheet->write($i+1, 1, iconv("utf8","gb2312",$cou_sql['mo'.$i]), $format_border);
	$worksheet->write($i+1, 2, iconv("utf8","gb2312",$cou_sql['tu'.$i]), $format_border);
	$worksheet->write($i+1, 3, iconv("utf8","gb2312",$cou_sql['we'.$i]), $format_border);
	$worksheet->write($i+1, 4, iconv("utf8","gb2312",$cou_sql['th'.$i]), $format_border);
	$worksheet->write($i+1, 5, iconv("utf8","gb2312",$cou_sql['fr'.$i]), $format_border);
	$worksheet->write($i+1, 6, iconv("utf8","gb2312",$cou_sql['sa'.$i]), $format_border);
	$worksheet->write($i+1, 7, iconv("utf8","gb2312",$cou_sql['su'.$i]), $format_border);
}

//$worksheet->mergeCells($kk,9,$kk2,11);�ϲ���Ԫ��

$worksheet->write(10, 0, '�Ʊ����ڣ�'.date('Y-m-d'), $format_border_no);
$worksheet->mergeCells(10,0,10,7);

$workbook->send($filenm.'.xls');
$workbook->close();
?>
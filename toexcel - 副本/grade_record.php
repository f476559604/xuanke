<?php
require_once 'Spreadsheet/Excel/Writer.php';
include "../lw_inc/lw_conn.php";
include "../lw_inc/obj_name.php";
session_start();

//include "../lw_inc/obj_name.php";
$lesson=$_GET['iidd0'];
$ncou=urldecode($_GET['ncou']);
//$termnow=$_SESSION['term_now'];

if($_GET['termnow']){
    $termnow=$_GET['termnow'];
}
else{$termnow=$_SESSION['term_now'];}
if($_GET['ntea']){
    $ntea=urldecode($_GET['ntea']);
}
else{$ntea=$_SESSION['name'];}
if($lesson==''||$termnow==''){
    exit('����ʧ��');
}
/*$class=obj_name($cla);
$class='�༶��'.$class;
$cla='1010101';
$num='201392503039';
$sql="select stu_gra from user_stu where stu_id='$num'";
$query=mysql_query($sql);
$re=mysql_fetch_row($query);
$class=obj_name($re[0]);*/


$workbook = new Spreadsheet_Excel_Writer();


$format_title =& $workbook->addFormat();
$format_title->setBold();
$format_title->setSize('16');
$format_title->setAlign('merge');

$format_title_1 =& $workbook->addFormat();
$format_title_1->setSize('10');
$format_title_1->setAlign('merge');

$format_text =& $workbook->addFormat();
$format_text->setNumFormat('000000000000');
$format_text->setBorder(1);

$format_border=& $workbook->addFormat();
$format_border->setBorder(1);
$format_border->setAlign('center');

$format_border=& $workbook->addFormat();
$format_border->setBorder(1);
$format_border->setAlign('left');


$worksheet =& $workbook->addWorksheet();
//$worksheet->setLandscape();
//$wordsheet->setPaper(9);
$worksheet->setColumn(0,0,4);
$worksheet->setColumn(1,1,12);
$worksheet->setColumn(2,2,8);
$worksheet->setColumn(3,3,6);
$worksheet->setColumn(4,9,8);


$worksheet->write(0, 0, "��̨��ѧ��ѧ���ɼ���¼��".$termnow, $format_title);
$worksheet->write(0, 1, "", $format_title);
$worksheet->write(0, 2, "", $format_title);
$worksheet->write(0, 3, "", $format_title);
$worksheet->write(0, 4, "", $format_title);
$worksheet->write(0, 5, "", $format_title);
$worksheet->write(0, 6, "", $format_title);
$worksheet->write(0, 7, "", $format_title);
$worksheet->write(0, 8, "", $format_title);
$worksheet->write(0, 9, "", $format_title);
if($_SESSION='education'){
    $worksheet->write(1, 0, "�κţ�".$lesson." �γ�����".$ncou." �ο���ʦ��".$ntea, $format_title_1);
}
else{
    $worksheet->write(1, 0, "�κţ�".$lesson." �γ�����".$ncou." �ο���ʦ��".$_SESSION['name'], $format_title_1);
}
$worksheet->write(1, 1, "", $format_title_1);
$worksheet->write(1, 2, "", $format_title_1);
$worksheet->write(1, 3, "", $format_title_1);
$worksheet->write(1, 4, "", $format_title_1);
$worksheet->write(1, 5, "", $format_title_1);
$worksheet->write(1, 6, "", $format_title_1);
$worksheet->write(1, 7, "", $format_title_1);
$worksheet->write(1, 8, "", $format_title_1);
$worksheet->write(1, 9, "", $format_title_1);

$worksheet->write(2, 0, "���", $format_border);
$worksheet->write(2, 1, "ѧ��", $format_border);
$worksheet->write(2, 2, "����", $format_border);
$worksheet->write(2, 3, "�༶", $format_border);
$worksheet->write(2, 4, "ƽʱ�ɼ�", $format_border);
$worksheet->write(2, 5, "���гɼ�", $format_border);
$worksheet->write(2, 6, "��ĩ�ɼ�", $format_border);
$worksheet->write(2, 7, "�����ɼ�", $format_border);
$worksheet->write(2, 8, "���޲���", $format_border);
$worksheet->write(2, 9, "��ע", $format_border);




//$sql="select cou_name,cou_credit,cou_stu_mark from cou_choose where cou_choose_stu='$num' and cou_term='$value'";

   //$sql="select a.cou_all_id,b.stu_id, b.user_name,a.cou_name,a.cou_stu_mark1,a.cou_stu_mark2,a.cou_stu_mark3,a.cou_stu_mark,a.cou_checking1,a.cou_checking2,a.cou_checking from cou_choose as a left join user_stu as b on a.cou_choose_stu=b.stu_id where cou_id='".$lesson."' and cou_term='".$termnow."'";

$sql="select b.stu_id, b.user_name,b.stu_clas,a.cou_stu_mark1,a.cou_stu_mark2,a.cou_stu_mark3,a.cou_stu_mark from cou_choose as a left join user_stu as b on a.cou_choose_stu=b.stu_id where cou_id='".$lesson."' and cou_term='".$termnow."'";      
//echo $sql;
$query=mysql_query($sql);
$ii=1;$kk=3;
while($re=mysql_fetch_assoc($query)){
    $class=obj_name($re['stu_clas']);
    $worksheet->write($kk, 0, $ii, $format_border);
    $worksheet->write($kk, 1, $re['stu_id'], $format_text);
    $worksheet->write($kk, 2, $re['user_name'], $format_border);
    $worksheet->write($kk, 3, $class, $format_border);
    $worksheet->write($kk, 4, $re['cou_stu_mark1'], $format_border);
    $worksheet->write($kk, 5, $re['cou_stu_mark2'], $format_border);
    $worksheet->write($kk, 6, $re['cou_stu_mark3'], $format_border);
    $worksheet->write($kk, 7, $re['cou_stu_mark'], $format_border);
    $worksheet->write($kk, 8, '', $format_border);
    $worksheet->write($kk, 9, '', $format_border);
    $ii++;$kk++;
}
for($jj=0;$jj<3;$jj++){
    $worksheet->write($kk, 0, '', $format_border);
    $worksheet->write($kk, 1, '', $format_border);
    $worksheet->write($kk, 2, '', $format_border);
    $worksheet->write($kk, 3, '', $format_border);
    $worksheet->write($kk, 4, '', $format_border);
    $worksheet->write($kk, 5, '', $format_border);
    $worksheet->write($kk, 6, '', $format_border);
    $worksheet->write($kk, 7, '', $format_border);
    $worksheet->write($kk, 8, '', $format_border);
    $worksheet->write($kk, 9, '', $format_border);
    $kk++;
}

$worksheet->write($kk, 0, '����ʱ�䣺'.$termnow, $format_border_left);
$worksheet->write($kk, 1, '', $format_border_left);
$worksheet->write($kk, 2, '', $format_border_left);
$worksheet->write($kk, 3, '', $format_border_left);
$worksheet->write($kk, 4, '', $format_border_left);
$worksheet->write($kk, 5, '�ο���ʦǩ�֣�', $format_border_left);
$worksheet->write($kk, 6, '', $format_border_left);
$worksheet->write($kk, 7, '', $format_border_left);
$worksheet->write($kk, 8, '', $format_border_left);
$worksheet->write($kk, 9, '', $format_border_left);

$worksheet->mergeCells($kk,0,$kk,4);
$worksheet->mergeCells($kk,5,$kk,9);

//$worksheet->write(3, 1, 0);

//$workbook->send('�ɼ���_'.$ncou.'_'.$_SESSION['name'].'_'.$termnow.'.xls');
if($_SESSION['type']=='education'){
    $workbook->send('�ɼ���_'.$ncou.'_'.$ntea.'_'.$termnow.'.xls');
}
else{
    $workbook->send('�ɼ���_'.$ncou.'_'.$_SESSION['name'].'_'.$termnow.'.xls');
}
unset($ntea);
$workbook->close();
?>
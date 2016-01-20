<?php
include "../lw_inc/lw_conn.php";
require_once 'Spreadsheet/Excel/Writer.php';
//include "stu_list.php";
//echo "ssss";

include "../lw_inc/obj_name.php";
/*$cla=$_GET['clas'];
if($cla==''){
    exit('操作失败');
}
$class=obj_name($cla);
$class='班级：'.$class;
$cla='1010101';*/
$num=$_GET['iidd2'];
//$num='201392503039';
//echo $num;
$sql="select stu_gra,user_name,stu_sex,entrydate,gradate from user_stu where stu_id='$num'";
$query=mysql_query($sql);
$re=mysql_fetch_assoc($query);
$re['stu_gra']=encoding($re['stu_gra']);
$re['user_name']=encoding($re['user_name']);
$re['stu_sex']=encoding($re['stu_sex']);
$re['entrydate']=encoding($re['entrydate']);
$re['gradate']=encoding($re['gradate']);
$class=obj_name($re['stu_gra']);
$class=encoding($class);
$filenm=$re['user_name'];
//$filenm=encoding($filenm);
$filenm=$filenm.'成绩单.xls';
date_default_timezone_set('PRC');
$year=date('Y');
$term=array();
$sql="select distinct cou_term from cou_choose where cou_choose_stu='$num'";
$query=mysql_query($sql);
while($ret=mysql_fetch_row($query)){
    array_push($term,$ret[0]);
    //echo('<p>'.$ret[0]);
}

$workbook = new Spreadsheet_Excel_Writer();
//$workbook->setVersion(8);


$format_title =& $workbook->addFormat();
$format_title->setBold();
$format_title->setSize('16');
$format_title->setAlign('merge');

$format_text =& $workbook->addFormat();
$format_text->setNumFormat('000000000000');
$format_text->setTop(2);
$format_text->setBottom(1);
$format_text->setRight(1);
$format_text->setLeft(1);
$format_text->setAlign('center');

$format_border=& $workbook->addFormat();
$format_border->setBorder(1);
$format_border->setAlign('center');

$format_border_t=& $workbook->addFormat();
$format_border_t->setTop(2);
$format_border_t->setBottom(1);
$format_border_t->setRight(1);
$format_border_t->setLeft(1);
$format_border_t->setAlign('center');

$format_border_b=& $workbook->addFormat();
$format_border_b->setTop(1);
$format_border_b->setBottom(2);
$format_border_b->setRight(1);
$format_border_b->setLeft(1);
$format_border_b->setAlign('center');

$format_border_l_c=& $workbook->addFormat();
$format_border_l_c->setTop(1);
$format_border_l_c->setBottom(1);
$format_border_l_c->setRight(1);
$format_border_l_c->setLeft(2);
$format_border_l_c->setAlign('center');

$format_border_l_1=& $workbook->addFormat();
$format_border_l_1->setTop(1);
$format_border_l_1->setBottom(1);
$format_border_l_1->setRight(1);
$format_border_l_1->setLeft(2);

$format_border_l=& $workbook->addFormat();
$format_border_l->setBorder(1);

$format_border_l_t=& $workbook->addFormat();
$format_border_l_t->setTop(2);
$format_border_l_t->setBottom(1);
$format_border_l_t->setRight(1);
$format_border_l_t->setLeft(1);

$format_border_o_r=& $workbook->addFormat();
$format_border_o_r->setRight(1);
$format_border_o_r->setLeft(0);

$format_border_o_l=& $workbook->addFormat();
$format_border_o_l->setRight(0);
$format_border_o_l->setLeft(1);

$format_border_no=& $workbook->addFormat();
$format_border_no->setBorder(0);
$format_border_no->setAlign('right');

$worksheet =& $workbook->addWorksheet();
//$worksheet->setLandscape();
//$wordsheet->setPaper(9);
//$worksheet->setInputEncoding('utf-8'); 
//$worksheet->setInputEncoding('utf-8');
$worksheet->setInputEncoding('ISO-8859-7');

$worksheet->write(0, 0, "烟台大学留学生学习成绩单", $format_title);
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

$worksheet->write(1, 0, "姓名", $format_border_t);
$worksheet->write(1, 1, $re['user_name'], $format_border_t);
$worksheet->write(1, 2, "学号", $format_border_t);
$worksheet->write(1, 3, "$num", $format_text);
$worksheet->write(1, 4, "", $format_text);
$worksheet->write(1, 5, "性别", $format_border_t);
$worksheet->write(1, 6, $re['stu_sex'], $format_border_t);
$worksheet->write(1, 7, "院系", $format_border_t);
$worksheet->write(1, 8, "国际教育交流学院", $format_border_t);
$worksheet->write(1, 9, "专业", $format_border_t);
$worksheet->write(1, 10, "汉语言", $format_border_t);
$worksheet->write(1, 11, "", $format_border_t);

$worksheet->write(2, 0, "班级", $format_border_b);
$worksheet->write(2, 1, $class, $format_border_b);
$worksheet->write(2, 2, "入学日期", $format_border_b);
$worksheet->write(2, 3, "", $format_border_b);
$worksheet->write(2, 4, $re['entrydate'], $format_border_b);
$worksheet->write(2, 5, "", $format_border_b);
$worksheet->write(2, 6, '毕业日期', $format_border_b);
$worksheet->write(2, 7, "", $format_border_b);
$worksheet->write(2, 8, $re['gradate'], $format_border_b);
$worksheet->write(2, 9, "学制", $format_border_b);
$worksheet->write(2, 10, "", $format_border_b);
$worksheet->write(2, 11, "", $format_border_b);

$worksheet->write(3, 0, "课程名", $format_border);
$worksheet->write(3, 1, '', $format_border);
$worksheet->write(3, 2, '', $format_border);
$worksheet->write(3, 3, "", $format_border);
$worksheet->write(3, 4, "学分", $format_border);
$worksheet->write(3, 5, '成绩', $format_border);
$worksheet->write(3, 6, "属性", $format_border);
$worksheet->write(3, 7, '课程名', $format_border);
$worksheet->write(3, 8, "", $format_border_l_c);
$worksheet->write(3, 9, "学分", $format_border);
$worksheet->write(3, 10, "成绩", $format_border);
$worksheet->write(3, 11, "属性", $format_border);

$worksheet->mergeCells(1,3,1,4);
$worksheet->mergeCells(1,10,1,11);

$worksheet->mergeCells(2,2,2,3);
$worksheet->mergeCells(2,4,2,5);
$worksheet->mergeCells(2,6,2,7);
$worksheet->mergeCells(2,10,2,11);

$worksheet->mergeCells(3,0,3,3);
//$worksheet->mergeCells(3,4,3,5);
$worksheet->mergeCells(3,7,3,8);

$worksheet->setColumn(0,0,4);
$worksheet->setColumn(1,1,8);
$worksheet->setColumn(2,2,4);
$worksheet->setColumn(3,5,6);
$worksheet->setColumn(6,6,4);
$worksheet->setColumn(7,7,6);
$worksheet->setColumn(8,8,16);
$worksheet->setColumn(9,10,6);
$worksheet->setColumn(11,11,4);
//$worksheet->mergeCells(3,10,3,11);

$kk=4;
//$jj=0;
$hh=4;
$total=0;
foreach($term as $value){
    //echo('<p>'.$value);
    $sql="select a.cou_name,a.cou_credit,a.cou_stu_mark,b.cou_type from cou_choose as a left join cou_app_record as b on a.cou_id=b.cou_id where a.cou_choose_stu='$num' and a.cou_term='$value'";
    
    $query=mysql_query($sql);
    
    $ii=0;
   // $vv1=str_replace('第二学期','-2',$value);
   // $vv1=str_replace('第一学期','-1',$vv1);
    
    while($re=mysql_fetch_assoc($query)){
	     $re['cou_name']=encoding($re['cou_name']);
		 $re['cou_credit']=encoding($re['cou_credit']);
		 $re['cou_stu_mark']=encoding($re['cou_stu_mark']);
		 $re['cou_type']=encoding($re['cou_type']);
         if($kk<40){
                if($ii==0){
                $worksheet->write($kk, 0, encoding($value), $format_border);
                $worksheet->write($kk, 3, '', $format_border_o_l);
                $worksheet->write($kk, 4, '', $format_border);
                $worksheet->write($kk, 5, '', $format_border);
                $worksheet->write($kk, 6, '', $format_border);
                $worksheet->write($kk, 7, '', $format_border);
                $worksheet->write($kk, 8, '', $format_border_l_1);
                $worksheet->write($kk, 9, '', $format_border);
                $worksheet->write($kk, 10, '', $format_border);
                $worksheet->write($kk, 11, '', $format_border);
                    $ii=1;
                    $kk++;
                }
                
                $worksheet->write($kk, 0, $re['cou_name'], $format_border_l);
                $worksheet->write($kk, 1, '', $format_border_l);
                $worksheet->write($kk, 2, '', $format_border_l);
                $worksheet->write($kk, 3, '', $format_border);
                $worksheet->write($kk, 4, $re['cou_credit'], $format_border);
                $worksheet->write($kk, 5, $re['cou_stu_mark'], $format_border);
                $worksheet->write($kk, 6, $re['cou_type'], $format_border);
                $worksheet->write($kk, 7, '', $format_border);
                $worksheet->write($kk, 8, '', $format_border_l_1);
                $worksheet->write($kk, 9, '', $format_border);
                $worksheet->write($kk, 10, '', $format_border);
                $worksheet->write($kk, 11, '', $format_border);
                
                $kk++;
                
            }
            else{
                if($ii==0){

                $worksheet->write($hh, 7, encoding($value), $format_border_l_1);
                $worksheet->write($hh, 8, '', $format_border_l_1);
                $worksheet->write($hh, 9, '', $format_border);
                $worksheet->write($hh, 10, '', $format_border);
                $worksheet->write($hh, 11, '', $format_border);
                    $ii=1;
                    $hh++;
                }
            

                $worksheet->write($hh, 7, $re['cou_name'], $format_border_l_1);
                $worksheet->write($hh, 8, '', $format_border_l_1);
                $worksheet->write($hh, 9, $re['cou_credit'], $format_border);
                $worksheet->write($hh, 10, $re['cou_stu_mark'], $format_border);
                $worksheet->write($hh, 11, $re['cou_type'], $format_border);
                
                $hh++;
            }
            if((int)$re['cou_stu_mark']>=60){
            $total=$total+(int)$re['cou_credit'];
            }        
        }        
            
}

$sql1="select distinct cou_term from before_cou where cou_choose_stu='$num' order by cou_term";
$query1=mysql_query($sql1);
while($re1=mysql_fetch_row($query1)){
    //echo('<p>'.$re1[0]);
    //array_push($term,$ret[0]);
        $ii=0;
        $sql="select cou_name,cou_credit,cou_stu_mark,cou_type from before_cou where cou_choose_stu='$num' and cou_term='$re1[0]'";
        //echo $sql;
        //$vv1=str_replace('第二学期','-2',$re1[0]);
        //$vv1=str_replace('第一学期','-1',$vv1);
		
        $query=mysql_query($sql);     
        while($re=mysql_fetch_assoc($query)){
			$re['cou_name']=encoding($re['cou_name']);
			$re['cou_credit']=encoding($re['cou_credit']);
			$re['cou_stu_mark']=encoding($re['cou_stu_mark']);
			$re['cou_type']=encoding($re['cou_type']);
            if($kk<40){
                if($ii==0){
                $worksheet->write($kk, 0, encoding($re1[0]), $format_border);
                $worksheet->write($kk, 3, '', $format_border_o_l);
                $worksheet->write($kk, 4, '', $format_border);
                $worksheet->write($kk, 5, '', $format_border);
                $worksheet->write($kk, 6, '', $format_border);
                $worksheet->write($kk, 7, '', $format_border);
                $worksheet->write($kk, 8, '', $format_border_l_1);
                $worksheet->write($kk, 9, '', $format_border);
                $worksheet->write($kk, 10, '', $format_border);
                $worksheet->write($kk, 11, '', $format_border);
                    $ii=1;
                    $kk++;
                }
            
                $worksheet->write($kk, 0, $re['cou_name'], $format_border_l);
                $worksheet->write($kk, 1, '', $format_border_l);
                $worksheet->write($kk, 2, '', $format_border_l);
                $worksheet->write($kk, 3, '', $format_border);
                $worksheet->write($kk, 4, $re['cou_credit'], $format_border);
                $worksheet->write($kk, 5, $re['cou_stu_mark'], $format_border);
                $worksheet->write($kk, 6, $re['cou_type'], $format_border);
                $worksheet->write($kk, 7, '', $format_border);
                $worksheet->write($kk, 8, '', $format_border_l_1);
                $worksheet->write($kk, 9, '', $format_border);
                $worksheet->write($kk, 10, '', $format_border);
                $worksheet->write($kk, 11, '', $format_border);
                
                $kk++;
                
            }
            else{
                if($ii==0){
                
                $worksheet->write($hh, 7, $re1[0], $format_border_l_1);
                $worksheet->write($hh, 8, '', $format_border_l_1);
                $worksheet->write($hh, 9, '', $format_border);
                $worksheet->write($hh, 10, '', $format_border);
                $worksheet->write($hh, 11, '', $format_border);
                
                    $ii=1;
                    $hh++;
                }
            
                
                $worksheet->write($hh, 7, $re['cou_name'], $format_border_l_1);
                $worksheet->write($hh, 8, '', $format_border_l_1);
                $worksheet->write($hh, 9, $re['cou_credit'], $format_border);
                $worksheet->write($hh, 10, $re['cou_stu_mark'], $format_border);
                $worksheet->write($hh, 11, $re['cou_type'], $format_border);
               
                
                $hh++;
            }
            if((int)$re['cou_stu_mark']>=60){
                    $total=$total+(int)$re['cou_credit'];
                }
    }
}
        

    
//}
$kk=max($kk,$hh);
$qqww=$kk;
for($ij=0;$ij<40-$qqww;$ij++){
        $worksheet->write($kk, 0, '', $format_border_l);
        $worksheet->write($kk, 1, '', $format_border_l);
        $worksheet->write($kk, 2, '', $format_border_l);
        $worksheet->write($kk, 3, '', $format_border);
        $worksheet->write($kk, 4, '', $format_border);
        $worksheet->write($kk, 5, '', $format_border);
        $worksheet->write($kk, 6, '', $format_border);
        $worksheet->write($kk, 7, '', $format_border);
        $worksheet->write($kk, 8, '', $format_border_l_1);
        $worksheet->write($kk, 9, '', $format_border);
        $worksheet->write($kk, 10, '', $format_border);
        $worksheet->write($kk, 11, '', $format_border);
        $kk++;
}
//$kk++;

for($mm=4;$mm<$kk;$mm++){
    $worksheet->mergeCells($mm,0,$mm,3);
    $worksheet->mergeCells($mm,7,$mm,8);
}




$kk1=$kk+1;
$kk2=$kk1+1;
$kk3=$kk2+1;
//$worksheet->mergeCells($kk,8,$kk2,8);
$worksheet->mergeCells($kk,9,$kk2,11);

$worksheet->write($kk, 0, '己获得总学分：', $format_border_t);
$worksheet->write($kk, 1, '', $format_border_t);
$worksheet->write($kk, 2, $total, $format_border_t);
$worksheet->write($kk, 3, '', $format_border_t);
$worksheet->write($kk, 4, '获得学位：', $format_border_t);
$worksheet->write($kk, 5, '', $format_border_t);
$worksheet->write($kk, 6, '', $format_border_t);
$worksheet->write($kk, 7, '院长签字：', $format_border_t);
$worksheet->write($kk, 8, '', $format_border_l_t);
$worksheet->write($kk, 9, '公章：', $format_border_t);
$worksheet->write($kk, 10, '', $format_border_t);
$worksheet->write($kk, 11, '', $format_border_t);

$worksheet->write($kk1, 0, '第二学位专业：', $format_border);
$worksheet->write($kk1, 1, '', $format_border);
$worksheet->write($kk1, 2, '', $format_border);
$worksheet->write($kk1, 3, '', $format_border);
$worksheet->write($kk1, 4, '获得学位：', $format_border);
$worksheet->write($kk1, 5, '', $format_border);
$worksheet->write($kk1, 6, '', $format_border);
$worksheet->write($kk1, 7, '', $format_border);
$worksheet->write($kk1, 8, '', $format_border);
$worksheet->write($kk1, 9, '', $format_border);
$worksheet->write($kk1, 10, '', $format_border);
$worksheet->write($kk1, 11, '', $format_border);

$worksheet->write($kk2, 0, '备注：', $format_border_b);
$worksheet->write($kk2, 1, '', $format_border_b);
$worksheet->write($kk2, 2, '', $format_border_b);
$worksheet->write($kk2, 3, '', $format_border_b);
$worksheet->write($kk2, 4, '', $format_border_b);
$worksheet->write($kk2, 5, '', $format_border_b);
$worksheet->write($kk2, 6, '', $format_border_b);
$worksheet->write($kk2, 7, '', $format_border_b);
$worksheet->write($kk2, 8, '', $format_border_b);
$worksheet->write($kk2, 9, '', $format_border_b);
$worksheet->write($kk2, 10, '', $format_border_b);
$worksheet->write($kk2, 11, '', $format_border_b);

$worksheet->mergeCells($kk,0,$kk,1);
$worksheet->mergeCells($kk,2,$kk,3);
$worksheet->mergeCells($kk,4,$kk,5);
//$worksheet->mergeCells($kk,8,$kk2,8);
//$worksheet->mergeCells($kk,9,$kk2,11);

$worksheet->mergeCells($kk1,0,$kk1,1);
$worksheet->mergeCells($kk1,2,$kk1,3);
$worksheet->mergeCells($kk1,4,$kk1,5);


$worksheet->mergeCells($kk2,0,$kk2,1);
$worksheet->mergeCells($kk2,2,$kk2,3);
$worksheet->mergeCells($kk2,4,$kk2,5);

$worksheet->mergeCells($kk,7,$kk2,8);
$worksheet->mergeCells($kk,9,$kk2,11);


$worksheet->write($kk3, 0, '制表日期：'.date('Y-m-d'), $format_border_no);
$worksheet->mergeCells($kk3,0,$kk3,11);


//$worksheet->write(3, 1, 0);

$workbook->send($filenm);
$workbook->close();
?>
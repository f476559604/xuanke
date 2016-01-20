<?php

//加载类
require_once 'Spreadsheet/Excel/Writer.php';
//初始化类
$workbook = new Spreadsheet_Excel_Writer(); 
//设置版本
$workbook->setVersion(8);
//设置字体
$format_title = & $workbook->addformat(array('Size'=>10,'Bold'=>1,'Color'=>'red'));
//添加一个工作表
$worksheet =& $workbook->addWorksheet('sheet-1');
//设置列宽
$worksheet->setColumn(0, 19, 13);
//冻结行列
$worksheet->freezePanes(array(3,5));
//追加数据
$worksheet->writeString(0, 0, '対象社員一覧（一次評価）',$format_title);
// 发送 Excel 文件名供下载
$workbook->send('demo.xls'); 
// 完成下载
$workbook->close();

?>
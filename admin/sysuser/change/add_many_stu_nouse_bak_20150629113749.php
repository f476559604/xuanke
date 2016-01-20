
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>PHPExcel Reader Example #01</title>

</head>
<body>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . '../excel_cla/');
include 'PHPExcel/IOFactory.php';
include 'add_user_fun.php';
$inputFileName=$_GET['name'];
//$inputFileName = './excel/stu_add.xls';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
print_r($sheetData);
foreach($sheetData as $key=>$value){
    if($key!='1'){
    $jud=add_stu_user($value['A'],$value['B'],$value['C'],$value['D'],$value['E'],$value['F'],$value['G'],$value['H'],$value['I'],$value['J'],$value['K'],$value['L'],$value['M'],$value['N'],$value['O'],$value['P']);
    }
}
if($jud){
    echo('<script>window.location.href="add_stu_up.php";alert("增加成功");</script>');
}
?>
<body>
</html>
<?
	require_once 'excel/reader.php';
	?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Time Sheet System----</title>
</head>
<body>
	<?
	$data = new Spreadsheet_Excel_Reader();		
	$data->setOutputEncoding('gbk');
	$data->read('data/milestone_example.xls');
	error_reporting(E_ALL ^ E_NOTICE);
	echo $data->sheets[0]['cells'][1][2];

?>
</body>
</html>


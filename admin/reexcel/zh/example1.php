﻿<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once 'excel/reader.php';

$data = new Spreadsheet_Excel_Reader();
//$data->setUTFEncoder('mb');
$data->setOutputEncoding('UTF-8');
$data->read('data/aa.xls');
?>
<html>
<head>
<style>
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:12px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align:bottom;
}
table.excel tbody th {
	text-align:center;
	width:20px;
}
table.excel tbody td {
	vertical-align:bottom;
}
table.excel tbody td {
    padding: 0 3px;
	border: 1px solid #EEEEEE;
}
</style>
</head>

<body>
<?php echo $data->dump(true,true); ?>
</body>
</html>

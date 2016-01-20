<?php
// Test CVS

require_once 'excel/reader.php';


// ExcelFile($filename, $encoding);
$data = new Spreadsheet_Excel_Reader();


// Set output Encoding.
//$data->setUTFEncoder('mb');
$data->setOutputEncoding('GB2312');


/***
* if you want you can change 'iconv' to mb_convert_encoding:
* $data->setUTFEncoder('mb');
*
**/

/***
* By default rows & cols indeces start with 1
* For change initial index use:
* $data->setRowColOffset(0);
*
**/



/***
*  Some function for formatting output.
* $data->setDefaultFormat('%.2f');
* setDefaultFormat - set format for columns with unknown formatting
*
* $data->setColumnFormat(4, '%.3f');
* setColumnFormat - set format for column (apply only to number fields)
*
**/

$data->read('data/不要动.xls');

/*


 $data->sheets[0]['numRows'] - count rows
 $data->sheets[0]['numCols'] - count columns
 $data->sheets[0]['cells'][$i][$j] - data from $i-row $j-column

 $data->sheets[0]['cellsInfo'][$i][$j] - extended info about cell
    
    $data->sheets[0]['cellsInfo'][$i][$j]['type'] = "date" | "number" | "unknown"
        if 'type' == "unknown" - use 'raw' value, because  cell contain value with format '0.00';
    $data->sheets[0]['cellsInfo'][$i][$j]['raw'] = value if cell without format 
    $data->sheets[0]['cellsInfo'][$i][$j]['colspan'] 
    $data->sheets[0]['cellsInfo'][$i][$j]['rowspan'] 
*/

error_reporting(E_ALL ^ E_NOTICE);
include"../../lw_inc/lw_conn.php";
//echo "$data->sheets[0]['cells'][1][2]";
for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
$sql='insert into before_cou(cou_choose_stu,stu_name,cou_name,cou_type,cou_credit,cou_stu_mark,cou_term) values(\''.$data->sheets[0]['cells'][$i][2].'\',\''.$data->sheets[0]['cells'][$i][1].'\',\''.$data->sheets[0]['cells'][$i][3].'\',\''.$data->sheets[0]['cells'][$i][4].'\',\''.$data->sheets[0]['cells'][$i][5].'\',\''.$data->sheets[0]['cells'][$i][6].'\',\''.$data->sheets[0]['cells'][$i][7].'\')';
echo $sql.'<br/>';
if(mysql_query($sql)){
    echo'ok<p>';
}
else echo('die');
}

//print_r($data);
//print_r($data->formatRecords);
?>

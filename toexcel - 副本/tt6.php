<?php
require_once 'Spreadsheet/Excel/Writer.php';

$workbook = new Spreadsheet_Excel_Writer('rowcol.xls');
$worksheet1 =& $workbook->addWorksheet("rowcol");

$first = 1;
$last = 10;
for ($i = $first; $i <= $last; $i++) {
$worksheet1->write($i, 1, $i);
}
$cell1 = Spreadsheet_Excel_Writer::rowcolToCell($first, 1);
$cell2 = Spreadsheet_Excel_Writer::rowcolToCell($last, 1);
$worksheet1->write($last + 1, 0, "Total =");
$worksheet1->writeFormula($last + 1, 1, "=SUM($cell1:$cell2)");
$workbook->close();
?>
 <?php
require_once 'Spreadsheet/Excel/Writer.php';

  $workbook = new Spreadsheet_Excel_Writer();
  // creating the formats
  $format_superscript =& $workbook->addFormat();
  $format_superscript->setScript(1);
  $format_subscript =& $workbook->addFormat();
  $format_subscript->setScript(2);

  $worksheet =& $workbook->addWorksheet();
  $worksheet->write(0, 0, "This is superscript", $format_superscript);
  $worksheet->write(1, 0, "This is subscript", $format_subscript);
  $workbook->send('111.xls');
$workbook->close();
?> 
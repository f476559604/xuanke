
<?
$words="一中";
function ex($str){return "[".$str."]";}
require_once("gbk2utf8.php");

$qswh=new qswhGBK("qswhGBK.php");//如果文件名是qswhGBK.php,可省参数

echo("<xmp>不带参数:".$qswh->gb2u($words));
echo("\n调用内置函数htmlHex:".$qswh->gb2u($words,1));
echo("\n调用内置函数htmlDec:".$qswh->gb2u($words,2));
echo("\n调用内置函数escape:".$qswh->gb2u($words,3));
echo("\n调用内置函数u2utf8:".$qswh->gb2u($words,4));
echo("\n调用自定义函数:".$qswh->gb2u($words,ex));
?>
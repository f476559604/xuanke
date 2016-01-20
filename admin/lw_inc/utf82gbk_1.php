
<?
require_once("utf82gbk.php");
$qswh=new qswhU("qswhU.php");//濡傛灉鏂囦欢鍚嶆槸qswhU.php,鍙渷鍙傛暟
echo "<xmp>涓嶅甫鍙傛暟(榛樿杩囨护涓猴細&#[num];):";
echo "\n".$qswh->decode("鍒樼倻&#x41;&#x62;&#x63;");
echo "\n".$qswh->decode("鍒樼倻&#65;&#98;&#99;");
echo "\n璋冪敤鍐呯疆杩囨护(UTF杞爜):".$qswh->decode("%E5%88%98%E7%82%9C'()*%2B%2C%2F%3A%3B%3C%3D%3E%3F%40%5B%5D%5E%60%7B%7C%7D~%25Abc",1);
echo "\n璋冪敤鍐呯疆杩囨护unescape(%u[num]):".$qswh->decode("%u4E2D%u6587Abc",2);
echo "\n鑷畾涔夎繃婊?[x+num]):".$qswh->decode("[x4E2D][x6587][x41][x62][x63]","/\[(\w+)\]/");

?>
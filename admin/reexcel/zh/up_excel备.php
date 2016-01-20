<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>鏃犳爣棰樻枃妗?/title>  
<style type="text/css">  
#test{height:expression(eval(document.documentElement.clientWidth)); background:#999;}  
  
</style>  
  
  
</head>  
  
<body>  
<?php  
//print_r($_FILES);  
if(move_uploaded_file($_FILES['file']['tmp_name'],'./uploads/up.xls'))//涓婁紶鏂囦欢锛屾垚鍔熻繑鍥瀟rue  
    {echo '涓婁紶鎴愬姛';  
    }  
    else  
    {echo '涓婁紶澶辫触';}  
$db_server="localhost";   
$db_user_name="xx";   
$db_user_password='xx';   
$db_name="xx";//琛ㄥ悕   
$conn=mysql_connect($db_server,$db_user_name,$db_user_password);   
mysql_query("SET NAMES UTF8");   
mysql_select_db($db_name, $conn);  
require_once 'excel_reader2.php';//寮曠敤鏂囦欢  
$data = new Spreadsheet_Excel_Reader();  
//璁剧疆鏂囨湰杈撳嚭缂栫爜  
$data->setOutputEncoding('UTF-8');   
$data->read("./uploads/up.xls");//璇诲彇excel  
$arr=array();  
$arb=array();  
$wmark=0;  
$name;  
$email;  
$post;//鑱屼綅  
$written='0';  
$exam;//  
$permission='0';  
$ip='xx';  
$date='xx';  
for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {  
//鏄剧ず姣忎釜鍗曞厓鏍煎唴瀹? 
$arr[$data->sheets[0]['cells'][$i][1]]=$data->sheets[0]['cells'][$i][2];  
$arb[$data->sheets[0]['cells'][$i][1]]=$data->sheets[0]['cells'][$i][3];  
}   
foreach($arr as $k => $v){//閬嶅巻鏁扮粍淇敼鏁版嵁搴? 
    $existsql = "SELECT email FROM xx WHERE email='$k' LIMIT 1";  
    $exist = mysql_query($existsql);  
    $row = mysql_fetch_array($exist, MYSQL_ASSOC);  
    if (!mysql_num_rows($exist))  //鍒ゆ柇鏁版嵁鏄惁瀛樺湪  
        {    
            if(!empty($k))//涓嶅瓨鍦紝鎻掑叆  
                {  
                    $dsql = "INSERT INTO kids_user (name,email,post,written,exam,ip,date) VALUES ('$v','$k','$post','$written','$exam','$ip',NOW())";  
                    $email = mysql_query($dsql);  
                    //echo $dsql;  
                }  
foreach($arb as $kl => $vl){  
    $existsql = "SELECT email FROM xx WHERE email='$kl' LIMIT 1";  
    $exist = mysql_query($existsql);  
    if($exist){  
        $emailadd = "UPDATE xx SET post='$vl' WHERE email='$kl'";  
        $email = mysql_query($emailadd);  
    }  
    unlink('./uploads/up.xls');//鍒犻櫎鏂囦欢  
      
}  
echo "\n";  
echo '娣诲姞鎴愬姛';  
  
?>  
<meta http-equiv="Refresh" content="2; url=http://xxx.xxx.com" /><!--2绉掑悗璺宠浆鏌愰〉闈?->   
</body>  
</html>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
	成绩查询
</title>
</head>
<script type="text/javascript" lang="javascript">
window.onload=veiw_score;
function veiw_score(){
    var btn=document.getElementById('submit');
    btn.click();
    btn.click();
}
</script>
<body>
<form action="stu_score_view.php" method="post">
<input name="view_con" type="text" value="all"/>
<input  type="submit" id="submit"/>
</form>
</body>
</html>
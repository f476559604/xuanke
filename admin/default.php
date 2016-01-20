<?php
header("Content-type:text/html;charset=utf-8");
include "lw_inc/judge.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>国际教育交流学院</title>

    <script language="javascript">
        if(self!=top){top.location=self.location;}
    </script>

    <script language="javascript"> 
        <!--
        /*屏蔽所有的js错误*/
        function killerrors() { 
        return true; 
        } 
        window.onerror = killerrors; 
        //-->
    </script>

</head>
<frameset rows="90,*,30" cols="*" framespacing="0" frameborder="no" border="0">
  <frame src="lw_top.php" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" />
  <frame src="lw_center.html" name="mainFrame" id="mainFrame" />
  <frame src="lw_down.html" name="bottomFrame" scrolling="No" noresize="noresize" id="bottomFrame" />
</frameset>
<noframes>
    <body>
    </body>
</noframes>
</html>

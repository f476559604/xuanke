﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>中国绿色厨房计划</title>
<script language=javascript>     
function printsetup(){
    //  打印页面设置
    wb.execwb(8,1);   
}
function printpreview(){
    //  打印页面预览
    wb.execwb(7,1);
}
function printit(){
  if (confirm('确定打印吗？')){
    wb.ExecWB(6,1)
    //wb.execwb(1,1)//打开
    //wb.ExecWB(2,1);//关闭现在所有的IE窗口，并打开一个新窗口
    //wb.ExecWB(4,1)//;保存网页
    //wb.ExecWB(6,1)//打印
    //wb.ExecWB(7,1)//打印预览
    //wb.ExecWB(8,1)//打印页面设置
    //wb.ExecWB(10,1)//查看页面属性
    //wb.ExecWB(15,1)//好像是撤销，有待确认
    //wb.ExecWB(17,1)//全选
    //wb.ExecWB(22,1)//刷新
    //wb.ExecWB(45,1)//关闭窗体无提示
  }
}
</script> 
</head>
<body>
<div style="width:640px;height:20px;margin:100px auto 0 auto;font-size:12px;text-align:right;">
        <input value="打印" type="button" onclick="javascript:window.print()" />
        <OBJECT classid="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2" height="0" id="wb" name="wb" width="0">
        
        <input type=button name=button_print  value="打印本单据" onclick="javascript:printit()">
        <input type=button name=button_setup value="打印页面设置" onclick="javascript:printsetup();">
        <input type=button name=button_show value="打印预览" onclick="javascript:printpreview();">
        <input type=button name=button_fh value="关闭" onclick="javascript:window.close();">
        </OBJECT>
</div>
<div style="width:640px;height:624px;margin:20px auto;">
  <img src="images/money.jpg" />
</div>
<input name="Button onClick=document.all.WebBrowser.ExecWB(6,1)" type="button" value="打印"/>
<OBJECT classid="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2" height="0" id="WebBrowser" width="0"></OBJECT> 
</body>
</html>
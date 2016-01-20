<script language="javascript">
function preview(oper)
{
if (oper < 10){
bdhtml=window.document.body.innerHTML;//获取当前页的html代码
sprnstr="<!--startprint"+oper+"-->";//设置打印开始区域
eprnstr="<!--endprint"+oper+"-->";//设置打印结束区域
prnhtml=bdhtml.substring(bdhtml.indexOf(sprnstr)+18); //从开始代码向后取html
prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));//从结束代码向前取html
window.document.body.innerHTML=prnhtml;
window.print();
window.document.body.innerHTML=bdhtml;
} else {
window.print();
}
}
</script>
fdsfsdfsdfdsfsdfdsssssssssssss
<!--startprint1-->
<!--打印内容开始-->
<div id="sty">
    ...sd2222222222
</div>
<!--打印内容结束-->
<!--endprint1-->
---------------------------------------------
最后加上一个打印的按钮
<input type="button" name='button_export' title='打印1' onclick="preview(1)" value="打印1">
<html>　 　　   
  
<head>　 　　   
  
<title>我的第一个打印文档</title>　 　　   
  
　　   
  
<!--　插入打印控件　-->　 　　   
  
<OBJECT ID="jatoolsPrinter"　CLASSID="CLSID:B43D3361-D975-4BE2-87FE-057188254255"　codebase="jatoolsPrinter.cab#version=2,1,0,3"></OBJECT>　 　　   
  
<script>　 　　   
  
function　doPrint()　 　　   
  
{　 　　   
  
　　　　　　　myreport　=　{　　 　　   
  
　　print_settings:{　 　　   
  
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　//　如果想使用默认打印机,不需要设置　 　　   
  
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　//　printer:　'联想激打',　 　　   
  
　　   
  
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　//　指定纸张的高宽以毫米为单位z,本设置实际是指定为a4大小　 　　   
  
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　pageWidth　:　2100,　 　　   
  
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　pageHeight　:　2970,　 　　   
  
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　//　指定打打印方向为横向,　1/2　=　纵向/横向　 　　   
  
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　orientation　:　2　},　 　　   
  
　　　　documents:document,　　　//　要打印的div　对象在本文档中，控件将从本文档中的　id　为　'page1'　的div对象，作为首页打印　 　　   
  
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　//　id　为　'page2'　的作为第二页打印　 　　   
  
　　　　　　　　copyrights:'杰创软件拥有版权　www.jatools.com'　　　　　　　　　//　版权声明,必须　 　　   
  
　　　　　　　　};　 　　   
  
　　　　　　　jatoolsPrinter.printPreview(myreport);　　//　预览　　　　　　　 　　   
  
}　　 　　   
  
</script>　 　　   
  
</head>　 　　   
  
<body bgcolor="#e0e0e0">　 　　   
  
　　   
  
<div id='page1' style='background:#ffffff;margin:10;width:270;height:450;float:left'>文档第一页</div>　 　　   
  
<div id='page2' style='background:#ffffff;margin:10;width:270;height:450;float:left'>文档第二页</div>　 　　   
  
　　   
  
<input type="button" value="按钮" onclick='doPrint()'>　 　　   
  
</body>　 　　   
  
</html>　　　　
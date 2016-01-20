<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	新闻管理
</title>

<link type="text/css" rel="stylesheet" href="../style/jquery/jquery_dialog.css" /><link href="../style/green/skin.css" rel="stylesheet" type="text/css" /></head>
<body>
<form name="Form1" method="post" action="newslist.aspx" id="Form1">





  <div id="UpdatePanel1">
	
      <div class="divTbg">
        <div class="divTbgL"> </div>
        <div class="divTbgInfo">
          <div class="divTbgTitle"> 新闻管理</div>
        </div>
      </div>
      <div class="divTbgF"> </div>
      <div class="divInfo">
        <div class="divInfoTopList">
          <div class="listLeft">
            <ul>
              <li>
                <div> <img src="../style/green/images/index.gif" /></div>
              </li>
              <li>新闻列表</li>
            </ul>
          </div>
          <div class="listRight">
        
          </div>
        </div>
        <div class="divInfoContext">
          <div style="font: 2px; line-height: 2px;"> &nbsp;</div>
          <div>
		<table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">
			<tr class="SkyTDTopLine" align="center">
				<th scope="col">序号</th><th scope="col">新闻标题</th><th scope="col">新闻流量</th><th scope="col">发布人</th><th scope="col">建立时间</th><th scope="col">建立IP</th><th scope="col">修改</th>
			</tr><tr class="SkyTDLine" align="center">
				<td class="itemStyle1">3</td><td>1231232131322222222</td><td>5</td><td>1759</td><td></td><td>127.0.0.1</td><td class="itemStyle10"><a onclick="return SysOpen('newsmanage.aspx?id=3');" href="javascript:__doPostBack('gvInfo','modify$0')">[修改]</a></td>
			</tr><tr class="SkyTDLine" align="center">
				<td class="itemStyle1">2</td><td>22220077</td><td>4</td><td>admin</td><td></td><td>127.0.0.1</td><td class="itemStyle10"><a onclick="return SysOpen('newsmanage.aspx?id=2');" href="javascript:__doPostBack('gvInfo','modify$1')">[修改]</a></td>
			</tr><tr class="SkyTDLine" align="center">
				<td class="itemStyle1">1</td><td></td><td>2</td><td>admin</td><td></td><td>127.0.0.1</td><td class="itemStyle10"><a onclick="return SysOpen('newsmanage.aspx?id=1');" href="javascript:__doPostBack('gvInfo','modify$2')">[修改]</a></td>
			</tr>
		</table>
	</div>
          <div class="divInfoRight">
            <div id="Pager" style="text-align:right;">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td align="left" valign="bottom" nowrap="true" style="width:40%;">共 <B>1</B> 页，当前为第 <B>1</B> 页，每页 <B>10</B> 条</td><td align="right" valign="bottom" nowrap="true" style="width:60%;"><a disabled="disabled">首页</a><a disabled="disabled">前一页</a><a disabled="disabled">后一页</a><a disabled="disabled">尾页</a>&nbsp;&nbsp;转到<input type="text" value="1" disabled="disabled" name="Pager_input" id="Pager_input" onkeydown="ANP_keydown(event,'Pager_btn');" style="width:30px;" />页<input type="submit" value="" name="Pager" id="Pager_btn" disabled="disabled" onclick="if(ANP_checkInput('Pager_input',1)){__doPostBack('Pager','')} else{return false}" /></td>
	</tr>
</table>
</div>


          </div>
        </div>
      </div>
      
    
</div>
  <div id="UpdateProgress1" style="display:none;">
	
      <div id="divLoading"> <img src="/admin/images/loading.gif" /> </div>
    
</div>



</form>
</body>
</html>

<html xmlns="http://www.w3.org/1999/xhtml" >
<head id="Head1">
<title>退出系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="style/green/skin.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<form id="Form1">
  <div id="tbMain">
    <div class="divTbg">
      <div class="divTbgL"></div>
      <div class="divTbgInfo">
        <div class="divTbgTitle"><span class="tableTBig">退出系统</span></div>
      </div>
    </div>
    <div class="divTbgF"></div>
    <div id="mypanel">
      <div class="divInfo" id="ddiv1">
        <div class="divInfoContext"><br/>
          <div class="divSave">
            <input type="button" id="BtnLogin" value="退出系统" class="SkyButtonFocus" onclick="BtnLogin_Click()"/>
          </div>
          <br/>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
<script lang="javascript">
    function BtnLogin_Click(){
        if(confirm('确定要退出系统吗?')){
             window.location.href='lw_exit_ok.php';
        } 
    }
</script>
</html>

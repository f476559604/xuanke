function SkyShowInfoURL(info,url)
{
	window.alert(info);
	SkyOprnUrl(url);
}
function SkyOprnUrl(url)
{
  var redirectUrl = url ;
  var width = screen.width ;
  var height = screen.height ;
  if (height == 768 ) height -= 75 ;
  if (height == 600 ) height -= 60 ;
  var szFeatures = "top=0," ; 
  szFeatures +="left=0," ;
  szFeatures +="width="+width+"," ;
  szFeatures +="height="+height+"," ; 
  szFeatures +="directories=no," ;
  szFeatures +="status=yes," ;
  szFeatures +="menubar=no," ;
  if (height <= 600 ) szFeatures +="scrollbars=yes," ;
  else szFeatures +="scrollbars=no," ;
  szFeatures +="resizable=yes" ; //channelmode
 var open_flag=window.open(redirectUrl,"",szFeatures);
 //alert(open_flag);
//return false;
 if(open_flag== null) {
   window.location.href=url;
 }
 else
 {
	window.opener="绩效考核 、服务评价综合系统 建议使用1024*768分辨率";
    window.close();
 }
  //不提示的关闭窗口
  window.opener="绩效考核 、服务评价综合系统 建议使用1024*768分辨率";
 // window.close();
}

function $(id)
	{
	   return document.getElementById(id);
	}
	function SkyUserLogin()
	{
		var submitok;
		submitok=0;
		var s;
		s=$("UserID1");
		if(s.value=="" ||s.value.length < 6 || s.value.length >16){
			window.alert('教务管理系统提示您：用户编号不能为空，请输入教师编号，学生学号，或者管理员编号！');
			s.focus();
			return false;
		}
		s=$("UserPwd1");
		if(s.value=="" || s.value.length < 6 ||s.value.length >16){
			window.alert('教务管理系统提示您：请输入密码，密码要6-16位');
			s.focus();
			return false;
		}
	  return true;
	}
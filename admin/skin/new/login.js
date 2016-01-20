//================================================================================
        //创建日期：2010年01月10日
        //作    者：悠索科技
        //最后更新：2010年01月10日
        //更新作者：悠索科技
        //版    权：黑龙江悠索工作室·版权所有
        //================================================================================
        function $(id) {
            return document.getElementById(id);
        }
        function SkyUserLogin() {
            var submitok;
            submitok = 0;
            var s;
            s = $("UserID1");
            if (s.value == "" || s.value.length < 6 || s.value.length > 20) {
                window.alert('教务管理系统提示您：用户编号错误，请重新输入！');
                s.focus();
                return false;
            }
            s = $("UserPwd1");
            if (s.value == "" || s.value.length < 6 || s.value.length > 20) {
                window.alert('教务管理系统提示您：用户密码错误，请重新输入');
                s.focus();
                return false;
            }
            return true;
        }

if(self!=top){top.location=self.location;}
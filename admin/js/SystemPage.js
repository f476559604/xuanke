//################################################
//代码功能：取得指定控件的getElementById
//编写时间：2008-12-13
//################################################

function $1(id) {
    return document.getElementById(id);
}

//################################################
//代码功能：对全部select进行选择和反向选择
//编写时间：2008-12-13
//################################################

function skySelectCheckList() {
    //alert();
    var slist;
    slist = $1("checkSelect");
    var t;
    var nName;
    t = slist.checked;
    var dom = document.getElementsByTagName("*");
    var el = event.srcElement ? event.srcElement : event.target;
    for (i = 0; i < dom.length; i++) {
        if (dom[i].tagName == "INPUT" && dom[i].type.toLowerCase() == "checkbox") {
            nName = dom[i].id;
            if (nName.indexOf("chkSelect") != -1) {
                if (dom[i].disabled == "")
                    dom[i].checked = t;
            }
            if (nName.indexOf("chkIsMakeup") != -1) {
                if (dom[i].disabled == "")
                    dom[i].checked = t;
            }
            
        }
    }
}

//################################################
//代码功能：系统功能提示
//编写时间：2008-12-13
//################################################

function skyDataGridList(id) {
    var info;
    if (id == 1) { info = "您确认要增加新数据吗？"; }
    else if (id == 2) { info = "您确认要修改新数据吗？"; }
    else if (id == 3) { info = "您确认要删除新数据吗？"; }
    else {
        SysOpen(id);
        return false;
    }
    return SkyShowConfirm("系统提示您：" + info);
}

function SkyShowConfirm(info) {
    return window.confirm(info);
}


//################################################
//代码功能：表格颜色控制
//编写时间：2008-12-13
//################################################
var highlightcolor = '#c1ebff';
var clickcolor = '#51b2f6';

function changeto() {
    source = event.srcElement;
    if (source.tagName == "TR" || source.tagName == "TABLE")
        return;
    while (source.tagName != "TD")
        source = source.parentElement;
    source = source.parentElement;
    cs = source.children;
    if (cs[1].style.backgroundColor != highlightcolor && source.id != "nc" && cs[1].style.backgroundColor != clickcolor)
        for (i = 0; i < cs.length; i++) {
        cs[i].style.backgroundColor = highlightcolor;
    }
}

function changeback() {
    if (event.fromElement.contains(event.toElement) || source.contains(event.toElement) || source.id == "nc")
        return
    if (event.toElement != source && cs[1].style.backgroundColor != clickcolor)
    //source.style.backgroundColor=originalcolor
        for (i = 0; i < cs.length; i++) {
        cs[i].style.backgroundColor = "";
    }
}

function clickto() {
    source = event.srcElement;
    if (source.tagName == "TR" || source.tagName == "TABLE")
        return;
    while (source.tagName != "TD")
        source = source.parentElement;
    source = source.parentElement;
    cs = source.children;
    //alert(cs.length);
    if (cs[1].style.backgroundColor != clickcolor && source.id != "nc")
        for (i = 0; i < cs.length; i++) {
        cs[i].style.backgroundColor = clickcolor;
    }
    else
        for (i = 0; i < cs.length; i++) {
        cs[i].style.backgroundColor = "";
    }
}
//#################################################################################################################
//################################################
//代码功能：取得文档信息
//编写时间：2008-12-13
//################################################
function SkyOpen(src) {
    SkyOpen(src,"imaSpic")
}

function SkyOpen(src,sid) {
    var res;
    res = showModalDialog('/admin/document/documentindex.aspx', 'sky', 'dialogWidth: 900px; dialogHeight: 800px; center: yes; resizable: no; scroll: no; status: no;');
    //alert(res)
    if (res == undefined) {
        window.alert("系统提示您：您没有选择相关需要的信息！");
    }
    else {

        try {
            var m = $1(src)
            //alert(res);
            m.value = res;
            $1(sid).src=res;
        }
        catch (e) {
            alert(e);
        }
    }
}

function SkyOpenxls(src) {
    var res;
    res = showModalDialog('/admin/document/documentindex.aspx', 'sky', 'dialogWidth: 900px; dialogHeight: 800px; center: yes; resizable: no; scroll: no; status: no;');
    //alert(res)
    if (res == undefined) {
        window.alert("系统提示您：您没有选择相关需要的信息！");
    }
    else {

        try {
            var m = $1(src)
            //alert(res);
            m.value = res;
        }
        catch (e) {
            alert(e);
        }
    }
}

function nchangeImg() {
    var img = document.getElementById("imgVerify");
    img.src = "/admin/skyRandomImages.aspx?" + Math.random();
    //var ctrl = document.getElementById("verifycode");
    //if (ctrl != null) {	ctrl.focus(); ctrl.select();}
}

function openwebinfo(url) {
    var k = window.showModalDialog(url, window, 'dialogWidth:750px;status:no;dialogHeight:600px');
}

function openuserinfo(url) {
    var k = window.showModalDialog(url, window, 'dialogWidth:800px;status:no;dialogHeight:700px');
}
function skycopyright() {
    var k = window.showModalDialog("/admin/skysoft.aspx", window, 'dialogWidth:500px;status:no;dialogHeight:300px');
}
//################################################
//代码功能：后台登陆功能
//编写时间：2009-03-15
//################################################

function SkyShowInfoURL(info, url) {
    window.alert(info);
    SkyOprnUrl(url);
}
function SkyOprnUrl(url) {
    var redirectUrl = url;
    var width = screen.width;
    var height = screen.height;
    if (height == 768) height -= 75;
    if (height == 600) height -= 60;
    var szFeatures = "top=0,";
    szFeatures += "left=0,";
    szFeatures += "width=" + width + ",";
    szFeatures += "height=" + height + ",";
    szFeatures += "directories=no,";
    szFeatures += "status=yes,";
    szFeatures += "menubar=no,";
    if (height <= 600) szFeatures += "scrollbars=yes,";
    else szFeatures += "scrollbars=no,";
    szFeatures += "resizable=yes"; //channelmode
    var open_flag = window.open(redirectUrl, "", szFeatures);
    //alert(open_flag);
    //return false;
    if (open_flag == null) {
        window.location.href = url;
    }
    else {
        window.opener = "高校教务管理系统";
        window.close();
    }
    //不提示的关闭窗口
    window.opener = "高校教务管理系统";
    // window.close();
}
function SkyShowDetail(id) {
    var url;
    url = "evaluationDetail.aspx?id=" + id
    var k = window.showModalDialog(url, window, 'dialogWidth:700px;status:no;dialogHeight:500px');
}
function killerrors() {
    return true;
}
window.onerror = killerrors;
//启用了关闭错误后AJAX就可以使用了，但是不能导出数据路，后期在弄吧；


//################################################
//代码功能：选择颜色功能
//编写时间：2009-04-04
//################################################
var sInitColor;
function callColorDlg(src, vl) {
    var sColor
    if (sInitColor == null) {
        sColor = dlgHelper.ChooseColorDlg();
    }
    else
    { sColor = dlgHelper.ChooseColorDlg(sInitColor); }

    sColor = sColor.toString(16);
    if (sColor.length < 6) {
        var sTempString = "000000".substring(0, 6 - sColor.length);
        sColor = sTempString.concat(sColor);
    }
    document.all[src].style.backgroundColor = '#' + sColor;
    document.all[vl].value = '#' + sColor;
    //document.all["TxtFont"].style.color = '#' + sColor;

    sInitColor = sColor;
}

function ShowHTML(txt, info) {
    //window.alert(info);
    var url;
    var m, mtxt;
    m = document.getElementById(txt);
    mtxt = m.value;
    url = "/admin/document/documentmul.aspx?p=" + escape(mtxt);
    var k = window.showModalDialog(url, window, 'dialogWidth:600px;status:no;dialogHeight:400px');
    if (k != undefined) { m.value = k; }
}
function upJs(ret) {
    var picname = window.showModalDialog("/admin/document/documentindex.aspx", window, "dialogWidth:900px;status:no;dialogHeight:800px");
    if (picname != undefined) {
        var s;
        s = document.getElementById(ret)
        s.value = picname;
    }
    else {
        alert("您没有上传文件")
    }
}
function upJs1(ret) {
    var picname = window.showModalDialog("/admin/document/documentindex.aspx", window, "dialogWidth:900px;status:no;dialogHeight:800px");
    if (picname != undefined) {
        var s;
        s = document.getElementById(ret)
        s.value = picname;
    }
    else {
        alert("您没有上传文件")
    }
}
function SetRandom(n) {
    SetRandom = Math.floor(Math.random() * n + 1)
}

function SkyView(src)
{
    var m = $1(src)
    if(m.value!="")
    {
        window.open(m.value);
    }
    else
    {
        alert("暂无数据，不能查看！");
    }
}
function SysOpen(url) {
    //JqueryDialog.Open('模式窗口', url, 200, 200);
    //return false;
    var w1 = window.open(url, null, 'scrollbars=yes,resizable=yes,width=800,height=100,top=200,left=200');
    w1.focus();
    return false;
    //var k = window.showModalDialog(url, window, 'dialogWidth:800px;status:no;dialogHeight:500px');
    //if(k!=undefined)
    //{

    //}

}
function SysOpenNew(url) {
    //JqueryDialog.Open('模式窗口', url, 200, 200);
    //return false;
    var w1 = window.open(url, 'new', 'scrollbars=yes,resizable=yes,width=800,height=600,top=200,left=200');
    w1.focus();
    return false;
    //var k = window.showModalDialog(url, window, 'dialogWidth:800px;status:no;dialogHeight:500px');
    //if(k!=undefined)
    //{

    //}

}
//################################################
//代码功能：页面加载调整大小
//编写时间：2009-07-14
//################################################
function win_onLoad() {
    if (self == top) {
        var width = document.all["tbMain"].offsetWidth;
        var height = document.all["tbMain"].offsetHeight;
        width = eval(width + 50);
        height = eval(height + 50);
        //window.parent.JqueryDialog.ChangeSize(width, height);
        //window.parent.JqueryDialog.SetTitle("");
        window.resizeTo(width, height);

        //var width = document.all["tbMain"].offsetWidth;    
        //var height = document.all["tbMain"].offsetHeight; 
        //width = eval(width + 260);
        //height = eval(height/2+30);
        //window.parent.JqueryDialog.ChangeSize(width, height);
        //window.parent.JqueryDialog.SetTitle("");
        // window.resizeTo(width,height);


    }
}
function addHeight() {
    var width = document.all["tbMain"].offsetWidth;
    var height = document.all["tbMain"].offsetHeight;
    width = eval(width + 260);
    height = eval(height / 2 + 300);
    window.parent.JqueryDialog.ChangeSize(width, height);
    window.parent.JqueryDialog.SetTitle("");
}
function SystemAJAXLoad() {
    $1("btnSearch").click();
    //window.alert("SystemAJAXLoad");
}

function CloseAJAXAlert(info) {
    window.alert(info);
    window.opener.SystemAJAXLoad();
    window.opener = null;
    window.close();
}
function AJAXAlert(info) {

    window.alert(info);
    window.opener.SystemAJAXLoad();
    window.opener = null;
    window.close();
    //SystemAJAXLoad(); 
    //window.parent.JqueryDialog.SubmitCompleted(info, true, false);

    //window.alert(info);
    //window.opener.SystemAJAXLoad(); 

}
//################################################
//代码功能：运行HTML代码
//编写时间：2009-09-22
//################################################
function SkyOpenRun_Code(ctlName, sTitle) {
    var code = $1(ctlName).value;
    var new_win = window.open("", "", "");
    new_win.status = $1(sTitle).value;
    new_win.document.title = $1(sTitle).value;
    new_win.opener = null;
    new_win.document.write(code);
    new_win.document.close();
}

function SkyOpenRun_Code(ctlName) {
    var code = $1(ctlName).innerHTML;
    var new_win = window.open("", "", "");
    new_win.opener = null;
    new_win.document.write(code);
    new_win.document.close();
}

function SkyOpenRun_CodeHTML(ctlName) {
    var code = $1(ctlName).innerHTML;
    var new_win = window.open("/admin/report/reporthtml.aspx?id=" + ctlName, "", "");
    //var new_win = window.open("", "", "");
    //new_win.opener = null;
    //alert(code);
    //new_win.document.getElementById("showInfo").innerHTML = code;
    //new_win.document.write(code);
    //new_win.document.close();
}

//################################################
//代码功能：修改默认指标的时候显示
//################################################

function SkyModalDialog() {
    var s1, s2;
    s1 = sGetSelect($1("drpDType"));
    s2 = $1("txtDvalue").value;
    var arg, url, res;

    //组装URL
    url = "evaluationlibedit.aspx" + "?ShowType=" + s1 + "&DefaultValue=" + escape(s2);
    para = "dialogWidth:500px;status:no;dialogHeight:420px";
    //window.alert(url);
    //打开模式窗口,显示数据
    res = ModalDialog(url, para);
    if (res != "") {
        //把返回的数据给文本框
        $1("txtDvalue").value = res;
    }
    return false;
}

//################################################
//代码功能：显示模式窗口
//################################################

function ModalDialog(url, para) {
    var arginfo;
    arginfo = window.showModalDialog(url, window, para);
    if (arginfo != null) {
        return arginfo;
    }
    else {
        return "";
    }
}

//################################################
//代码功能：取得Select选择的项目
//################################################

function sGetSelect(v) {
    var t;
    for (var i = 0; i < v.options.length; i++) {
        if (v.options[i].selected) {
            t = v.options[i].value;
            break;
        }
    }
    return t;
}

//################################################
//代码功能：弹出Confirm窗口
//################################################
function SkyConfirm(info) {
    return window.confirm(info);
}

//################################################
//代码功能：弹出Alert窗口
//################################################
function SkyAlert(info) {
    window.alert(info);
}

//################################################
//提交数据到页面
//################################################
function SkyJsSaveHTML(tid) {
    var sInfo;
    sInfo = frames.i8webEditor1.frames.i8webEditor.document.body.innerHTML;
    document.getElementById(tid).value = sInfo;
}
//################################################
//更新验证码
//################################################
function nchangeImg() {
    var img = document.getElementById("imgVerify");
    img.src = "/admin/checkCode.aspx?" + Math.random();
    // var ctrl = document.getElementById("verifycode");
    // if (ctrl != null) {	ctrl.focus(); ctrl.select(); }
}


//################################################
//代码功能：课程选择功能
//编写时间：2009-12-16
//################################################
function SkySelectCourse(txt, lable) {
    var res;
    res = showModalDialog('coursecomparisonselect.aspx', 'sky', 'dialogWidth: 500px; dialogHeight: 320px; center: yes; resizable: no; scroll: no; status: no;');
    //alert(res)
    if (res == undefined) {
        window.alert("系统提示您：您没有选择相关需要的信息！");
    }
    else {
        try {
            var mInfo;
            mInfo = res.split("&");
            var m = $1(txt)
            m.value = mInfo[0];
            var n = $1(lable)
            //n.innerHTML = mInfo[1];
        }
        catch (e) {
            alert(e);
        }
    }
}


//################################################
//代码功能：颜色选择功能
//编写时间：2009-12-19
//################################################
var sInitColor;
function callColorDlg(src, vl) {
    if (sInitColor == null)
        var sColor = dlgHelper.ChooseColorDlg();
    else
        var sColor = dlgHelper.ChooseColorDlg(sInitColor);
    sColor = sColor.toString(16);
    if (sColor.length < 6) {
        var sTempString = "000000".substring(0, 6 - sColor.length);
        sColor = sTempString.concat(sColor);
    }
    document.all[src].style.backgroundColor = '#' + sColor;
    document.all[vl].value = '#' + sColor;
    // document.all["TxtFont"].style.color = '#' + sColor;

    sInitColor = sColor;
}

//################################################
//代码功能：设置后台标题
//编写时间：2010-01-04
//################################################
function SoftTopParentName(t) {
    //alert(t);
    top.document.title = t;
}

function btnLtoR1()
{
    document.getElementById("btnLtoR").click();
}

function btnRtoL2()
{
    document.getElementById("btnRtoL").click();
}


//document.writeln("<script language='javascript' src='/admin/js/SystemSortTable.js'></script>");
//document.writeln("<script language='javascript' src='/admin/js/SystemDragTable.js'></script>");
//document.writeln("<script language='javascript' src='/admin/style/jquery/jquery.js'></script>);
//document.writeln("<script language='javascript' src='/admin/style/jquery/jquery_dialog.js'></script>);
//document.writeln("<script language='javascript' src='/admin/plug/jquerymessage/js/jmessage.js'></script>");
//document.writeln("<link type='text/css' rel='stylesheet' href='/admin/style/jquery/jquery_dialog.css' />);
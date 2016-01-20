function $id(id) {
    return document.getElementById(id);
}

//################################################
//代码功能：对全部select进行选择
//################################################
function skySelectCheckList() {
    
    var slist;
    slist = $id("chkselect");
    var t;
    var nName;
    t = slist.checked;
    var dom = document.getElementsByTagName("*");
    var el = event.srcElement ? event.srcElement : event.target;
    for (i = 0; i < dom.length; i++) {
        if (dom[i].tagName == "INPUT" && dom[i].type.toLowerCase() == "checkbox") {
            nName = dom[i].id;
            if (nName.indexOf("chkselect") != -1) {
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
//代码功能：对全部select进行反向选择
//################################################
function skySelectCheckListfx() {
    var slist;
    var nName;
    var dom = document.getElementsByTagName("*");
    var el = event.srcElement ? event.srcElement : event.target;
    for (i = 0; i < dom.length; i++) {
        if (dom[i].tagName == "INPUT" && dom[i].type.toLowerCase() == "checkbox") {
            nName = dom[i].id;
            if (nName.indexOf("chkselect") != -1) {
                if (dom[i].disabled == "")
                    dom[i].checked = !dom[i].checked;
            }
            
        }
    }
}

//################################################
//代码功能：获取select选择数量
//################################################
function skySelectCheckListNumber() {
    var slist;
    var nName;
    var iNumber=0;
    var dom = document.getElementsByTagName("*");
    var el = event.srcElement ? event.srcElement : event.target;
    for (i = 0; i < dom.length; i++) {
        if (dom[i].tagName == "INPUT" && dom[i].type.toLowerCase() == "checkbox") {
            nName = dom[i].id;
            if (nName.indexOf("chkselect") != -1) {
                if (dom[i].disabled == "")
                {
                    if(dom[i].checked){iNumber++;}
                }
                    
            }
            
        }
    }
    return iNumber;
}

function skySelectCheckListOneValue() {
    var slist;
    var nName;
    var iNumber=0;
    var sreturn="";
    var dom = document.getElementsByTagName("*");
    var el = event.srcElement ? event.srcElement : event.target;
    for (i = 0; i < dom.length; i++) {
        if (dom[i].tagName == "INPUT" && dom[i].type.toLowerCase() == "checkbox") {
            nName = dom[i].id;
            if (nName.indexOf("chkselect") != -1) {
                if (dom[i].disabled == "")
                {
                    if(dom[i].checked){
                        sreturn=dom[i].parentElement.title;
                    }
                }
                    
            }
            
        }
    }
    return sreturn;
}

//################################################
//代码功能：显示提示窗口
//################################################
function UsAlert(info)
{
    window.alert(info);
}

//################################################
//代码功能：显示提示窗口
//################################################
function UsConfirm(info)
{
    return window.confirm(info);
}


//################################################
//代码功能：系统功能提示
//编写时间：2008-12-13
//################################################

function UsDataGridList(id) {
    var info;
    if (id == 1) { info = "您确认要增加数据吗?"; }
    else if (id == 2) { info = "您确认要修改数据吗?"; }
    else if (id == 3) { info = "您确认要删除选择的数据吗?"; 
        var number=skySelectCheckListNumber();
        if(number==0)
        {
            info="您必须至少选择一条记录才能删除!";
            UsAlert(info);
            return false;
        }
    }
    else { UsSysOpen(id); return false;}
    return UsConfirm("系统提示您:" + info);
}
function UsDataGridListEdit(url) {
    var number=skySelectCheckListNumber();
        if(number!=1)
        {
            info="您只能选择一条记录才能修改!";
            UsAlert(info);
            return false;
        }
        else
        {
            var info=skySelectCheckListOneValue();
            
            UsSysOpen(url+"?id="+info); return false;
        }

}
function UsSysOpen(url) {
    var w1 = window.open(url, null, 'scrollbars=yes,resizable=yes,width=800,height=100,top=200,left=200');
    w1.focus();
    return false;
}



function win_onLoad() {
    if (self == top) {
        var width = document.all["tbMain"].offsetWidth;
        var height = document.all["tbMain"].offsetHeight;
        width = eval(width + 50);
        height = eval(height + 50);
        window.resizeTo(width, height);
    }
}





function AJAXAlert(info) {
    window.alert(info);
    window.opener.SystemAJAXLoad();
    window.opener = null;
    window.close();
}

function SystemAJAXLoad() {
    $id("btnSearch").click();
}







function gorefresh(info)
{
   window.alert("系统提示您："+info+" 程序将刷新操作效果！");
   // parent.mereload();
   // document.parentWindow.frames["leftFrame"].mereload();
   //parent.document.frames("leftFrame").mereload();
   //parent.location.href="/admin/system/menu.aspx";
   parent.location.reload(); 
}
// #################################################



function btnLtoR1()
{
    document.getElementById("btnLtoR").click();
}

function btnRtoL2()
{
    document.getElementById("btnRtoL").click();
}



function SkyView(src)
{
    var m = $id(src)
    if(m.value!="")
    {
        window.open(m.value);
    }
    else
    {
        alert("暂无数据，不能查看！");
    }
}

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
            var m = $id(src)
            //alert(res);
            m.value = res;
            //$1(sid).src=res;
        }
        catch (e) {
            alert(e);
        }
    }
}

function SkyOpenUpLoad(src,sid) {
    var res;
    res = showModalDialog('/admin/document/documentindex.aspx', 'sky', 'dialogWidth: 900px; dialogHeight: 800px; center: yes; resizable: no; scroll: no; status: no;');
    //alert(res)
    if (res == undefined) {
        window.alert("系统提示您：您没有选择相关需要的信息！");
    }
    else {

        try {
            var m = $id(src)
            //alert(res);
            m.value = res;
            var words = res.split('.')
            $id(sid).value="."+words[1];
        }
        catch (e) {
            alert(e);
        }
    }
}



















//################################################
//代码功能：选择颜色功能
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
    $id(src).style.backgroundColor = '#' + sColor;
    $id(vl).value = '#' + sColor;
    //document.all["TxtFont"].style.color = '#' + sColor;

    sInitColor = sColor;
}

function setColorDlg(vl,txtname)
{
    if($id(txtname).value!="")
    {
        $id(vl).style.backgroundColor =  $id(txtname).value;
    }
}

//################################################
//代码功能：运行HTML代码
//编写时间：2009-09-22
//################################################
function SkyOpenRun_Code(ctlName, sTitle) {
    var code = $id(ctlName).value;
    var new_win = window.open("", "", "");
    new_win.status = $id(sTitle).value;
    new_win.document.title = $id(sTitle).value;
    new_win.opener = null;
    new_win.document.write(code);
    new_win.document.close();
}

function SkyOpenRun_Code(ctlName) {
    var code = $id(ctlName).innerHTML;
    var new_win = window.open("", "", "");
    new_win.opener = null;
    new_win.document.write(code);
    new_win.document.close();
}

function SkyOpenRun_CodeHTML(ctlName) {
    var code = $id(ctlName).innerHTML;
    var new_win = window.open("/admin/report/reporthtml.aspx?id=" + ctlName, "", "");
}









var  highlightcolor='#d5f4fe';
//此处clickcolor只能用win系统颜色代码才能成功,如果用#xxxxxx的代码就不行,还没搞清楚为什么:(
var  clickcolor='#51b2f6';
function  changeto(){
source=event.srcElement;
if  (source.tagName=="TR"||source.tagName=="TABLE")
return;
while(source.tagName!="TD")
source=source.parentElement;
source=source.parentElement;
cs  =  source.children;
//alert(cs.length);
if  (cs[1].style.backgroundColor!=highlightcolor&&source.id!="nc"&&cs[1].style.backgroundColor!=clickcolor)
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor=highlightcolor;
}
}

function  changeback(){
if  (event.fromElement.contains(event.toElement)||source.contains(event.toElement)||source.id=="nc")
return
if  (event.toElement!=source&&cs[1].style.backgroundColor!=clickcolor)
//source.style.backgroundColor=originalcolor
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor="";
}
}

function  clickto(){
source=event.srcElement;
if  (source.tagName=="TR"||source.tagName=="TABLE")
return;
while(source.tagName!="TD")
source=source.parentElement;
source=source.parentElement;
cs  =  source.children;
//alert(cs.length);
if  (cs[1].style.backgroundColor!=clickcolor&&source.id!="nc")
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor=clickcolor;
}
else
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor="";
}
}

document.writeln("<script language='javascript' src='/admin/js/SystemOther.js'></script>");
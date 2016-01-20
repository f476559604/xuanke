///系统自动提供的几个正则表达式效果
function regCheckFunc(id, _sVal) {
    //  0非空验证
    //	1只能输入中文
    //	2只能输入数字
    //	3长度必须大于2位
    //	4Email验
    //	5手机验
    //	6邮政编码
    //	7URL验
    //	8时间验
    //	9身份证验
    //	10IP地址验
    //	11非零的正整数


    //1非空验证
    //2验证数字
    //3验证邮政编号
    //4验证URL地址
    //5验证QQ号
    //6验证手机号码
    //7验证用户名2-16字符
    //8Email验证
    //9中文验证
    //10验证2位数字
    //11验证4位数字
    //12验证逗号分隔的手机号码
    //13身份证号码
    //14验证8位数字
    //15验证10位数字
    //16验证数字

    var skyaPass = [];
    skyaPass[0] = !(regStrLength(_sVal) <= 0);
    skyaPass[1] = !(regStrLength(_sVal) <= 0);
    skyaPass[2] = /^[0-9]+$/.test(_sVal);
    skyaPass[3] = /^\d{6}$/.test(_sVal);
    skyaPass[4] = /^\d{6}$/.test(_sVal);
    skyaPass[5] = !(regStrLength(_sVal) <= 0);
    skyaPass[6] = /^1[3,5,8]\d{9}$/.test(_sVal);
    skyaPass[7] = !(regStrLength(_sVal) <= 2 || regStrLength(_sVal) >= 16);
    skyaPass[8] = /^[0-9a-zA-Z_\-\.]+@[0-9a-zA-Z_\-]+(\.[0-9a-zA-Z_\-]+)*$/.test(_sVal);
    skyaPass[9] = (/[\u4e00-\u9fa5]/g).test(_sVal);
    skyaPass[10] = /^\d{2}$/.test(_sVal);
    skyaPass[11] = /^\d{4}$/.test(_sVal);
    skyaPass[12] = /^1[3,5,8]\d{9}$/.test(_sVal);
    skyaPass[13] = /^(\d{15}$)|(\d{17}([0-9]|X|x))$/.test(_sVal);
    skyaPass[14] = /^\d{8}$/.test(_sVal);
    skyaPass[15] = /^\w{10}$/.test(_sVal);
    skyaPass[16] = /^[0-9]+$/.test(_sVal);
    return skyaPass[id];
}

///验证数字长短
function regStrLength(_sVal) {
    var iLen;
    var sVal = escape(_sVal);
    iLen = sVal.length - (sVal.length - sVal.replace(/\%u/g, "u").length) * 4;
    sVal = sVal.replace(/\%u/g, "uu");
    iLen = iLen - (sVal.length - sVal.replace(/\%/g, "").length) * 2;
    //alert(iLen);
    return iLen;
}

///根据控件名称取得验证的条目
function getregid(sid) {
    var aCheck;
    for (var i = 0; i < chkL.length; i++) {
        aCheck = chkL[i]
        if (aCheck[0] == sid) {
            return aCheck;
        }
    }
}

///验证单个是否正确
function checkthis(id) {
    var aCheck;
    aCheck = getregid(id)
    //var $ErrorMessage;
    //$ErrorMessage = $("#div" + id);
    //$ErrorMessage = $("#" + id).parent().find("#div" + id);
    //if (typeof ($ErrorMessage[0]) == "undefined") {
    //    $ErrorMessage = $("  &nbsp;&nbsp;<div id = div" + id + " ></div>");
    //    $ErrorMessage.insertAfter($("#" + id));

    //}

    var sValue = $("#" + id).val();
    if (!regCheckFunc(aCheck[2], sValue)) {
        $("#" + id).removeAttr("class").attr("class", "divnoadmin");
        $("#" + id).attr("title", aCheck[3]);
        return false;
    }
    else {
        $("#" + id).removeAttr("class").attr("class", "divyesadmin");
        return true;
    }
}

///验证全部
function checkAll() {
    var id;
    var r = true;
    $(selectid).each(function(index, domEle) {
        id = $(domEle).attr("id");
        if (!checkthis(id)) {
            r = false;
        }

    });
    return r;
}

///页面加载注册事件
$(document).ready(function() {
    $(selectid).blur(function() {
        var id = $(this).attr("id");
        checkthis(id);
    });
});

function ajaxPostBack() {
    $(document).ready(function() {
        $(selectid).blur(function() {
            var id = $(this).attr("id");
            checkthis(id);
        });
    });
    ajaxPostBackLi();

} 


 function ajaxPostBackLi()
  {
    $("#topURLul").children().click(function() {
                $(this).siblings().removeClass().end().addClass("divURLed");
				$("#mypanel").children().css("display","none");
				$("#d"+ this.id).css("display","");
				
				//alert(this.id);
            });
            $("#topURLul").children().hover(
              function() {
                  $(this).addClass("divURLon");
                //akon(this);
              },
              function() {
                  if ($(this).attr("class") != "divURLed") {
                      $(this).removeClass("divURLon");
                  }
              }
            );
  }  
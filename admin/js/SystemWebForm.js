///系统自动提供的几个正则表达式效果
		function regCheckFunc(id, _sVal){	    
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
		    
		    var skyaPass				= [];
		    skyaPass[0] = !(regStrLength(_sVal) <= 0);
		    skyaPass[1] = (/[\u4e00-\u9fa5]/g).test(_sVal);
		    skyaPass[2] = /^[0-9]+$/.test(_sVal);
		    skyaPass[3] = !(regStrLength(_sVal) < 2);
		    skyaPass[4] = /^[0-9a-zA-Z_\-\.]+@[0-9a-zA-Z_\-]+(\.[0-9a-zA-Z_\-]+)*$/.test(_sVal);
		    skyaPass[5] = /^1[3,5,8]\d{9}$/.test(_sVal);
		    skyaPass[6] = /^\d{6}$/.test(_sVal);
		    skyaPass[7] = /^\d{6}$/.test(_sVal);
		    skyaPass[8] = /^[a-zA-z]+:\/\/[^s]*$/.test(_sVal);
		    skyaPass[9] = /^(\d{15})+(\d{3})*$/.test(_sVal);
		    skyaPass[10] = /^((25[0-5]|2[0-4]\d|1?\d?\d)\.){3}(25[0-5]|2[0-4]\d|1?\d?\d)$/.test(_sVal);
		    skyaPass[11] = /^[1-9]\d*$/.test(_sVal);
		    return skyaPass[id];
		}
		
///验证数字长短
		function regStrLength(_sVal){
	        var iLen;
	        var sVal	= escape(_sVal);
	        iLen		= sVal.length - (sVal.length - sVal.replace(/\%u/g,"u").length) * 4;
	        sVal		= sVal.replace(/\%u/g,"uu");
	        iLen = iLen - (sVal.length - sVal.replace(/\%/g, "").length) * 2;
	        //alert(iLen);
	        return iLen;
        }
        
///根据控件名称取得验证的条目
		function getregid(sid)
		{
		    var aCheck;
		    for(var i = 0; i < chkL.length; i++){
                aCheck= chkL[i]
                if(aCheck[0]==sid)
                {
                    return aCheck;
                }
             }
		}
		
///验证单个是否正确
		function checkthis(id)
		{
		        var aCheck;
		       aCheck=getregid(id)
                var $ErrorMessage;
                $ErrorMessage = $("#div" + id);
                var sValue=$("#"+id).val();
                if (!regCheckFunc(aCheck[2],sValue)) {
                    $ErrorMessage.removeAttr("class").attr("class", "divno");
                     $ErrorMessage.text(aCheck[3]+"\n"+aCheck[4]);
                     return false;
                }
                else {
                    $ErrorMessage.removeAttr("class").attr("class", "divyes");
                     $ErrorMessage.text(aCheck[1]+"信息填写正确！");
                      return true;
                }
		}
		
///验证全部
        function checkAll()
        {
            var id;
            var r=true;
             $(selectid).each(function(index, domEle) {
                id=$(domEle).attr("id");
                if(!checkthis(id))
                {
                    r= false;
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
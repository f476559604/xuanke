<?php
session_start();
include('../lw_inc/lw_conn.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	课程整理
</title>

<link href="../style/green/skin.css" rel="stylesheet" type="text/css" />
</head>

<body>
   <div id="UpdatePanel1">
	
            <div class="divTbg">
                <div class="divTbgL">
                </div>
                <div class="divTbgInfo">
                    <div class="divTbgTitle">
                       课程整理</div>
                </div>
            </div>
            <div class="divTbgF">
            </div>
            
            <div class="divInfo">
                <div class="divInfoTopList">
                    <div class="listLeft">
                        <ul>
                            <li>
                                <div>
                                    <img src="../style/green/images/index.gif" /></div>
                            </li>
                            <li>操作说明</li>
                        </ul>
                    </div>
                    <div class="listRight">
                        
                    </div>
                </div>
                <div class="divInfoContext">
                    <div style="font: 2px; line-height: 2px;">
                        &nbsp;</div>
                    <div id="score_tab">
    <?php
        $lw_sql="select cou_id from cou_choose where cou_term='".$_SESSION['term_now']."' limit 1";
        //echo $lw_sql;
        $lw_re=mysql_fetch_row(mysql_query($lw_sql));
        if($lw_re[0]==''){
            $lw_text='课程整理是为录入学生成绩作准备工作，课程整理时间是选课完成后，在确认不再选课的情况下，对已选课程进行整理并分配给老师相应班级学生，以及操作学生成绩的一项功能，每学期只能整理一次，整理完后，如果再执行此操作将提示失败，你确认要整理'.$_SESSION['term_now'].'的课程吗';
            $lw_control='<input type="button" id="btnSubmit" value="确认整理" class="SkyButtonFocus" onclick="aabb()" />';
        }
        else if($lw_re[0]!=''){
                $lw_text='课程整理已经完毕，你确认你要重新整理'.$_SESSION['term_now'].'的课程吗，重新整理后以前录入的成绩及名单将全部清空！！！请慎重操作,整理前还请确认好你是否要操作这个学期的课程，本操作无法恢复';
            $lw_control='<input type="button" id="btnSubmit" value="重新整理" class="SkyButtonFocus" onclick="add()" />';
        
        }
        else{}
    ?>
        <table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">
         <tr class='MeNewTDLine'>
             
              <td align="center" class="SkyTDLine" width="100">
              <?php
              echo($lw_text);
               ?>
              
              </tr>
            </table>
             </div>
            </div>
          <div class="divSave">
                    <?php
                    echo($lw_control);
                    ?>
          </div>  
</div>
<script type="text/javascript">
 function aabb(){
    window.location.href="settle_chose_lesson.php";
 }
function add(){
var div=document.createElement("div");
 var lw_form = document.createElement("form"); 
 lw_form.action="clean_course.php";
lw_form.method="post";
div.style.position="absolute";
div.style.left="0px";
div.style.top="0px";
div.style.width="100%";
div.style.height="100%";
div.style.backgroundColor="black";
div.style.filter="alpha(opacity=40)";
div.style.opacity="0.8";
div.setAttribute("id","div");
var div2=document.createElement("div");

var div0=document.createElement("div");
div0.innerHTML="请输入重新整理课程密码";
div0.style.color="white";
div0.style.lineHeight="30px";
div2.appendChild(div0);

var input1=document.createElement("input");
input1.type="password";
input1.value="input";
input1.setAttribute("name","password");
input1.setAttribute("id","password");
div2.appendChild(input1);
var input2=document.createElement("input");
input2.type="submit";
input2.value="提交";
input2.setAttribute("class","SkyButtonFocus");
div2.appendChild(input2);
var input3=document.createElement("input");
input3.type="button";
input3.value="取消";
input3.onclick=cancel;
input3.setAttribute("class","SkyButtonFocus");
div2.appendChild(input3);
var c=document.createElement("center");
c.setAttribute("style","margin-top:150px;positon:relative;");
c.appendChild(div2);
lw_form.appendChild(c);
div.appendChild(lw_form);
document.body.appendChild(div);
}

function cancel(){
var p=document.getElementById("div");
document.body.removeChild(p);
}
</script>


</form>
</body>
</html>

<?php
header("Content-type:text/html;charset=utf-8"); 
include "../lw_inc/db_class.php";
require_once("../lw_inc/JSON.php");
//require_once("../lw_inc/gbk2utf8.php");
//$qswh=new qswhGBK("../lw_inc/qswhGBK.php");
$cid=$_GET['id'];
include "applist.php";
//echo $class_info['open_school_1'];
    //为js而用
    $que=$db->query('select obj_id,obj_name from obj_list');
    $sch_obj=array();
    $maj_obj=array();
    $gra_obj=array();
    while($res=mysql_fetch_assoc($que)){
        if(strlen($res['obj_id'])<=2){
          array_push($sch_obj,$res);  
          //array_push($sch_obj,$tochar->Getutf8($res));  
          
        }
        else if(strlen($res['obj_id'])<=4&&strlen($res['obj_id'])>2){
          array_push($maj_obj,$res);  
          //array_push($maj_obj,$tochar->Getutf8($res));  
        }
        else if(strlen($res['obj_id'])<=8&&strlen($res['obj_id'])>6){//刘炜20130831改，将年级改为班级，所用变量名不变，值改变
          array_push($gra_obj,$res);  
          //array_push($gra_obj,$tochar->Getutf8($res));  
        }
        
    }
    //echo iconv(’GB2312′, ‘UTF-8′, $str);
    /*$sch_obj=$jjss->to_utf8($sch_obj);
    $maj_obj=$jjss->to_utf8($maj_obj);
    $gra_obj=$jjss->to_utf8($gra_obj);
    $sch_obj=$jjss->encode($sch_obj);
    $maj_obj=$jjss->encode($maj_obj);
    $gra_obj=$jjss->encode($gra_obj);
echo("\n调用内置函数u2utf8:".$qswh->gb2u($words,4));*/

//print_r($gra_obj[0]['obj_name']);
//echo($sch_obj[0]['obj_name']);
//echo($qswh->gb2u($sch_obj[0]['obj_name'],3));
//print_r($sch_obj);
//print_r($gra_obj);
//print_r($qswh-> gbk2utf8_arr($sch_obj));
    //$sch_obj=$qswh-> gb2u($sch_obj,3);
    //$maj_obj=$qswh-> gbk2utf8_arr($maj_obj);
    //$gra_obj=$qswh-> gbk2utf8_arr($gra_obj);
   // print_r($sch_obj);
    //print_r($maj_obj);
    
    /*
    $qswh-> unicode2utf8_arr($sch_obj);
    $qswh-> unicode2utf8_arr($maj_obj);
    $qswh-> unicode2utf8_arr($gra_obj);
    print_r($sch_obj);*/
    //$qswh->replace_gbk($sch_obj);
    //$qswh->replace_gbk($maj_obj);
    //$qswh->replace_gbk($gra_obj);
    $sch_obj=$jjss->encode($sch_obj);
    $maj_obj=$jjss->encode($maj_obj);
    $gra_obj=$jjss->encode($gra_obj);
    //echo $sch_obj;
    //$qswh->replace_line($sch_obj);
   // $qswh->replace_line($maj_obj);
    //$qswh->replace_line($gra_obj);
    
    
   
    
    //*************
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
    <title>课程申报</title>

    <script language="javascript" src="../js/jquery/jquery-1.8.2.js" type="text/jscript"></script>

    <script language="javascript" type="text/javascript">
        
        $(document).ready(function() {
           display();
           display_html();
        });
        /**************************************刘炜************/
        function display(){
            val_sch=$('input[name="open_school"]').val();
            val_sch=val_sch.split('#');
            val_maj=$('input[name="major"]').val();
            val_maj=val_maj.split('#');
            val_gra=$('input[name="grade"]').val();
            val_gra=val_gra.split('#');
            //val_len=val_sch.length;
            //document.write(val_sch[0]);
        }
        function display_html(){
            //document.write('dddd');
            $('table tr').eq(0).remove();
            $('table tr').eq(0).remove();
            sch_obj=<?php printf($sch_obj);?>;
            maj_obj=<?php printf($maj_obj);?>;
            gra_obj=<?php printf($gra_obj);?>;
            //data_obj=eval(data_obj);
            var sch_head=new Array();
            var maj_head=new Array();
            var i='',j='',k='',sch_html='',maj_html='',gra_html='';
            var sch_mat='',maj_mat='';
            var ssss='';
            for(i=0;i<val_sch.length;i++){
                sch_mat='';
                $.each(sch_obj,function(entryIndex,entry){
                    
                    //$('table tr').eq(0).before('<tr><td>sch_html</td></tr>');
                    if(this['obj_id']==val_sch[i]){
                        sch_mat='/^'+this['obj_id']+'[0-9][1-9]/';
                        sch_mat=eval(sch_mat);
                        //sch_mat=/^1/;
                        sch_html='<tr id="sch_'+i+'"><td align="center" class="SkyTDTopLine" width="100"> 开课学院 </td><td class="SkyTDLine" ><input id="'+i+'" type="text" name="open_school"  value="'+this['obj_name']+'"/></td></tr>';
                        //$('table tr').eq(0).before(sch_html);
                        for(j=0;j<val_maj.length;j++){
                            //ssss=sch_mat.test(val_maj[j]);
                            if(val_maj[j].match(sch_mat)){
                                //alert(ssss);
                                $.each(maj_obj,function(entryIndex,entry){
                                    if(this['obj_id']==val_maj[j]){
                                        maj_mat='/^'+this['obj_id']+'[0-9][1-9][0-9][1-9]/';
                                        maj_mat=eval(maj_mat);
                                        sch_html+='<tr id="maj_'+j+'"><td align="center" class="SkyTDTopLine" width="100"> 开课专业 </td><td class="SkyTDLine" ><input id="'+i+'" type="text" name="open_school"  value="'+this['obj_name']+'"/></td><td align="center" class="SkyTDTopLine" width="100"> 开课年级 </td><td>';
                                        //$('table tr').eq(0).before(maj_html);
                                        for(k=0;k<val_gra.length;k++){
                                            if(val_gra[k].match(maj_mat)){
                                                $.each(gra_obj,function(entryIndex,entry){
                                                    if(this['obj_id']==val_gra[k]){
                                                        sch_html+=this['obj_name']+'&nbsp;&nbsp;&nbsp;&nbsp;';
                                                        //$('table tr').eq(0).before(gra_html);
                                                    }
                                                });
                                              
                                           }
                                        } 
                                        sch_html+='</td></tr>';   
                                    }
                                       
                                });
                                
                            }
                        }
                        
                    }
                });
                $('table tr').eq(0).before(sch_html);
            }
            /*$.each(sch_obj,function(entryIndex,entry){
                //document.write('12');
                sch_mat='/^'+this['obj_id']+'[0-9][1-9]/';
                //if()
                for(i=0;i<val_sch.length;i++){
                    if(val_sch)
                }
                for(i=0;i<val_sch.length;i++){
                        if(this['obj_id']==val_sch[i]){
                            sch_html='<tr id="sch_'+i+'"><td align="center" class="SkyTDTopLine" width="100"> 开课学院 </td><td class="SkyTDLine" ><input id="'+i+'" type="text" name="open_school"  value="'+this['obj_name']+'"/></td></tr>';
                            sch_head.push('/^'+this['obj_id']+'[0-9][1-9]/');
                            //document.write(sch_html);
                            $('table tr').eq(0).before(sch_html);
                        }
                }
              for(j=0;j<val_maj.length;j++){
                    //for(n=0;n<sch_head.length;n++){
                            if(this['obj_id']==val_maj[j]){
                                maj_html='<tr id="maj_'+j+'"><td align="center" class="SkyTDTopLine" width="100"> 开课专业 </td><td class="SkyTDLine" ><input type="text" name="major"  value="'+this['obj_name']+'"/></td></tr>';
                                $('table tr').eq(0).before(maj_html);
                                //maj_head.push('/^'+this['obj_id']+'[0-9][1-9]/'); 
                            }
                    //}
                          
                }
                 for(h=0;h<val_gra.length;h++){
                        if(this['obj_id']=val_gra[h]){
                            gra_html='<td align="center" class="SkyTDTopLine" width="100"> 开课年级 </td><td class="SkyTDLine" ><input type="text" name="grade"  value="'+this['obj_name']+'"/></td>';
                        }
                            
                }*/
                
                //if(this['obj_id']== val_sch[0]){
                    //document.write(this['obj_id']);
                    //document.write('<br>');
                    //document.write(val_sch[0]);
                //}
          //});
          //$('#ttee').html(sch_html);
          //document.write(data_obj['obj_id']);
        }
        
               
    </script>
    
    <link href="../style/green/skin.css" rel="stylesheet" type="text/css"/>
    
    <style type="text/css">  
    #chkTimeInfo,#lefttable {background-color:#CCCCCC;}
    #chkTimeInfo11 tr td {
		width:20%;
    }
	#lefttable  tr td,#chkTimeInfo tr td{font-size: 12px;background-color: #FFFFFF;height:33px;
		line-height:11px;
		}
    </style>
    
</head>
<body>
    <form id="Form1" method="post" runat="server">
            <div id="tbMain">
                <div class="divTbg">
                    <div class="divTbgL">
                    </div>
                    <div class="divTbgInfo">
                        <div class="divTbgTitle">
                            课程申报</div>
                    </div>
                </div>
                <div class="divTbgF">
                </div>
                <div class="divTNavBG" id="topURL">
                    <ul id="topURLul">
                        <li class="divURLed" id="div1">
                            <div>
                                <img src="../style/green/images/mini_icons_046.gif" width="10" height="10" />
                                基本信息</div>
                        </li>
                    </ul>
                </div>
                <div id="mypanel">
                    <div class="divInfo" id="ddiv1">
                        <div class="divInfoTop">
                            <div class="listLeft">
                                <ul>
                                    <li>
                                        <div>
                                            <img src="../style/green/images/basic.gif" /></div>
                                    </li>
                                    <li>基本信息</li>
                                </ul>
                            </div>
                        </div>
                        <div class="divInfoContext">
                            <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" class="SkyTDLine">
                                
                                <?php
                                    app_list_display('cou_app_record');
                                ?>   
                            </table>
                        </div>
                    </div>
                </div>
                <!--<div class="divSave">
                    <input type="button" id="btnSubmit" value="修改" class="SkyButtonFocus" />
                    <input type="button"  id="btnSubmitClose"   class="SkyButtonFocus"  onclick="btnSubmit_Click" value="返回" />
                </div>
                -->
            </div>
        
            
        
    </form>
</body>
</html>

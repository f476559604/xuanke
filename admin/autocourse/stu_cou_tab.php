﻿<?php
    function stu_cou_tab($tab_base){
        include "../lw_inc/lw_conn.php";
        if($_GET['id']!=''){
           $id=$_GET['id']; 
           //echo '$id';
        }
        else {
            $id=$_SESSION['user_id'];
            //echo '$id';
        }
        //echo '$id';
        $cou_sql="select * from `".$tab_base."` where stu_id='".$id."' and cou_term='".$_SESSION['term_now']."'";
        //echo '<div>'.$cou_sql.'</div>';
        //$cou_sql="select * from `".$tab_base."` where stu_id='".$id."' and cou_term='".$_SESSION['term_now']."'";
        //$cou_sql="select * from stu_course where stu_id='201063502140'";
        //echo $cou_sql;
        $cou_sql_0=mysql_fetch_assoc(mysql_query($cou_sql));
        
        /**
        *maj_course
        */
        //if($tab_base=='stu_course'){
            //$cou_sql_maj="select * from `maj_course` where stu_id='".$id."' and cou_term='".$_SESSION['term_now']."'";
        //20130828改$cou_sql_maj="select a.* from maj_course as a left JOIN user_stu as b on a.class_id=b.stu_gra where b.stu_id='".$id."' and a.cou_term='".$_SESSION['term_now']."'";
        
        $cou_sql_maj="select a.* from maj_course as a left JOIN user_stu as b on a.class_id=b.stu_clas where b.stu_id='".$id."' and a.cou_term='".$_SESSION['term_now']."'";
        //echo $cou_sql_maj;
        //echo '<div>'.$cou_sql_maj.'</div>';
        $cou_sql_1=mysql_fetch_assoc(mysql_query($cou_sql_maj));
        //$cou_sql_1= array();
        $jjuu1=@array_filter($cou_sql_1);
        $jjuu0=@array_filter($cou_sql_0);
        //print_r($cou_sql_0);
        //echo'<div>';
        //print_r($cou_sql_1);
        //echo'</div>';
        if($jjuu0['stu_all_id']==''){
            $cou_sql=$cou_sql_1;
            //print_r($cou_sql_1);

        }
        else if($jjuu1['stu_all_id']==''){
            $cou_sql=$cou_sql_0;

        }
        else{
            $cou_sql=@array_merge_recursive($cou_sql_0,$cou_sql_1);
            $jjuu2=1;

            //echo'<br/>';
            //print_r($cou_sql);
        }
        //echo'<br/>';
        //print_r($jjuu0['stu_all_id']);
         //echo'<br/>';
        //print_r($jjuu1['stu_all_id']);
        
        //$cou_sql=$cou_sql_0;
        //}
        //else{
        //    $cou_sql=$cou_sql_0;
        //}
        /**
        *
        */
        
       
        //print_r($cou_sql);
        if($cou_sql['stu_all_id']!=NULL){
            
            $jud=0;
            $i=1;
            $num=1;
            //print_r($cou_sql);
            
            $tab_head='<table id="TabCourse" class="tablist" cellspacing="1" cellpadding="0" border="0" style="width:100%;">';
            $tab_head.='<tr class="tablisttr"><td class="tablisttitle"></td><td class="tablisttitle" ID="10">星期一</td><td class="tablisttitle" ID="20">星期二</td><td class="tablisttitle" ID="30" >星期三</td><td class="tablisttitle" ID="40" >星期四</td><td class="tablisttitle" ID="50" >星期五</td><td class="tablisttitle" ID="50">星期六</td><td class="tablisttitle" ID="50">星期天</td></tr>';
            $time1='<tr class="tablisttr"><td class="tabmanagertrD" >第一节</br>(08：00-08：45 )</td>';
            $time2='<tr class="tablisttr"><td class="tabmanagertrD" >第二节</br>(08：55-09：40 )</td>';
            $time3='<tr class="tablisttr"><td class="tabmanagertrD" >第三节</br>(10: 00-10：45 )</td>';
            $time4='<tr class="tablisttr"><td class="tabmanagertrD" >第四节</br>(10：55-11：40 )</td>';
            $time5='<tr class="tablisttr"><td class="tabmanagertrD" >第五节</br>(14：00-14：45 )</td>';
            $time6='<tr class="tablisttr"><td class="tabmanagertrD" >第六节</br>(15：55-15：40 )</td>';
            $time7='<tr class="tablisttr"><td class="tabmanagertrD" >第七节</br>(16：00-16：45 )</td>';
            $time8='<tr class="tablisttr"><td class="tabmanagertrD" >第八节</br>(16：55-17：40 )</td>';
            //print_r($cou_sql);
            if($jjuu2==1){
                //echo $cou_sql_0['cou_term'];
                foreach($cou_sql as $key=>$value){
                    if($key=='mo1'){
                        $jud=1;
                    }
                    if($jud==1&&$num<=56){
                        $num++;
                        if($i%9==0){$i=1;}
                        if($i==1){
                            $time1.='<td class="tabmanagertrA">'.$value[0].$value[1].'</td>';
                            $i++;
                        }
                        else if($i==2){
                            $time2.='<td class="tabmanagertrA">'.$value[0].$value[1].'</td>';;
                            $i++;
                        }
                        else if($i==3){
                            $time3.='<td class="tabmanagertrA">'.$value[0].$value[1].'</td>';;
                            $i++;
                        }
                        else if($i==4){
                            $time4.='<td class="tabmanagertrA">'.$value[0].$value[1].'</td>';;
                            $i++;
                        }
                        else if($i==5){
                            $time5.='<td class="tabmanagertrA">'.$value[0].$value[1].'</td>';;
                            $i++;
                        }
                        else if($i==6){
                            $time6.='<td class="tabmanagertrA">'.$value[0].$value[1].'</td>';;
                            $i++;
                        }
                        else if($i==7){
                            $time7.='<td class="tabmanagertrA">'.$value[0].$value[1].'</td>';;
                            $i++;
                        }
                        else if($i==8){
                            $time8.='<td class="tabmanagertrA">'.$value[0].$value[1].'</td>';;
                            $i++;
                        }
        
                    }
                }
            }
            else{
                
                foreach($cou_sql as $key=>$value){
                    if($key=='mo1'){
                        $jud=1;
                    }
                    if($jud==1&&$num<=56){
                        $num++;
                        if($i%9==0){$i=1;}
                        if($i==1){
                            $time1.='<td class="tabmanagertrA">'.$value.'</td>';
                            $i++;
                        }
                        else if($i==2){
                            $time2.='<td class="tabmanagertrA">'.$value.'</td>';;
                            $i++;
                        }
                        else if($i==3){
                            $time3.='<td class="tabmanagertrA">'.$value.'</td>';;
                            $i++;
                        }
                        else if($i==4){
                            $time4.='<td class="tabmanagertrA">'.$value.'</td>';;
                            $i++;
                        }
                        else if($i==5){
                            $time5.='<td class="tabmanagertrA">'.$value.'</td>';;
                            $i++;
                        }
                        else if($i==6){
                            $time6.='<td class="tabmanagertrA">'.$value.'</td>';;
                            $i++;
                        }
                        else if($i==7){
                            $time7.='<td class="tabmanagertrA">'.$value.'</td>';;
                            $i++;
                        }
                        else if($i==8){
                            $time8.='<td class="tabmanagertrA">'.$value.'</td>';;
                            $i++;
                        }
        
                    }
                }
            }
            $time1.='</tr>';
            $time2.='</tr>';
            $time3.='</tr>';
            $time4.='</tr>';
            $time5.='</tr>';
            $time6.='</tr>';
            $time7.='</tr>';
            $time8.='</tr>';
            $tab_html=$tab_head.$time1.$time2.$time3.$time4.$time5.$time6.$time7.$time8;
            $tab_html.='</table>';
            echo $tab_html;
        }
        else{echo('暂无数据');}
    }

?>
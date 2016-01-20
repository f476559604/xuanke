<?php
    function tea_cou_tab($tab_base){
        global $id;
        //global $name;
        if($id!=''){
            
        }
        else {
            $id=$_SESSION['user_id'];
            //echo '$id';
        }
        include "../lw_inc/lw_conn.php";
        $cou_sql="select * from `".$tab_base."` where tea_id='".$id."' and cou_term='".$_SESSION['term_now']."'";
        //$cou_sql="select * from stu_course where stu_id='201063502140'";
        //echo $cou_sql;
        $cou_sql=mysql_fetch_assoc(mysql_query($cou_sql));
        if($cou_sql['tea_id']!=NULL){
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
<?php
///header("Content-type:text/html;charset=utf-8");

function stu_sco_tab($num,$term,&$tot_c){
    $tab1='<td colspan="7" style="border:0;vertical-align: top;"><table width="404" border="0" cellpadding="0" cellspacing="0">';
    $tab2='<td colspan="5" style="border:0;vertical-align: top;"><table width="404" border="0" cellpadding="0" cellspacing="0">';
    $kk=0;
    $hh=0;
    $total=0;
   foreach($term as $value){
    //echo('<p>'.$value);
    $sql="select a.cou_name,a.cou_credit,a.cou_stu_mark,b.cou_type from cou_choose as a left join cou_app_record as b on a.cou_id=b.cou_id where a.cou_choose_stu='$num' and a.cou_term='$value'";
    //echo $sql;
    $query=mysql_query($sql);
    
    $ii=0;
        
    //$vv1=str_replace('第二学期','-2',$value);
    //$vv1=str_replace('第一学期','-1',$vv1);

    
    while($re=mysql_fetch_assoc($query)){
        
         if($kk<30){
                if($ii==0){
                    $tab1.='<tr>
                            <td style="width: 230px;">'.$value.'</td>
                            <td style="width: 63px;"></td>
                            <td style="width: 63px;"></td>
                            <td style="width: 42px;"></td>
                        </tr>';
                    $ii=1;
                    $kk++;
                }
                $tab1.='<tr>
                            <td style="width: 230px;">'.$re['cou_name'].'</td>
                            <td style="width: 63px;">'.$re['cou_credit'].'</td>
                            <td style="width: 63px;">'.$re['cou_stu_mark'].'</td>
                            <td style="width: 42px;">'.$re['cou_type'].'</td>
                        </tr>';
                
                $kk++;
                
            }
            else{
                if($ii==0){

               $tab2.='<tr>
                            <td style="width: 232px;">'.$value.'</td>
                            <td style="width: 62px;"></td>
                            <td style="width: 62px;"></td>
                            <td style="width: 42px;"></td>
                        </tr>';
                    $ii=1;
                    $hh++;
                }
            

                 $tab2.='<tr>
                            <td style="width: 232px;">'.$re['cou_name'].'</td>
                            <td style="width: 62px;">'.$re['cou_credit'].'</td>
                            <td style="width: 62px;">'.$re['cou_stu_mark'].'</td>
                            <td style="width: 42px;">'.$re['cou_type'].'</td>
                        </tr>';
                
                $hh++;
            }
            if((int)$re['cou_stu_mark']>=60){
            $total=$total+(int)$re['cou_credit'];
            }        
        }        
            
    }
    
    
    
    ////////////////////////////////////////////
    $sql1="select distinct cou_term from before_cou where cou_choose_stu='$num' order by cou_term";
    $query1=mysql_query($sql1);
    while($re1=mysql_fetch_row($query1)){
        
                $sql="select cou_name,cou_credit,cou_stu_mark,cou_type from before_cou where cou_choose_stu='$num' and cou_term='$re1[0]'";
                //echo $sql;
                $query=mysql_query($sql);
                
                $ii=0;
                    
                //$vv1=str_replace('第二学期','-2',$value);
                //$vv1=str_replace('第一学期','-1',$vv1);
            
                
                while($re=mysql_fetch_assoc($query)){
                    
                     if($kk<30){
                            if($ii==0){
                                $tab1.='<tr>
                                        <td style="width: 230px;">'.$re1[0].'</td>
                                        <td style="width: 63px;"></td>
                                        <td style="width: 63px;"></td>
                                        <td style="width: 42px;"></td>
                                    </tr>';
                                $ii=1;
                                $kk++;
                            }
                            $tab1.='<tr>
                                        <td style="width: 230px;">'.$re['cou_name'].'</td>
                                        <td style="width: 63px;">'.$re['cou_credit'].'</td>
                                        <td style="width: 63px;">'.$re['cou_stu_mark'].'</td>
                                        <td style="width: 42px;">'.$re['cou_type'].'</td>
                                    </tr>';
                            
                            $kk++;
                            
                        }
                        else{
                            if($ii==0){
            
                           $tab2.='<tr>
                                        <td style="width: 232px;">'.$re1[0].'</td>
                                        <td style="width: 62px;"></td>
                                        <td style="width: 62px;"></td>
                                        <td style="width: 42px;"></td>
                                    </tr>';
                                $ii=1;
                                $hh++;
                            }
                        
            
                             $tab2.='<tr>
                                        <td style="width: 232px;">'.$re['cou_name'].'</td>
                                        <td style="width: 62px;">'.$re['cou_credit'].'</td>
                                        <td style="width: 62px;">'.$re['cou_stu_mark'].'</td>
                                        <td style="width: 42px;">'.$re['cou_type'].'</td>
                                    </tr>';
                            
                            $hh++;
                        }
                        if((int)$re['cou_stu_mark']>=60){
                        $total=$total+(int)$re['cou_credit'];
                        }        
                    }   
            }
    ////////////////////////////////////////////
    
    
    
    
    if($kk<30){
        for($i=$kk;$i<30;$i++){
            $tab1.='<tr>
                        <td style="width: 230px;">&nbsp;</td>
                        <td style="width: 63px;"></td>
                        <td style="width: 63px;"></td>
                        <td style="width: 42px;"></td>
                    </tr>';
        } 
        for($i=1;$i<=30;$i++){
            $tab2.='<tr>
                        <td style="width: 232px;">&nbsp;</td>
                        <td style="width: 62px;"></td>
                        <td style="width: 62px;"></td>
                        <td style="width: 42px;"></td>
                    </tr>';
        }
    }
    else{
        for($i=$hh;$i<30;$i++){
            $tab2.='<tr>
                        <td style="width: 232px;">&nbsp;</td>
                        <td style="width: 62px;"></td>
                        <td style="width: 62px;"></td>
                        <td style="width: 42px;"></td>
                    </tr>';
        }
    }         
    $tab1.='</table></td>';
    $tab2.='</table></td>';
    $tot_c=$total;
    echo($tab1.$tab2);

    //echo $kk;
}


?>
<?php
//header("Content-type:text/html;charset=utf-8");  
//include "../lw_inc/lw_conn.php";
function treelist(){
    
        //global $type2;
        $type2='student';
        $sql="select obj_id, obj_name from obj_list";
        $query=mysql_query($sql);
        $js='';
        $pattern1='/^[1-9][0-9]?$/';
        $pattern2='/^[1-9][0-9][0-9][0-9]?$/';
        $pattern3='/^[1-9][0-9][0-9][0-9][0-9][0-9]?$/';
        $pattern4='/^[1-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]?$/';
        if($type2=='student'){
            $js="d.add('0','-1','  学生列表','','学生列表','','','');";
        
                while($re=mysql_fetch_assoc($query)){
                    $len=strlen($re['obj_id']);
                    if(strlen($re['obj_id'])<=2){
                        $js.="d.add('".$re['obj_id']."','0','".$re['obj_name']."','','".$re['obj_name']."','frameright','','',false);";
                    }
                    else if(strlen($re['obj_id'])==3||strlen($re['obj_id'])==4){
                        $rel=preg_match($pattern2,$re['obj_id']);
                        if($rel==1){
                        //echo('<script lang="javascript" type="text/javascript">alert("'.$rel.'");</script>');
                            switch ($len){
                                case 3:
                                $jq=1;
                                break;
                                case 4:
                                $jq=2;
                                break;
                                default:
                                $jq=0;
                                
                            }
                         $js.="d.add('".$re['obj_id']."','".substr($re['obj_id'],0,$jq)."','".$re['obj_name']."','','".$re['obj_name']."','frameright','','',false);";
                        }
                    }
                    else if(strlen($re['obj_id'])==5||strlen($re['obj_id'])==6){
                        $rel=preg_match($pattern3,$re['obj_id']);
                        if($rel==1){
                        //echo('<script lang="javascript" type="text/javascript">alert("'.$rel.'");</script>');
                            switch ($len){
                                case 5:
                                $jq=3;
                                break;
                                case 6:
                                $jq=4;
                                break;
                                default:
                                $jq=0;
                                
                            }
                         $js.="d.add('".$re['obj_id']."','".substr($re['obj_id'],0,$jq)."','".$re['obj_name']."','','".$re['obj_name']."','frameright','','',false);";
                        }
                    }
                    else if(strlen($re['obj_id'])==7||strlen($re['obj_id'])==8){
                        $rel=preg_match($pattern4,$re['obj_id']);
                        if($rel==1){
                        //echo('<script lang="javascript" type="text/javascript">alert("'.$rel.'");</script>');
                            switch ($len){
                                case 7:
                                $jq=5;
                                break;
                                case 8:
                                $jq=6;
                                break;
                                default:
                                $jq=0;
                                
                            }
                         $js.="d.add('".$re['obj_id']."','".substr($re['obj_id'],0,$jq)."','".$re['obj_name']."','userlist_other.php?num=".$re['obj_id']."&type1=".$type2."','".$re['obj_name']."','frameright','','',false);";
                        }
                    }
                }
        }
        /*else if($type2=='teacher'){
            $js="d.add('0','-1','  老师列表','','老师列表','','','');";
             while($re=mysql_fetch_assoc($query)){
                    if(strlen($re['obj_id'])<=2){
                        $js.="d.add('".$re['obj_id']."','0','".$re['obj_name']."','userlist.php?num=".$re['obj_id']."&type1=".$type2."','".$re['obj_name']."','frameright','','',false);";
                    }
                    
                }
        }
        else if($type2=='major'){
            $js="d.add('0','-1','  选择专业','','选择专业','','','');";
        
                while($re=mysql_fetch_assoc($query)){
                    $len=strlen($re['obj_id']);
                    if(strlen($re['obj_id'])<=2){
                        $js.="d.add('".$re['obj_id']."','0','".$re['obj_name']."','','".$re['obj_name']."','frameright','','',false);";
                    }
                    else if(strlen($re['obj_id'])==3||strlen($re['obj_id'])==4){
                        $rel=preg_match($pattern2,$re['obj_id']);
                        if($rel==1){
                        //echo('<script lang="javascript" type="text/javascript">alert("'.$rel.'");</script>');
                            switch ($len){
                                case 3:
                                $jq=1;
                                break;
                                case 4:
                                $jq=2;
                                break;
                                default:
                                $jq=0;
                                
                            }
                         $js.="d.add('".$re['obj_id']."','".substr($re['obj_id'],0,$jq)."','".$re['obj_name']."','','".$re['obj_name']."','frameright','','',false);";
                        }
                    }
                    else if(strlen($re['obj_id'])==5||strlen($re['obj_id'])==6){
                        $rel=preg_match($pattern3,$re['obj_id']);
                        if($rel==1){
                        //echo('<script lang="javascript" type="text/javascript">alert("'.$rel.'");</script>');
                            switch ($len){
                                case 5:
                                $jq=3;
                                break;
                                case 6:
                                $jq=4;
                                break;
                                default:
                                $jq=0;
                                
                            }
                         $js.="d.add('".$re['obj_id']."','".substr($re['obj_id'],0,$jq)."','".$re['obj_name']."','','".$re['obj_name']."','frameright','','',false);";
                        }
                    }
                    else if(strlen($re['obj_id'])==7||strlen($re['obj_id'])==8){
                        $rel=preg_match($pattern4,$re['obj_id']);
                        if($rel==1){
                        //echo('<script lang="javascript" type="text/javascript">alert("'.$rel.'");</script>');
                            switch ($len){
                                case 7:
                                $jq=5;
                                break;
                                case 8:
                                $jq=6;
                                break;
                                default:
                                $jq=0;
                                
                            }
                         $js.="d.add('".$re['obj_id']."','".substr($re['obj_id'],0,$jq)."','".$re['obj_name']."','../course/maj_cou_choose.php?num=".$re['obj_id']."&type=".$type2."','".$re['obj_name']."','frameright','','',false);";
                        }
                    }
                }
        }
        else if($type2=='major_del'){
            $js="d.add('0','-1','  选择班级','','选择班级','','','');";
        
                while($re=mysql_fetch_assoc($query)){
                    $len=strlen($re['obj_id']);
                    if(strlen($re['obj_id'])<=2){
                        $js.="d.add('".$re['obj_id']."','0','".$re['obj_name']."','','".$re['obj_name']."','frameright','','',false);";
                    }
                    else if(strlen($re['obj_id'])==3||strlen($re['obj_id'])==4){
                        $rel=preg_match($pattern2,$re['obj_id']);
                        if($rel==1){
                        //echo('<script lang="javascript" type="text/javascript">alert("'.$rel.'");</script>');
                            switch ($len){
                                case 3:
                                $jq=1;
                                break;
                                case 4:
                                $jq=2;
                                break;
                                default:
                                $jq=0;
                                
                            }
                         $js.="d.add('".$re['obj_id']."','".substr($re['obj_id'],0,$jq)."','".$re['obj_name']."','','".$re['obj_name']."','frameright','','',false);";
                        }
                    }
                    else if(strlen($re['obj_id'])==5||strlen($re['obj_id'])==6){
                        $rel=preg_match($pattern3,$re['obj_id']);
                        if($rel==1){
                        //echo('<script lang="javascript" type="text/javascript">alert("'.$rel.'");</script>');
                            switch ($len){
                                case 5:
                                $jq=3;
                                break;
                                case 6:
                                $jq=4;
                                break;
                                default:
                                $jq=0;
                                
                            }
                         $js.="d.add('".$re['obj_id']."','".substr($re['obj_id'],0,$jq)."','".$re['obj_name']."','','".$re['obj_name']."','frameright','','',false);";
                        }
                    }
                    else if(strlen($re['obj_id'])==7||strlen($re['obj_id'])==8){
                        $rel=preg_match($pattern4,$re['obj_id']);
                        if($rel==1){
                        //echo('<script lang="javascript" type="text/javascript">alert("'.$rel.'");</script>');
                            switch ($len){
                                case 7:
                                $jq=5;
                                break;
                                case 8:
                                $jq=6;
                                break;
                                default:
                                $jq=0;
                                
                            }
                         $js.="d.add('".$re['obj_id']."','".substr($re['obj_id'],0,$jq)."','".$re['obj_name']."','../course/maj_cou_del.php?num=".$re['obj_id']."&type=".$type2."','".$re['obj_name']."','frameright','','',false);";
                        }
                    }
                }
        }
        
        else if($type2=='school_set'){
            $js="d.add('0','-1','  国际交流学院','../base_set/school_set.php?type=school&id=".$re['obj_id']."','学院','frameright','','');";
             while($re=mysql_fetch_assoc($query)){
                    
                    $len=strlen($re['obj_id']);
                    //$pattern1='^[1-9][0-9][1-9][0-9][1-9][0-9][1-9][0-9]?$';
                    if(strlen($re['obj_id'])<=2){
                        $js.="d.add('".$re['obj_id']."','0','".$re['obj_name']."','../base_set/school_set.php?type=major&id=".$re['obj_id']."','".$re['obj_name']."','frameright','','',false);";
                    }
                    else if($len==3||$len==4){
                        $rel=preg_match($pattern2,$re['obj_id']);
                        if($rel==1){
                        //echo('<script lang="javascript" type="text/javascript">alert("'.$rel.'");</script>');
                            switch ($len){
                                case 4:
                                $jq=2;
                                break;
                                case 3:
                                $jq=1;
                                break;
                                default:
                                $jq=0;
                                
                            }
                        //echo('<script lang="javascript" type="text/javascript">alert("'.strlen($re['obj_id']).'");</script>');
                         $js.="d.add('".$re['obj_id']."','".substr($re['obj_id'],0,$jq)."','".$re['obj_name']."','../base_set/school_set.php?type=grade&id=".$re['obj_id']."','".$re['obj_name']."','frameright','','',false);";
                        }
                    }
                    else if(strlen($re['obj_id'])==5||strlen($re['obj_id'])==6){
                        $rel=preg_match($pattern3,$re['obj_id']);
                        if($rel==1){
                        //echo('<script lang="javascript" type="text/javascript">alert("'.$rel.'");</script>');
                            switch ($len){
                                case 5:
                                $jq=3;
                                break;
                                case 6:
                                $jq=4;
                                break;
                                default:
                                $jq=0;
                                
                            }
                         $js.="d.add('".$re['obj_id']."','".substr($re['obj_id'],0,$jq)."','".$re['obj_name']."','../base_set/school_set.php?type=class&id=".$re['obj_id']."','".$re['obj_name']."','frameright','','',false);";
                        }
                    }
                    else if(strlen($re['obj_id'])==7||strlen($re['obj_id'])==8){
                        $rel=preg_match($pattern4,$re['obj_id']);
                        if($rel==1){
                        //echo('<script lang="javascript" type="text/javascript">alert("'.$rel.'");</script>');
                            switch ($len){
                                case 7:
                                $jq=5;
                                break;
                                case 8:
                                $jq=6;
                                break;
                                default:
                                $jq=0;
                                
                            }
                         $js.="d.add('".$re['obj_id']."','".substr($re['obj_id'],0,$jq)."','".$re['obj_name']."','','".$re['obj_name']."','frameright','','',false);";
                        }
                    }
                    
                }
        }
        else if($type2=='tea_cou'||$type2=='stu_cou'){
            $js="d.add('0','-1','  教师课表','','教师课表','','','');";
            while($re=mysql_fetch_assoc($query)){
                if(strlen($re['obj_id'])<=2){
                    $js.="d.add('".$re['obj_id']."','0','".$re['obj_name']."','../autocourse/view_list.php?num=".$re['obj_id']."&type=".$type2."','".$re['obj_name']."','frameright','','',false);";
                }
                
            }
        }*/
       

        echo $js;
}

?>

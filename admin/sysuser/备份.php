/*else if($type2=='major'){
            $js="d.add('0','-1','  閫夋嫨涓撲笟','','閫夋嫨涓撲笟','','','');";
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
                         $js.="d.add('".$re['obj_id']."','".substr($re['obj_id'],0,$jq)."','".$re['obj_name']."','../course/maj_cou_choose.php?num=".$re['obj_id']."&type=".$type2."','".$re['obj_name']."','frameright','','',false);";
                        }
                    }
                }
        }*/
        /*else if($type2=='major_del'){
            $js="d.add('0','-1','  閫夋嫨鐝骇','','閫夋嫨鐝骇','','','');";
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
                         $js.="d.add('".$re['obj_id']."','".substr($re['obj_id'],0,$jq)."','".$re['obj_name']."','../course/maj_cou_del.php?num=".$re['obj_id']."&type=".$type2."','".$re['obj_name']."','frameright','','',false);";
                        }
                    }
                }
        }*/
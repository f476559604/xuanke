<?php
//header("Content-type:text/html;charset=utf-8");  
//include_once "lw_conn.php";
//$type='option';
//$table='user_tea';
//$title='user_name';
function list_name($type,$table,$id,$title){
    if($type=='option'){
        if($id!=''){
            $sql="select $id,$title from `$table`";
            $query=mysql_query($sql);
            $html='';
            while($re=mysql_fetch_assoc($query)){
                $html.="<option value='".$re[$id]."'>".$re[$title]."</option>";
            }
        }
        else{
            $sql="select $title from `$table`";
            echo $sql;
            $query=mysql_query($sql);
            $html='';
            while($re=mysql_fetch_assoc($query)){
                $html.="<option value='".$re[$title]."'>".$re[$title]."</option>";
            }
        }
    }
    echo $html;
}
function list_term(){
    $html='';
    $year=date('Y');
    $year1=$year-1;
    $year2=$year+1;
    $html.="<option value='".$year1.'-'.$year.'第一学期'."'>".$year1.'-'.$year.'第一学期'."</option>";
    $html.="<option value='".$year1.'-'.$year.'第二学期'."'>".$year1.'-'.$year.'第二学期'."</option>";
    $html.="<option value='".$year.'-'.$year2.'第一学期'."'>".$year.'-'.$year2.'第一学期'."</option>";
    $html.="<option value='".$year.'-'.$year2.'第二学期'."'>".$year.'-'.$year2.'第二学期'."</option>";
    echo($html);
}
function list_term_sel($now){
    $html='';
    $year=date('Y');
    $year1=$year-1;
    $year2=$year+1;
    $y1=$year1.'-'.$year.'第一学期';
    $y2=$year1.'-'.$year.'第二学期';
    $y3=$year.'-'.$year2.'第一学期';
    $y4=$year.'-'.$year2.'第二学期';
    if($y1==$now){
        $s1="selected='selected'";
    }
    else if($y2==$now){
        $s2="selected='selected'";
    }
    else if($y3==$now){
        $s3="selected='selected'";
    }
    else if($y4==$now){
        $s4="selected='selected'";
    }
    $html.="<option value='".$y1."'".$s1.">".$y1."</option>";
    $html.="<option value='".$y2."'".$s2.">".$y2."</option>";
    $html.="<option value='".$y3."'".$s3.">".$y3."</option>";
    $html.="<option value='".$y4."'".$s4.">".$y4."</option>";
    echo($html);
}
function list_room(){
    $sql="select name from tea_room";
    $query=mysql_query($sql);
    $html='';
    while($re=mysql_fetch_row($query)){
        $html.="<option value='".$re[0]."'>".$re[0]."</option>";
    }
    echo($html);
}
?>
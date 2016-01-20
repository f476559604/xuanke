<?php
include "../lw_inc/db_class.php";
function add_stu_user($stu_id,$stu_pass,$user_name,$en_name,$stu_sex,$stu_sch,$stu_maj,$stu_gra,$stu_clas,$stu_bir,$passport_id,$stu_nation,$stu_address1,$stu_address2,$contact_way,$fri_contact_way,$entrydate,$gradate,$nature,$comment){

    $sql="insert into user_stu(stu_id,stu_pass,user_name,en_name,stu_sex,stu_sch,stu_maj,stu_gra,stu_clas,stu_bir,passport_id,stu_nation,stu_address1,stu_address2,contact_way,fri_contact_way,entrydate,gradate,nature,comment) values('".$stu_id."','".$stu_pass."','".$user_name."','".$en_name."','".$stu_sex."','".$stu_sch."','".$stu_maj."','".$stu_gra."','".$stu_clas."','".$stu_bir."','".$passport_id."','".$stu_nation."','".$stu_address1."','".$stu_address2."','".$contact_way."','".$fri_contact_way."','".$entrydate."','".$gradate."','".$nature."','".$comment."')";
    //echo $sql;
    $query=mysql_query($sql);
    if($query){
        return(true);
    }
    
}

function add_tea_user($tea_id,$tea_sch,$tea_pass,$user_name,$tea_sex){

    $sql="insert into user_tea(tea_id,tea_sch,tea_pass,user_name,tea_sex) values('".$tea_id."','".$tea_sch."','".$tea_pass."','".$user_name."','".$tea_sex."')";
    $query=mysql_query($sql);
    if($query){
        return(true);
    }
    
}
function sel_option($obj){
    global $db;
    $query=$db->list_query($obj);
    $option='';
    if($obj=='班级'){
         //while($re=mysql_fetch_row($query)){
            $option.='<option value="01">一班</option>
                      <option value="02">二班</option>
                      <option value="03">三班</option>
                      <option value="04">四班</option>
                      <option value="05">五班</option>
                      <option value="06">六班</option>';
        //}
    }
    else{
         while($re=mysql_fetch_row($query)){
            $option.='<option value="'.$re[0].'">'.$re[1].'</option>';
        }
    }
       
    echo $option;
}
function is_exist($id){
    $sql="SELECT 1 FROM `user_stu` WHERE stu_id=$id limit 1";
    $query=mysql_query($sql);
    $re=mysql_fetch_row($query);
    if($re[0]==''){
        return 0;
    }
    echo('<script>alert("学号重复，请重新增加");window.location.href="add_stu.php"</script>');
    exit;
}

?>
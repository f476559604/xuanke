<?php
header("Content-type:text/html;charset=utf-8");
include "../lw_inc/lw_conn.php";
    $obj_id=$_POST['insert_id'];
    //echo '$obj_id';
     //echo('<script lang="javascript">alert("增加成功")'.print_r($obj_id).'</script>');
    //print_r($obj_id);
    $i=0;
    $obj_name=$_POST['insert_name'];
    //echo $obj_name;
    if($obj_id!=''&&$obj_name!=''){
        $sql="insert into tea_room (id,name) values";
        for($i=0;$i<count($obj_id);$i++){
            echo count($obj_id);
            $sql.="('".$obj_id[$i]."','".$obj_name[$i]."'),";
        }
        $sql=substr($sql,0,strlen($sql)-1);
        //echo $sql;
        $query=mysql_query($sql);
        if($query){
            echo('<script lang="javascript" type="text/javascript">alert("增加成功");window.history.go(-1);</script>');
        }
    }
?>
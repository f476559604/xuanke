<?php
//header("Content-type:text/html;charset=utf-8");  
//include_once "lw_conn.php";
//$type='option';
//$table='user_tea';
//$title='user_name';

function obj_name($id){
    $sql="select obj_name from obj_list where obj_id=$id";
    $query=mysql_query($sql);
    @$re=mysql_fetch_row($query);
    return($re[0]);
}
function obj_name_js(){
    $sql="select obj_id,obj_name from obj_list where LENGTH(obj_id)= 7";
    $query=mysql_query($sql);
    
    $html_js='<script type="text/javascript">$(document).ready(function(){
    
    $("tr").each(function(){
        var ww=$(this).find("td:eq(4)").html();
        switch (ww)
            {';
    while($re=mysql_fetch_assoc($query)){
        $html_js.='case "'.$re['obj_id'].'":$(this).find("td:eq(4)").html("'.$re['obj_name'].'");break;' ; 
    }
    $html_js.='} }); });</script>';
    echo($html_js);
    
}
function obj_name_js1(){
    $sql="select obj_id,obj_name from obj_list where LENGTH(obj_id)= 7";
    $query=mysql_query($sql);
    
    $html_js='<script type="text/javascript">$(document).ready(function(){
    
    $("tr").each(function(){
        var ww=$(this).find("td:eq(2)").html();
        if(typeof  ww == "undefined"){
        }else{';
    while($re=mysql_fetch_assoc($query)){
        //$html_js.='case "'.$re['obj_id'].'":$(this).find("td:eq(4)").html("'.$re['obj_name'].'");break;' ; 
        $html_js.='ww=ww.replace("'.$re['obj_id'].'","'.$re['obj_name'].'");';
    }
    $html_js.='$(this).find("td:eq(2)").html(ww)';
    $html_js.=' }}); });</script>';
    echo($html_js);
    
}

?>

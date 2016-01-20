function check_this_con(con){
    var name=con.name;
    var the_con=document.getElementsByName(name);
    if(the_con.value==NULL){
        alert('请完整输入');
        th_con.focus();
    }
    
}
function check_secret(old1,new1){
    var con1=document.getElementsByName(old1)[0];
    var con2=document.getElementsByName(new1)[0];
    //alert(con1.value);
    if(con1.value==''||con2.value==''){
        alert('请完整输入');
        con1.focus();
        return false;
    }
    
    
}
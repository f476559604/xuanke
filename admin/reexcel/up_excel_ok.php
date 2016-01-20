<?php
header("Content-type:text/html;charset=utf-8");
$f=$_FILES['user_add']; 
//echo $f['name'];
//echo $f['type'];
print_r($f);
echo('<br />');
if($f['name']!=''){
    if($f['type']=='application/vnd.ms-excel'&&$f['type']<51200){
        $dest_dir='data';//设定上传目录 
        //echo $f['type'];
        $dest=$dest_dir.'/'.$f['name'];//设置文件名为日期加上文件名避免重复 
        //$dest=iconv('UTF-8','gbk//IGNORE',$dest);
        echo $dest;
        $r=move_uploaded_file($f['tmp_name'],$dest);
        chmod($dest, 0777);//设定上传的文件的属性
        //echo('<script>alert("'.$dest1.'");window.location.href="add_many_stu.php?name="'.$dest1.'";</script>');
        
        sleep(1);
        
        //set_include_path(get_include_path() . PATH_SEPARATOR . '../excel_cla/');
        include_once 'excel/reader.php';

        $data = new Spreadsheet_Excel_Reader();
        
        $data->setOutputEncoding('utf-8');
        
        $data->read($dest);
        
        error_reporting(E_ALL ^ E_NOTICE);
        include"../../lw_inc/lw_conn.php";
        //echo "$data->sheets[0]['cells'][1][2]";
        for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
        $sql='insert into before_cou(cou_choose_stu,stu_name,cou_name,cou_type,cou_credit,cou_stu_mark,cou_term) values(\''.$data->sheets[0]['cells'][$i][2].'\',\''.$data->sheets[0]['cells'][$i][1].'\',\''.$data->sheets[0]['cells'][$i][3].'\',\''.$data->sheets[0]['cells'][$i][4].'\',\''.$data->sheets[0]['cells'][$i][5].'\',\''.$data->sheets[0]['cells'][$i][6].'\',\''.$data->sheets[0]['cells'][$i][7].'\')';
        echo $sql.'<br/>';
        if(mysql_query($sql)){
            echo'<br/>请稍等……导入中……ok导入成功';
            echo('<script>alert("导入成功");window.location.href="up_excel.html";</script>');
        }
        else echo('die,出错未知错误');
        }
        
    }
    else{echo('未知错误');}
}
else{echo('<script>window.location.href="up_excel.html";alert("请浏览文件");</script>');}

// Test CVS



?>
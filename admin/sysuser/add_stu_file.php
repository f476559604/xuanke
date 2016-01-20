<?php
header("Content-type:text/html;charset=utf-8");
$f=$_FILES['user_add']; 
//echo $f['name'];
if($f[name]!=''){
    if($f['type']=='application/vnd.ms-excel'&&$f['type']<51200){
        $dest_dir='excel';//设定上传目录 
        //echo $f['type'];
        $dest=$dest_dir.'/'.$f['name'];//设置文件名为日期加上文件名避免重复 
        $dest1=iconv('UTF-8','utf-8//IGNORE',$dest);
        $r=move_uploaded_file($f['tmp_name'],$dest1);
        chmod($dest, 0755);//设定上传的文件的属性
        //echo('<script>alert("'.$dest1.'");window.location.href="add_many_stu.php?name="'.$dest1.'";</script>');
        
        sleep(1);
        
        set_include_path(get_include_path() . PATH_SEPARATOR . '../excel_cla/');
        include 'PHPExcel/IOFactory.php';
        include 'add_user_fun.php';
        $inputFileName=$dest1;
        //$inputFileName = './excel/stu_add.xls';
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        //print_r($sheetData);
        foreach($sheetData as $key=>$value){
            if($key!='1'){
            $jud=add_stu_user($value['A'],$value['B'],$value['C'],$value['D'],$value['E'],$value['F'],$value['G'],$value['H'],$value['I'],$value['J'],$value['K'],$value['L'],$value['M'],$value['N'],$value['O'],$value['P']);
            }
        }
        if($jud){
            echo('增加成功');
            echo('<script>window.location.href="add_stu_up.html";alert("增加成功");</script>');
        }
    }
}
else{echo('<script>window.location.href="add_stu_up.html";alert("请浏览文件");</script>');}
?>
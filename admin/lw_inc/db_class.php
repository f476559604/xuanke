<?php

$db_username="root"; //连接数据库的用户名
$db_password="111"; //连接数据库的密码
$db_database="xuanke_sys"; //数据库名
$db_hostname="localhost"; //服务器地址

class dbClass{ //开始数据库类,下面方法，前面没有关键字，默认为public
	var $username;
	var $password;
	var $database;
	var $hostname;
	var $result;
    var $loginid;
    var $name;
    var $userrank;
    var $usertype;
    var $imgurl;
    var $userid;
    var $userbh;
    var $class;
    var $str;
    var $user;
    var $sign;
    
	function dbClass($username,$password,$database,$hostname="localhost"){
		$this->username=$username;
		$this->password=$password;
		$this->database=$database;
		$this->hostname=$hostname;
	}
	function connect(){ //这个函数用于连接数据库
		$this->link=mysql_connect($this->hostname,$this->username,$this->password) or die("Sorry,can not connect to database");
		return $this->link;
	}
	
	
	function select(){ //这个函数用于选择数据库
		mysql_query("set names 'UTF8'");//这就是指定数据库字符集，一般放在连接数据库后面就系了
		mysql_select_db($this->database,$this->link);
	}
	
	function query($sql){ //这个函数用于送出查询语句并返回结果，常用。
		if($this->result=mysql_query($sql,$this->link))
			{
			 mysql_query("set names 'UTF8'");//这就是指定数据库字符集，一般放在连接数据库后面就系了
			 return $this->result;
		}else {
			//这里是显示SQL语句的错误信息，主要是设计阶段用于提示。正式运行阶段可将下面这句注释掉。
			//echo "SQL语句错误： <font color=red>$sql</font> <BR><BR>错误信息： ".mysql_error();
			return false;
		}
	}
	/*
	　　以下函数用于从结果取回数组，一般与 while()循环、$db->query($sql) 配合使用，例如：
	$result=$db->query("select * from xzy_teachfl order by tpx");
	while($row=$db->getarray($result)){
	echo "$row[id] ";
	}
	*/
	function getarray($result){
		mysql_query("set names 'UTF8'");//这就是指定数据库字符集，一般放在连接数据库后面就系了
		return @mysql_fetch_array($result);
	}
	/*
	　　从结果集中取得一行作为对象，一般与 while()循环、$db->query($sql) 配合使用，例如：
	$result=$db->query("select * from xzy_teachfl order by tpx");
	while($row=$db->getobject($result)){
	echo $row->id;
	}
	*/
	function getobject($result){
		mysql_query("set names 'UTF8'");//这就是指定数据库字符集，一般放在连接数据库后面就系了
		return @mysql_fetch_object($result);
	}
	/*
	　　以下函数用于取得SQL查询的第一行，一般用于查询符合条件的行是否存在，例如：
	　　用户从表单提交的用户名$username、密码$password是否在用户表“user”中，并返回其相应的数组：
	if($user=$db->getfirst("select * from user where username='$username' and password='$password' "))
	echo "欢迎 $username ，您的ID是 $user[id] 。";
	else
	echo "用户名或密码错误！";
	*/
	function getfirst($sql){
		mysql_query("set names 'UTF8'");//这就是指定数据库字符集，一般放在连接数据库后面就系了
		return @mysql_fetch_array($this->query($sql));
	
	}
	
	/*
	　　以下函数返回符合查询条件的总行数，例如用于分页的计算等要用到，例如：
	$totlerows=$db->getcount("select * from mytable");
	echo "共有 $totlerows 条信息。";
	*/
	function getcount($sql){
		return @mysql_num_rows($this->query($sql)); 
	}
	
	/*
	　　以下函数用于更新数据库，例如用户更改密码：
	$db->update("update user set password='$new_password' where userid='$userid' ");
	*/
	function update($sql){
		return $this->query($sql);
	}
	
	/*
	　　以下函数用于向数据库插入一行，例如添加一个用户：
	$db->insert("insert into user (userid,username,password) values (null,'$username','$password')");
	*/
	function insert($sql){
		return $this->query($sql);
	}
	
	//$db->del("delete from admin where user='".$user."'");
	function del($sql){
		return $this->query($sql);
	}
	
	function getid(){ //这个函数用于取得刚插入行的id
		return mysql_insert_id();
	}
	
	function getmax($tab,$lanwei,$condition){ //这个函数用于取得最大值
		$sql = "SELECT max(".$lanwei.") FROM `".$tab."` WHERE ".$condition."";
		$result =  $this->query($sql);
		while($row=$this->getarray($result)){
			$max = $row[0];
		}
		return $max;
	}
	

	function getdbstr($sql){ 
		$result =  $this->query($sql);
		$row=$this->getarray($result);
	
       $max="";
       if ($row)
		 {
			$max = $row[0];
		}
		return $max;
	}
	function get_ip() { //获取IP 
    if ($_SERVER["HTTP_X_FORWARDED_FOR"]) 
        $ip = $_SERVER["HTTP_X_FORWARDED_FOR"]; 
    else if ($_SERVER["HTTP_CLIENT_IP"]) 
        $ip = $_SERVER["HTTP_CLIENT_IP"]; 
    else if ($_SERVER["REMOTE_ADDR"]) 
        $ip = $_SERVER["REMOTE_ADDR"]; 
    else if (getenv("HTTP_X_FORWARDED_FOR")) 
        $ip = getenv("HTTP_X_FORWARDED_FOR"); 
    else if (getenv("HTTP_CLIENT_IP")) 
        $ip = getenv("HTTP_CLIENT_IP"); 
    else if (getenv("REMOTE_ADDR")) 
        $ip = getenv("REMOTE_ADDR"); 
    else 
        $ip = "Unknown"; 
    return $ip; 
    } 
    
    function getusersign($userid){
        $this->userid=$userid;
        $this->str = "select u.name,u.loginid,u.imgurl,u.id,u.pwd,u.bh,u.classname,u.zt,u.userrank,u.usertype from user_user as u where u.id = '" . $this->userid . "'"; 
        $this->user=$this->getfirst($this->str);
        $this->loginid=$this->user["loginid"];
        $this->name=$this->user["name"];
        $this->userrank=$this->user["userrank"];
        $this->usertype=$this->user["usertype"];
        $this->imgurl=$this->user["imgurl"];
        $this->userbh=$this->user["bh"];
        $this->class=$this->user["classname"];
        $this->sign = $this->name . "|" . $this->loginid . "|" . $this->userrank . "|" . $this->usertype .  
        "|" . $this->imgurl . "|" . $this->userid . "|" . $this->userbh . "|" . $this->class;
        return $this->sign;
    }
    /*
　这个函数用于得到数据库中有哪些表
*/
/*
    function get_db_table($db_name)
    {
     $db_name=mysql_list_tables($db_name);//将表名列出
     $i=0;
     while($pp=mysql_fetch_array($db_name)){
        $array[$i]=$pp[0];
        $i++;
     }
    return $array;
    }
    */
        /*
　 这个函数用于得到数据库中有哪些字段，以及字段类型等信息
  */
  function get_table_fd($table_name){
    $query=$this->query("select * from $table_name");
    while($meta=mysql_fetch_field($query)){
        $field.= "`$meta->name` `$meta->type`(`$meta->max_length`),<br/>";
    }
    return $field;
  }
  
  /*这个主是是用于查看数据库表的备注*/
    function get_table_note_colu($lw_table){
        //$sql="select COLUMN_COMMENT, COLUMN_NAME from information_schema.columns where table_schema='".$this->database."' and table_name='".$lw_table."'";
        //$sql="select COLUMN_COMMENT, COLUMN_NAME from information_schema.columns where table_schema='$this->database' and table_name='$lw_table'";
        $lw_query=$this->query("select COLUMN_COMMENT, COLUMN_NAME from information_schema.columns where table_schema='$this->database' and table_name='$lw_table'");
        //echo "$sql";
        //$lw_query=$this->query($sql);
        return $lw_query;
    }
    function list_query($name){
        //else if($columns_note['COLUMN_COMMENT']=='学院'&&'COLUMN_COMMENT']=='专业'&&'COLUMN_COMMENT']=='班级'&&'COLUMN_COMMENT']=='出生年月'){
        if($name=='学院'||$name=='school'){
            $zz='^[1-9][0-9]?$';
        }
        
        else if($name=='专业'||$name=='major'){
            $zz='^[1-9][0-9][0-9][0-9]?$';
        }
        else if($name=='年级'||$name=='grade'){
            $zz='^[1-9][0-9][0-9][0-9][0-9][0-9]?$';
        }
        else if($name=='班级'||$name=='class'){
            $zz='^[1-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]?$';
        }
        else{
            $zz=$name;
        }
        //echo $zz;
        $query=$this->query("select obj_id, obj_name from obj_list where obj_id REGEXP '$zz'");//查询1，2，11，等。
        //echo '<p>'."select obj_id, obj_name from obj_list where obj_id REGEXP '$zz'".'<p>';
        //echo "33".$zz."4";
        return $query;    
    }

}
    


/*
　　主要函数就是这些，如果你自己有另外的需要，也可以自己添加上去。
　　因为凡使用该类的都必须连接数据库，下面就连接并选择好数据库吧：
*/
$db=new dbClass("$db_username","$db_password","$db_database","$db_hostname");
$db->connect();
$db->select();


function inputclean($input){
    if(strlen($input)>=6&&strlen($input)<=20){
        $clean=strtolower($input);
        $clean=preg_replace("/[^a-zA-Z_0-9]/","",$clean); //输入只有大小写数字下划线，且长度大于6小于等于20;
        return $clean;   
    }
    else{return NULL;}   
}
function mysqlclean($data){
    return(is_array($data)?NULL:mysql_real_escape_string($data));
}
?>

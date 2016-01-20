<?php
header("Content-type:text/html;charset=utf-8");  


require_once("../lw_inc/SubPages.php");  

//姣忛〉鏄剧ず鐨勬潯鏁? 

  $page_size=20;  

//鎬绘潯鐩暟  

  $nums=1024;  

//姣忔鏄剧ず鐨勯〉鏁? 

  $sub_pages=10;  

//寰楀埌褰撳墠鏄鍑犻〉  

  $pageCurrent=$_GET["p"];  
echo $pageCurrent;
  //if(!$pageCurrent) $pageCurrent=1;  

     

  $subPages=new SubPages($page_size,$nums,$pageCurrent,$sub_pages,"test.php?p=",2);  

?>
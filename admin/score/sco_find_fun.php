<?php
function sco_find_fun($type1,$k_k){
			//echo('<div>'.$type1.'sss'.$k_k.'</div>');
            if($type1==''||$k_k==''){
                return;
            }
            
            //global $type1=$type1;
            //$type='student';
			//echo('<div>sss</div>');
            $html='<table class="Ntable" cellspacing="1" cellpadding="0" align="Center" border="0" id="gvInfo" style="border-style:None;width:100%;">';
            //echo $type;

            $sql='select stu_id,user_name,nature,stu_sex,stu_nation,contact_way from user_stu where '.$type1.' like \'%'.$k_k.'%\'';
            //echo $sql;
            $html.='<tr class="SkyTDTopLine" align="center">
                      <th>学号</th>
                      <th>中文名</th>
                      <th>性质</th>
                      <th>性别</th>
                      <th>国籍</th>
                      <th>联系方式</th>
                      <th>信息</th>
                      <th>课表</th>
                      <th>成绩</th>
                      </tr>';
            $query=@mysql_query($sql);
            //echo $sql;
            while($re=@mysql_fetch_row($query)){
                $html.='<tr class="SkyTDLine" align="center">';
                foreach($re as $value){
                    $html.='<td>'.$value.'</td>';
                    
                }
                unset($value);
                
                $html.='<td><a href="../sysuser/usermanageself.php?id='.$re[0].'">信息</a></td><td><a href="../autocourse/viewstucourse.php?id='.$re[0].'&name='.$re[1].'">课表</a></td><td><a href="stu_sco_view.php?iidd1='.$re[0].'&name='.$re[1].'">成绩</a></td>';
                
                
                $html.='</tr>';
            }
            
            $html.='</table>';  
            echo $html;
}

?>

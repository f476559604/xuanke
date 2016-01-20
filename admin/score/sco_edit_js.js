$(document).ready(function(){
        //ss=Array();
        //var ss='wer';
        //calculate();
		
        
	});
 function calculate_score(){
        var total_score='';
        var f1=$('input[name="f1"]').val();
        var f2=$('input[name="f2"]').val();
        var f3=$('input[name="f3"]').val();
        if(f1==''||f2==''||f3==''){
            alert('请输入参数');
        }
        //var term_checking='';
        //alert(ss);
        else{
    		$('table[name="score_list"] tr').each(function(){
    			total_score=Number($(this).find('td:eq(5) input[type="text"]').val())*f1+Number($(this).find('td:eq(6) input[type="text"]').val())*f2+Number($(this).find('td:eq(7) input[type="text"]').val())*f3;
    			//term_checking=parseInt($(this).find('td:eq(6) input[type="text"]').val())+parseInt($(this).find('td:eq(7) input[type="text"]').val());
                if(!isNaN(total_score)){
                    $(this).find('td:eq(8)').text(total_score);
                }
                //$(this).find('td:eq(8) input[type="text"]').val(term_checking);
    			//alert(ss);
            });
       }
 }
  function calculate_checking(){
    
        var term_checking='';
        var f4=$('input[name="f4"]').val();
        var f5=$('input[name="f5"]').val();
        //alert(ss);
        if(f4==''||f5==''){
            alert('请输入参数');
        }
        else{
    		$('table[name="score_list"] tr').each(function(){
    			//total_score=parseInt($(this).find('td:eq(2) input[type="text"]').val())+parseInt($(this).find('td:eq(3) input[type="text"]').val())+parseInt($(this).find('td:eq(4) input[type="text"]').val());
    			term_checking=Number($(this).find('td:eq(9) input[type="text"]').val())*f4+Number($(this).find('td:eq(10) input[type="text"]').val())*f5;
                if(!isNaN(term_checking)){
                    $(this).find('td:eq(11)').text(term_checking);
                }
    			//alert(ss);
            });
       }
 }
 function sumbit_score(){
        var cou_all_id=new Array();
        var cou_stu_mark1=new Array();
        var cou_stu_mark2=new Array();
        var cou_stu_mark3=new Array();
        var cou_stu_mark=new Array();
        var cou_checking1=new Array();
        var cou_checking2=new Array();
        var cou_checking=new Array();
        var jj=0;
        var ii=0;
		$('td[name="cou_all_id"]').each(function(){
		  //ss=$(this).text();
          cou_all_id.push(parseInt($(this).text()));
          //alert(ss);
		});
        $('input[name="cou_stu_mark1"]').each(function(){
		  //ss=$(this).text();
          cou_stu_mark1.push(parseInt($(this).val()));
          //alert(ss);
		});
        $('input[name="cou_stu_mark2"]').each(function(){
		  //ss=$(this).text();
          cou_stu_mark2.push(parseInt($(this).val()));
          //alert(ss);
		});
        $('input[name="cou_stu_mark3"]').each(function(){
		  //ss=$(this).text();
          cou_stu_mark3.push(parseInt($(this).val()));
          //alert(ss);
		});
        $('td[name="cou_stu_mark"]').each(function(){
		  //ss=$(this).text();
          cou_stu_mark.push(parseInt($(this).text()));
          if($(this).text()==''){
            ii=1;

          }
          //alert(ss);
		});
        $('input[name="cou_checking1"]').each(function(){
		  //ss=$(this).text();
          cou_checking1.push(parseInt($(this).val()));
          //alert(ss);
		});
        $('input[name="cou_checking2"]').each(function(){
		  //ss=$(this).text();
          cou_checking2.push(parseInt($(this).val()));
          //alert(ss);
		});
        $('td[name="cou_checking"]').each(function(){
		  //ss=$(this).text();
          cou_checking.push(parseInt($(this).text()));
          //alert($(this).text());
          if($(this).text()==''){
            jj=1;
            //alert('ss');
          }
          //alert(ss);
		});
        //ss=document.getElementsByName('cou_all_id');
        //ss=$('#www td').text();
			//ss=$(this).innerhtml();
		//alert(ss[0].value);
        /*alert(cou_all_id);
        alert(cou_stu_mark1);
        alert(cou_stu_mark2);
        alert(cou_stu_mark3);
        alert(cou_stu_mark);
        alert(cou_checking1);
        alert(cou_checking2);
        alert(cou_checking);*/
        if(jj==0||ii==0){
            $.post("sco_edit_done.php",
                    {"cou_all_id":cou_all_id,
                    "cou_stu_mark1":cou_stu_mark1,
                    "cou_stu_mark2":cou_stu_mark2,
                    "cou_stu_mark3":cou_stu_mark3,
                    "cou_stu_mark":cou_stu_mark,
                    "cou_checking1":cou_checking1,
                    "cou_checking2":cou_checking2,
                    "cou_checking":cou_checking
                    },function(data){
                        alert(data);//json用法，将字符串转化为json对象
                        
                });
        }
        else{
            alert('请完善成绩与考勤');
        }
        
 }
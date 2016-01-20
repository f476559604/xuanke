
$(document).ready(function() {
           
           //$('#add_sch').click(function(){
           //     add_sch();
           //});
           //$('#add_maj').click(function(){
           //     add_maj();
           //});
        });
        
        /**************************************刘炜************/
        
        function getmajor(get_con){
            var get_name=get_con.name;
            var get_num=get_name.substring(6);
            get_name='select[name="'+get_name+'"] option:selected';
            get_num='select[name="major'+get_num+'1"]';
            //alert(get_num);
            //alert(get_name);
            //var aa='sdf';
            var aa=$(get_name).val();
            //var aa=$("input[name=qqww]").val();
            var hh='<option value="">Select a Major</option>';
            $.post("lw_major.php",{"aa":aa},function(data){
                data=eval(data);//json用法，将字符串转化为json对象
                 
                $.each(data,function(entryIndex,entry){
                     hh+='<option value="'+this['obj_id']+'">'+this['obj_name']+'</option>';
                     //alert(this['obj_name']);
                });
                
                $(get_num).empty();
                $(get_num).append(hh); 
            });
        }
        function getgrade(gra_name){
            var grad_id=gra_name.name;
            var grad_num=grad_id.substring(5);
            var grad_sel='select[name="'+grad_id+'"] option:selected';
            var grad_span='#spangrade'+grad_num;
            var bb=$(grad_sel).val();
            var hh='';
            $.post("lw_grade.php",{"bb":bb},function(data){
                data=eval(data);//json用法，将字符串转化为json对象
                $.each(data,function(entryIndex,entry){
                     hh+='<label><input type="checkbox" name="grade'+grad_num+'[]" value="'+this['obj_id']+'"/>'+this['obj_name']+'</label>&nbsp;&nbsp;&nbsp;&nbsp;';
                });
                //<input type="checkbox" name="grade" value="01" />
                //$("input[name='grade1']").detach();
                //$("input[name='grade1']").text(hh);
                $(grad_span).html(hh);
                //alert(hh);
            });
            
        }
        //var sch_id='s1';
        //var maj_id='s11';
        var sch_num=1;
        function add_sch(the_click){
            //var sch_id=the_click.id;
            //var sch_num_id=sch_id.substring(7);
            
            //sch_choose='#s'+sch_num+maj_num;
            //alert(sch_num);
            if(sch_num<9){
                sch_num++;
                var sch_num_del='del_sch'+sch_num;
                var sch_num_add='add_sch'+sch_num;
                var sch_only_name='school'+sch_num;
                $('#sch_line').before('<tr class="MeNewTDLine" id="s'+sch_num+'"></tr><tr class="MeNewTDLine" id="s'+sch_num+'1"></tr>');
                var sch_name='#s'+sch_num;
                var sch_con=$('#s1').html();
                $(sch_name).html(sch_con);
                $(sch_name).find('select').attr('name',sch_only_name);
                $(sch_name).find('a:eq(0)').attr('id',sch_num_del);
                $(sch_name).find('a:eq(1)').attr('id',sch_num_add);
                var sch_del_dis='#del_sch'+sch_num;
                $(sch_del_dis).css('display','inline');
                //$(sch_name).after('');
                //$('#s2 td:eq(1)').empty();
                var maj_con=$('#s11').html();
                maj_id='#s'+sch_num+'1';
                major_name='major'+sch_num+'1';
                del_id='del_'+sch_num+'1';
                add_id='add_maj'+sch_num+'1';
                $(maj_id).html(maj_con);
                var all_ch='allchoose'+sch_num+'1';//全选id
                var ch_gra='grade'+sch_num+'1[]';//全选年级数组
                maj_id_1=maj_id+' select';
                $(maj_id_1).attr('name',major_name);
                maj_id_2=maj_id+' a:eq(0)';
                maj_id_3=maj_id+' a:eq(1)';
                //on_click='del_major(this)';
                $(maj_id_2).attr('id',del_id);
                $(maj_id_3).attr('id',add_id);
                $(maj_id).find('a:eq(2)').attr('id',all_ch);//全选id
                $(maj_id).find('input[type="checkbox"]').attr('name',ch_gra);//全选id 
                //span
                var span_id='spangrade'+sch_num+'1';
                $(maj_id).find('span').attr('id',span_id);
            }
            else{alert('不能增加学校了')};/*//sch_con='<select name="school'+sch_num+'">';
            */
            //sch_con+=$('select[name="school1"]').html();
            //sch_con+='</select>';
            //var eee='#s2 td:eq(1)';
            
            //$('#s2 td:eq(1)').html(sch_con);
            //$(eee).html(sch_con);
            //alert($('#s2 td:eq(1)').html());
        }
        function add_maj(the_click){
            var add_id=the_click.id;
            var id_id=add_id.substring(7);
            var the_id='#s'+id_id;
            //alert(id_id);
            //id_id=parseInt(id_id);
            id_id++;
            if(add_id.substring(8)>=9){
               alert('不能增加专业了');//9个院9个专业
            }
            else {
                   // var maj_num_0=maj_num-1;
                   //alert(the_id);
                $(the_id).after('<tr class="MeNewTDLine" id="s'+id_id+'"></tr>');
               /*if($(maj_choose).size()>0){     
                    $(maj_choose).after('<tr class="MeNewTDLine" id="s'+sch_num+maj_num+'"></tr>');
               }
               else{
                    maj_choose='#s'+sch_num;
                    $(maj_choose).after('<tr class="MeNewTDLine" id="s'+sch_num+maj_num+'"></tr>');
                }*/
                var that_far=add_id.substring(7,8);
                that_far='#s'+that_far+'1';
                var maj_con=$(that_far).html();
                maj_id='#s'+id_id;
                major_name='major'+id_id;
                del_id='del_'+id_id;
                add_id='add_maj'+id_id;
                var span_new_id='spangrade'+id_id;//
                $(maj_id).html(maj_con);
                var all_ch='allchoose'+id_id;//全选id
                var ch_gra='grade'+id_id+'[]';//全选年级数组
                maj_id_1=maj_id+' select';
                $(maj_id_1).attr('name',major_name);
                maj_id_2=maj_id+' a:eq(0)';
                maj_id_3=maj_id+' a:eq(1)';
                //on_click='del_major(this)';
                $(maj_id_2).attr('id',del_id);
                $(maj_id_3).attr('id',add_id);
                $(maj_id).find('a:eq(2)').attr('id',all_ch);//全选id
                $(maj_id).find('input[type="checkbox"]').attr('name',ch_gra);//全选id
                //$("#del_11").style.display="true";
                $(maj_id).prev().find('a:not(a:eq(2))').css('display','none');
                $(maj_id).find('a').css('display','inline');
                $(maj_id).find('span').attr('id',span_new_id);
                //alert(span_new)
             }  
            /* //$("#del_11").css('display','inline');
            //$(maj_id_2).attr('onclick',on_click);
            /*alert(maj_con);
            maj_id_cho=maj_id+' td:eq(1)';
            $(maj_id_cho).empty();
            maj_con='<select name="major'+sch_num+maj_num+'">';
            maj_con+=$('select[name="major11"]').html();
            maj_con+='<select>';
            $(maj_id_cho).html(maj_con);
            //alert(maj_con);
            maj_id_cho=maj_id+' td:eq(3) a';
            $(maj_id_cho).attr('id','allchoose12');
            //alert($(maj_id_cho).html());
            maj_id_cho=maj_id+' td:eq(3) span';
            $(maj_id_cho).attr('id','spangrade12');*/
        }
        function del_major(click_on){
            //alert(click_on);
            var ss=click_on.id;
            var del_del=ss.substring(4);//if(){
            //alert(del_del);
            del_del='#s'+del_del;
            if(ss.substring(5)!='2'){
                $(del_del).prev().find('a').css('display','inline');

            }
             else{
                $(del_del).prev().find('a:not(a:eq(0))').css('display','inline');
            }
            $(del_del).remove();
            //alert(ss.substring(5));
            
            /*    maj_num_1--;
            
            //}
            
                
            
            ss='#'+ss;
            //var ss=document.getElementById("del_11");
            $(ss).parent().parent().prev().find('a:eq(0)').css('display','inline');
            $(ss).parent().parent().remove();
            if(ss=='#del_12'||ss=='#del_22'||ss=='#del_32'||ss=='#del_42'||ss=='#del_52'||ss=='#del_62'||ss=='#del_72'||ss=='#del_82'||ss=='#del_92'){
                $('#del_11').css('display','none');
                //alert(ss);
            }
            */
            
            //ss.remove();
            //alert(ee);
        }
        function del_sch(tar_del){
            var tar_id=tar_del.id;
            tar_id=tar_id.substring(7);
            //alert(tar_id);
            tar_0='#s'+tar_id;
            tar_1='#s'+tar_id+'1';
            tar_2='#s'+tar_id+'2';
            tar_3='#s'+tar_id+'3';
            tar_4='#s'+tar_id+'4';
            tar_5='#s'+tar_id+'5';
            tar_6='#s'+tar_id+'6';
            tar_7='#s'+tar_id+'7';
            tar_8='#s'+tar_id+'8';
            tar_9='#s'+tar_id+'9';
            $(tar_0).remove();
            $(tar_1).remove();
            $(tar_2).remove();
            $(tar_3).remove();
            $(tar_4).remove();
            $(tar_5).remove();
            $(tar_6).remove();
            $(tar_7).remove();
            $(tar_8).remove();
            $(tar_9).remove();
            
            
            //this.parent
        }
        function choose_all(grade_ch){
            var gra_ch=grade_ch.id;
            gra_ch=gra_ch.substr(9,gra_ch.length)
            
            gra_ch="input[name='grade"+gra_ch+"[]']";
            //$('#allchoose1').toggle(function(){
            if($(gra_ch).attr("checked")){
            $(gra_ch).attr("checked",false);
            }
           //},function(){
            else{
               $(gra_ch).attr("checked",true); 
            }
                
           //});
        }
    
    function data_handle(){
        
        var sub_sch_info='';
        var sub_maj_info='';
        var sub_gra_info='';
        var sub_sch_name='';
        var sub_maj_name='';
        var sub_gra_name='';
        //var gra_len='';
        //var gra_info='';
        //var gra_only='';
        //ssss='input[name="grade11[]"]:checked';
        //ssss='select[name="school1"] option:selected';
        //alert($(ssss).text());
        for(var nn=1;nn<=9;nn++){
            sub_sch_name='select[name="school'+nn+'"] option:selected';
            
            if($(sub_sch_name).text()){
                sub_sch_info+=$(sub_sch_name).val()+'#';
                //alert(sub_sch_info);
            }
            //alert(sub_sch_info);
            for(var mm=1;mm<=9;mm++){
                sub_maj_name='select[name="major'+nn+mm+'"] option:selected';
                if($(sub_maj_name).text()){
                    sub_maj_info+=$(sub_maj_name).val()+'#';
                    
                }
                
                sub_gra_name='input[name="grade'+nn+mm+'[]"]:checked';
                $(sub_gra_name).each(function(){
                    if($(this).val()!=''){
                        sub_gra_info+=$(this).val()+'#';
                        //gra_info.push(gra_only);
                        //alert($(this).val());
                    }
                })
                
            }
        }
        sub_sch_info=sub_sch_info.substring(0,sub_sch_info.length-1);
        sub_maj_info=sub_maj_info.substring(0,sub_maj_info.length-1);
        sub_gra_info=sub_gra_info.substring(0,sub_gra_info.length-1);
            //alert(sub_sch_info);
            //alert(sub_maj_info);
            //alert(sub_gra_info);
        //ss= $('select[name="cou_classroom"] option:selected').val()
        //alert(ss);
        //alert(ss);
           
        $.post("course_app_insert.php",{
            school:sub_sch_info,
            major:sub_maj_info,
            grade:sub_gra_info,
            cou_name:$('input[name="cou_name"]').val(),
            cou_code:$('input[name="cou_code"]').val(),
            cou_type:$('select[name="cou_type"] option:selected').val(),
            cou_volume:$('input[name="cou_volume"]').val(),
            //cou_selected:$('input[name="cou_selected"]').val(),
            cou_credit:$('input[name="cou_credit"]').val(),
            //cou_grade_state:$('input[name="cou_grade_state"]').val(),
            cou_time_detail:$('input[name="cou_time_detail"]').val(),
            cou_week_to:$('input[name="cou_week_to"]').val(),
            //teach_school:$('input[name="teach_school"]').val(),
            teach_teacher:$('select[name="teach_teacher"] option:selected').val(),
            teachering_material:$('input[name="teachering_material"]').val(),
            cou_term:$('select[name="cou_term"] option:selected').val(),

            //cou_classroom:$('input[name="cou_classroom"]').val(),
            cou_classroom:$('select[name="cou_classroom"] option:selected').val(),
            //cou_nums:$('input[name="cou_nums"]').val(),
            cou_weekcycle:$('select[name="cou_weekcycle"] option:selected').val(),
            //state:$('input[name="state"]').val(),
            //register_user:$('input[name="register_user"]').val(),
            other_note:$('input[name="other_note"]').val(),
            //register_time:$('input[name="register_time"]').val(),
            //register_ip:$('input[name="register_ip"]').val(),
            cou_introduce:$('input[name="cou_introduce"]').val()
            },
            function(data){
                if(data=='1'){alert('success');}
                else if(data=='2'){alert('failed,The classroom has been used');}
                else {alert(data+'lw');
                
                }
                    
            });

    }
    var  mysec0 =0;
    var  mysec =0;
    function sub_mit(){
        var Today=new Date();
        var NowHour = Today.getHours();
        var NowMinute = Today.getMinutes();
        var NowSecond = Today.getSeconds();
        mysec0 = (NowHour*3600)+(NowMinute*60)+NowSecond;
        //alert(mysec0);
        if(mysec0-mysec>=10){
            data_handle();
             var NowHour = Today.getHours();
             var NowMinute = Today.getMinutes();
             var NowSecond = Today.getSeconds();
             mysec = (NowHour*3600)+(NowMinute*60)+NowSecond;
        }
        else{
            alert('please wait ten second你已经提交过一次(间隔10秒)');
        }
    }

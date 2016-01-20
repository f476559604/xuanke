
today=new Date();
var hours = today.getHours();
var minutes = today.getMinutes();
var seconds = today.getSeconds();
var timeValue = "<FONT COLOR=white>" + ((hours >12) ? hours -12 :hours);
timeValue += ((minutes < 10) ? "<BLINK><FONT COLOR=white>:</FONT></BLINK>0" : "<BLINK><FONT COLOR=white>:</FONT></BLINK>") + minutes+"</FONT></FONT>";
timeValue += (hours >= 12) ? "<FONT COLOR=white>PM</FONT>" : "<FONT COLOR=white>AM</FONT>";

function initArray(){
this.length=initArray.arguments.length
for(var i=0;i<this.length;i++)
this[i+1]=initArray.arguments[i] }
var d=new initArray("<font color=red>星期日","<font color=black>星期一","<font color=black>星期二","<font color=black>星期三","<font color=black>星期四","<font color=black>星期五","<font color=red>星期六");
document.write("<font color=black>",today.getFullYear(),"<font color=black>年","<font color=black>",today.getMonth()+1,"<font color=black>月","<font color=black>",today.getDate(),"<font color=black>日 </FONT>",d[today.getDay()+1]," "); 


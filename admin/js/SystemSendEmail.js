var qF = "txtUserID";

function addit(qaEmail)
{
   if (Form1.elements[qF].value.length == 0 || Form1.elements[qF].value.indexOf(qaEmail) == - 1)
   {
      if (Form1.elements[qF].value.length != 0 && Form1.elements[qF].value.charAt(Form1.elements[qF].value.length - 1) != ",")
      Form1.elements[qF].value += ",";
      Form1.elements[qF].value += qaEmail;
   }
}
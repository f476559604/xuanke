<?php
header("Content-type:text/html;charset=utf-8");
?>
<form name="form1"  method="post" action="">
  <table width="200" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><label>
        <input type="text" name="a1[]" />
      </label></td>
      <td><input type="text" name="a2" /></td>
      <td><input type="text" name="a3" /></td>
    </tr>
    <tr>
      <td><input type="text" name="a1[]" /></td>
      <td><input type="text" name="a2" /></td>
      <td><input type="text" name="a3" /></td>
    </tr>
    <tr>
      <td><input type="text" name="a1[]" /></td>
      <td><input type="text" name="a2" /></td>
      <td><input type="text" name="a3" /></td>
    </tr>
  </table><input name="" type="submit" value="提交" />
</form>
<?php
    //print_r($a1);
    var_dump($_POST['a1']);
?>

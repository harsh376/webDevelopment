<?php
session_start();
include ("configuration.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">

function addeducation()
{
	var education = document.getElementById('education').value;
	window.location = "insert_education.php?education="+education;	
}

function isValid()
{
	var name = document.frm.name.value;
	var father = document.frm.father.value;
	var address = document.frm.address.value;
	
	if(name=="")
	{
		alert("Please enter your Name");
		document.frm.name.focus;
		return false;
	}
	else if(father=="")
	{
		alert("Please enter your Father's Name");
		document.frm.father.focus;
		return false;
	}
	else if(address=="")
	{
		alert("Please enter your Name");
		document.frm.address.focus;
		return false;
	}
}

</script>
</head>

<body style="background-color:none;">

<table width="600px" border="1" cellspacing="0" cellpadding="0" style="background-color:#E8E8E8;">
<form name="frm" id="frm" action="insert_user.php" method="post" onsubmit="return isValid();" enctype="multipart/form-data">
  <tr>
    <td width="40%">Name : </td>
    <td><input type="text" name="name" id="name" value="" style="size:300px;" /></td>
  </tr>
  <tr>
    <td>Father's Name : </td>
    <td><input type="text" name="father" id="father" value="" style="size:300px;" /></td>
  </tr>
  <tr>
    <td>Address : </td>
    <td><input type="text" name="address" id="address" value="" style="size:300px;" /></td>
  </tr>
  <tr>
    <td>Education : </td>
    <td>
    	<select name="education" id="education">
        	<option value="">---Choose Education---</option>
            <option value="Undergraduate">Undergraduate</option>
			<option value="BA">B.A</option>
			<option value="MA">M.A</option>
            <option value="BSC">B.Sc</option>
			<option value="MSC">M.Sc</option>
			<option value="PHD">P.Hd</option>
        </select>
        <input type="button" name="btnadd" id="btnadd" value="Add" onclick="return addeducation();" />
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
  </tr>
  </form>
</table>



</body>
</html>

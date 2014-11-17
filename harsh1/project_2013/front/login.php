<?php
session_start();
include ("../configuration.php");




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript">

function isValid()
{
	var txtname = document.form1.name.value;
	var txtfatherName = document.form1.fatherName.value;
	var txtcity = document.form1.city.value;
	var txtaddress = document.form1.address.value;
	var txtresume = document.form1.resume.value;
	
	for(i=0; i<document.form1.sex.length; i++)
	{
		if(document.form1.sex[i].checked)
		{
			var txtsex = document.form1.sex[i].value;
		}
	}
	
	if(txtname=="")
	{
		alert("Please enter your name.");
		document.form1.name.focus();
		return false;
	}
	if(txtfatherName=="")
	{
		alert("Please enter your Father's name.");
		document.form1.fatherName.focus();
		return false;
	}
	if(txtcity=="")
	{
		alert("Please select your city.");
		document.form1.city.focus();
		return false;
	}
	if(txtaddress=="")
	{
		alert("Please enter your address.");
		document.form1.city.focus();
		return false;
	}
	if(txtresume=="")
	{
		alert("Please upload your resume.");
		document.form1.resume.focus();
		return false;
	}
	else
	{
		var s = txtresume.lastIndexOf(".")+1;
		var ext = txtresume.substr(s);
		if(!(ext=="doc" || ext=="docx" || ext=="pdf" || ext=="txt"))
		{
			alert("Please upload your resume in Word/PDF/txt format.");
			document.form1.resume.focus();
			return false;
		}	
	}
	
	
	
}

</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body topmargin="0">

<form name="form1" id="form1" action="insertUser.php" method="post" enctype="multipart/form-data" onsubmit="return isValid()" >
  <div style="width:500px; height:1000px; background:#CCCCCC;">
   	<div style=" width:140px; height:40px; float:left; padding:0px 0px 0px 10px; background:none;">
        	Name :
    </div>
        <div style="width:350px; height:40px; float:left; background:none;">
       	  <input type="text" name="name" id="name" style="float:left;" />        	
    </div>
        <div style="width:140px; height:40px; float:left; background:none; padding:0px 0px 0px 10px;">
        	Father's Name: 
    </div>
        <div style="width:350px; height:40px; float:left; background:none;">
		  <input type="text" name="fatherName" id="fatherName" style="float:left;" />       
    </div>
        <div style="width:140px; height:40px; float:left; padding:0px 0px 0px 10px; background:none;">
        	Sex: 
    </div>
        <div style="width:350px; height:40px; float:left; background:none;">
       	  <input type="radio" name="sex" value="Male" checked="checked" style="float:left;" /><font style="float:left;">Male&nbsp;&nbsp;</font>
            <input type="radio" name="sex" value="Female" style="float:left;" /><font style="float:left;">Female&nbsp;&nbsp;</font>            
    </div>
        <div style="width:140px; height:40px; float:left; padding:0px 0px 0px 10px;">
        	City:
    </div>
        <div style="width:350px; height:40px; float:left; background:none;">
        	<select name="city" id="city" style="float:left;">
            	<option value="">Select</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Delhi">Delhi</option>
                <option value="Chennai">Chennai</option>
                <option value="Bangalore">Bangalore</option>
            </select>	
    </div>
        <div style="width:140px; height:140px; float:left; padding:0px 0px 0px 10px;">
        	Address: 
    </div>        
    	<div style="width:350px; height:140px; float:left;">
        	<textarea rows="7" cols="20" wrap="physical" name="address" style="float:left;"></textarea>
        </div>
        <div style="width:140px; height:40px; float:left; padding:0px 0px 0px 10px;">
        	Interests:
        </div>
    <div style="width:350px; height:40px; float:left;">
        	<input type="checkbox" name="interests[]" value="Sports" style="float:left;" /><font style="float:left;">Sports</font>
            <input type="checkbox" name="interests[]" value="Politics" style="float:left;" /><font style="float:left;">Politics</font>
            <input type="checkbox" name="interests[]" value="Adventure" style="float:left;" /><font style="float:left;">Adventure</font>
      <input type="checkbox" name="interests[]" value="Business" style="float:left;" /><font style="float:left;">Business</font>
    </div>
        <div style="width:140px; height:40px; float:left; padding:0px 0px 0px 10px;">
        	Upload Resume: 
    </div>
        <div style="width:350px; height:40px; float:left;">
        	<input type="file" name="resume" id="resume" style="float:left;" />
    </div>
        <div style="width:240px; height:40px; background:none; float:left; padding:0px 10px 0px 0px;">
        	<input type="submit" name="submit" id="submit" value="Save" style="background:#990000; color:#CCCCCC; float:right; border:none;" />
        </div>
        <div style="width:240px; height:40px; float:left; padding:0px 0px 0px 10px;">
        	<input type="reset" name="reset" id="reset" value="Reset" style="background:#003366; color:#CCCCCC; float:left; border:none;" />
        </div>
	</div>           
</form>  





</body>
</html>

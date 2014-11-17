<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">

	function formValid()
	{
			
		var txtresume=document.frm.resume.value;
		var txtname=document.frm.name.value;
		var txtfatherName=document.frm.fatherName.value;
		var txtcity=document.frm.city.value;
		var txtaddress=document.frm.address.value;
		
		for(i=0; i<document.frm.sex.length; i++)
		{
			if(document.frm.sex[i].checked)
			{
				var txtsex=document.frm.sex[i].value;
			}	
		}
		
		if(txtname=="")
		{
			alert("Please enter your Name");
			document.frm.name.focus();
			return false;
		}	
		
		if(txtfatherName=="")
		{
			alert("Please enter your Father's Name");
			document.frm.fatherName.focus();
			return false;
		}	
		
		if(txtcity=="")
		{
			alert("Please select a City");
			document.frm.city.focus();
			return false;
		}
		
		if(txtaddress=="")
		{
			alert("Please enter your Address");
			document.frm.address.focus();
			return false;
		}
				
		if(txtresume=="")
		{
			alert("Pleasu upload resume");
			document.frm.resume.focus();
			return false;
		}
		
		else
		{
			var ss=txtresume.lastIndexOf(".")+1;
			var ext=txtresume.substr(ss);
			if(!(ext=="doc" || ext=="docx" || ext=="pdf" || ext=="txt"))
			{
				alert("Please upload resume in doc, pdf or txt format");
				document.frm.resume.focus();
				return false;
				
				
				
				
				
			}
		}
		
		
		
		
		
	
	}

</script>

</head>

<body topmargin="0">


	<form name="frm" action="insertdata.php" method="post" onsubmit="return formValid();" enctype="multipart/form-data">
	
    	<div style="width:500px; height:500px; background-color:#EBEBEB;">
        
        	<div style="width:140px; height:40px; float:left; background-color:none; text-align:left; padding:0px 0px 0px 10px;">
            	Name : 
            </div>
                     
            <div style="width:350px; height:40px; float:left; background-color:none;">
            	<input type="text" name="name" id="name" style="float:left;" />
            </div>
            
            <div style="width:140px; height:40px; float:left; background-color:none; text-align:left; padding:0px 0px 0px 10px;">
            	Father's Name : 
            </div>
            
            <div style="width:350px; height:40px; float:left; background-color:none;">
            	<input type="text" name="fatherName" id="fatherName" style="float:left;" />
            </div>
            
            <div style="width:140px; height:40px; float:left; background-color:none; text-align:left; padding:0px 0px 0px 10px;">
            	Sex : 
            </div>
            
            <div style="width:350px; height:40px; float:left; background-color:none;">
            	<input type="radio" name="sex" style="float:left" value="Male" checked="checked" /><font style="float:left;">Male&nbsp;&nbsp;</font>
                <input type="radio" name="sex" style="float:left" value="Female" /><font style="float:left;">Female&nbsp;&nbsp;</font>
            </div>
            
            <div style="width:140px; height:40px; float:left; background-color:none; text-align:left; padding:0px 0px 0px 10px;">
            	City : 
            </div>
            
            <div style="width:350px; height:40px; float:left; background-color:none;">
            	
                <select name="city" style="float:left;">
                	<option value="">Select</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Kolkata">Kolkata</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Bengaluru">Bengaluru</option>
                </select>
                                       
            </div>
            
            <div style="width:140px; height:150px; float:left; background-color:none; padding:0px 0px 0px 10px; text-align:left;">
            	Address : 
            </div>
            
            <div style="width:350px; height:150px; float:left; background-color:none;">
            	<textarea rows="7" cols="20" style="float:left; " name="address" wrap="physical"></textarea>
            </div>
            
            <div style="width:140px; height:40px; float:left; background-color:none; padding:0px 0px 0px 10px; text-align:left;">
            	Interests : 
            </div>
            
            <div style="width:350px; height:40px; float:left; background-color:none;">
            	
                <input type="checkbox" name="interests[]" value="Sports" style="float:left;" /><font style="float:left;">Sports&nbsp;&nbsp;</font>
                <input type="checkbox" name="interests[]" value="Business" style="float:left;" /><font style="float:left;">Business&nbsp;&nbsp;</font>
                <input type="checkbox" name="interests[]" value="Adventure" style="float:left;" /><font style="float:left;">Adventure&nbsp;&nbsp;</font>
                <input type="checkbox" name="interests[]" value="Politics" style="float:left;" /><font style="float:left;">Politics&nbsp;&nbsp;</font>
                
            </div>
           
            <div style="width:140px; height:40px; float:left; background-color:none; padding:0px 0px 0px 10px; text-align:left;">
            	Upload Resume : 
            </div>
            
            <div style="width:350px; height:40px; float:left; background-color:none;">
            	<input type="file" name="resume" id="resume" style="float:left;" /> 
            </div>
            
            <div style="width:240px; height:40px; float:left; background-color:none; padding:0px 10px 0px 0px;">
            	<input type="submit" name="submit" id="submit" value="Save" style="float:right; background-color:#990000; color:#CCCCCC; border:none;" />
            </div>
            
            <div style="width:240px; height:40px; float:left; background-color:none; padding:0px 0px 0px 10px;">
            	<input type="reset" name="reset" id="reset" value="Reset" style="float:left; background-color:#666666; color:#CCCCCC; border:none;"" />
            </div>
            
        
        </div>
    
    
    
	
	</form>




</body>
</html>

<?php
include("../configuration.php");

$cat_id=$_REQUEST["cat_id"];
$catergory_id;

//$sqlapp  :  main menu

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css">
	@import url(../front_end/top_menu_style.css);
</style>

<link rel="stylesheet" href="../front_end/main_menu_style.css" type="text/css" />

<style type="text/css" media="screen">
	@import url(../front_end/slideshow_style.css);
</style>

<link rel="stylesheet" href="../front_end/vertical_menu_style.css" type="text/css" />

<link rel="stylesheet" href="../front_end/featured_style.css" type="text/css" />

<script language="javascript" src="cal2.js"></script>
<script language="javascript" src="cal_conf2.js"></script>

<!-- JavaScripts-->
<script type="text/javascript" src="../front_end/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="../front_end/s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 4000
        });
    });
</script>

<script language="javascript" type="text/javascript">
function isValidEmail()
	{
		var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
		var email=document.frm_register.email.value;
		return emailPattern.test(email);
	}	

function isValidPassword(a)
{
	if(a=="" || a.length<6)
	{
		return false;
	}
	return true;
}

function isValid()
{
	var title = document.frm_register.title.value;
	var fname = document.frm_register.fname.value;
	var surname = document.frm_register.surname.value;
	var password = document.frm_register.password.value;
	var dob = document.frm_register.dob.value;
	var address = document.frm_register.address.value;
	var postal_code = document.frm_register.postal_code.value;
	var city = document.frm_register.city.value;
	var state = document.frm_register.state.value;
	var country = document.frm_register.country.value;
	var phone = document.frm_register.phone.value;

	if(title=="")
	{
		alert("Please Select a Title.");
		document.frm_register.title.focus;
		return false;
	}
	
	
	else if(fname=="")
	{
		alert("Please Enter your First Name.");
		document.frm_register.fname.focus;
		return false;
	}
	
	else if(surname=="")
	{
		alert("Please Enter your Surname.");
		document.frm_register.surname.focus;
		return false;
	}
	
	else if(!isValidEmail())
	{
		alert("Please enter a valid Email Address");
		document.frm_register.email.focus;
		return false;
	}
	
	else if(!isValidPassword(password))
	{
		alert("Your Password must be of 6 characters");
		document.frm_register.password.focus;
		return false;	
	}
	
	else if(dob=="")
	{
		alert("Please Enter your Date of Birth");
		document.frm_register.dob.focus;
		return false;
	}
	
	else if(address=="")
	{
		alert("Please Enter your Address");
		document.frm_register.address.focus;
		return false;
	}
	
	else if(postal_code=="")
	{
		alert("Please Enter the Postal Code");
		document.frm_register.postal_code.focus;
		return false;
	}
	
	else if(city=="")
	{
		alert("Please Enter your City");
		document.frm_register.city.focus;
		return false;
	}
	
	else if(state=="")
	{
		alert("Please Enter your State");
		document.frm_register.state.focus;
		return false;
	}
	
	else if(country=="")
	{
		alert("Please Enter your Country");
		document.frm_register.country.focus;
		return false;
	}
	
	else if(phone=="" || isNaN(phone))
	{
		alert("Please Enter your Phone Number");
		document.frm_register.phone.focus;
		return false;
	}

		
}
	
</script>

</head>

<body topmargin="0" style="background-color:#E6E6E6; height:1300px; margin-top:auto;">

<center>

<div style="width:1024px; border:0px solid #000000; height:1200px; background-color:#FFFFFF;">						<!--	page div		-->

	<div style="width:1024px; border:0px solid #FF0000; height:35px; background-color:#570202;">					<!-- 	top menu div	-->
    
	  <?php
		include ("top_menu.php");
		?>
       
    </div>																						<!-- 	end of top menu div		-->

	<div style="width:1024px; border:0px solid #000099; height:150px; background-color:none;">				<!-- 	site name div	-->
        	<img src="../front_end/logo.jpg" style="float:left;" />
    </div>																						<!-- 	end of site name div	-->

	<div class="main_menu" style="width:1024px; border:0px solid #006666; height:50px;">					<!-- 		main menu div		-->
    	
   	  <?php
		include ("main_menu.php");					//$sqlapp
		?>
       
    </div>											<!-- 		end of main menu div		-->

	<div style="width:700px; height:1000px; background-color:none; float:left;">			<!-- content div	-->
    	
        <div style="width:660px; margin-left:40px; background-color:none; height:1000px; float:left;">		<!-- this div is for the left margin	-->
       	  <div style="width:660px; height:35px; background-color:none;">
                <br/>
                
            <a href="../front_end/index.php" style="text-decoration:none; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; float:left; color:#666666;">Home&nbsp;>&nbsp;</a>
                <font style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; float:left; font-weight:600; color:#666666;"> 
                <!--page name-->
                Sign Up
                </font>
   		  </div>
          <hr />
          <h4 style="font-family:Verdana, Arial, Helvetica, sans-serif; float:left; width:660px; text-align:left;">Create your Account </h4>
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#666666;"><font style="color:#FF0000; font-weight:bold;">*</font> Required Fields</p>
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><b>YOUR PERSONAL INFORMATION</b></p>
                    
          <hr style="border:1px dotted;" />
          <br/>
          <form name="frm_register" id="frm_register" action="insert_user.php" method="post" enctype="multipart/form-data" onsubmit="return isValid();" > 
        <table width="660px" border="0">
              <tr>
                <td width="25%">Title : </td>
                <td>
                	<select name="title">
                    	<option value=""></option>
                        <option value="Mr">Mr.</option>
                        <option value="Mrs">Mrs.</option>
                        <option value="Ms">Ms.</option>
                    </select>
                    <font style="color:#FF0000; font-weight:bold;">*</font>
                </td>
              </tr>
              <tr>
                <td>First name : </td>
                <td><input type="text" name="fname" id="fname" style="width:200px;" value="" /><font style="color:#FF0000; font-weight:bold;">*</font></td>
              </tr>
              <tr>
                <td>Surname : </td>
                <td><input type="text" name="surname" id="surname" style="width:200px;" value="" /><font style="color:#FF0000; font-weight:bold;">*</font></td>
              </tr>
              <tr>
                <td>Email id : </td>
                <td><input type="text" name="email" id="email" style="width:200px;" value="" /><font style="color:#FF0000; font-weight:bold;">*</font></td>
              </tr>
              <tr>
                <td>Password : </td>
                <td><input type="password" name="password" id="password" maxlength="6" style="width:200px;" value="" /><font style="color:#FF0000; font-weight:bold;">*</font></td>
              </tr>
              <tr>
                <td>Date of Birth : </td>
                <td><input type="text" name="dob" id="dob" size=20 style="float:left; width:200px;" value=""><font style="color:#FF0000; font-weight:bold;">*</font> <small><a href="javascript:showCal('Calendar1')">Select Date</a></small></td>
              </tr>
          </table>
          <p>&nbsp;</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><b>YOUR ADDRESS</b></p>
          
          <hr style="border:1px dotted;" />
          <br/>
          <table width="660px" border="0">
              <tr>
                <td width="25%">Address : </td>
                <td><input type="text" name="address" id="address" style="width:200px;" value="" /><font style="color:#FF0000; font-weight:bold;">*</font></td>
              </tr>
              <tr>
                <td>Zip/Postal Code : </td>
                <td><input type="text" name="postal_code" id="postal_code" style="width:200px;" value="" /><font style="color:#FF0000; font-weight:bold;">*</font></td>
              </tr>
              <tr>
                <td>City : </td>
                <td><input type="text" name="city" id="city" style="width:200px;" value="" /><font style="color:#FF0000; font-weight:bold;">*</font></td>
              </tr>
              <tr>
                <td>State : </td>
                <td><input type="text" name="state" id="state" style="width:200px;" value="" /><font style="color:#FF0000; font-weight:bold;">*</font></td>
              </tr>
              <tr>
                <td>Country : </td>
                <td>
                	<select name="country">
                    	<option value=""></option>
                        <option value="India">India</option>
                        <option value="USA">USA</option>
                        <option value="UK">UK</option>
                        <option value="France">France</option>
                        <option value="Italy">Italy</option>
                    </select>
                    <font style="color:#FF0000; font-weight:bold;">*</font>
                </td>
              </tr>
              <tr>
                <td>Phone no : </td>
                <td><input type="text" name="phone" id="phone" style="width:200px;" value="" /><font style="color:#FF0000; font-weight:bold;">*</font></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="register" id="register" value="Register" style="border:0px; width:100px; height:40px; background-color:#8B0F01; color:#ffffff; float:left;"/></td>
              </tr>
          </table>

          
          
          </form>         
        </div>
    </div>																					<!--	end of content div	-->
    
    
    <div id="vertmenu" style="float:left; background-color:none; border:0px solid #CCFF33; padding-left:40px; padding-right:40px; width:244px; height:1000px;">	<!--vertical side menu div	-->
		
       <?php
	   include ("vertical_menu.php");
	   ?>
        
      <br/><br/>
        
    	<div style="width:244px; height:300px; float:left; background-color:none;">
    
    	<img src="../front_end/images3/slide_03.jpg" />
    
    	</div>    

	
	</div>																<!-- 	end of vertical side menu div	-->
    
    


</div>																								<!--	end of page div		-->
</center>



</body>
</html>

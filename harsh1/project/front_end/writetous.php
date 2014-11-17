<?php
session_start();
include("../configuration.php");

$cat_id=$_REQUEST["cat_id"];
$catergory_id;

//$sqlapp  :  main menu
//$sqlapp1

$sqlapp1 = " SELECT * FROM tbl_catergories ";
$resapp1 = $db->Execute($sqlapp1) or die(mysql_error());
$totalapp1 = $resapp1->RecordCount();
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
		var txtemail=document.frm_writetous.email.value;
		return emailPattern.test(txtemail);
	}	
	
	function isValid()
	{
		txtsubject_heading = document.frm_writetous.subject_heading.value;
		txtorder_id = document.frm_writetous.order_id.value;
		txtmessage = document.frm_writetous.message.value;
		
		if(txtsubject_heading=="")
		{
			alert("Please choose a Subject Heading.");
			document.frm_writetous.subject_heading.focus;
			return false;
		}
		
		else if(!isValidEmail())
		{
			alert("Please enter a valid Email Address");
			document.frm_writetous.email.focus;
			return false;
		}
		
		else if(txtmessage=="")
		{
			alert("Please Enter a Message");
			document.frm_writetous.message.focus;
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
        	
            <br/>
        	
            <a href="../front_end/index.php" style="text-decoration:none; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; float:left; color:#666666;">Home&nbsp;>&nbsp;</a>
        	<font style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; float:left; font-weight:600; color:#666666;"> Write to Us
            </font>
            
            <br/>
            <hr />
           
           <h3 style="float:left; width:660px; text-align:left; ">Customer Service - Contact us</h3>
                
           <p><font style="width:660px; float:left; text-align:left; font-weight:600; line-height:35px;">For questions about an order or for more information about our products.<br/>
           SEND A MESSAGE.</font></p>
           <p>&nbsp;</p>
           <hr style="color:#666666; border:1px dashed;" />
          <form name="frm_writetous" action="" onsubmit="return isValid();" method="post" enctype="multipart/form-data">
          
			  <table width="660px;" border="0" style="float:left; text-align:left; color:#666666; font-weight:500;" cellpadding="10px">
              
              <tr>
                <td width="20%" style="text-align:left; padding-left:0px;">Subject Heading : </td>
                <td>
                	<select name="subject_heading" style="width:200px;">
                    	<option value="">---Choose---</option>
                        <option value="Customer Service">Customer Service</option>
                        <option value="Customised Order">Customised Order</option>
                        <option value="Feedback">Feedback</option>
                    </select>
                </td>
              </tr>
              <tr>
                <td style="text-align:left; padding-left:0px;">Email Address : </td>
                <td><input type="text" name="email" id="email" style="width:200px;" /></td>
              </tr>
              <tr>
                <td style="text-align:left; padding-left:0px;">Order Id : </td>
                <td><input type="text" name="order_id" id="order_id" style="width:200px;" /></td>
              </tr>
              <tr>
                <td style="text-align:left; padding-left:0px;" valign="top">Message : </td>
                <td><textarea name="message" id="message" rows="10" cols="35" wrap="physical"></textarea></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="send" id="send" value="Send" style="border:0px; width:100px; height:40px; background-color:#8B0F01; color:#ffffff; float:left;"/></td>
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

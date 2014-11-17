<?php
session_start();
include("../configuration.php");

$cat_id=$_REQUEST["cat_id"];
$sqlapp1 = "select * from  tbl_contactus where id='1' ";
$resapp1 = $db->Execute($sqlapp1);
$totalapp1  = $resapp1->RecordCount();

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


</head>

<body topmargin="0" style="background-color:#E6E6E6; height:2400px; margin-top:auto;">

<center>

<div style="width:1024px; border:0px solid #000000; height:2300px; background-color:#FFFFFF;">						<!--	page div		-->

	<div style="width:1024px; border:0px solid #FF0000; height:35px; background-color:#570202;">					<!-- 	top menu div	-->
    
    	<?php
		include ("top_menu.php");
		?>
       
    </div>																						<!-- 	end of top menu div		-->

	<div style="width:1024px; border:0px solid #000099; height:150px; background-color:none;">				<!-- 	site name div	-->
        	<img src="../front_end/logo.jpg" style="float:left;" />
    </div>							<!-- 	end of site name div	-->

	<div class="main_menu" style="width:1024px; border:0px solid #006666; height:50px;">					<!-- 		main menu div		-->
    	
        <?php	
    	$catergory_id;
		?>
        
    	<?php
		include ("main_menu.php");			//$sqlapp
		?>
    
    </div>											<!-- 		end of main menu div		-->

	<div style="width:700px; height:2000px; background-color:none; float:left;">			<!-- content div	-->
    	
        <div style="width:660px; margin-left:40px; background-color:none; height:2000px; float:left;">		<!-- this div is for the left margin	-->
        	<br/>
            <a href="../front_end/index.php" style="text-decoration:none; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; float:left; color:#666666;">Home&nbsp;>&nbsp;</a>
        	<font style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; font-weight:600px; float:left; font-weight:600; color:#666666;"> About us </font>
			
    		<?php
				
				echo stripslashes($resapp1->fields["contact_desc"]);
			?>
           
        </div>
			
         
            
        	            
        
    </div>																					<!--	end of content div	-->
    
    
    <div id="vertmenu" style="float:left; background-color:none; border:0px solid #CCFF33; padding-left:40px; padding-right:40px; width:244px; height:2000px;">	<!--vertical side menu div	-->
		
       <?php
	   include ("vertical_menu.php");
	   ?>
        
        <br/><br/>
        <img src="../front_end/add-to-cart-web-button-thumb9227672.jpg" style="float:left;" />
        <font style="font-size:22px; text-align:left; float:left;">&nbsp;&nbsp;Cart</font>
        <br/><br/><br/>
		<font style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 15px; font-weight:600; float:left; border-bottom: 1px dashed #666666; padding:5px 0px 5px 0px; width:244px; text-align:left;">No products</font>
        
        
		<div style="width:244px; background-color:none; float:left; height:75px; border-bottom: 1px dashed #666666; padding:5px 0px 5px 0px; ">
        	
            	<div style="width:122px; background-color:none; float:left; height:75px;">
                	
                    <font style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 15px; color:#666666; float:left;">Shipping</font>
                    <br/>
                    <font style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 15px; color:#666666; float:left;">Tax</font>
                    <br/>
                    <font style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 15px; color:#666666; float:left;">Total</font>
            	</div>
                
                
                
                <div style="width:122px; background-color:none; float:left; height:75px;">
                	
                    <font style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 15px; font-weight:600; float:left; float:right;">Rs/-0.00</font>
                    <br/>
                    <font style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 15px; font-weight:600; float:left; float:right;">Rs/-0.00</font>
                    <br/>
                    <font style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 15px; font-weight:600; float:left; float:right;">Rs/-0.00</font>
            	</div>
                
                
               
        	
        </div>
        
        <font style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 15px; font-weight:600; float:left; width:244px; text-align:left;">Prices are Tax included</font>
        <br/><br/><br/>
        
        <div style="width:244px; height:60px; float:left; margin-top:10px;">
        
        	<input type="button" name="btncart" id="btncart" value="Cart" style="float:left; border:0px; width:100px; height:40px; background-color:#694321; color:#ffffff; margin-right:1px;"/>
            
            <input type="button" name="btncheckout" id="btncheckout" value="Checkout" style="float:left; border:0px; width:100px; height:40px; background-color:#8B0F01; color:#ffffff;"/>
        
        </div>
        
        
        
                
    	<div style="width:244px; height:1000px; float:left; background-color:none;">
    
    	<img src="../front_end/images3/slide_03.jpg" />
    
    	</div>    

	
	</div>																<!-- 	end of vertical side menu div	-->
    
    


</div>																								<!--	end of page div		-->
</center>



</body>
</html>

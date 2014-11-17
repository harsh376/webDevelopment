<?php
session_start();
include("../configuration.php");

$cat_id=$_REQUEST["cat_id"];
$catergory_id;

//$sqlapp  :  main menu
//sqlapp1 

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
                Cotton Care
                </font>
   		  </div>
          <hr />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Cotton is cool, Soft and Comfortable Fabric.</p>
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Cotton care is easy. It loves water and can with stand a lot of washings.</p>
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Cotton can absorb and release perpiration quickly, That's why it is skin friendly.</p>
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Cotton can be made colourful. It can come in a variety of eye catching shades. However for colour to last longer it is   recommended not to soak cotton in water for long time.</p>
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">In good quality cottons, most colours usually don't fade even after repeated washings, However darker colors may lose some of their "sharpness" over time especially with storng detergents.</p>
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">There is a miscoception that cotton shirnks after wash. In actual, majority of the shrinkage takes place in the dryer, Avoid over drying.</p>
 		  
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Cotton has outstanding stain removel qualities. To remove dirty stains, just presoak it in detergent before washing.</p>
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">For longer life, wash cotton on luke warm water.</p>
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">While drying it in air, dry it in shade. Avoid direct sunlight on it, to avoid colour distortion.</p>

		  <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Cotton fabric wrinkles easily. for better finish & to give it a crispy look,pressing/ironing is recommended.</p> ﻿

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

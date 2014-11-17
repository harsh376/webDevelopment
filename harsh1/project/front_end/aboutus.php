<?php
session_start();
include("../configuration.php");

$cat_id=$_REQUEST["cat_id"];
$catergory_id;

//$sqlapp  :  main menu
//$sqlapp1

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

<body style="background-color:#E6E6E6; height:1300px; margin-top:auto;">

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
                <!--SWAYAM Price List-->
                About Us
                </font>
   		  </div>
          <hr />
           
        <h4 style="width:660px; float:left; text-align:left;">SWAYAM</h4>
        
        
        <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Exotic linen in vibrant colors</b></p>

<p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">We are known for offbeat, designer and colorful home linen that can brighten one’s interior. </p>

 

<p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">We manufacture wide range of home furnishing products – Bed Linen, Table Linen, Comforters, Cushion Covers, Curtains, Kitchen linen, Laundry Bags and host of home accessories.</p>

 

<p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Working on new design ideas and fabric development, our collection of made-ups comprise of both soft sheeting and handloom range. Our linen co-ordinates are an interesting mix of checks, stripes and prints in bright, vibrant and exotic colors.</p>

 

<p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">As on Nov’11, our products are available in over 400+ counters in over 70+ cities across India. Some leading retail chains where you can find Swayam products are Home stops, Shopper’s Stop, Pantaloons, @Home, Hometowns, EVOK, Spencers, TOTAL, Hypercity etc.</p>

 

<p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Our product is exclusive and our customers are usually people with taste for stylish designs and for whom quality matters. Few unique features about our products are</p>

 
<p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
    <b>Designing</b> – mix n match – Stylish combination of different colours and fabrics.<br/>
    <b>Pricing</b> – Competitive – Premium product yet pocket friendly<br/>
    <b>Fabric</b> – 100% pure cotton, 240+ TC, mercerized, pre-tested for color fastness <br/>
    <b>Collection</b> – over 200+ beautiful designs - Floral, Stripes, Checks<br/>
    <b>Packaging</b> – attractively packed</p>
    
<p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">We are a team of young and enterprising designers with lot of zeal and energy. We are looking forward to bringing stylish and offbeat furnishings in the bedrooms of the new fashion conscious generation.</p>
<br/><br/>
<hr />

        <br/><br/>
        <table width="660px" border="0" style="font-family:Arial, Helvetica, sans-serif; font-size:13px;">
          <tr>
            <td width="20%">Contact person : </td>
            <td>Manoj Garg</td>
          </tr>
          <tr>
            <td>Contact Mobile No : </td>
            <td>+919811227601, +919811017827</td>
          </tr>
          <tr>
            <td>Email id : </td>
            <td>shailika@usa.net, info@swayamlinen.com</td>
          </tr>
          <tr>
            <td>Company Address : </td>
            <td>142, Mohiyal Colony, Opp. Sector 31, Behind MMI School, Gurgaon, India</td>
          </tr>
          
        </table>



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

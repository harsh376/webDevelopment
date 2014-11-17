<?php
session_start();
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

<body topmargin="0" style="background-color:#E6E6E6; height:1800px; margin-top:auto;">

<center>

<div style="width:1024px; border:0px solid #000000; height:1700px; background-color:#FFFFFF;">						<!--	page div		-->

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

	<div style="width:700px; height:1400px; background-color:none; float:left;">			<!-- content div	-->
    	
      <div style="width:660px; margin-left:40px; background-color:none; height:1400px; float:left;">		<!-- this div is for the left margin	-->
       	  <div style="width:660px; height:35px; background-color:none;">
                <br/>
                
            <a href="../front_end/index.php" style="text-decoration:none; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; float:left; color:#666666;">Home&nbsp;>&nbsp;</a>
                <font style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; float:left; font-weight:600; color:#666666;"> 
                <!--page name-->
                FAQs
                </font>
   		  </div>
          <hr />
          
        <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:14px;"><b>Frequently Asked Questions - </b></p>
          <p>&nbsp;</p>
          
        <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><u>Tell me more about products that Swayam manufactures!</u></p> 	
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Swayam manufactures Pure Cotton Home Linen Items with 100% quality assurance. In terms of product Swayam offers Bedsheets, Comforters, Duvet Covers, Curtains, Pillow and Cushion Covers for your Bedroom, Table cloth, Mats, Napkins, Roti Baskets etc for your Dining room, Aprons, Oven Gloves, Wash Napkins for your Kitchens and Laundry Baskets for Bathrooms.</p> 
          <p>&nbsp;</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><u>How are Swayam products different from others?</u></p> 	
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Swayam items are mix-n-match styles, with innovation & variation in colours and design ideas par excellence.</p>
          <p>&nbsp;</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><u>Does Swayam manufacture products in house? </u></p> 	
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Yes, Swayam designs and manufactures all the products that it sells under its brand. Swayam is a leading home furnishing brand of India. It not only has a strong domestic presence in over 400+ stores, it also exports to many countries.</p>
          <p>&nbsp;</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><u>    What is the range – do you have a economy / lower range or you manufacture only premium / higher range.
</u></p> 	
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">We provide our customers more value for money as compared to anyone else. Price of a premium cotton double bed sheet may vary from Rs.995/- to Rs.2995/- All our products are very competitively priced. Most of our prints are reactive – ensuring that product looks new for a longer period of time.</p>
          <p>&nbsp;</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><u>What material do you use?</u></p> 	
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">We use 100% combed cotton fabric (from 200TC to 600 TC), pre-tested for color fastness with maximum 3% shrinkage cover.</p>
          <p>&nbsp;</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><u>What is the size of your double bed sheet?</u></p> 	
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Our double bedsheets are of 90”x108” size. (225cms x275cms / 9’x7.5’) and not 90”x100”</p>
          <p>&nbsp;</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><u>    Do you have bigger size bedsheets also?
</u></p> 	
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Yes we do have XL size bedsheet - 108”x108” (275cmsx275cms) and super XL bedsheets – 108”x120” (275cm x 300cm) for customers having large mattresses / Spring Mattresses.</p>
          <p>&nbsp;</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><u>If I need more pillow covers with my bedsheet – how do I go about? </u></p> 	
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">We have Victoria collection with 4 pillow covers. Pillow covers are also available separately with all the designs.</p>
          <p>&nbsp;</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><u>What is fitted bedsheet ? </u></p> 	
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Fitted bedsheets have elastic along its side. It fits smartly on mattress. Swayam manufactures fitted sheet in all its design for standard mattress size 180cmx188cm (+ 15cm)</p> 
         
      </div>
    </div>																					<!--	end of content div	-->
    
    
    <div id="vertmenu" style="float:left; background-color:none; border:0px solid #CCFF33; padding-left:40px; padding-right:40px; width:244px; height:1400px;">	<!--vertical side menu div	-->
		
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

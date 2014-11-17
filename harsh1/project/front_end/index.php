<?php
session_start();
include("../configuration.php");

//$sqlapp
//$sqlapp1
//$sqlcart in "topmenu.php"

$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

$sqlapp1 = " SELECT * FROM tbl_users WHERE email='".$email."' AND password='".$password."' ";
$resapp1 = $db->Execute($sqlapp1) or die(mysql_error());
$total_usr  = $resapp1->RecordCount();

if($total_usr>0)
{
	$_SESSION['user_id'] = $resapp1->fields['user_id'];						// assigning SESSION['user_id'] value so that it can use universally
	$_SESSION['fname'] = $resapp1->fields['fname'];
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo PROJECT_TITLE;?></title>

<style type="text/css">
	@import url(../front_end/top_menu_style.css);
</style>

<link rel="stylesheet" href="../page/main_menu_style.css" type="text/css" />

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

<body topmargin="0" style="background-color:#E6E6E6; height:2100px; margin-top:auto;">

<center>

<div style="width:1024px; border:0px solid #000000; height:2000px; background-color:#FFFFFF;">						<!--	page div		-->

	<div style="width:1024px; border:0px solid #FF0000; height:35px; background-color:#570202;">					<!-- 	top menu div	-->
	  <?php
		include ("top_menu.php");
		?>
	</div>																						
	<!-- 	end of top menu div		-->

	<div style="width:1024px; border:0px solid #000099; height:150px; background-color:none;">				<!-- 	site name div	-->
        	<img src="../front_end/logo.jpg" style="float:left;" />
    </div>							<!-- 	end of site name div	-->

	   
    <div class="main_menu" style="width:1024px; border:0px solid #006666; height:50px;">					<!-- 		main menu div		-->
    
    	<?php
		include ("main_menu.php");					// $sqlapp
		?>
    
    </div>											<!-- 		end of main menu div		-->

	<div style="width:700px; height:704px; float:left; background-color:none;">
    
        <div id="slider" style="width:700px; height:500px; float:left; border:0px solid #FF0000; background-color:#000000;">	<!--slideshow div-->
            <ul id="sliderContent" style="border:0px solid #006600; height:700px; margin:0px; padding:0px;">      <!-- image moves up due to margin & padding-->
                <li class="sliderImage">
                    <a href="#"><img src="../front_end/images_slideshow/2-fancy-bedroom.jpg" alt="1" /></a>
                    <span class="bottom">Transform your bedroom into a blissful dreamland...</span>
                </li>
                <li class="sliderImage">
                    <a href="#"><img src="../front_end/images_slideshow/img80l.jpg" alt="2" /></a>
                    <span class="bottom">Striking linen for splendid lifestyles...</span>
                </li>
                <li class="sliderImage">
                    <a href="#"><img src="../front_end/images_slideshow/modern-bedroom-rug-curtain.jpg" alt="3" /></a>
                    <span class="bottom">A simple touch of elegance...</span>
                </li>
                <li class="sliderImage">
                    <a href="#"><img src="../front_end/images_slideshow/the table.jpg" alt="4"  /></a>
                    <span class="bottom">Decorous Dining<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...make your dine and wine special</span>
                </li>
                <div class="clear sliderImage"></div>
            </ul>
            
                  
        </div>																<!-- 		end of slideshow div		-->
 	
    	<div style="width:350px; background-color:none; border:0px solid #CC3333; height:204px; float:left;">		<!-- 	image1 div	-->
       		<img src="../front_end/images3/slide_00.jpg" />
    	</div>										<!-- end of image1 div	-->
    
    	<div style="width:349px; background-color:none; border:0px solid #CC3333; height:204px; float:left; margin-left:1px;">		<!-- 	image2 div	-->
	        <img src="../front_end/images3/slide_01.jpg" />
    	</div>										<!-- end of image2 div	-->
    
    
    
    </div>
    
    
    
    <div id="vertmenu" style="float:left; background-color:none; border:0px solid #CCFF33; padding-left:40px; padding-right:40px; width:244px; height:704px;">	<!--vertical side menu div	-->
		
       <?php
	   include ("vertical_menu.php");
	   ?>
        
        <br/><br/>
        <img src="../front_end/images3/slide_02.jpg">
		
	</div>																<!-- 	end of vertical side menu div	-->
       
    
    <div style="width:800px; height:1000px; background-color:#CCCCCC; float:left;">		<!-- featured products div	-->
    
    	
        
        
        <div style="width:720px; background-color:none; height:1000px;">
        	
            <br/><br/><font style="font-size:24px; float:left;">Featured Products</font><br/><br/><br/>
            
                 
            <div style="width:240px; height:450px; background-color:none; float:left">
            	<img src="../front_end/images4/1947-home.jpg" />
                <br/><br/>
                <span class="text">Shades of Paradise / D.No. 2004</span>
                <br/><br/>
                <span class="price">Rs/-1,595.00</span> 
                <br/><br/>
                <input type="button" name="btnatc" id="btnatc" value="Add to Cart" style="float:left; border:0px; width:120px; height:50px; background-color:#694321; color:#ffffff;"/>
                
            </div>
            
            <div style="width:238px; height:450px; background-color:none; float:left; margin-left:1px; margin-right:1px;">
            	<img src="../front_end/images4/2640-home.jpg" />
                <br/><br/>
                <span class="text">Diwan-e-Khaas, Diwan-e-Shaan / D.No. 2507</span>
                <br/><br/>
                <span class="price">Rs/-1,489.00</span> 
                <br/><br/>
                <input type="button" name="btnatc" id="btnatc" value="Add to Cart" style="float:left; border:0px; width:120px; height:50px; background-color:#694321; color:#ffffff;"/>
                
            </div>
            
            <div style="width:240px; height:450px; background-color:none; float:left;">
            	<img src="../front_end/images4/2829-home.jpg" />
                <br/><br/>
                <span class="text">Curtain / D.No. 3701</span>
                <br/><br/>
                <span class="price">Rs/-1,099.00</span> 
                <br/><br/>
                <input type="button" name="btnatc" id="btnatc" value="Add to Cart" style="float:left; border:0px; width:120px; height:50px; background-color:#694321; color:#ffffff;"/>
            </div>
            
            <div style="width:238px; height:450px; background-color:none; float:left; margin-left:1px; margin-right:1px;">
            	<img src="../front_end/images4/3857-home.jpg" />
                <br/><br/>
                <span class="text">Storage Racks / D.No. 7402</span>
                <br/><br/>
                <span class="price">Rs/-2,995.00</span> 
                <br/><br/>
                <input type="button" name="btnatc" id="btnatc" value="Add to Cart" style="float:left; border:0px; width:120px; height:50px; background-color:#694321; color:#ffffff;"/>
            </div>
            
            <div style="width:240px; height:450px; background-color:none; float:left;">
            	<img src="../front_end/images4/2986-home.jpg" />
                <br/><br/>
                <span class="text">Rectangle Table / D.No. 3701</span>
                <br/><br/>
                <span class="price">Rs/-1,795.00</span> 
                <br/><br/>
                <input type="button" name="btnatc" id="btnatc" value="Add to Cart" style="float:left; border:0px; width:120px; height:50px; background-color:#694321; color:#ffffff;"/>
            </div>
            
            <div style="width:240px; height:450px; background-color:none; float:left;">
            	<img src="../front_end/images4/3655-home.jpg" />
                <br/><br/>
                <span class="text">Sonata Gold / D.Name. Choco</span>
                <br/><br/>
                <span class="price">Rs/-1,749.00</span> 
                <br/><br/>
                <input type="button" name="btnatc" id="btnatc" value="Add to Cart" style="float:left; border:0px; width:120px; height:50px; background-color:#694321; color:#ffffff;" />
            </div>
        
       
  			      
        </div>
        
        
    	
    </div>																				<!-- 	end of featured products div 	-->
    
    
    <div style="width:224px; height:1000px; float:left; background-color:none;">
    	
    	
    
    </div>																			
    


</div>																								<!--	end of page div		-->
</center>



</body>
</html>

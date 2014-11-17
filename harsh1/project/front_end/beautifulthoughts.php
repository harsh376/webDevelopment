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
                Beautiful thoughts
                </font>
   		  </div>
          <hr />
          <br/>
          
          <ol type="1" style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#666666;">
			<li>Coming together is a beginning; keeping together is progress; working together is success.</li><br/>        
            <li>An organization is an union of ordinary people doing extraordinary work.</li><br/>    
            <li>Dare to dream - dare to try - dare to fail - dare to succeed.</li><br/>    
            <li>The great pleasure in life is doing what people say you cannot do.</li><br/>    
            <li>Big achievements can only be made by one who is content with small beginnings.</li>
          </ol>

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

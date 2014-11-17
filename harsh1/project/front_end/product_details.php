<?php
session_start();
include("../configuration.php");

$cat_id=$_REQUEST["cat_id"];
$catergory_id;

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

function Redirect(url)
{
 location.href = url;
}

function pagemetadet(product_id)
{ 	
	
	imgview=window.open("prd_details.php?product_id="+product_id,"Details",'height=525,width=700,resizable=1,scrollbars=1,screenX=100,screenY=50, menubar=1,fullscreen=No');
	
	if(window.focus)
	{
		imgview.focus();
	}
	
}

function pagemetadet1(product_id)
{ 	
	
	imgview=window.open("addtocart.php?product_id="+product_id,"Details",'height=525,width=700,resizable=1,scrollbars=1,screenX=100,screenY=50, menubar=1,fullscreen=No');
	
	if(window.focus)
	{
		imgview.focus();
	}
	
}

</script>

</head>

<body topmargin="0" style="background-color:#E6E6E6; height:2400px; margin-top:auto;">

<center>

<div style="width:1024px; border:0px solid #000000; height:2300px; background-color:#FFFFFF;">						<!--	page div		-->

	<div style="width:1024px; border:0px solid #FF0000; height:35px; background-color:#570202;">					<!-- 	top menu div	-->
    
		<?php
		include("top_menu.php");
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

	<div style="width:700px; height:2000px; background-color:none; float:left;">			<!-- content div	-->
    	
        <div style="width:660px; margin-left:40px; background-color:none; height:2000px; float:left;">		<!-- this div is for the left margin	-->
        	
            <br/>
        	
            <?php
					
			$sqlapp1 = " SELECT * FROM tbl_catergories WHERE id='".$cat_id."' ";
			$resapp1 = $db->Execute($sqlapp1) or die(mysql_error());
			$totalapp1 = $resapp1->RecordCount();
			
			?>
            <a href="../front_end/index.php" style="text-decoration:none; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; float:left; color:#666666;">Home&nbsp;>&nbsp;</a>
        	<font style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; font-weight:600px; float:left; font-weight:600; color:#666666;"> 
			<!--Curtains-->
            <?php
			while(!$resapp1->EOF)
			{
				echo stripslashes($resapp1->fields["catergory"]);
			
			?>
			
            
            </font>
            
     		<br/>
            
            <div style="line-height:50px; background-color:none; height:50px; float:left;">
                <font style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; font-weight:600px; float:left; font-weight:600; vertical-align:middle;"> <!--Curtains-->
                
            <?php
			
			
				echo stripslashes($resapp1->fields["catergory"]);
				
				$resapp1->MoveNext();
			}
			?>
					
            	</font>
    		
           <?php
		   
		   //$sqlval2=" SELECT * FROM tbl_products WHERE catergory_id='".$cat_id."' ";		// $row2 
		   //$result2=mysql_query($sqlval2);
		   //$num_rows=mysql_num_rows($result2);
		   
		   $sqlapp2 = " SELECT * FROM tbl_products WHERE catergory_id='".$cat_id."' ";	
		   $resapp2 = $db->Execute($sqlapp2) or die(mysql_error());
		   $totalapp2 = $resapp2->RecordCount();	
		   
		   ?>
            
            
                <font style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; font-weight:600px; float:left; color:#666666; vertical-align:middle;">&nbsp;&nbsp;&nbsp;&nbsp;There <?php if($totalapp2==1){ ?>is <?php echo $totalapp2; ?> product.<?php } else{?>are <?php echo $totalapp2; ?> products.<?php } ?></font>
            </div>
			
            <?php
			//$sqlval3=" SELECT * FROM tbl_catergories WHERE id='".$cat_id."' ";
			//$result3=mysql_query($sqlval3);
			
			$sqlapp3 = " SELECT * FROM tbl_catergories WHERE id='".$cat_id."' ";	
		    $resapp3 = $db->Execute($sqlapp3) or die(mysql_error());
		    $totalapp3 = $resapp3->RecordCount();
			
			?>
            
            <?php
			while(!$resapp3->EOF)
			{
			?>
            <div>
            	<img src="../admin/images_catergories/<?php echo stripslashes($resapp3->fields["img_catergory"]); ?>" />
            </div>        	
            <?php
			$resapp3->MoveNext();
			}
			?>
            
            <br/>
        	<div style="width:660px; background-color:none; height:40px;">
            	
                <input type="button" name="btncompare" id="btncompare" value="Compare" style="border:0px; width:100px; height:40px; background-color:#8B0F01; color:#ffffff; float:right;"/>
                
            </div>
            <br/>
            
            <div style="width:660px; background-color:none; height:30px; line-height:30px;">		<!-- sort by div	-->
            
            	
                <select name="txtsortby" id="txtsortby" style="float:right;">
                	<option value="">--</option>
                    <option value="Pricelowest">Price : lowest first</option>
					<option value="Pricehighest">Price : highest first</option>
                    <option value="Productaz">Product : A to Z</option>
                    <option value="Productza">Product : Z to A</option>
                    <option value="Instock">In Stock first</option>
                </select>
                
                <font style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; font-weight:600px; float:right; color:#666666; vertical-align:middle;">Sort by&nbsp;&nbsp;</font>
            	
                
                
            </div>																	<!-- end of sort by div	-->
            
            
            <?php if($_REQUEST["add"]==1){ ?>
            <br/>
            <font style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FF0000; font-weight:600; float:left;">Your Wish list has been updated.&nbsp;</font>
            <a href="wishlist.php" style="text-decoration:none; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FF0000; font-weight:600; float:left;"><u>Browse Wishlist.</u></a>
            <br/>
            <?php }
			 
			else if($_REQUEST["add"]==2){ ?>
            <br/>
            <font style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FF0000; font-weight:600; float:left;">The Product is already in your wishlist.&nbsp;</font>
            <a href="wishlist.php" style="text-decoration:none; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#FF0000; font-weight:600; float:left;"><u>Browse Wishlist.</u></a>
            <br/>
            <?php
			}
			?>
            
                      
		   <?php 
		   while(!$resapp2->EOF)
		   {
		   
		   ?>
           
           
            
            <div style="width:660px; height:200px; border-bottom:1px #666666 dashed; padding:20px 0px 20px 0px; background-color:none;"> <!-- item 1 div	-->
            	<?php include ("product.php"); ?>
            	       
            </div>									<!-- 	end of item 1 div	-->
            
            
            <?php
			$resapp2->MoveNext();
			}
			?>
            
            
            
            <div style="width:660px; background-color:none; height:40px;">
            	<br/>
                <input type="button" name="btncompare" id="btncompare" value="Compare" style="border:0px; width:100px; height:40px; background-color:#8B0F01; color:#ffffff; float:right;"/>
                
            </div>
            
        </div>
        
    </div>																					<!--	end of content div	-->
    
    
    <div id="vertmenu" style="float:left; background-color:none; border:0px solid #CCFF33; padding-left:40px; padding-right:40px; width:244px; height:2000px;">	<!--vertical side menu div	-->
		
      <?php
	   include ("vertical_menu.php");
	   ?>
        
        <br/><br/>
        
        
        <div style="width:244px; height:1000px; float:left; background-color:none;">
    
    	<img src="../front_end/images3/slide_03.jpg" />
    
    	</div>    

	
	</div>																<!-- 	end of vertical side menu div	-->
    
    


</div>																								<!--	end of page div		-->
</center>



</body>
</html>

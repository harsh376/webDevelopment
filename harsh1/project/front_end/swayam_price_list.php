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
    </div>																						<!-- 	end of site name div	-->

	<div class="main_menu" style="width:1024px; border:0px solid #006666; height:50px;">					<!-- 		main menu div		-->
    	
   	  <?php
		include ("main_menu.php");					//$sqlapp
		?>
       
    </div>											<!-- 		end of main menu div		-->

	<div style="width:700px; height:2000px; background-color:none; float:left;">			<!-- content div	-->
    	
        <div style="width:660px; margin-left:40px; background-color:none; height:2000px; float:left;">		<!-- this div is for the left margin	-->
        	
            <br/>
        	
            <a href="../front_end/index.php" style="text-decoration:none; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; float:left; color:#666666;">Home&nbsp;>&nbsp;</a>
        	<font style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; float:left; font-weight:600; color:#666666;"> 
            <!--SWAYAM Price List-->
            SWAYAM Price List
            </font>
            <br/><br/>
                <table width="660px" border="1" cellpadding="5px" cellspacing="0" bordercolor="#E6E6E6">
  				
                <tr style="font-weight:bold;">
                	<td>SN.</td>
                    <td>Product Name</td>
                    <td>Product Price</td>
                    <td>Product Description</td>
                    <td>Product Id</td>
                </tr>
				<?php
				$sn=1;
				while(!$resapp1->EOF)
				{
				?>
                
                <tr>
                    <td>&nbsp;</td>
                    <td colspan="4"><b><?php echo stripslashes($resapp1->fields["catergory"]); ?></b></td>
                </tr>
  				
                <?php
				$sqlapp2 = " SELECT * FROM tbl_products WHERE catergory_id='".stripslashes($resapp1->fields["id"])."' ";
				$resapp2 = $db->Execute($sqlapp2) or die(mysql_error());
				
				while(!$resapp2->EOF)
				{
				?>
                <tr style="color:#666666;">
                    <td><?php echo $sn; $sn++; ?></td>
                    <td><?php echo stripslashes($resapp2->fields["product_name"]) ?></td>
                    <td><?php echo stripslashes($resapp2->fields["product_price"]) ?></td>
                    <td><?php echo stripslashes($resapp2->fields["product_desc"]) ?></td>
                    <td><?php echo stripslashes($resapp2->fields["product_id"]) ?></td>
  				</tr>
                <?php
				$resapp2->MoveNext();
				}
				?>
				
				<?php
				$resapp1->MoveNext();
				}
				?>
                
		  </table>

            
            
                            		
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

<?php
session_start();
include("../configuration.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css">
	@import url(menu_left/menu_style.css); 
</style>


<script language="javascript" type="text/javascript">
	function isValid()
	{
		var txt_catergory_id=document.frm_edit_product.catergory_id.value;
		var txt_product_name=document.frm_edit_product.product_name.value;
		var txt_product_price=document.frm_edit_product.product_price.value;
		var txt_product_desc=document.frm_edit_product.product_desc.value;
	
				
		if(txt_product_name=="")
		{
			alert("Please enter the Name of the Product.");
			document.frm_edit_product.product_name.focus;
			return false;
		}
		
		else if(isNaN(txt_product_price) || txt_product_price=="")
		{
			alert("Please enter the Price of the Product");
			document.frm_edit_product.product_price.focus;
			return false;
		}
		
		else if(txt_product_desc=="")
		{
			alert("Please enter the Description of the Product.");
			document.frm_edit_product.product_desc.focus;
			return false;
		}
		
	}
</script>



</head>

<body style="margin-top:auto; background-color:#E5E5E5;">
	<center>
	<div style="width:1024px; height:950px; background-color:#E8E8E8;">		<!-- 	main div	-->
    
    	<div style="width:1014px; height:25px; background-color:#400000; color:#CCCCCC; text-align:left; padding:5px 0px 5px 10px;">		<!-- 	header div	-->
        
        	<?php include ('admin_top_menu.php') ?>

        
        </div>																					<!-- 	end of header div	-->
        
        <div style="width:1024px; height:150px; background-color:#CCCCCC;">					<!-- 	title div	-->
        </div>																			<!-- 	end of title div	-->
        
        <div style="width:200px; height:765px; background-color:#999999; float:left;">				<!-- 	left side menu div	-->
			
            <div style="width:195px; height:30px; background-color:none; padding:5px 0px 5px 10px; text-align:left;">
				CATERGORIES            	
            </div>
            
            
	        <?php 
			include ("sidemenu.php");
			?>

        
        </div>																			<!-- 	end of left side ment div	-->
        
        <div style="width:824px; height:765px; background-color:#FFFFFF; float:left;">		<!-- 	content div	-->
        
        
        <h1 align="left" style="padding:0px 0px 0px 10px;">EDIT PRODUCT.</h1>
	<form name="frm_edit_product" id="frm_edit_product" action="update_product.php" onsubmit="return isValid();" method="post" enctype="multipart/form-data">
		

      	<input type="hidden" name="product_id" id="product_id" value="<?php echo $_REQUEST["product_id"];?>"  />

<?php

//$sqlval=" SELECT * FROM tbl_products WHERE product_id='".$_REQUEST["product_id"]."' ";
//$result=mysql_query($sqlval);

$sqlapp = " SELECT * FROM tbl_products WHERE product_id='".$_REQUEST["product_id"]."' ";
$resapp = $db->Execute($sqlapp) or die(mysql_error());
$totalapp = $resapp->RecordCount();

?>

<?php

//$sqlval1="SELECT * FROM tbl_catergories ";
//$result1=mysql_query($sqlval1);

$sqlapp1 = "SELECT * FROM tbl_catergories ";
$resapp1 = $db->Execute($sqlapp1) or die(mysql_error());
$totalapp1 = $resapp1->RecordCount()			
			
?>    
        <?php
		while(!$resapp->EOF)
		{	
		$cat_id=stripslashes($resapp->fields["catergory_id"]);
		
		
		?>
    	<table width="100%" border="1">
                                    
        	<tr>
            	<td width="25%">Catergory Name : </td>
                <td>
                	<select name="catergory_id">
        				<?php
						while(!$resapp1->EOF)
						{
						?>
                   		                        
                		<option value="<?php echo stripslashes($resapp1->fields["id"]); ?>" <?php if($cat_id==stripslashes($resapp1->fields["id"])) { ?>selected="selected"<?php } ?>><?php echo stripslashes($resapp1->fields["catergory"]); ?></option>
                	
                                        	
						
						<?php
						$resapp1->MoveNext();
						}
						?>            	
                  	</select>
                </td>
                
            </tr>
                                
            <tr>
            	<td>Product Name : </td>
                <td><input type="text" name="product_name" id="product_name" value="<?php	echo stripslashes($resapp->fields["product_name"]); 	?>" /></td>
            </tr>
                  
            <tr>
            	<td>Product Price : </td>
                <td><input type="text" name="product_price" id="product_price" value="<?php	echo stripslashes($resapp->fields["product_price"]); 	?>" /></td>
            </tr>
                  
            <tr>
                <td valign="top">Product Description : </td>
                <td><textarea name="product_desc" id="product_desc" rows="3" cols="40" wrap="physical"><?php	echo stripslashes($resapp->fields["product_desc"]); 	?></textarea></td>
            </tr>
                  
            	<?php
				$resapp->MoveNext();
				}
				?>
            
            <tr>
                  	<td>Upload Image Thumbnail(70 x 70) : </td>
                    <td><input type="file" name="img_thumbnail" id="img_thumbnail" /></td>
            </tr>
                  
            <tr>
                  	<td>Upload Image(209 x 218) : </td>
                    <td><input type="file" name="img_big" id="img_big" /></td>
            </tr>
                
            <tr>
                <td>
            	   	
                    
                </td>
        		<td>
                   	<input type="submit" name="submit" id="submit" value="Save" style="float:left; background-color:#990000; color:#CCCCCC; border:none;" />
                </td>
           </tr>
                  
		</table>
    
    
    
	
	</form>

        
        </div>																				<!-- 	end of content div	-->		
    	
    
    
    </div>																		<!-- 	end of main div	-->
	</center>
</body>
</html>

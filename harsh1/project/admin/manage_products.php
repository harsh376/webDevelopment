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

<script language="javascript" src="adminajax2.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">

function toggle(checkboxID,product_id)
	{
		var checkbox=document.getElementById(checkboxID);
		//var toggle=document.getElementById(toggleID);
		//updateToggle=(checkbox.checked)?toggle.disabled=false:toggle.disabled=true;
		if(checkbox.checked)
		{
			$.post("modify_featured.php", {
			featured:"Yes",
			product_id:product_id
			
			}
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
        
        <?php
			
			if($_REQUEST["act"]=="del")
			{
				//$sqldel="delete FROM tbl_products where product_id='".$_REQUEST["product_id"]."'";
				//$resdel=mysql_query($sqldel);
				
				$sqldel = "DELETE FROM tbl_products WHERE product_id='".$_REQUEST["product_id"]."'";
				$resdel = $db->Execute($sqldel) or die(mysql_error());
				
				
			}
			
			
			if($_REQUEST["btngo"]=="Go")
			{
				//$sqlval="Select * FROM tbl_products where (product_name like '%".$_REQUEST["search"]."%') ";
				//$sqlval="Select * FROM tbl_products where name='".$_REQUEST["search"]."' ";
				$sqlapp="Select * FROM tbl_products where (product_name like '%".$_REQUEST["search"]."%') ";
			}
			else
			{
			
				//$sqlval="Select * FROM tbl_products ";
				$sqlapp="Select * FROM tbl_products ";
			}
			//$result=mysql_query($sqlval);
			//$totrec=mysql_num_rows($result);
			$resapp = $db->Execute($sqlapp) or die(mysql_error());
			$totalapp = $resapp->RecordCount();
			
		?>
        
               
        <table width="100%" border="1" cellspacing="0">
    
		  <tr>
  	
    		<td colspan="7">
            <form name="" id="" action="" method="post">
            <input type="text" name="search" id="search" />
			<input type="submit" name="btngo" id="btngo" value="Go" />
			</form>         
    		</td>
    
  			<td colspan="2" align="right"><a href="add_product.php" style="text-decoration:none; color:#FF0000; font-weight:bold;"><u>Add Product</u></a></td>	
            
  		</tr>
  
  		<tr style="font-weight:bold;">
    		<td width="10%">Product Id</td>
            <td width="15%" height="70px">Product Image</td>
    		<td width="10%">Catergory Name</td>
            <td width="15%">Product Name</td>
            <td width="10%">Product Price</td>
            <td width="15%">Product Description</td>
            <td width="10%">Added Date</td>
            <td width="10%">Action</td>
            <td width="5%">Featured</td>
  		</tr>
  
  <?php 
  
  if($totalapp>0){ 
  
  while(!$resapp->EOF)
  {
  
  ?>
  <tr>
    <td><?php echo stripslashes($resapp->fields["product_id"]);?></td>
    
    <td><img src="images_products_thumbnails/<?php echo stripslashes($resapp->fields["img_thumbnail"]); ?>" /></td>
    
    <?php	
	//$sqlval1=" SELECT * FROM tbl_catergories WHERE id='".$row["catergory_id"]."' ";
	//$result1=mysql_query($sqlval1);
	
	$sqlapp1 = " SELECT * FROM tbl_catergories WHERE id='".stripslashes($resapp->fields["catergory_id"])."' ";
	$resapp1 = $db->Execute($sqlapp1) or die(mysql_error()); 
	
	
	while(!$resapp1->EOF)
	{
	?>
    
    <td><?php echo stripslashes($resapp1->fields["catergory"]);?></td>
    
    <?php
	break;
	$resapp1->MoveNext();
	}
	?>

    
    <td><?php echo stripslashes($resapp->fields["product_name"]);?></td>
    <td><?php echo stripslashes($resapp->fields["product_price"]);?></td>
    <td><?php echo stripslashes($resapp->fields["product_desc"]);?></td>
    <td><?php echo stripslashes($resapp->fields["date_added"]);?></td>
    <td><a href="edit_product.php?product_id=<?php echo stripslashes($resapp->fields["product_id"]);?>">Edit</a>&nbsp;&nbsp;<a href="manage_products.php?act=del&product_id=<?php echo stripslashes($resapp->fields["product_id"]);?>">Delete</a></td>
    <td>
    	<input type="checkbox" name="featured_<?php echo stripslashes($resapp->fields["product_id"]); ?>" id="featured_<?php echo stripslashes($resapp->fields["product_id"]); ?>" />
    </td>
  </tr>
  
  <?php 
  $resapp->MoveNext();
  }
  } 
  
  else {?>
  
  <tr><td colspan="7" align="center"><b>No Record found.</b></td></tr>
  
  <?php }?>
  
</table>

        
        </div>																				<!-- 	end of content div	-->		
    	
    
    
    </div>																		<!-- 	end of main div	-->
	</center>
</body>
</html>

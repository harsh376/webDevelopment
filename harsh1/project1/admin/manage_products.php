<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css">
	@import url(menu_left/menu_style.css); 
</style>


</head>

<body style="margin-top:auto; background-color:#E5E5E5;">
	<center>
	<div style="width:1024px; height:950px; background-color:#E8E8E8;">		<!-- 	main div	-->
    
    	<div style="width:1014px; height:25px; background-color:#400000; color:#CCCCCC; text-align:left; padding:5px 0px 5px 10px;">		<!-- 	header div	-->
        
        	WELCOME ADMIN. 
            &nbsp;&nbsp;&nbsp;<a href="admin_home.php" style="text-decoration:none; color:#999966; font-weight:600;">Home</a>
        
        </div>																					<!-- 	end of header div	-->
        
        <div style="width:1024px; height:150px; background-color:#CCCCCC;">					<!-- 	title div	-->
        </div>																			<!-- 	end of title div	-->
        
        <div style="width:200px; height:765px; background-color:#999999; float:left;">				<!-- 	left side menu div	-->
			
            <div style="width:195px; height:30px; background-color:none; padding:5px 0px 5px 10px; text-align:left;">
				CATERGORIES            	
            </div>
            
            
	        <ul id="menu">
                <li><a href="manage_catergory.php" title="">Manage Catergory</a></li>
                <li><a href="manage_products.php" title="" style="text-decoration:none; background-color:#000000;">Manage Product</a></li>
                <li><a href="#" title="">Diwan Sets</a></li>
                <li><a href="#" title="">Table Linen</a></li>
                <li><a href="#" title="">Kitchen Linen</a></li>
                <li><a href="#" title="">Storage Racks</a></li>
                <li><a href="#" title="">Laundry Bags</a></li>
                <li><a href="#" title="">Accessories</a></li>
			</ul>

        
        </div>																			<!-- 	end of left side ment div	-->
        
        <div style="width:824px; height:765px; background-color:#FFFFFF; float:left;">		<!-- 	content div	-->
        
        <?php
			
			$con=mysql_connect("localhost","root","");
			if(!$con)
			{
				die("Could not Connect to Server".mysql_error());
			}
			mysql_select_db("harsh",$con);
			
						
			if($_REQUEST["act"]=="del")
			{
				$sqldel="delete FROM tbl_products where product_id='".$_REQUEST["product_id"]."'";
				$resdel=mysql_query($sqldel);
			}
			
			
			if($_REQUEST["btngo"]=="Go")
			{
				$sqlval="Select * FROM tbl_products where (product_name like '%".$_REQUEST["search"]."%') ";
				//$sqlval="Select * FROM tbl_products where name='".$_REQUEST["search"]."' ";
			}
			else
			{
			
				$sqlval="Select * FROM tbl_products ";
			}
			$result=mysql_query($sqlval);
			$totrec=mysql_num_rows($result);
		
		?>
        
        <?php
			$con1=mysql_connect("localhost","root","");
			if(!$con1)
			{
				die("Could not connect".mysql_error());
			}
			mysql_select_db("harsh",$con1);
					
		
		?>
        
        
        
        <table width="100%" border="1" cellspacing="0">
    
		  <tr>
  	
    		<td colspan="6">
            <form name="" id="" action="" method="post">
            <input type="text" name="search" id="search" />
			<input type="submit" name="btngo" id="btngo" value="Go" />
			</form>         
    		</td>
    
  			<td colspan="1" align="right"><a href="add_product.php" style="text-decoration:none; color:#FF0000; font-weight:bold;"><u>Add Product</u></a></td>	
            
  		</tr>
  
  		<tr style="font-weight:bold;">
    		<td width="10%">Product Id</td>
    		<td width="10%">Catergory Name</td>
            <td width="20%">Product Name</td>
            <td width="10%">Product Price</td>
            <td width="30%">Product Description</td>
            <td width="10%">Added Date</td>
            <td width="10%">Action</td>
  		</tr>
  
  <?php if($totrec>0){ 
  
  while($row=mysql_fetch_array($result))
  {
  
  ?>
  <tr>
    <td><?php echo $row["product_id"];?></td>
    
    <?php	
	$sqlval1=" SELECT * FROM tbl_catergories WHERE id='".$row["catergory_id"]."' ";
	$result1=mysql_query($sqlval1);
	
	while($row1=mysql_fetch_array($result1))
	{
	?>
    
    <td><?php echo $row1["catergory"];?></td>
    
    <?php
	break;
	}
	?>

    
    <td><?php echo $row["product_name"];?></td>
    <td><?php echo $row["product_price"];?></td>
    <td><?php echo $row["product_desc"];?></td>
    <td><?php echo $row["date_added"];?></td>
    <td><a href="edit_product.php?product_id=<?php echo $row["product_id"];?>">Edit</a>&nbsp;&nbsp;<a href="manage_products.php?act=del&product_id=<?php echo $row["product_id"];?>">Delete</a></td>
  </tr>
  
  <?php 
  }
  } else {?>
  
  <tr><td colspan="7" align="center"><b>No Record found.</b></td></tr>
  
  <?php }?>
  
</table>

        
        </div>																				<!-- 	end of content div	-->		
    	
    
    
    </div>																		<!-- 	end of main div	-->
	</center>
</body>
</html>

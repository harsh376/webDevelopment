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
                <li><a href="manage_catergory.php" title="" style="text-decoration:none; background-color:#000000;">Manage Catergory</a></li>
                <li><a href="manage_products.php" title="">Manage Product</a></li>
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
			
			$con2=mysql_connect("localhost","root","");
			if(!$con2)
			{
				die("Could not Connect to Server".mysql_error());
			}
			mysql_select_db("harsh",$con2);
			
		?>
		
		<?php
			
			$con1=mysql_connect("localhost","root","");
			if(!$con1)
			{
				die("Could not Connect to Server".mysql_error());
			}
			mysql_select_db("harsh",$con1);
		?>
        
        <?php	
						
			if($_REQUEST["act"]=="del")
			{
				$sqldel1=" DELETE FROM tbl_catergories WHERE id='".$_REQUEST["id"]."' ";
				$resdel1=mysql_query($sqldel1);
				
				$sqldel2=" DELETE FROM tbl_products WHERE catergory_id='".$_REQUEST["id"]."' ";
				$resdel2=mysql_query($sqldel2);
			}
			
			
			if($_REQUEST["btngo"]=="Go")
			{
				$sqlval1="Select * FROM tbl_catergories where (catergory like '%".$_REQUEST["search"]."%') ";
				//$sqlval="Select * FROM tbl_registration where name='".$_REQUEST["search"]."' ";
			}
			else
			{
			
				$sqlval1="Select * FROM tbl_catergories ";
			}
			$result1=mysql_query($sqlval1);
			$totrec=mysql_num_rows($result1);
		
		?>
        
        
        
        <table width="100%" border="1" cellspacing="0">
    
		  <tr>
  	
    		<td colspan="2">
            <form name="" id="" action="" method="post">
            <input type="text" name="search" id="search" />
			<input type="submit" name="btngo" id="btngo" value="Go" />
			</form>         
    		</td>
    
  			<td colspan="1" align="right"><a href="add_form.php" style="text-decoration:none; color:#FF0000; font-weight:bold;"><u>Add Record</u></a></td>	
            
  		</tr>
  
  		<tr style="font-weight:bold;">
    		<td width="10%">Id</td>
    		<td width="70%">Product Catergory</td>
            <td width="20%">Action</td>
  		</tr>
  
  <?php if($totrec>0){ 
  
  while($row=mysql_fetch_array($result1))
  {
  ?>
  <tr>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["catergory"];?></td>
    <td><a href="edit_catergory.php?id=<?php echo $row["id"];?>">Edit</a>&nbsp;&nbsp;<a href="manage_catergory.php?act=del&id=<?php echo $row["id"];?>">Delete</a></td>
  </tr>
  
  <?php 
  }
  } else {?>
  
  <tr><td colspan="8" align="center"><b>No Record found.</b></td></tr>
  
  <?php }?>
  
</table>

        
        </div>																				<!-- 	end of content div	-->		
    	
    
    
    </div>																		<!-- 	end of main div	-->
	</center>
</body>
</html>

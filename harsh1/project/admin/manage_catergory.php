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
				$sqldel1=" DELETE FROM tbl_catergories WHERE id='".$_REQUEST["id"]."' ";
				//$resdel1=mysql_query($sqldel1);
				$resdcat = $db->Execute($sqldel1);
				
				$sqldel2=" DELETE FROM tbl_products WHERE catergory_id='".$_REQUEST["id"]."' ";
				//$resdel2=mysql_query($sqldel2);
				$resdprd = $db->Execute($sqldel2);
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
			
			$resapp = $db->Execute($sqlval1);
			$totrec  = $resapp->RecordCount();
			
			//$result1=mysql_query($sqlval1);
			//$totrec=mysql_num_rows($result1);
		
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
  
  while(!$resapp->EOF)
  {
  ?>
  <tr>
    <td><?php echo $resapp->fields["id"];?></td>
    <td><?php echo $resapp->fields["catergory"];?></td>
    <td><a href="edit_catergory.php?id=<?php echo stripslashes($resapp->fields["id"]);?>">Edit</a>&nbsp;&nbsp;<a href="manage_catergory.php?act=del&id=<?php echo stripslashes($resapp->fields["id"]);?>">Delete</a></td>
  </tr>
  
  <?php 
  
  $resapp->MoveNext();
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

<?php
session_start();
include("../configuration.php");

			
if($_REQUEST["btngo"]=="Go")
{
	//$sqlval="Select * FROM tbl_catergories where (catergory like '%".$_REQUEST["search"]."%') ";
	//$sqlval="Select * FROM tbl_registration where name='".$_REQUEST["search"]."' ";
	
	$sqlapp = "SELECT * FROM tbl_catergories WHERE (catergory like '%".$_REQUEST["search"]."%') ";

}
else
{
	$sqlapp = "SELECT * FROM tbl_catergories ";
}
//$result=mysql_query($sqlval);
//$totrec=mysql_num_rows($result);

$resapp = $db->Execute($sqlapp);
$totalapp  = $resapp->RecordCount();

//$sqlval1="SELECT * FROM tbl_catergories WHERE id='".$_REQUEST["id"]."' ";
//$result1=mysql_query($sqlval1);

$sqlapp1 = "SELECT * FROM tbl_catergories WHERE id='".$_REQUEST["id"]."' ";
$resapp1 = $db->Execute($sqlapp1);
$totalapp1 = $resapp1->RecordCount();
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
        
        
        <h1 align="left" style="padding:0px 0px 0px 10px;">EDIT CATERGORY.</h1>
	<form name="frm_edit" id="frm_edit" action="update_catergory.php" onsubmit="return isValid();" method="post" enctype="multipart/form-data">
		

      	<input type="hidden" name="id" id="id" value="<?php echo $_REQUEST["id"];?>"  />
    
        
    	<table width="1024px" border="0" style="background-color:none;" cellpadding="10px" cellspacing="0px">
	
    	    <tr>
        		<td width="15%">Catergory Name : </td>
        		<?php
				while(!$resapp1->EOF)
				{
				?>                
                <td><input type="text" name="catergory" id="catergory" value="<?php echo stripslashes($resapp1->fields["catergory"]); ?>" /></td>
                <?php
				$resapp1->MoveNext();
				}
				?>
      		</tr>
            
            <tr>
            	<td>Upload Catergory Image(660 x 281) : </td>
                <td><input type="file" name="img_catergory" id="img_catergory" /></td>
            </tr>

            <tr>
        		<td><input type="button" onclick="history.go(-1);" name="back" id="back" value="Back" style="float:right; background-color:#666666; color:#CCCCCC; border:none;" /></td>
        		<td><input type="submit" name="submit" id="submit" value="Save" style="float:left; background-color:#990000; color:#CCCCCC; border:none;" /></td>
      		</tr>
    	</table>
    
    
    
	
	</form>

        
        </div>																				<!-- 	end of content div	-->		
    	
    
    
    </div>																		<!-- 	end of main div	-->
	</center>
</body>
</html>

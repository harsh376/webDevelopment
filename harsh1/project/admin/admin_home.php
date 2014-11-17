<?php
session_start();
include("../configuration.php");

$sqlval=" SELECT * FROM tbl_admin WHERE name='".$_REQUEST["name"]."' AND password='".$_REQUEST["password"]."' ";
$result= $db->Execute($sqlval);
$numrows=$result->RecordCount();

if($numrows)
{
	$_SESSION['id'] = $result->fields['id'];
	$_SESSION['name'] = $result->fields['name'];
}
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
        
        	<h1>Welcome.</h1>

        
        </div>																				<!-- 	end of content div	-->		
    	
    
    
    </div>																		<!-- 	end of main div	-->
	</center>
</body>
</html>


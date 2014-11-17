<?php

$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("Could not connect".mysql_error());
}

mysql_select_db("harsh",$con);

$sqlval=" SELECT * FROM tbl_admin WHERE name='".$_REQUEST["name"]."' AND password='".$_REQUEST["password"]."' ";
$result=mysql_query($sqlval);
$numrows=mysql_num_rows($result);

if($_REQUEST["act"]=="del")
{
	$sqldel="delete FROM tbl_catergories where id='".$_REQUEST["id"]."'";
	$resdel=mysql_query($sqldel);
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
		



/*
if($numrows)
{

*/
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
        
        
        <h1 align="left" style="padding:0px 0px 0px 10px;">ADD CATERGORY.</h1>

<form name="frm_add" id="frm_add" action="insert_catergory.php" method="post" enctype="multipart/form-data">
        
        <table width="1024px" border="0" style="background-color:none;" cellpadding="10px" cellspacing="0px">
	
    	    <tr>
        		<td width="15%">Catergory Name : </td>
        		<td><input type="text" name="catergory" id="catergory" /></td>
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


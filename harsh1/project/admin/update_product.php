<?php
session_start();
include("../configuration.php");

$product_id = $_POST['product_id'];
$catergory_id = $_POST['catergory_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_desc = $_POST['product_desc'];

if ($_FILES["img_thumbnail"]["error"] > 0)
{
	echo "Image Thumbnail could not be uploaded. Error Code: " . $_FILES["img_thumbnail"]["error"] . "<br />";
}
		    
else
{
	//echo "Upload: " . $_FILES["resume"]["name"] . "<br />";
		
	if(file_exists("images_products_thumbnails/" . $_FILES["img_thumbnail"]["name"]))
	{
	   	echo $_FILES["img_thumbnail"]["name"] . " already exists. ";
	}
				
	else
	{
		move_uploaded_file($_FILES["img_thumbnail"]["tmp_name"],"images_products_thumbnails/" . $_FILES["img_thumbnail"]["name"]);
		//echo "Resume Stored in: " . "upload/" . $_FILES["resume"]["name"];
	}
	
	
			
		
}  


if ($_FILES["img_big"]["error"] > 0)
{
	echo "Image(big) could not be uploaded. Error Code: " . $_FILES["img_big"]["error"] . "<br />";
}
		    
else
{
	//echo "Upload: " . $_FILES["resume"]["name"] . "<br />";
		
	if(file_exists("images_products_big/" . $_FILES["img_big"]["name"]))
	{
	   	echo $_FILES["img_big"]["name"] . " already exists. ";
	}
				
	else
	{
		move_uploaded_file($_FILES["img_big"]["tmp_name"],"images_products_big/" . $_FILES["img_big"]["name"]);
		//echo "Resume Stored in: " . "upload/" . $_FILES["resume"]["name"];
	}
	
	
			
		
}  


$img_thumbnail=$_FILES["img_thumbnail"]["name"];	
$img_big=$_FILES["img_big"]["name"];	


//$sqlval="UPDATE tbl_products SET catergory_id='".$catergory_id."',product_name='".$product_name."',product_price='".$product_price."',product_desc='".$product_desc."',img_thumbnail='".$img_thumbnail."',img_big='".$img_big."' WHERE product_id='".$product_id."'  ";
//$result=mysql_query($sqlval);

$ins_emp = "UPDATE tbl_products SET catergory_id='".$catergory_id."',product_name='".$product_name."',product_price='".$product_price."',product_desc='".$product_desc."',img_thumbnail='".$img_thumbnail."',img_big='".$img_big."' WHERE product_id='".$product_id."'  ";
$ins_result = $db->Execute($ins_emp);


if($ins_result)
{
	//echo "Data Updated";
?>
<script language="javascript">
window.location="manage_products.php";
</script>

<?php	
}
else
{
	echo "Data Not Updated";
}


?>

<?php
session_start();
include("../configuration.php");

$catergory_id = $_POST['catergory_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_desc = $_POST['product_desc'];
$featured = var checkbox=document.getElementById(checkboxID);

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

//$sqlval="INSERT INTO tbl_products(product_id,catergory_id,product_name,product_price,product_desc,img_thumbnail,img_big,date_added)
//VALUES ('','".$catergory_id."','".$product_name."','".$product_price."','".$product_desc."','".$img_thumbnail."','".$img_big."',CURDATE())";
//$result=mysql_query($sqlval);

$ins_emp = "INSERT INTO tbl_products(product_id,catergory_id,product_name,product_price,product_desc,img_thumbnail,img_big,date_added,featured)
VALUES ('','".$catergory_id."','".$product_name."','".$product_price."','".$product_desc."','".$img_thumbnail."','".$img_big."',CURDATE(),'".$featured."')";
$ins_result = $db->Execute($ins_emp) or die(mysql_error());

if($ins_result)
{

	?>
	
    <script language="javascript" type="text/javascript">
	window.location="manage_products.php";
	</script>
	
<?php
}

$ins_feat = "INSERT INTO tbl_featured(product_id,featured) VALUES('".$product_id."','".$featured."') ";
$ins_feat_res = $db->Execute($ins_feat) or die(mysql_error()); 

?>


<?php
session_start();
include("../configuration.php");

$id = $_POST['id'];
$catergory = $_POST['catergory'];

if ($_FILES["img_catergory"]["error"] > 0)
{
	echo "Catergory Image could not be uploaded. Error Code: " . $_FILES["img_catergory"]["error"] . "<br />";
}
		    
else
{
	//echo "Upload: " . $_FILES["resume"]["name"] . "<br />";
		
	if(file_exists("images_catergories/" . $_FILES["img_catergory"]["name"]))
	{
	   	echo $_FILES["img_catergory"]["name"] . " already exists. ";
	}
				
	else
	{
		move_uploaded_file($_FILES["img_catergory"]["tmp_name"],"images_catergories/" . $_FILES["img_catergory"]["name"]);
		//echo "Resume Stored in: " . "upload/" . $_FILES["resume"]["name"];
	}
	
	
			
		
}  


$img_catergory=$_FILES["img_catergory"]["name"];

//$sqlval="UPDATE tbl_catergories SET catergory='".$catergory."',img_catergory='".$img_catergory."' WHERE id='$id'  ";
//$result=mysql_query($sqlval);

$ins_emp = "UPDATE tbl_catergories SET catergory='".$catergory."',img_catergory='".$img_catergory."' WHERE id='$id'  ";
$ins_result = $db->Execute($ins_emp) or die(mysql_error());


if($ins_result)
{
	//echo "Data Updated";
?>
<script language="javascript">
window.location="manage_catergory.php";
</script>

<?php	
}
else
{
	echo "Data Not Updated";
}


?>


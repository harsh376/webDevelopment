
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("harsh", $con);

$name = $_POST['name'];
$fatherName = $_POST['fatherName'];
$sex = $_POST['sex'];
$city = $_POST['city'];
$address = $_POST['address'];


if ($_FILES["resume"]["error"] > 0)
{
	echo "Resume could not be uploaded. Error Code: " . $_FILES["resume"]["error"] . "<br />";
}
		    
else
{
	//echo "Upload: " . $_FILES["resume"]["name"] . "<br />";
		
	if(file_exists("upload/" . $_FILES["resume"]["name"]))
	{
	   	//echo $_FILES["resume"]["name"] . " already exists. ";
	}
				
	else
	{
		move_uploaded_file($_FILES["resume"]["tmp_name"],"upload/" . $_FILES["resume"]["name"]);
		//echo "Resume Stored in: " . "upload/" . $_FILES["resume"]["name"];
	}
	
	
			
		
}  

$resume=$_FILES["resume"]["name"];	
		

$interests=$_REQUEST["interests"];
$finalinst=implode(",",$interests);
//echo "<pre>";
//print_r($interests);


$sqlval="INSERT INTO tbl_registration(id,name,fatherName,sex,city,address,interests,resume)
VALUES ('','".$name."', '".$fatherName."','".$sex."','".$city."','".$address."','".$finalinst."','".$resume."')";
$result=mysql_query($sqlval);
if($result)
{
	?>
	<script language="javascript" type="text/javascript">
	window.location="displaydata.php";
	</script>

<?php
}

mysql_close($con);

?>


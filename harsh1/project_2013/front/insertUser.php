<?php
include ("../configuration.php");
$con = mysql_connect("localhost","root","");
if(!$con)
{
	die("Could not connect".mysql_error());
}
mysql_select_db("2013",$con);

$name = $_POST['name'];
$fatherName = $_POST['fatherName'];
$sex = $_POST['sex'];
$city = $_POST['city'];
$address = $_POST['address'];

if($_FILES["resume"]["error"]>0)
{
	echo "error in uploading resume!";
}
else
{
	if(file_exists("resumeUploads/".$_FILES["resume"]["name"]))
	{
		echo $_FILES["resume"]["name"]."already exists";
	}
	else
	{
		move_uploaded_file($_FILES["resume"]["tmp_name"],"resumeUploads/".$_FILES["resume"]["name"]);
	}
}

$resume = $_FILES["resume"]["name"];

$int = $_POST['interests'];
$interests = implode(",",$int);

$sqlval = "INSERT INTO tbl_register1(id,name,fatherName,sex,city,address,interests,resume) VALUES('','".$name."','".$fatherName."','".$sex."','".$city."','".$address."','".$interests."','".$resume."') ";
$resval = mysql_query($sqlval);

if($resval)
{
	echo "data inserted";
}

mysql_close($con);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>

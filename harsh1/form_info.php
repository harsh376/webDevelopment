<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

$name = $_POST['name'];
$fatherName = $_POST['fatherName'];
$sex = $_POST['sex'];
$city = $_POST['city'];
$address = $_POST['address'];
$interests = $_POST['interests'];

echo "Name : ".$name."<br/><br/>";

echo "Father's Name : ".$fatherName."<br/><br/>";

echo "Sex : ".$sex."<br/><br/>";

echo "City : ".$city."<br/><br/>";

echo "Address : ".$address."<br/><br/>";

echo "Interests : <br/>";
foreach($interests as $i)
echo "# ".$i."<br/>";
echo "<br/>";

  if ($_FILES["resume"]["error"] > 0)
    {
    echo "Resume could not be uploaded. Error Code: " . $_FILES["resume"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["resume"]["name"] . "<br />";

    if(file_exists("upload/" . $_FILES["resume"]["name"]))
      {
      echo $_FILES["resume"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["resume"]["tmp_name"],
      "upload/" . $_FILES["resume"]["name"]);
      echo "Resume Stored in: " . "upload/" . $_FILES["resume"]["name"];
      }
  	}  


?>


</body>
</html>

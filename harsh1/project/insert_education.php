<?php
session_start();
include ("configuration.php");


$education = $_REQUEST["education"];

$sqlapp = " INSERT INTO test_education(id,user_id,session_id,education) VALUES('','','".session_id()."','".$education."') ";
$resapp = $db->Execute($sqlapp) or die(mysql_error());
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

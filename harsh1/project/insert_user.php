<?php
session_start();
include ("configuration.php");

$name = $_REQUEST["name"];
$father = $_REQUEST["father"];
$address = $_REQUEST["address"];

$sqlval = "INSERT INTO test_users(user_id,name,father,address) VALUES('','".$name."','".$father."','".$address."') ";
$resapp = $db->Execute($sqlval) or die(mysql_error());
$user_id = mysql_insert_id();

$sqlval1 = "UPDATE test_education SET user_id='".$user_id."' WHERE session_id='".session_id()."' ";
$resapp1 = $db->Execute($sqlval1) or die(mysql_error());

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

<?php
include ("../configuration.php");

$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

$sqlapp = "SELECT * FROM tbl_users WHERE email='".$email."' AND password='".$password."' ";
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

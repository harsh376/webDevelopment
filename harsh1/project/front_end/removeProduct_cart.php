<?php
session_start();
include ("../configuration.php");

$cart_id = $_REQUEST["cart_id"];

$sqldel = "DELETE FROM tbl_cart WHERE cart_id='".$cart_id."' ";
$resdel = $db->Execute($sqldel) or die(mysql_error());

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<script language="javascript" type="text/javascript">

window.location = "addtocart.php?a="+1;

</script>


</body>
</html>

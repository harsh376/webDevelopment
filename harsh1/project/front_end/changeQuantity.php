<?php
session_start();
include ("../configuration.php");

$new_quantity = $_REQUEST["quantity"];
$product_id = $_REQUEST["p_id"];

$sqlval = "UPDATE tbl_cart SET quantity='".$new_quantity."' WHERE user_id='".$_SESSION["user_id"]."' AND product_id='".$product_id."' ";
$resapp = $db->Execute($sqlval) or die(mysql_error());

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if($resapp)
{
?>
<script language="javascript" type="text/javascript">
window.location = "addtocart.php?a="+1;
</script>
<?php
}
?>
</body>
</html>

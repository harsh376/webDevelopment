<?php
include ("../configuration.php");

$sqlval = " SELECT * FROM tbl_products WHERE product_id='".$_REQUEST["countryname"]."'";
$resapp = $db->Execute($sqlval) or die(mysql_error());
$totalapp = $resapp->RecordCount();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<table width="300px" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40%">Product Id : </td>
    <td><?php echo stripslashes($resapp->fields["product_id"]); ?></td>
  </tr>
  <tr>
    <td>Product Name : </td>
    <td><?php echo stripslashes($resapp->fields["product_name"]); ?></td>
  </tr>
  <tr>
    <td width="30%">Product Price : </td>
    <td><?php echo stripslashes($resapp->fields["product_price"]); ?></td>
  </tr>
  <tr>
    <td>Product Description : </td>
    <td><?php echo stripslashes($resapp->fields["product_desc"]); ?></td>
  </tr>
  <tr>
    <td>Catergory Id : </td>
    <td><?php echo stripslashes($resapp->fields["catergory_id"]); ?></td>
  </tr>
 
  
</table>

</body>
</html>

<?php
session_start();
include ("../configuration.php");

$product_id = $_REQUEST["product_id"];

$sqlapp = " SELECT * FROM tbl_products WHERE product_id='".$product_id."' ";
$resapp = $db->Execute($sqlapp) or die(mysql_error());

$sqlapp1 = "SELECT * FROM tbl_catergories WHERE id='".stripslashes($resapp->fields["catergory_id"])."' ";
$resapp1 = $db->Execute($sqlapp1) or die(mysql_error());
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:none;">

<h2 style="width:100%;">PRODUCT DETAILS : </h2>
<table width="100%" border="0" height="220px">
  <tr height="220px">
    <td width="210px">
    	<img src="../admin/images_products_big/<?php echo stripslashes($resapp->fields["img_big"]); ?>" style="float:left;" />
    </td>
    <td>
    	<table width="100%" bordercolor="#CCCCCC" border="1" style="background-color:none; " cellpadding="5px" cellspacing="0">
        	<tr>
            	<td width="32%" style="font-family:Arial, Helvetica, sans-serif; color:#999999; font-weight:600; font-size:13px;">Product Id : </td>
        		<td style="font-family:Arial, Helvetica, sans-serif; color:#999999; font-size:13px;"><?php echo $product_id; ?></td>
      		</tr>
      		<tr>
        		<td style="font-family:Arial, Helvetica, sans-serif; color:#999999; font-weight:600; font-size:13px;">Product Name : </td>
        		<td style="font-family:Arial, Helvetica, sans-serif; color:#999999; font-size:13px;"><?php echo stripslashes($resapp->fields["product_name"]); ?></td>
      		</tr>
      		<tr>
        		<td style="font-family:Arial, Helvetica, sans-serif; color:#999999; font-weight:600; font-size:13px;">Catergory Name : </td>
        		<td style="font-family:Arial, Helvetica, sans-serif; color:#999999; font-size:13px;"><?php echo stripslashes($resapp1->fields["catergory"]); ?></td>
      		</tr>
      		<tr>
        		<td style="font-family:Arial, Helvetica, sans-serif; color:#999999; font-weight:600; font-size:13px;">Product Price : </td>
        		<td style="font-family:Arial, Helvetica, sans-serif; color:#999999; font-size:13px;">Rs. <?php echo stripslashes($resapp->fields["product_price"]); ?>/-</td>
      		</tr>
      		<tr height="100">
        		<td style="font-family:Arial, Helvetica, sans-serif; color:#999999; font-weight:600; font-size:13px;">Product Description : </td>
        		<td style="font-family:Arial, Helvetica, sans-serif; color:#999999; font-size:13px;"><?php echo stripslashes($resapp->fields["product_desc"]); ?></td>
      		</tr>
    	</table>

    </td>
  </tr>
</table>

<a href="#" onclick="parent.parent.GB_hide();" style="float:right; border:0px; width:60px; height:25px; background-color:#8B0F01; color:#ffffff; text-decoration:none; text-align:center; padding:1px 0px 1px 0px;" >Close</a>


</body>
</html>

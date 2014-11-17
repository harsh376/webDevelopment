<?php
session_start();
include ("../configuration.php");
$a = $_REQUEST["a"];
$cat_id = $_REQUEST["catergory_id"];

$user_id = $_SESSION["user_id"];
$product_id = $_REQUEST["product_id"];

$sqlapp2 = " SELECT * FROM tbl_products WHERE product_id='".$product_id."' ";
$resapp2 = $db->Execute($sqlapp2) or die(mysql_error());

$product_name = stripslashes($resapp2->fields["product_name"]);
$product_price = stripslashes($resapp2->fields["product_price"]);
$current_date = date("Y-m-d");

$sqlapp1 = "SELECT * FROM tbl_cart WHERE user_id='".$user_id."' AND product_id='".$product_id."' AND date_added='".$current_date."' ";
$resapp1 = $db->Execute($sqlapp1) or die(mysql_error());
$totalapp1 = $resapp1->RecordCount();
$q=1;   // for the first quantity
if($a!=1)
{
if($totalapp1==0)
{
$sqlapp = "INSERT INTO tbl_cart(cart_id,user_id,product_id,product_name,product_price,quantity,date_added) VALUES('','".$user_id."','".$product_id."','".$product_name."','".$product_price."','".$q."',CURDATE() ) ";
$resapp = $db->Execute($sqlapp) or die(mysql_error());
}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="jquery.js" type="text/javascript"></script>
<script language="javascript" src="adminajax.js" type="text/javascript"></script>
<script language="javascript" src="adminajax1.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
function changeQuantity(quantity,p_id)
{
	var quantity = document.getElementById(quantity).value;
	window.location = "changeQuantity.php?quantity="+quantity + "&p_id="+p_id;
}

</script>

</head>

<body>
<?php

$sqlapp3 = "SELECT * FROM tbl_cart WHERE user_id='".$user_id."' AND date_added='".$current_date."' ";
$resapp3 = $db->Execute($sqlapp3) or die(mysql_error());
$totalapp3 = $resapp3->RecordCount();

?>
<font style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#999999; font-weight:600; float:right;">Welcome <?php echo $_SESSION["fname"]; ?></font>
<br/>
<h3 style="width:100%; background-color:none; font-family:Arial, Helvetica, sans-serif;">My Cart</h3>
<?php if($totalapp1!=0) { ?>
<font style="color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size:13px;">This item "<i><?php echo $product_name; ?>"</i> is already in your cart.<br/><br/></font>
<?php } ?>

<table width="100%" border="1" bordercolor="#999999" cellpadding="5px" cellspacing="0">
  <tr style="font-weight:600; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
    <td width="10%">Product Id</td>
    <td>Product</td>
    <td>Product Name</td>
    <td width="15%">Product Price</td>
    <td>Quantity</td>
    <td colspan="2">Sub Total</td>
  </tr>
  
  <?php
  if($totalapp3==0)
  {
  ?>
  <tr>
  	<td colspan="6" style="color:#FF0000; font-weight:600; text-align:center;">There are no items in your cart.</td>
  </tr>
  <?php
  }
  
  else
  {
  
  while(!$resapp3->EOF)
  {
  
  $sqlval4 = " SELECT * FROM tbl_products WHERE product_id='".stripslashes($resapp3->fields["product_id"])."' ";
  $resapp4 = $db->Execute($sqlval4) or die(mysql_error());
  
  ?>
  <tr style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#666666;">
    <td><?php echo stripslashes($resapp3->fields["product_id"]);  ?></td>
    <td style="width:70px; height:70px;"><img src="../admin/images_products_thumbnails/<?php echo stripslashes($resapp4->fields["img_thumbnail"]); ?>" /></td>
    <td><?php echo stripslashes($resapp3->fields["product_name"]); ?></td>
    <td><?php echo stripslashes($resapp3->fields["product_price"]); ?></td>
    <?php $p_id = stripslashes($resapp3->fields["product_id"]);
	?>
    <td>
    <input style="size:20px; width:20px;" type="text" name="quantity_<?php echo $p_id; ?>" id="quantity_<?php echo $p_id; ?>" onblur="srcuser1(this.value,'<?php echo $p_id; ?>');" value="<?php echo stripslashes($resapp3->fields["quantity"]); ?>" />
    </td>
    <td>
    <div id="subtotal_<?php echo stripslashes($resapp3->fields["product_id"]); ?>">
	<?php echo (stripslashes($resapp3->fields["product_price"]))*(stripslashes($resapp3->fields["quantity"])) ; 
	$total+=(stripslashes($resapp3->fields["product_price"]))*(stripslashes($resapp3->fields["quantity"])); ?>
    </div>
    </td>
    <td width="5%"><a href="removeProduct_cart.php?cart_id=<?php echo stripslashes($resapp3->fields["cart_id"]); ?>">Remove</a></td>
  </tr> 
  <?php
  $resapp3->MoveNext();
  }
  ?>
  <tr style="font-weight:600; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
  	<td colspan="5" style="text-align:right;">Total : </td>
    <td>
	<div id="total">
	<?php echo $total; ?>
    </div>
    </td>
    <td></td>
  </tr>
  <?php
  }
  ?>
</table>
<br/>
<!--<input type="button" name="btnclose" id="btnclose" value="Close" style="float:right; border:0px; width:60px; height:25px; background-color:#8B0F01; color:#ffffff;" onclick="self.close();"/>
-->
<a href="#" onclick="parent.parent.GB_hide();" style="float:right; border:0px; width:60px; height:25px; background-color:#8B0F01; color:#ffffff; text-decoration:none; text-align:center; padding:1px 0px 1px 0px;" >Close</a>


</body>
</html>

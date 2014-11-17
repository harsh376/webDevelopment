<?php
include ("../configuration.php");

$user_id = 9;
$current_date = date("Y-m-d");

$sqlapp3 = "SELECT * FROM tbl_cart WHERE user_id='".$user_id."' AND date_added='".$current_date."' ";
$resapp3 = $db->Execute($sqlapp3) or die(mysql_error());
$totalapp3 = $resapp3->RecordCount();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<h3 style="width:100%; background-color:none; font-family:Arial, Helvetica, sans-serif;">My Cart</h3>

<div id="cart">
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
    <input style="size:20px; width:20px;" type="text" name="quantity_<?php echo $p_id; ?>" id="quantity_<?php echo $p_id; ?>" value="<?php echo stripslashes($resapp3->fields["quantity"]); ?>" onchange="" />
    
   </td>
    <td><?php echo (stripslashes($resapp3->fields["product_price"]))*(stripslashes($resapp3->fields["quantity"])) ; $total+=(stripslashes($resapp3->fields["product_price"]))*(stripslashes($resapp3->fields["quantity"])); ?></td>
    <td width="5%"><a href="removeProduct_cart.php?cart_id=<?php echo stripslashes($resapp3->fields["cart_id"]); ?>">Remove</a></td>
  </tr> 
  <?php
  $resapp3->MoveNext();
  }
  ?>
  <tr style="font-weight:600; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
  	<td colspan="5" style="text-align:right;">Total : </td>
    <td><?php echo $total; ?></td>
    <td></td>
  </tr>
  <?php
  }
  ?>
</table>
</div>


</body>
</html>

<?php
session_start();
include ("../configuration.php");

//$user_id = $_SESSION["user_id"];
//$current_date = date("Y-m-d");
$val = $_REQUEST["val"];
$product_id = $_REQUEST["product_id"];

$sqlapp = " UPDATE tbl_featured SET featured='".$val."' WHERE product_id='".$product_id."' ";
$resapp = $db->Execute($sqlapp) or die(mysql_error());
$totalapp = $resapp->RecordCount();

$sqlapp1 = "UPDATE tbl_products SET featured='".$val."' WHERE product_id='".$product_id."' ";
$resapp1 = $db->Execute($sqlapp1) or die(mysql_error());
$totalapp1 = $resapp1->RecordCount();

echo $val;
echo $product_id;
/*
$sqlapp2 = " SELECT * FROM tbl_cart WHERE user_id='".$user_id."' AND date_added='".$current_date."' AND product_id='".$product_id."' ";
$resapp2 = $db->Execute($sqlapp2) or die(mysql_error());
$totalapp2 = $resapp2->RecordCount();

$sqlapp1 = " SELECT * FROM tbl_cart WHERE user_id='".$user_id."' AND date_added='".$current_date."' ";
$resapp1 = $db->Execute($sqlapp1) or die(mysql_error());
$totalapp1 = $resapp1->RecordCount();

$subtotal = (stripslashes($resapp2->fields["product_price"]))*($quantity) ;
$total1=0;
while(!$resapp1->EOF)
{
	$total1+= (stripslashes($resapp1->fields["product_price"]))*(stripslashes($resapp1->fields["quantity"])) ; 
	$resapp1->MoveNext();
}


echo $subtotal;

*/
//echo $total1;
/*
if($resapp3)
{
	echo "101";
}
else
{
	echo "102";
}
*/
?>

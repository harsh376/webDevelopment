<?php
session_start();
include ("../configuration.php");

$user_id = $_SESSION["user_id"];
$current_date = date("Y-m-d");
$quantity = $_REQUEST["quantity"];
$product_id = $_REQUEST["product_id"];

$sqlapp3 = " UPDATE tbl_cart SET quantity='".$quantity."' WHERE user_id='".$user_id."' AND date_added='".$current_date."' AND product_id='".$product_id."' ";
$resapp3 = $db->Execute($sqlapp3) or die(mysql_error());
$totalapp3 = $resapp3->RecordCount();

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

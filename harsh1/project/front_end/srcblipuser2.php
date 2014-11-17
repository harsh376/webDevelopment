<?php
session_start();
include ("../configuration.php");

$user_id = $_SESSION["user_id"];
$current_date = date("Y-m-d");
$quantity = $_REQUEST["quantity"];
$product_id = $_REQUEST["product_id"];

$sqlapp1 = " SELECT * FROM tbl_cart WHERE user_id='".$user_id."' AND date_added='".$current_date."' ";
$resapp1 = $db->Execute($sqlapp1) or die(mysql_error());
$totalapp1 = $resapp1->RecordCount();

$total=0;
while(!$resapp1->EOF)
{
	$total+= (stripslashes($resapp1->fields["product_price"]))*(stripslashes($resapp1->fields["quantity"])) ; 
	$resapp1->MoveNext();
}

echo $total;
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

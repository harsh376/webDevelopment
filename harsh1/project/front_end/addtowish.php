<?php
session_start();
include ("../configuration.php");

$user_id = $_SESSION["user_id"];
$product_id = $_REQUEST["product_id"];
$cat_id = $_REQUEST["catergory_id"];

$sqlapp1 = "SELECT * FROM tbl_wishlist WHERE user_id='".$user_id."' AND product_id='".$product_id."' ";
$resapp1 = $db->Execute($sqlapp1) or die(mysql_error());
$totalapp1 = $resapp1->RecordCount();

if($totalapp1==0)
{
$sqlapp = "INSERT INTO tbl_wishlist(id,user_id,product_id,date_added) VALUES('','".$user_id."','".$product_id."',CURDATE() ) ";
$resapp = $db->Execute($sqlapp) or die(mysql_error());

/*
$sqlapp = " SELECT * FROM tbl_users WHERE user_id='".$_SESSION["user_id"]."' ";
$resapp = $db->Execute($sqlapp) or die(mysql_error());

$wishlist = stripslashes($resapp->fields["wishlist"]);
if($wishlist=="")
{
	$newwishlist = $product_id;
}

else
{
	$newwishlist = $wishlist.",".$product_id;
}

$ins_emp = "UPDATE tbl_users SET wishlist='".$newwishlist."' WHERE user_id='".$_SESSION["user_id"]."' ";
$ins_result = $db->Execute($ins_emp) or die(mysql_error());
*/
if($resapp)
{
	?>
    <script language="javascript" type="text/javascript">
    window.location = "product_details.php?cat_id=<?php echo $cat_id; ?>&add=1";   // add=1 is to know that product_details.php has been called from addtowish.php
    </script>
    <?php
}

}

else
{
?>
	<script language="javascript" type="text/javascript">
    window.location = "product_details.php?cat_id=<?php echo $cat_id; ?>&add=2";   // add=1 is to know that product_details.php has been called from addtowish.php
    </script>
<?php
}

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

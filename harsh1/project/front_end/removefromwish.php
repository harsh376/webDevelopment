<?php
session_start();
include ("../configuration.php");

$product_id = $_REQUEST["product_id"];
//$cat_id = $_REQUEST["catergory_id"];

$sqldel = " DELETE FROM tbl_wishlist WHERE user_id='".$_SESSION["user_id"]."' AND product_id='".$product_id."' ";
$resdel = $db->Execute($sqldel) or die(mysql_error());

/*
$newitems;
$ct=0;
for($i=0; $i<$items_len; $i++)
{
	if($items[$i]!=$product_id)
	{
		if($ct==0)
		{
			$newitems = $items[$i];
		}
		else
		{
			$newitems = ",".$items[$i];
		}
		$ct++;
	}
}

$newwishlist = $newitems;


$ins_emp = "UPDATE tbl_users SET wishlist='".$newwishlist."' WHERE user_id='".$_SESSION["user_id"]."' ";
$ins_result = $db->Execute($ins_emp) or die(mysql_error());
*/

if($resdel)
{
	?>
    <script language="javascript" type="text/javascript">
    window.location = "wishlist.php";
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

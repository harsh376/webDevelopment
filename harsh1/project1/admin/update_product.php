<html>

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("harsh", $con);

$product_id = $_POST['product_id'];
$catergory_id = $_POST['catergory_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_desc = $_POST['product_desc'];

$sqlval="UPDATE tbl_products SET catergory_id='$catergory_id',product_name='$product_name',product_price='$product_price',product_desc='$product_desc' WHERE product_id='$product_id'  ";
$result=mysql_query($sqlval);

if($result)
{
	//echo "Data Updated";
?>
<script language="javascript">
window.location="manage_products.php";
</script>

<?php	
}
else
{
	echo "Data Not Updated";
}


mysql_close($con);

?>


</html>
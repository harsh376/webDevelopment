
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("harsh", $con);

$catergory_id = $_POST['catergory_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_desc = $_POST['product_desc'];



$sqlval="INSERT INTO tbl_products(product_id,catergory_id,product_name,product_price,product_desc,date_added)
VALUES ('','".$catergory_id."','".$product_name."','".$product_price."','".$product_desc."',CURDATE())";
$result=mysql_query($sqlval);
if($result)
{

	?>
	
    <script language="javascript" type="text/javascript">
	window.location="manage_products.php";
	</script>
	
<?php
}

mysql_close($con);

?>


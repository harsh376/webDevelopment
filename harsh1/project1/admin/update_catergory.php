<html>

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("harsh", $con);

$id = $_POST['id'];
$catergory = $_POST['catergory'];
$sqlval="UPDATE tbl_catergories SET catergory='$catergory' WHERE id='$id'  ";
$result=mysql_query($sqlval);

if($result)
{
	//echo "Data Updated";
?>
<script language="javascript">
window.location="manage_catergory.php";
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
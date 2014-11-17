
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("harsh", $con);

$catergory = $_POST['catergory'];


$sqlval="INSERT INTO tbl_catergories(id,catergory)
VALUES ('','".$catergory."')";
$result=mysql_query($sqlval);
if($result)
{

	?>
	
    <script language="javascript" type="text/javascript">
	window.location="manage_catergory.php";
	</script>
	
<?php
}

mysql_close($con);

?>


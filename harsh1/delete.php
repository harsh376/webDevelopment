<html>

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("harsh", $con);

$id=$_POST['id'];

$sqlval="DELETE FROM tbl_registration WHERE id='$id'";
$result=mysql_query($sqlval);
if($result)
{
	echo "Record Deleted";
}
else
{
	echo "Record could not be Deleted";
}


mysql_close($con);

?>
<br/>
<a href="display_table.php">Display table</a>


</html>
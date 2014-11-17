<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("harsh", $con);

$sql="SELECT * FROM tbl_registration";
$result=mysql_query($sql);


?>
<table width="500px" border="1" cellpadding="5" cellspacing="0">
  
  <tr style="font-weight:700;">
  	<td>Id</td>
    <td>Name</td>
  	<td>Father's Name</td>
    <td>Sex</td>
    <td>City</td>
    <td>Address</td>
    <td>Interests</td>
    <td colspan="2"><a href="testform1.php">Add Record</a></td>
    

  </tr>
<?php
while($row=mysql_fetch_array($result))
{
?>
	
  <tr>
  	
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["name"];?></td>
  	<td><?php echo $row["fatherName"];?></td>
    <td><?php echo $row["sex"];?></td>
    <td><?php echo $row["city"];?></td>
    <td><?php echo $row["address"];?></td>
    <td><?php echo $row["interests"];?></td>
    <td><a href="editform.php">Edit</a></td>
    <td><a href="deletepage.php">Delete</a></td>
     
  </tr>
<?php
}
?>
</table>
<?php

mysql_close($con);

?>
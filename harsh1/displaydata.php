<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("harsh", $con);


if($_REQUEST["act"]=="del")
{
	$sqldel="delete FROM tbl_registration where id='".$_REQUEST["id"]."'";
	$resdel=mysql_query($sqldel);
}


if($_REQUEST["btngo"]=="Go")
{
	$sqlval="Select * FROM tbl_registration where (name like '%".$_REQUEST["search"]."%' or  fatherName like '%".$_REQUEST["search"]."%')";
	//$sqlval="Select * FROM tbl_registration where name='".$_REQUEST["search"]."' ";
}
else
{

	$sqlval="Select * FROM tbl_registration ";
}
$result=mysql_query($sqlval);
$totrec=mysql_num_rows($result);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script language="javascript" type="text/javascript">

function search1()
{
	txtitem=document.getElementById("search").value;
	window.location("search.php?txtitem");
	
}



</script>


</head>

<body>

<table width="100%" border="1">
    
  <tr>
  	
    <td colspan="7">    	
<form name="" id="" action="" method="post">
<input type="text" name="search" id="search" />
<input type="submit" name="btngo" id="btngo" value="Go" />
</form>         
    </td>
    
  	<td colspan="2" align="right"><a href="testform1.php">Add Record</a></td>	
  </tr>
  
  <tr>
    <td width="10%">Id</td>
    <td width="10%">Name</td>
    <td width="10%">Father's Name</td>
    <td width="10%">Sex</td>
    <td width="10%">City</td>
    <td width="20%">Address</td>
    <td width="20%">Interests</td>
    <td width="20%">Resume</td>
    <td width="10%">Action</td>
  </tr>
  <?php if($totrec>0){ 
  
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
    <td><a href="upload/<?php echo $row["resume"];?>" target="_blank">View Resume</a></td>
    <td><a href="editrec.php?id=<?php echo $row["id"];?>">Edit</a>&nbsp;&nbsp;<a href="displaydata.php?act=del&id=<?php echo $row["id"];?>">Delete</a></td>
  </tr>
  
  <?php 
  }
  } else {?>
  
  <tr><td colspan="8" align="center"><b>No Record found.</b></td></tr>
  
  <?php }?>
  
</table>





</body>
</html>

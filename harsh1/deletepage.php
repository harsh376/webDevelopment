<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body topmargin="0">
	
    <h1>DELETE PAGE.</h1>
    
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
  
  <tr>
  	<td>Id</td>
    <td>Name</td>
  	<td>Father's Name</td>
    <td>Sex</td>
    <td>City</td>
    <td>Address</td>
    <td>Interests</td>
    
    

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
     
  </tr>
<?php
}
?>
</table>
<?php

mysql_close($con);

?>
    
	
    <br/><br/>
    
	<form name="frm" action="delete.php" method="post" onsubmit="return formValid();" enctype="multipart/form-data">
	
    	<div style="width:500px; height:100px; background-color:#EBEBEB;">
        
        	
            <div style="width:140px; height:60px; float:left; background-color:none; text-align:left; padding:0px 0px 0px 10px;">
            	<font style="color:#FF0000; font-weight:bold;">*</font>Enter the ID of the record to be deleted : 
            </div>
                     
            <div style="width:350px; height:60px; float:left; background-color:none;">
            	<input type="text" name="id" id="id" style="float:left;" />
            </div>
            
            <div style="width:240px; height:40px; float:left; background-color:none; padding:0px 10px 0px 0px;">
            	<input type="submit" name="submit" id="submit" value="Confirm" style="float:right; background-color:#990000; color:#CCCCCC; border:none;" />
            </div>
            
            <div style="width:240px; height:40px; float:left; background-color:none; padding:0px 0px 0px 10px;">
            	<input type="reset" name="reset" id="reset" value="Reset" style="float:left; background-color:#666666; color:#CCCCCC; border:none;"" />
            </div>
        
        </div>
    
    
    
	
	</form>




</body>
</html>

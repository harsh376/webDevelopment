<?php
session_start();
include("../configuration.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script language="javascript" type="text/javascript">

	function random1()
	{
		var r = Math.floor((Math.random()*10)+1);
		return r;
	}

</script>

</head>

<body>

<?php

$sqltest = " SELECT * FROM tbl_products ";
$restest = $db->Execute($sqltest) or die(mysql_error());
$totaltest = $restest->RecordCount();
$ct=0;

/*
while(!$restest->EOF)
{
	$products[$ct]=stripslashes($restest->fields["product_id"]);
	$ct++;
	$restest->MoveNext();
}

for($i=0; $i<$ct; $i++)
{
	echo $products[$i]."<br/>";
}
*/
?>


 <div style="width:800px; height:1000px; background-color:#000033; float:left;">		<!-- featured products div	-->
    
 	<div style="width:700px; background-color:#666666; height:1000px;">
        	
    	<br/><br/><font style="font-size:24px; float:left;">Featured Products</font><br/><br/><br/>

        <div style="width:209px; height:450px; background-color:#CCCCCC; float:left; ">
        	
        </div>
        
        <div style="width:209px; height:450px; background-color:#CCCCCC; float:left; margin-left:36px; ">
        </div>
        
        <div style="width:209px; height:450px; background-color:#CCCCCC; float:left; margin-left:36px; ">
        </div>
        
        <div style="width:209px; height:450px; background-color:#CCCCCC; float:left; ">
        </div>
        
        <div style="width:209px; height:450px; background-color:#CCCCCC; float:left; margin-left:36px; ">
        </div>
        
        <div style="width:209px; height:450px; background-color:#CCCCCC; float:left; margin-left:36px; ">
        </div>
   
   </div>
   
</div>     
           
</body>
</html>

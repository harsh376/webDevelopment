<?php
include ("../configuration.php");

$sqlval = " SELECT * FROM tbl_products ";
$resapp = $db->Execute($sqlval) or die(mysql_error());
$totalapp = $resapp->RecordCount();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="includes/jquery.js" type="text/javascript"></script>
<script language="javascript" src="includes/adminajax.js" type="text/javascript"></script>
</head>

<body>

<table width="300px" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="30%">Products</td>
    <td>
    	<select name="product" onchange="srcuser(this.value)">
			<?php
            while(!$resapp->EOF)
            {
            ?>
            
            <option value="<?php echo $resapp->fields["product_id"]; ?>"><?php echo stripslashes($resapp->fields["product_name"]); ?></option>
            
			<?php
            $resapp->MoveNext();
            }
            ?>
        </select>
    </td>
  </tr>
  <tr>
    <td colspan="2">
    	<div id="product_details">
        </div>
    </td>
  </tr>
  
</table>


</body>
</html>

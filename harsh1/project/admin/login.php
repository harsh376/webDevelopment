<?php
session_start();
include("../configuration.php");

$sqlval=" SELECT * FROM tbl_admin WHERE name='".$_REQUEST["name"]."' AND password='".$_REQUEST["password"]."' ";
$result= $db->Execute($sqlval);
$numrows=$result->RecordCount();

if($numrows)
{
	$_SESSION['id'] = $result->fields['id'];
	$_SESSION['name'] = $result->fields['name'];
	
	url_redirectindex('admin_home.php');
}

else
{
	url_redirectindex('index.php');
}
?>
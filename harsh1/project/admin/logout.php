<?php
session_start();
include('../configuration.php');
if(isset($_SESSION['name']) && !empty($_SESSION['id']))
{
	session_unregister($_SESSION['id']);
	session_unregister($_SESSION['name']);
	
	session_destroy();

	url_redirectindex('index.php');
	
}
?>
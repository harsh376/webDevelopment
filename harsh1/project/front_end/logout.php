<?php
session_start();
include('../configuration.php');
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
{
	session_unregister($_SESSION['user_id']);
	session_unregister($_SESSION['fname']);
	
	session_destroy();

	url_redirectindex('index.php');
	
}
?>
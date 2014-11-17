<?php
$con=mysql_connect("localhost","root","1a1b1c1d1e");

if(!$con)
{
	die("Could not connect".mysql_error());
}

mysql_select_db("harsh",$con);
?>
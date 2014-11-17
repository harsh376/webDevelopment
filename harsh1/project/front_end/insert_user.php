<?php
session_start();
include("../configuration.php");

$title = $_REQUEST["title"];
$fname = $_REQUEST["fname"];
$surname = $_REQUEST["surname"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
$dob = $_REQUEST["dob"];
$address = $_REQUEST["address"];
$postal_code = $_REQUEST["postal_code"];
$city = $_REQUEST["city"];
$state = $_REQUEST["state"];
$country = $_REQUEST["country"];
$phone = $_REQUEST["phone"];

$ins_emp = "INSERT INTO tbl_users(user_id,title,fname,surname,email,password,dob,address,postal_code,city,state,country,phone) VALUES('','".addslashes($title)."','".addslashes($fname)."','".addslashes($surname)."','".addslashes($email)."','".addslashes($password)."','".addslashes($dob)."','".addslashes($address)."','".addslashes($postal_code)."','".addslashes($city)."','".addslashes($state)."','".addslashes($country)."','".$phone."') ";

$ins_result = $db->Execute($ins_emp) or die(mysql_error());

if($ins_result)
{

$sqlapp1 = " SELECT * FROM tbl_users WHERE email='".$email."' AND password='".$password."' ";
$resapp1 = $db->Execute($sqlapp1) or die(mysql_error());
$total_usr  = $resapp1->RecordCount();

if($total_usr>0)
{
$_SESSION['user_id'] = $resapp1->fields['user_id'];
$_SESSION['fname'] = $resapp1->fields['fname'];
}
?>
<script language="javascript" type="text/javascript">
window.location="index.php";
</script>
<?php	
}
?>



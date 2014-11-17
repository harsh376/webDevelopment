<?php
session_start();
include("../configuration.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body topmargin="0">
	<center>
	<div style="width:1024px; height:800px; background-color:#E8E8E8;">
    
    
    	<div style="width:1004px; height:100px; background-color:#CCCCCC; text-align:left; padding:20px 0px 0px 20px;">
        	<h1>ADMIN PAGE<font color="#990000">.</font></h1>
        </div>
        <br/>
        <br/>
    
        <form name="frm_admin" id="frm_admin" action="login.php" method="post">
        
        <table width="1024px" border="0" style="background-color:none;" cellpadding="20px" cellspacing="0px">
	
    	    <tr>
        		<td width="15%">Name : </td>
        		<td><input type="text" name="name" id="name" /></td>
      		</tr>
      
      		<tr>
        		<td width="15%">Password : </td>
        		<td><input type="password" name="password" id="password" /></td>
      		</tr>
      		
            <tr>
        		<td></td>
        		<td><input type="submit" name="submit" id="submit" value="Login" style="float:left; background-color:#990000; color:#CCCCCC; border:none;" /></td>
      		</tr>
    	</table>
    
        </form>
    
    
    </div>
	</center>




</body>
</html>

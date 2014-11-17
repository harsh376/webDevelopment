<?php
session_start();
include('../configuration.php');
include("includes/common_function.php");
check_admlogin();

//===== All Approval List =========
$sqlapp = "select * from member order by company ";
$resapp = $db->Execute($sqlapp);
$totalapp  = $resapp->RecordCount();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>.te{text-align:justify;}</style>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<!--Menu seciton start-->
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-base.css" />
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-topbar.css" />
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-sidebar.css" />
<script type="text/javascript" src="ddlevelsfiles/ddlevelsmenu.js"></script>
<!-- Menu Section end-->

<script src="includes/jquery.js" type="text/javascript"></script>
<script language="javascript" src="includes/adminajax.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
function shregdet(incid)
{ 
	imgview=window.open("shregdet.php?incid="+incid,"Details",'height=400,width=600,resizable=1,scrollbars=1,screenX=400,screenY=100, menubar=1,fullscreen=1');
	
	if(window.focus)
	{
		imgview.focus();
	}
}

function funsrc()
{
	var srcval=document.getElementById('srcval').value;
	
	srcuser(srcval);
}

//===== delete country ============
function delcountry(incid)
{
	var srcval=document.getElementById('srcval').value;
	
	if (confirm('Are you sure, You want to delete this country.'))
	{ 
		//alert(deployid+'==='+storeunid+'==='+plan_date)
		deletecountry(incid,srcval);
	}
}

</script>
</head>
<body id="page1">
	<div class="main-extra">
		<div id="main">
			<!--header -->
			<?php //include("includes/header.php");?>
			<!--header end-->
			<div id="content">				
			<!-- Page body section -->	
            <table cellpadding="5" cellspacing="0" border="0" width="100%">
            <tr>
            <td height="30" valign="top" align="left" style="padding-left:10px;"><h2 style=" color:#060;">Blip Consultancy</h2></td>
            </tr>
            <tr><td><?php include("includes/topmenu.php")?><hr /></td></tr>
            <tr>
            <td align="center" valign="top" height="370">
          		<table cellpadding="2" cellspacing="0" border="0" width="100%">
                <tr bgcolor="#666666">
                <td height="30" style="color:#FFF">&nbsp;<b>Search</b> &nbsp;<input type="text" style="width:250px;" name="srcval" id="srcval"  />&nbsp;<input type="button" value="Go" name="btnsrc" onclick="funsrc();"  /> </td>
                <td align="right" style="padding-right:5px;">&nbsp;</td>
                </tr>
                <tr>
                <td colspan="2">
                <div id="srcid">
                	
                   </div> 
                </td>
                </tr>                
                </table>
            </td>
            </tr>           
            </table> 
            <!-- page body end -->
			
			</div>
			<!--footer -->
			<div id="footer">
				<div class="extra">
					<img src="images/page1-img9.jpg" alt="" class="phone" /><img src="images/extra-bg.jpg" alt="" /><strong> NCR Region +91-120-2771710</strong><img src="images/extra-bg.jpg" alt="" /><strong> Pune +44(0)12-2554-988</strong><img src="images/extra-bg.jpg" alt="" /><strong>New Jersey +44(0)12-2554-988</strong><img src="images/extra-bg.jpg" alt="" />
				</div>
				<div class="footer-menu">
					<ul>
						<li class="first active"><a href="index.html">Home</a></li>
						<li><a href="index-1.html">Company</a></li>
						<li><a href="index-2.html">Services</a></li>
						<li><a href="index-3.html">Collaboration Solutions</a></li>
						<li><a href="index-4.html">Partners</a></li>
						<li><a href="index-5.html">Contacts</a></li>
					</ul>
				</div>
			</div>
			<!--footer end-->
		</div>
	</div>
   
</body>
</html>
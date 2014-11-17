<?php
$dayarr=array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10,'11'=>11,'12'=>12,'13'=>13,'14'=>14,'15'=>15,'16'=>16,'17'=>17,'18'=>18,'19'=>19,'20'=>20,'21'=>21,'22'=>22,'23'=>23,'24'=>24,'25'=>25,'26'=>26,'27'=>27,'28'=>28,'29'=>29,'30'=>30,'31'=>31);

$monarr=array('01'=>"JAN",'02'=>"FEB",'03'=>"MAR",'04'=>"APR",'05'=>"MAY",'06'=>"JUN",'07'=>"JUL",'08'=>"AUG",'09'=>"SEP",'10'=>"OCT",'11'=>"NOV",'12'=>"DEC");

$qtyrate=array('0'=>'Rejected','1'=>'Poor','2'=>'Average','3'=>'Good','4'=>'Great','5'=>'Outstanding');

//============= Page url redirection function ==============
function urlredirect($url)
{
	if (headers_sent()) {
		echo "<script>document.location.href='$url';</script>\n";
	} else {
		@ob_end_clean(); // clear output buffer
		header( 'HTTP/1.1 301 Moved Permanently' );
		header( "Location: ". $url );
	}
}
//======== function check login user =======
function check_userlogin_menu()
{
	global $db;
	
	if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id']))
	{
		url_redirect('index.php');
	}
	else
	{
		//echo "<pre>";
		//print_r($_SERVER[]);
		//echo substr($_SERVER["SCRIPT_NAME"],11);
		//die;
		
		if($_SERVER["SERVER_NAME"]=="localhost")
				$urlname=substr($_SERVER["SCRIPT_NAME"],11);
		else
				$urlname=substr($_SERVER["SCRIPT_NAME"],1);
				
		//========= runtime check=========
		$sqlusr = "select * from member where uniqID ='".$_SESSION['uniqID']."'";		
		$rowusr = $db->Execute($sqlusr);
		
		$sqlchk = "select * from tbl_menudetails where accessby like '%".$rowusr->fields['access_id']."%'";
		$sqlchk .=" and menu_url='".$urlname."' and  status ='0'";
		$rowcheck = $db->Execute($sqlchk);
		
		$totalchk= $rowcheck->RecordCount();
		
		if($totalchk>0)
		{			
		}
		else
		{
			if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
			{
				session_unregister($_SESSION['user_id']);
				session_unregister($_SESSION['access_id']);
				session_unregister($_SESSION['username']);
				session_unregister($_SESSION['name']);
				session_unregister($_SESSION['uniqID']);	
				session_unregister($_SESSION['status']);
				
				session_destroy();
			}
			url_redirect('index.php');
		}
		
	}
}

//======== function check login user =======
function check_admlogin()
{
	global $db;
	
	if(!isset($_SESSION['cnt_id']) && empty($_SESSION['cnt_id']))
	{
		url_redirectindex('index.php');
	}	
}


//============ Country  Name ==========
function showuser_name($reqid)
{
	global $db;
	$inch_qry = "select * from  member where uniqID ='".$reqid."' ";
	$resch = $db->Execute($inch_qry);
	return $resch->fields["first"]." ".$resch->fields["last"];
}

function showcompany_name($reqid)
{
	global $db;
	$inch_qry = "select * from  member where uniqID ='".$reqid."' ";
	$resch = $db->Execute($inch_qry);
	return $resch->fields["company"];
}

function show_usercode($reqid)
{
	global $db;
	$inch_qry = "select * from  member where uniqID ='".$reqid."' ";
	$resch = $db->Execute($inch_qry);
	return $resch->fields["username"];
}

function show_useremail($reqid)
{
	global $db;
	$inch_qry = "select * from  member where uniqID ='".$reqid."' ";
	$resch = $db->Execute($inch_qry);
	return $resch->fields["email"];
}

function show_usercontno($reqid)
{
	global $db;
	$inch_qry = "select * from  member where uniqID ='".$reqid."' ";
	$resch = $db->Execute($inch_qry);
	return $resch->fields["home"];
}



function prjname_show($reqid)
{
	global $db;
	$inch_qry = "select * from  tbl_post_project where post_prj_id ='".$reqid."' ";
	$resch = $db->Execute($inch_qry);
	return $resch->fields["project_name"];
}

//============ Country  Name ==========
function country_name($reqid)
{
	global $db;
	$inch_qry = "select * from  tbl_country where country_id ='".$reqid."' ";
	$resch = $db->Execute($inch_qry);
	return $resch->fields["country_name"];
}

//============ Country  Name ==========
function state_name($reqid)
{
	global $db;
	$inch_qry = "select * from  tbl_state where state_id ='".$reqid."' ";
	$resch = $db->Execute($inch_qry);
	return $resch->fields["state_name"];
}

//============ Country  Name ==========
function city_name($reqid)
{
	global $db;
	$inch_qry = "select * from  tbl_city where city_id ='".$reqid."' ";
	$resch = $db->Execute($inch_qry);
	return $resch->fields["city_name"];
}

//========= show total not approved college ===============
function showtotcollege()
{
	global $db;
	
	$sql = "SELECT * from member where approved_status='1' and 	access_id='4'";
	$row = $db->Execute($sql);
	$totrec= $row->RecordCount();
	
	return $totrec;
}

//========= show total not approved company ===============
function showtotcompany()
{
	global $db;
	
	$sql = "SELECT * from member where approved_status='1' and 	access_id='5'";
	$row = $db->Execute($sql);
	$totrec= $row->RecordCount();
	
	return $totrec;
}

//========= show total not approved Freelancer ===============
function showtotfreelancer()
{
	global $db;
	
	$sql = "SELECT * from member where approved_status='1' and 	access_id='7'";
	$row = $db->Execute($sql);
	$totrec= $row->RecordCount();
	
	return $totrec;
}

//========= show total not approved Freelancer ===============
function industry_type($reqid)
{
	global $db;
	$inch_qry = "select * from  tbl_industry_type where ind_id ='".$reqid."' ";
	$resch = $db->Execute($inch_qry);
	return $resch->fields["industry_name"];
}



//================= Only merchandiser list ==========================================
function getmygeolist (&$stores, $pid) 
{
	global $db;
	
	$rowchk = $db->Execute("SELECT * FROM geography WHERE  Id = '".$pid."'");

	if($rowchk->fields["gType"]==6)
	{
		$stores[]="'".$rowchk->fields["gName"]."'";
	}
	else
	{
		$row = $db->Execute("SELECT * FROM geography WHERE  gParentId = '".$pid."'");
		while (!$row->EOF) 
		{	
			
			$rowacc = $db->Execute("SELECT * FROM geography WHERE Id = '".$row->fields["Id"]."' LIMIT 1 ");
			
			if ($rowacc->fields["gType"]==6)
				$stores[]="'".$row->fields["gName"]."'";		
			else 
			getmygeolist($stores,$row->fields["Id"]);
			
			$row->MoveNext();
		}
	}
}

//======= Geo section ============


//======== parent to parent name ===========
function show_ppname($argid)
{
	global $db;
	$sql = "SELECT * from geography where Id ='".$argid."'";
	$row = $db->Execute($sql);	
	
	
	$sqlpp = "SELECT * from geography where Id ='".$row->fields['gParentId']."'";
	$rowpp = $db->Execute($sqlpp);	
	
	return $rowpp->fields['gName'];
}

//======== parent to parent to parent name ===========
function ret_pppid($argid)
{
	global $db;
	$sql = "SELECT * from geography where Id ='".$argid."'";
	$row = $db->Execute($sql);	
	
	$sqlpp = "SELECT * from geography where Id ='".$row->fields['gParentId']."'";
	$rowpp = $db->Execute($sqlpp);	
	
	$sqlppp = "SELECT * from geography where Id ='".$rowpp->fields['gParentId']."'";
	$rowppp = $db->Execute($sqlppp);	
	
	return $rowppp->fields['Id'];
}

//======== parent to parent to parent name ===========
function ret_ppid($argid)
{
	global $db;
	$sql = "SELECT * from geography where Id ='".$argid."'";
	$row = $db->Execute($sql);	
	
	$sqlpp = "SELECT * from geography where Id ='".$row->fields['gParentId']."'";
	$rowpp = $db->Execute($sqlpp);	
		
	return $rowpp->fields['gParentId'];
}
//========== return parent id of geography ============ 
function ret_parentid($pid)
{
	global $db;
	$sql = "SELECT * from geography where Id ='".$pid."'";
	$row = $db->Execute($sql);	
	
	return $row->fields['gParentId'];
}









//=========== take uniqID and return store name or member name ============
function store_memname($pid)
{
	global $db;
	$sql = "SELECT first,middle,last,username,access_id,comany from member where uniqID='".$pid."'";
	$row = $db->Execute($sql);	
	
	if($row->fields['access_id']==6)
	{
		return $row->fields['company'];
	}
	else
	{
		if(empty($row->fields['middle']))
		{
			return $row->fields['first']." ".$row->fields['last']." (".$row->fields['username'].")";
		}
		else
		{
			return $row->fields['first']." ".$row->fields['middle']." ".$row->fields['last']." (".$row->fields['username'].")";
		}
	}
}
//========= show merchandizer parent name ==========================================
function getmerchandizerowner ($uniqID) 
{
	global $db;
	$sqlqry="SELECT first,middle,last,username FROM member ";
	$sqlqry.=" WHERE  uniqID = (select owner from orgstructure where member='".$uniqID."')";
	$row = $db->Execute($sqlqry);
	
	if(empty($row->fields['middle']))
	{
		return $row->fields['first']." ".$row->fields['last']." (".$row->fields['username'].")";
	}
	else
	{
		return $row->fields['first']." ".$row->fields['middle']." ".$row->fields['last']." (".$row->fields['username'].")";
	}
}

//================= Only merchandiser list ==========================================
function getmerchandizercounter(&$totcount,$uniqID) 
{
	global $db;
	$row = $db->Execute("SELECT member FROM orgstructure WHERE  owner = '".$uniqID."'");
	
	while (!$row->EOF) 
	{	
		//echo $row->fields["member"];
		
		$rowacc = $db->Execute("SELECT access_id,first,last FROM member WHERE uniqID = '".$row->fields["member"]."' LIMIT 1 ");
		if ($rowacc->fields["access_id"]==7)
		{
			$totcount=$totcount+1;
			
		}
		else 
		getmerchandizercounter($totcount,$row->fields["member"]);
		
		$row->MoveNext();
	}
	
}



//================= Only merchandiser list ==========================================
function getmyonlymerchandizers (&$stores, $uniqID) 
{
	global $db;
	$row = $db->Execute("SELECT member FROM orgstructure WHERE  owner = '".$uniqID."'");
	
	while (!$row->EOF) 
	{	
		//echo $row->fields["member"];
		
		$rowacc = $db->Execute("SELECT access_id,first,last FROM member WHERE uniqID = '".$row->fields["member"]."' LIMIT 1 ");
		if ($rowacc->fields["access_id"]==7)
		$stores[] = $row->fields["member"];		
		else 
		getmyonlymerchandizers($stores,$row->fields["member"]);
		
		$row->MoveNext();
	}
}

//==================== get all member along with merchandizer list ========================
function getmymerchandizers (&$stores, $uniqID) 
{
	global $db;
	$row = $db->Execute("SELECT member FROM orgstructure WHERE  owner = '".$uniqID."'");
	
	while (!$row->EOF) 
	{	
		//echo $row->fields["member"];
		
		$rowacc = $db->Execute("SELECT access_id,first,last FROM member WHERE uniqID = '".$row->fields["member"]."' LIMIT 1 ");
		if ($rowacc->fields["access_id"]==7)
		$stores[] = $row->fields["member"];
		else if($rowacc->fields["access_id"]==2 || $rowacc->fields["access_id"]==8)
		{
			$stores[] = $row->fields["member"];
			getmymerchandizers($stores,$row->fields["member"]);
		}		
		else 
		getmymerchandizers($stores,$row->fields["member"]);
		
		$row->MoveNext();
	}
}
//=========== Get my allmerchandizer =====================
//=============== Show All level result ==================
function getmyallmerchandizer (&$stores, $uniqID) 
{
	global $db;
	$row = $db->Execute("SELECT member FROM orgstructure WHERE  owner = '".$uniqID."'");
	
	while (!$row->EOF) 
	{	
		//echo $row->fields["member"];
		
$rowacc = $db->Execute("SELECT access_id,first,last FROM member WHERE uniqID = '".$row->fields["member"]."' and active=0 LIMIT 1 ");
		
		if ($rowacc->fields["access_id"]==7)
			$stores .= "'".$row->fields["member"]."',";			
		else 
		getmyallmerchandizer($stores,$row->fields["member"]);
		
		$row->MoveNext();
	}
}

//=============== Show All level result ==================
function getmyall (&$stores, $uniqID) 
{
	global $db;
	$row = $db->Execute("SELECT member FROM orgstructure WHERE  owner = '".$uniqID."'");
	
	while (!$row->EOF) 
	{	
		//echo $row->fields["member"];
		
		$rowacc = $db->Execute("SELECT access_id,first,last FROM member WHERE uniqID = '".$row->fields["member"]."' LIMIT 1 ");
		
		if ($rowacc->fields["access_id"]==6)
			$stores .= "'".$row->fields["member"]."',";
		else if ($rowacc->fields["access_id"]==7)
		{
			$stores .= "'".$row->fields["member"]."',";
			getmyall($stores,$row->fields["member"]);
		}
		else if($rowacc->fields["access_id"]==2 || $rowacc->fields["access_id"]==8)
		{
			$stores .= "'".$row->fields["member"]."',";
			getmyall($stores,$row->fields["member"]);
		}		
		else 
		getmyall($stores,$row->fields["member"]);
		
		$row->MoveNext();
	}
}

//=============== Show all store All level result ==================
function getmyallstore (&$stores, $uniqID) 
{
	global $db;
	$row = $db->Execute("SELECT member FROM orgstructure WHERE  owner = '".$uniqID."'");
	
	while (!$row->EOF) 
	{	
		$rowacc = $db->Execute("SELECT access_id,first,last FROM member WHERE uniqID = '".$row->fields["member"]."' LIMIT 1 ");
		
		if ($rowacc->fields["access_id"]==6)
			$stores .= "'".$row->fields["member"]."',";
		else 
		getmyallstore($stores,$row->fields["member"]);
		
		$row->MoveNext();
	}
}



//=========== My route plan to show name according to uniqID ==============
function show_name($pid)
{
	global $db;
	$sql = "SELECT first,middle,last,username from member where uniqID='".$pid."'";
	$row = $db->Execute($sql);	
	
	
	if(empty($row->fields['middle']))
	{
		return $row->fields['first']." ".$row->fields['last']." (".$row->fields['username'].")";
	}
	else
	{
		return $row->fields['first']." ".$row->fields['middle']." ".$row->fields['last']." (".$row->fields['username'].")";
	}
}


//=================== Taker merchandizer id and show name city===========
//========= show user name only ===================
function show_namecity($pid)
{
	global $db;
	$sql = "SELECT first,middle,last,city from member where uniqID='".$pid."'";
	$row = $db->Execute($sql);	
	
	
	if(empty($row->fields['middle']))
	{
		return $row->fields['first']." ".$row->fields['last']." (".$row->fields['city'].")";
	}
	else
	{
		return $row->fields['first']." ".$row->fields['middle']." ".$row->fields['last']." (".$row->fields['city'].")";
	}
}
//=========== Take uniqID and return parent UniqId======




//============ return region ===============
function show_region($pid)
{
	global $db;
	$sql = "SELECT region from member where uniqID='".$pid."'";
	$row = $db->Execute($sql);
	
	return $row->fields['region'];
}
//=========== return city =================
function show_city($pid)
{
	global $db;
	$sql = "SELECT city from member where uniqID='".$pid."'";
	$row = $db->Execute($sql);
	
	return $row->fields['city'];
}
//====== return code ====
function show_code($pid)
{
	global $db;
	$sql = "SELECT username from member where uniqID='".$pid."'";
	$row = $db->Execute($sql);
	
	return $row->fields['username'];
}

//====== return code ====
function show_storename($pid)
{
	global $db;
	$sql = "SELECT company from member where uniqID='".$pid."'";
	$row = $db->Execute($sql);
	
	return $row->fields['company'];
}

//========= return deployment status ======
function coverstatus($pid)
{
	global $db;
	$sql = "SELECT * from prosell_issue_posm_rootplan where rootplan_id='".$pid."'";
	$row = $db->Execute($sql);
	$gstatus  = $row->RecordCount();
	if($gstatus>0)
		$retstatus=1;
	else
		$retstatus=2;
	
	return $retstatus;
}

//========= return deployment status ======
function reportingdatetime($pid)
{
	global $db;
	$sql = "SELECT * from prosell_issue_posm_rootplan where rootplan_id='".$pid."'";
	$row = $db->Execute($sql);
	$gstatus  = $row->RecordCount();
	
	return $row->fields['last_updated'];
}

//=======show store category ===========
function show_storecategory($pid)
{
	global $db;
	$sql = "SELECT rds from prosell_store_extension where uniqID='".$pid."'";
	$row = $db->Execute($sql);
	
	return $row->fields['rds'];
}


//===========POSM full name with category and subcatgory ============
function showposmdet($childposm)
{
	global $db;
	$sql_posm="SELECT * FROM `prosell_posm_master` WHERE id='".$childposm."'";
	$row_posm = $db->Execute($sql_posm);
	//$posmchild=$row_posm->fields["posm_name"];
	
	/*$sql_parent="SELECT * FROM `prosell_posm_master` WHERE id='".$row_posm->fields["posm_subcategory"]."'";
	$row_parent = $db->Execute($sql_parent);
	$posmmain=$row_parent->fields["posm_name"];*/
	
	return $row_posm->fields["posm_model"]." (".$row_posm->fields["posm_name"].")";
	
}

//========== show POsm name ==================
function showposmname($childposm)
{
	global $db;
	$sql_posm="SELECT * FROM `prosell_posm_master` WHERE id='".$childposm."'";
	$row_posm = $db->Execute($sql_posm);
	$posmchild=$row_posm->fields["posm_name"];
	
	return $posmchild;
}
//=========posm model name ==========
function showposmmodel($childposm)
{
	global $db;
	$sql_posm="SELECT * FROM `prosell_posm_master` WHERE id='".$childposm."'";
	$row_posm = $db->Execute($sql_posm);
	$posmchild=$row_posm->fields["posm_model"];
	
	return $posmchild;
}

//============ Change route plan cell color =======================
function formatBoolean($value)
{
	if($value==1)
	{
		$value='<span style="background-color:#0000CC">&nbsp;&nbsp;&nbsp;&nbsp;</span>';
	}
	else if($value==2 )
	{
		$value='<span style="background-color:#FF5959">&nbsp;&nbsp;&nbsp;&nbsp;</span>';
	}
	else
	{
		$value='<span style="background-color:#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;</span>';
	}
	
	return $value;
}
//============= take id and return UNIQID ====================
function show_unid($pid)
{
	global $db;
	$sql = "SELECT uniqID from member where id='".$pid."'";
	$row_unid = $db->Execute($sql);
	
	return $row_unid->fields["uniqID"];
}
?>
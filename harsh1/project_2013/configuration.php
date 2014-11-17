<?php
include_once('adodb/adodb.inc.php');
$db = ADONewConnection('mysql');
$active=6;

if($active==1)
{
	$server = 'localhost';
	$user = 'dynamica_academy';
	$password = 'academy@124';
	$database = 'dynamica_academy';
}
else if($active==6)
{
	$server = 'localhost';
	$user = 'root';
	$password = '';
	$database = '2013';
	//$database = 'new_channeledge';
}


$db->Connect($server,$user,$password,$database);





define('PROJECT_TITLE','Demo Website');


$strsitename='www.aipl.com';
//======== set bydefault time zone is Asia Calcutta ======
date_default_timezone_set('Asia/Calcutta');

function generateUniqueId()
{
	//set the random id length
	$random_id_length = 20;
	//generate a random id encrypt it and store it in $rnd_id
	$rnd_id = crypt(uniqid(rand(),1));
	//to remove any slashes that might have come
	$rnd_id = strip_tags(stripslashes($rnd_id));
	//Removing any . or / and reversing the string
	$rnd_id = str_replace(".","",$rnd_id);
	$rnd_id = strrev(str_replace("/","",$rnd_id));
	//finally I take the first 10 characters from the $rnd_id
	$rnd_id = substr($rnd_id,0,$random_id_length);
	$rnd_id = str_replace( "$", "",$rnd_id ); // Remove $ if present from uniqID 
	return $rnd_id;
}

//====== this is a project class which include all functionality ==========
/*include_once('includes/commonclass.php');
$com=new commondevcls;*/

if($active==6)
{
	$imgpaths="http://".$_SERVER['HTTP_HOST']."/dynamic/";
	$incdir=$_SERVER["DOCUMENT_ROOT"]."/dynamic/";
	
}
else
{
	$imgpaths="http://".$_SERVER['HTTP_HOST']."/";
	$incdir=$_SERVER["DOCUMENT_ROOT"]."/";
}

//echo $incdir.'includes/commonclass.php';
/*include_once($incdir.'includes/commonclass.php');
$com=new commondevcls;*/



//======== Pagination limitation =========
$limit=10;

//$pathdir=dirname($_SERVER['HTTP_REFERER']);
/*include_once('adodb/adodb.inc.php');
$db = ADONewConnection('mysql');
$server = 'localhost';
$user = 'root';
$password = '1a1b1c1d1e';
$database = 'new_radar';
$db->Connect($server,$user,$password,$database);*/

//============ User type check for radar start ==================





//================== Project for radar end  =======================

function cleannew($Raw)
{ 
	$Raw = trim($Raw);
	$RemoveChars = array( "([\40])" , "([^a-zA-Z0-9@ ])", "(-{2,})" ); 
	$ReplaceWith = array(" "); 
	return preg_replace($RemoveChars, $ReplaceWith, $Raw); 
}

//======== Clean special character from string  =======
function cleantext($string) 
{
	$string = strtolower($string);
	$string = ereg_replace('([^A-Za-z0-9]+|\&[A-Za-z]+;|\<(/?[^\>]+)\>)+',' ',$string);
	$string = ereg_replace('[ ]+',' ',$string);
	$array = explode(" ",$string);
	//sort($array);
	//$array = array_unique($array);
	//$array = array_diff($array,$disabledwords);
	$string = implode(" ",$array);
	return $string;
}

function cleantextval($string,$disabledwords) {
$string = strtolower($string);
$string = ereg_replace('([^A-Za-z0-9 ]+|\&[A-Za-z]+;|\<(/?[^\>]+)\>)+',' ',$string);
$string = ereg_replace('[ ]+',' ',$string);
$array = explode(" ",$string);
sort($array);
$array = array_unique($array);
//$array = array_diff($array,$disabledwords);
$string = implode(" ",$array);
return $string;
}

//======= Redirect to index page ==============
function url_redirectindex($url)
{
	if (headers_sent()) {
		echo "<script>document.location.href='$url';</script>\n";
	} else {
		@ob_end_clean(); // clear output buffer
		header( 'HTTP/1.1 301 Moved Permanently' );
		header( "Location: ". $url );
	}
}
?>

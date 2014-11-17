<?php
session_start();
##################################################################################################
# Channelplay (P) Ltd.. -	Client name (i.e., HPN)
# SCRIPT/FILE	:	welcome.php
# AUTHOR		:	Channelplay (P) Ltd.
# CREATED DATE	:   March 30-2009
# DEVELOPED BY	:	Anil kumar	
# COPYRIGHT Channelplay (P) Ltd., 2008 ALL RIGHTS RESERVED
#################################################################################################
//********************* These section of include files *******************************************
include("../config_path.php");  // Application variable and path setting
include($incprjdir."includes/php_devfunction.php");  // All common function is here
/*************************************************************************************************/
check_userlogin(); //check user login status


	$ins_mkvisit = "insert into ".MKVISITTRACKER." set		
			tracker_date 		= '".date("Y-m-d")."',
			usr_uniqID 			= '".$_SESSION['uniqID']."',
			str_uniqID			='".$_REQUEST["uniID"]."',
			soft_visible_share	='".$_REQUEST["softselbrand"]."',
			hard_brand_share	='".$_REQUEST["hardselbrand"]."',
			best_merch_qty		='".$_REQUEST["bestselbrand"]."', 
			retailer_discussion ='".$_REQUEST["retailer_discuss"]."',
			action_item 		= '".$_REQUEST["act_item"]."',			
			front_photo 		=''";
				
		/*echo "<pre>";
		print_r($ins_mkvisit);
		die;*/
		
	$ins_result = $db->Execute($ins_mkvisit) or die(mysql_error());
	$id=mysql_insert_id();
	if($ins_result)
	{
		$up_store = "update member set 
					company 		= '".$_REQUEST["storename"]."',
					email 			= '".$_REQUEST["email"]."',
					home 			= '".$_REQUEST["phone"]."',
					full_address 	= '".$_REQUEST["full_address"]."',
					city 			= '".$_REQUEST["city"]."'
					where uniqID='".$_REQUEST["uniID"]."'";
				
			/*echo "<pre>";
			print_r($up_store);
			die;*/
		$ins_result = $db->Execute($up_store) or die(mysql_error());
		
		//=========== Update activity image  ====================
		$sqlsrc=" update ".MKVISITIMAGE." set
					mkvisit_id ='".$id."'
					where  session_val='".session_id()."' and uploadedby='".$_SESSION["uniqID"]."' and mkvisit_id='0' ";
		
		$row_src = $db->Execute($sqlsrc);
		
		
		
		echo "500";
	}
	else
	{
		echo "501";
	}
		
?>

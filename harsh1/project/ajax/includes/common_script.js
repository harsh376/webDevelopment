// JavaScript Document
//======== check valid email ===========
function isEmail (value)
{
	var theStr=value;
	var atIndex = theStr.indexOf('@');
	var dotIndex = theStr.indexOf('.', atIndex);
	var flag = true;
	theSub = theStr.substring(0, dotIndex+1)

	if ((atIndex < 1)||(atIndex != theStr.lastIndexOf('@'))||(dotIndex < atIndex + 2)||(theStr.length <= theSub.length))
	{
		//alert("Invalid E-mail ID");
		flag = false;
	}
	else
	{ 
		flag = true;
	}
	return(flag);
}

//========= to check special character =========
function ischeckspecial(strfield)
{
	var iChars = "%^&*()+=-[]\\\';,./{}|\":<>? ";
	//var usrval="document.regfrm."+strfield+".value";
	
	//alert(usrval);
	for (var i = 0; i < strfield.length; i++)
	{
		if (iChars.indexOf(strfield.charAt(i)) != -1)
		{		
			return false;
		}
		
	}
	return true;
}

//======== To trim the user input value =======
function trim(inputString)
{
	inputString=inputString.replace(/^\s+/g,"");
	inputString=inputString.replace(/\s+$/g,"");
	return inputString;
}

//========= only integer value allow====
function isInteger(s)
{   var i;
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character is number.
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}

//======== Show message ==================
var REGISTRATION_STU = {

  cmpname_un: 'Full Name should not be blank.',
  cmpemail_un: 'Email should not be blank.',
  cmpemail_ok: 'Please enter correct email.',
  cmpemail_cnf: 'Email and confirm email should be same.',
  cmp_namecnf: 'Company name should not be blank.',
  cmp_industry: 'Please select company industry.',
  cmp_since: 'Please select company since.',
  cmp_profile: 'Company profile should not be blank.',
  cmp_add: 'Company address should not be blank.',
  cmp_mobile: 'Mobile no. should not be blank.',
  cmp_mobile_num: 'Mobile no. should be number only.',
  cmp_country: 'Please select country.',
  cmp_city: 'City should not be blank.',
  cmp_zone: 'Zone should not be blank.',
  cmp_pincode: 'Pin Code should not be blank.',
  cmpsec_un: 'Security Code should not be blank.',
  cmpsec_ok: 'Security Code should be correct.',
    
  end: 0
};

//========== Company registration validation ============
function cmpnameval()
{
	var cmpfulname = trim(document.frmcmpreg.cmpfulname.value);
  if(trim(cmpfulname)=="")
	{
		 document.getElementById("namecmp").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmpname_un;
	}
	else
	{
		document.getElementById("namecmp").innerHTML = "";
	}
	
}

function cmpemailval()
{
	var cmpemail = trim(document.frmcmpreg.cmpemail.value);
  if(trim(cmpemail)=="")
	{
		 document.getElementById("emailcmp").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmpemail_un;
	}
	else if(!isEmail(cmpemail))
	{
		 document.getElementById("emailcmp").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmpemail_ok;
	}
	else
	{
		document.getElementById("emailcmp").innerHTML = "";
	}
	
}

function cmpcnfemail()
{
	var cmpemail = trim(document.frmcmpreg.cmpemail.value);
	var confemail = trim(document.frmcmpreg.confemail.value);
  if(cmpemail!=confemail)
	{
		 document.getElementById("cnfemailcmp").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmpemail_cnf;
	}	
	else
	{
		document.getElementById("cnfemailcmp").innerHTML = "";
	}
	
}

function cmp_nameval()
{
	var cmp_name = trim(document.frmcmpreg.cmp_name.value);
  if(trim(cmp_name)=="")
	{
		 document.getElementById("cmp_namecmp").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmp_namecnf;
	}
	else
	{
		document.getElementById("cmp_namecmp").innerHTML = "";
	}
	
}


function validcmpindustry()
{
	var cmpindustry = trim(document.frmcmpreg.cmpindustry.value);
  if(trim(cmpindustry)=="")
	{
		 document.getElementById("cmp_industry").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmp_industry;
	}
	else
	{
		document.getElementById("cmp_industry").innerHTML = "";
	}
	
}

function validcmpsince()
{
	var cmpsince = trim(document.frmcmpreg.cmpsince.value);
  if(trim(cmpsince)=="")
	{
		 document.getElementById("cmp_since").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmp_since;
	}
	else
	{
		document.getElementById("cmp_since").innerHTML = "";
	}
	
}

function validcmpprofile()
{
	var cmprofile = trim(document.frmcmpreg.cmprofile.value);
  if(trim(cmprofile)=="")
	{
		 document.getElementById("cmp_profile").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmp_profile;
	}
	else
	{
		document.getElementById("cmp_profile").innerHTML = "";
	}
	
}

function validcmpadd()
{
	var cmpadd = trim(document.frmcmpreg.cmpadd.value);
  if(trim(cmpadd)=="")
	{
		 document.getElementById("cmp_add").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmp_add;
	}
	else
	{
		document.getElementById("cmp_add").innerHTML = "";
	}
	
}


function cmpmobileno()
{
	var mobileno = trim(document.frmcmpreg.mobileno.value);
  if(trim(mobileno)=="")
	{
		 document.getElementById("cmp_mob").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmp_mobile;
	}
	else if(isNaN(mobileno))
	{
		document.getElementById("cmp_mob").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmp_mobile_num;
	}
	else
	{
		document.getElementById("cmp_mob").innerHTML = "";
	}
	
}



function validcmpcounty()
{
	var countrycmp = trim(document.frmcmpreg.countrycmp.value);
  if(trim(countrycmp)=="")
	{
		 document.getElementById("cmp_country").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmp_country;
	}
	else
	{
		document.getElementById("cmp_country").innerHTML = "";
	}
	
}

function citycmp()
{
	var cmpcity = trim(document.frmcmpreg.cmpcity.value);
  if(trim(cmpcity)=="")
	{
		 document.getElementById("cmp_city").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmp_city;
	}
	else
	{
		document.getElementById("cmp_city").innerHTML = "";
	}
	
}

function zonecmp()
{
	var cmpzone = trim(document.frmcmpreg.cmpzone.value);
  if(trim(cmpzone)=="")
	{
		 document.getElementById("cmp_zone").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmp_zone;
	}
	else
	{
		document.getElementById("cmp_zone").innerHTML = "";
	}
	
}


function pincodecmp()
{
	var cmppincode = trim(document.frmcmpreg.cmppincode.value);
  if(trim(cmppincode)=="")
	{
		 document.getElementById("cmp_pincode").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmp_pincode;
	}
	else
	{
		document.getElementById("cmp_pincode").innerHTML = "";
	}
	
}


function seccodecmp()
{
	var empseccode = trim(document.frmcmpreg.empseccode.value);
	var cmpcap_code = document.getElementById('cmpcap_code').value;
	//alert(empseccode +'----'+cmpcap_code);
  if(trim(empseccode)=="")
	{
		 document.getElementById("cmp_secode").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmpsec_un;
	}
	/*else if(empseccode==cmpcap_code)
	{
		 document.getElementById("cmp_secode").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmpsec_ok;
	}*/
	else
	{
		document.getElementById("cmp_secode").innerHTML = "";
	}
	
}

/*============== Consultants validation ========*/

//======== Show message ==================
var CONSUL_MSG = {

  consname_un: 'Full Name should not be blank.',
  consemail_un: 'Email should not be blank.',
  consemail_ok: 'Please enter correct email.',
  consemail_cnf: 'Email and confirm email should be same.',
  cons_namecnf: 'Consultant name should not be blank.',
  cons_industry: 'Please select company industry.',
  cons_since: 'Please select company since.',
  cons_profile: 'Consultant profile should not be blank.',
  cons_add: 'Consultant address should not be blank.',
  cons_mobile: 'Mobile no. should not be blank.',
  cons_mobile_num: 'Mobile no. should be number only.',
  cons_country: 'Please select country.',
  cons_city: 'City should not be blank.',
  cons_zone: 'Zone should not be blank.',
  cons_pincode: 'Pin Code should not be blank.',
  conssec_un: 'Security Code should not be blank.',
  conssec_ok: 'Security Code should be correct.',
    
  end: 0
};

//========== Company registration validation ============
function consnameval()
{
	var consfulname = trim(document.frmconsreg.consfulname.value);
  if(trim(consfulname)=="")
	{
		 document.getElementById("namecons").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + CONSUL_MSG.consname_un;
	}
	else
	{
		document.getElementById("namecons").innerHTML = "";
	}
	
}

function consemailval()
{
	var consemail = trim(document.frmconsreg.consemail.value);
  if(trim(consemail)=="")
	{
		 document.getElementById("emailcons").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + CONSUL_MSG.consemail_un;
	}
	else if(!isEmail(consemail))
	{
		 document.getElementById("emailcons").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + CONSUL_MSG.consemail_ok;
	}
	else
	{
		document.getElementById("emailcons").innerHTML = "";
	}
	
}

function conscnfemail()
{
	var consemail = trim(document.frmconsreg.consemail.value);
	var consfemail = trim(document.frmconsreg.consfemail.value);
  if(consemail!=consfemail)
	{
		 document.getElementById("cnfemailcons").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + CONSUL_MSG.consemail_cnf;
	}	
	else
	{
		document.getElementById("cnfemailcons").innerHTML = "";
	}
	
}

function cons_nameval()
{
	var cons_name = trim(document.frmconsreg.cons_name.value);
  if(trim(cons_name)=="")
	{
		 document.getElementById("cons_namecmp").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + CONSUL_MSG.cons_namecnf;
	}
	else
	{
		document.getElementById("cons_namecmp").innerHTML = "";
	}
	
}


function validconsindustry()
{
	var consindustry = trim(document.frmconsreg.consindustry.value);
  if(trim(consindustry)=="")
	{
		 document.getElementById("cons_industry").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + CONSUL_MSG.cons_industry;
	}
	else
	{
		document.getElementById("cons_industry").innerHTML = "";
	}
	
}

function validconssince()
{
	var conssince = trim(document.frmconsreg.conssince.value);
  if(trim(conssince)=="")
	{
		 document.getElementById("cons_since").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + CONSUL_MSG.cons_since;
	}
	else
	{
		document.getElementById("cons_since").innerHTML = "";
	}
	
}

function validcmpprofile()
{
	var cmprofile = trim(document.frmconsreg.cmprofile.value);
  if(trim(cmprofile)=="")
	{
		 document.getElementById("cmp_profile").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + CONSUL_MSG.cmp_profile;
	}
	else
	{
		document.getElementById("cmp_profile").innerHTML = "";
	}
	
}

function validconsadd()
{
	var consadd = trim(document.frmconsreg.consadd.value);
  if(trim(consadd)=="")
	{
		 document.getElementById("cons_add").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + CONSUL_MSG.cons_add;
	}
	else
	{
		document.getElementById("cons_add").innerHTML = "";
	}
	
}


function consmobileno()
{
	var mobilenocons = trim(document.frmconsreg.mobilenocons.value);
  if(trim(mobilenocons)=="")
	{
		 document.getElementById("cons_mob").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + CONSUL_MSG.cons_mobile;
	}
	else if(isNaN(mobilenocons))
	{
		document.getElementById("cons_mob").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + CONSUL_MSG.cons_mobile_num;
	}
	else
	{
		document.getElementById("cons_mob").innerHTML = "";
	}
	
}



function validconscounty()
{
	var countrycons = trim(document.frmconsreg.countrycons.value);
  if(trim(countrycons)=="")
	{
		 document.getElementById("cons_country").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + CONSUL_MSG.cons_country;
	}
	else
	{
		document.getElementById("cons_country").innerHTML = "";
	}
	
}

function citycons()
{
	var conscity = trim(document.frmconsreg.conscity.value);
  if(trim(conscity)=="")
	{
		 document.getElementById("cons_city").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + CONSUL_MSG.cons_city;
	}
	else
	{
		document.getElementById("cons_city").innerHTML = "";
	}
	
}

function zonecons()
{
	var conszone = trim(document.frmconsreg.conszone.value);
  if(trim(conszone)=="")
	{
		 document.getElementById("cons_zone").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + CONSUL_MSG.cons_zone;
	}
	else
	{
		document.getElementById("cons_zone").innerHTML = "";
	}
	
}


function pincodecons()
{
	var conspincode = trim(document.frmconsreg.conspincode.value);
  if(trim(conspincode)=="")
	{
		 document.getElementById("cons_pincode").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + CONSUL_MSG.cons_pincode;
	}
	else
	{
		document.getElementById("cons_pincode").innerHTML = "";
	}
	
}


function seccodecons()
{
	var consseccode = trim(document.frmcmpreg.consseccode.value);
	//var cmpcap_code = document.getElementById('cmpcap_code').value;
	//alert(empseccode +'----'+cmpcap_code);
  if(trim(consseccode)=="")
	{
		 document.getElementById("cons_secode").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + CONSUL_MSG.conssec_un;
	}
	/*else if(empseccode==cmpcap_code)
	{
		 document.getElementById("cmp_secode").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.cmpsec_ok;
	}*/
	else
	{
		document.getElementById("cons_secode").innerHTML = "";
	}
	
}


/*============== Institute validation ========*/

//======== Show message ==================
var INSTITU_MSG = {

  instname_un: 'Full Name should not be blank.',
  instemail_un: 'Email should not be blank.',
  instemail_ok: 'Please enter correct email.',
  instemail_cnf: 'Email and confirm email should be same.',
  inst_namecnf: 'Institute name should not be blank.',
  inst_industry: 'Please select institute industry.',
  inst_since: 'Please select institute since.',
  inst_profile: 'Institute profile should not be blank.',
  inst_add: 'Institute address should not be blank.',
  inst_mobile: 'Mobile no. should not be blank.',
  inst_mobile_num: 'Mobile no. should be number only.',
  inst_country: 'Please select country.',
  inst_city: 'City should not be blank.',
  inst_zone: 'Zone should not be blank.',
  inst_pincode: 'Pin Code should not be blank.',
  instsec_un: 'Security Code should not be blank.',
  instsec_ok: 'Security Code should be correct.',
    
  end: 0
};

//========== Company registration validation ============
function instnameval()
{
	var instfulname = trim(document.frminstreg.instfulname.value);
  if(trim(instfulname)=="")
	{
		 document.getElementById("nameinst").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + INSTITU_MSG.instname_un;
	}
	else
	{
		document.getElementById("nameinst").innerHTML = "";
	}
	
}

function instemailval()
{
	var instemail = trim(document.frminstreg.instemail.value);
  if(trim(instemail)=="")
	{
		 document.getElementById("emailinst").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + INSTITU_MSG.instemail_un;
	}
	else if(!isEmail(instemail))
	{
		 document.getElementById("emailinst").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + INSTITU_MSG.instemail_ok;
	}
	else
	{
		document.getElementById("emailinst").innerHTML = "";
	}
	
}

function instcnfemail()
{
	var instemail = trim(document.frminstreg.instemail.value);
	var instfemail = trim(document.frminstreg.instfemail.value);
  if(instemail!=instfemail)
	{
		 document.getElementById("cnfemailinst").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + INSTITU_MSG.instemail_cnf;
	}	
	else
	{
		document.getElementById("cnfemailinst").innerHTML = "";
	}
	
}

function inst_nameval()
{
	var inst_name = trim(document.frminstreg.inst_name.value);
  if(trim(inst_name)=="")
	{
		 document.getElementById("inst_namecmp").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + INSTITU_MSG.inst_namecnf;
	}
	else
	{
		document.getElementById("inst_namecmp").innerHTML = "";
	}
	
}


function validconsindustry()
{
	var instindustry = trim(document.frminstreg.instindustry.value);
  if(trim(instindustry)=="")
	{
		 document.getElementById("inst_industry").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + INSTITU_MSG.inst_industry;
	}
	else
	{
		document.getElementById("inst_industry").innerHTML = "";
	}
	
}

function validinstsince()
{
	var instsince = trim(document.frminstreg.instsince.value);
  if(trim(instsince)=="")
	{
		 document.getElementById("inst_since").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + INSTITU_MSG.inst_since;
	}
	else
	{
		document.getElementById("inst_since").innerHTML = "";
	}
	
}

function validinstprofile()
{
	var instrofile = trim(document.frminstreg.instrofile.value);
  if(trim(instrofile)=="")
	{
		 document.getElementById("inst_profile").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + INSTITU_MSG.inst_profile;
	}
	else
	{
		document.getElementById("inst_profile").innerHTML = "";
	}
	
}


function validinstadd()
{
	var instadd = trim(document.frminstreg.instadd.value);
  if(trim(instadd)=="")
	{
		 document.getElementById("inst_add").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + INSTITU_MSG.inst_add;
	}
	else
	{
		document.getElementById("inst_add").innerHTML = "";
	}
	
}


function instmobileno()
{
	var mobilenoinst = trim(document.frminstreg.mobilenoinst.value);
  if(trim(mobilenoinst)=="")
	{
		 document.getElementById("inst_mob").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + INSTITU_MSG.inst_mobile;
	}
	else if(isNaN(mobilenocons))
	{
		document.getElementById("inst_mob").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + INSTITU_MSG.inst_mobile_num;
	}
	else
	{
		document.getElementById("inst_mob").innerHTML = "";
	}
	
}



function validinstcounty()
{
	var countryinst = trim(document.frminstreg.countryinst.value);
  if(trim(countryinst)=="")
	{
		 document.getElementById("inst_country").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + INSTITU_MSG.inst_country;
	}
	else
	{
		document.getElementById("inst_country").innerHTML = "";
	}
	
}

function citycons()
{
	var instcity = trim(document.frminstreg.instcity.value);
  if(trim(instcity)=="")
	{
		 document.getElementById("inst_city").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + INSTITU_MSG.inst_city;
	}
	else
	{
		document.getElementById("inst_city").innerHTML = "";
	}
	
}

function zoneinst()
{
	var instzone = trim(document.frminstreg.instzone.value);
  if(trim(instzone)=="")
	{
		 document.getElementById("inst_zone").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + INSTITU_MSG.inst_zone;
	}
	else
	{
		document.getElementById("inst_zone").innerHTML = "";
	}
	
}


function pincodeinst()
{
	var instpincode = trim(document.frminstreg.instpincode.value);
  if(trim(instpincode)=="")
	{
		 document.getElementById("inst_pincode").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + INSTITU_MSG.inst_pincode;
	}
	else
	{
		document.getElementById("inst_pincode").innerHTML = "";
	}
	
}


function seccodeinst()
{
	var instseccode = trim(document.frminstreg.instseccode.value);
	//var cmpcap_code = document.getElementById('cmpcap_code').value;
	//alert(empseccode +'----'+cmpcap_code);
  if(trim(instseccode)=="")
	{
		 document.getElementById("inst_secode").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + INSTITU_MSG.instsec_un;
	}	
	else
	{
		document.getElementById("inst_secode").innerHTML = "";
	}
	
}





























/************* Login screen validation****************/
var LOGIN_MSG = {

  cmpuser_un: 'Email should not be blank.',
  cmpuser_ok: 'Please enter correct email.',
  cmppass_cnf: 'Password should not be blank.',  
    
  end: 0
};


function cmpuserval()
{
	var cmpusername = trim(document.frmcmplogin.cmpusername.value);
  if(trim(cmpusername)=="")
	{
		 document.getElementById("usercmp").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + LOGIN_MSG.cmpuser_un;
	}
	else if(!isEmail(cmpusername))
	{
		 document.getElementById("usercmp").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + LOGIN_MSG.cmpuser_ok;
	}
	else
	{
		document.getElementById("usercmp").innerHTML = "";
	}
	
}

function cmppassval()
{
	var cmppassword = trim(document.frmcmplogin.cmppassword.value);
  if(trim(cmppassword)=="")
	{
		 document.getElementById("passcmp").innerHTML = "<img src='images/err_img.gif' alt='Error' align='absmiddle'> " + LOGIN_MSG.cmppass_cnf;
	}
	else
	{
		document.getElementById("passcmp").innerHTML = "";
	}
	
}











//============= To validate user name ================
function validateUsername() 
{ 
	 
  var username = trim(document.regfrm.username.value);
  if (username == '') 
  {
	  document.getElementById("useridcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_un;		  
  }
  else if(!ischeckspecial(username))
  {
	  document.getElementById("useridcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.bad_un;
  }
  else if(username.length <5)
  {
	  document.getElementById("useridcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.short_un;
  }
  else if(username.length >20)
  {
	  document.getElementById("useridcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.long_un;
  }
  else
  {
	  var xmlHttp;
	try
	  {
	  // Firefox, Opera 8.0+, Safari
	  xmlHttp=new XMLHttpRequest();
	  }
	catch (e)
	  {
	  // Internet Explorer
	  try
		{
		xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
	  catch (e)
		{
		try
		  {
		  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		catch (e)
		  {
		  alert("Your browser does not support AJAX!");
		  return false;
		  }
		}
	  }
	  
	  //========== User name validate ===================
		var username = trim(document.regfrm.username.value);
		if (username =="") 
		{
		  alert(ACCOUNTS_MSG.blank_un);	
		  document.regfrm.username.focus();
		  return false;
		}
		else if(!ischeckspecial(username))
		{
		  alert(ACCOUNTS_MSG.bad_un);
		  document.regfrm.username.focus();
		  return false;
		}
		else if(username.length <5)
		{
		  alert(ACCOUNTS_MSG.short_un);
		  document.regfrm.username.focus();
		  return false;
		}
		else if(username.length >20)
		{
		  alert(ACCOUNTS_MSG.long_un);
		  document.regfrm.username.focus();
		  return false;
		}
		else
		{
	  
		 
		 xmlHttp.open("GET","checkavailty.php?uname="+username+"&type=1",true);
		  
		  xmlHttp.onreadystatechange=function()
			{
			if(xmlHttp.readyState==4)
			  {
			 document.getElementById('avai_result').innerHTML=xmlHttp.responseText;
			  }
			}	  
		  xmlHttp.send(null);
		}

	  document.getElementById("useridcheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	  
  }  
  
}

//=========== To validate password ==============
function validatepassword()
{
	var password = trim(document.regfrm.password.value);
	
	if(password=="")
	{
		 document.getElementById("passwordcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_pswd;
	}
	else if(!ischeckspecial(password))
	{
		document.getElementById("passwordcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.bad_pswd;
	}
	else if(password.length <5)
	{
	  document.getElementById("passwordcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.short_pswd;
	}
	else if(password.length >20)
	{
	  document.getElementById("passwordcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.long_pswd;
	}
	else
	{
	  document.getElementById("passwordcheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	  
	} 	
}
function validateUGCOURSE()
{
	var UGCOURSE = trim(document.regfrm.UGCOURSE.value);
  if(UGCOURSE=="")
	{
		 document.getElementById("UGCOURSEcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.basic_course;
	}
	else
	{
	  document.getElementById("UGCOURSEcheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	  
	} 	
}

//========== To confirm the password =============
function confirmpass()
{
	var password = trim(document.regfrm.password.value);
	var cpassword = trim(document.regfrm.confirmPassword.value);
	if(password!=cpassword)
	{
		document.getElementById("Cpasswordcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.comp_pswd;
	}
	else
	{
		document.getElementById("Cpasswordcheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	
	}
}

//=========== To check email validation ===============
function validateemail()
{
	var emailadd = trim(document.regfrm.jsemail.value);
	
	if (emailadd == '') 
	{
	  document.getElementById("emailcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_email;		  
	}
	else if(!isEmail(emailadd))
	{
		document.getElementById("emailcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.invalid_email;	
	}
	else
	{
		 	  var xmlHttp;
	try
	  {
	  // Firefox, Opera 8.0+, Safari
	  xmlHttp=new XMLHttpRequest();
	  }
	catch (e)
	  {
	  // Internet Explorer
	  try
		{
		xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
	  catch (e)
		{
		try
		  {
		  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		catch (e)
		  {
		  alert("Your browser does not support AJAX!");
		  return false;
		  }
		}
	  }
		
		xmlHttp.open("GET","checkavailty.php?uemail="+emailadd,true);
		
		  xmlHttp.onreadystatechange=function()
			{
			if(xmlHttp.readyState==4)
			  {
			 document.getElementById('emailcheck1').innerHTML=xmlHttp.responseText;
			  }
			}	  
		  xmlHttp.send(null);
		 document.getElementById("emailcheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	
	}
}

//============= Validate first name =========
function validatefname()
{
	var fname = trim(document.regfrm.fname.value);
	if(fname=="")
	{
		 document.getElementById("fnamecheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_fname;
	}
	else if(!ischeckspecial(fname))
	{
		document.getElementById("fnamecheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.bad_fname;
	}	
	else
	{
	  document.getElementById("fnamecheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	  
	} 	
	
}

//============= To validate last name ==============
function validatelname()
{
	var lname = trim(document.regfrm.lname.value);
	if(lname=="")
	{
		 document.getElementById("lnamecheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_lname;
	}
	else if(!ischeckspecial(lname))
	{
		document.getElementById("lnamecheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.bad_lname;
	}	
	else
	{
	  document.getElementById("lnamecheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	  
	} 	
	
}

//========== To validate the gender =========
function validategender()
{
	if(document.getElementById("gender_Male").checked)
	{
		document.getElementById("gendercheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";
	}
	else if(document.getElementById("gender_Female").checked)
	{
		document.getElementById("gendercheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";		
	}
}

//=========== Validate date ===========
function validatedob()
{
	var selday = trim(document.regfrm.StartDateDay.value);
	var selmonth = trim(document.regfrm.StartDateMonth.value);
	var selyear = trim(document.regfrm.StartDateYear.value);
	
	if(selday=="")
	{
		 document.getElementById("dobcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_day;
	}
	else if(selmonth=="")
	{
		document.getElementById("dobcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_month;
	}
	else if(selyear=="")
	{
		document.getElementById("dobcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_year;
	}	
	else
	{
	  document.getElementById("dobcheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	  
	} 	
	
}

//========== To validate country =============
function validatecounty()
{
	var selcountry = trim(document.regfrm.country.value);
	if(selcountry=="")
	{
		 document.getElementById("countrycheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_cou;
	}	
	else
	{
	  document.getElementById("countrycheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	  
	} 	
}

//====== To validate current location ===========
function validatecurloc()
{
	var selcity = trim(document.regfrm.stateCity.value);
	if(selcity=="")
	{
		 document.getElementById("curloccheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_city;
	}	
	else
	{
	  document.getElementById("curloccheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	  
	} 	
}


//====== validate phone no and mobile number ==========
function validatephoneno()
{
	var areacode = trim(document.regfrm.residence_area.value);
	var phno= trim(document.regfrm.residence_phoneno.value);
	var mobno= trim(document.regfrm.Mobile.value);
	
	if(phno=="Telephone" && mobno=="Mobile Number" && areacode=="Area Code")
	{
		document.getElementById("phnocheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_both;	
	}
	else if(areacode=="" && mobno=="Mobile Number")
	{
		 document.getElementById("phnocheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_area;
	}
	else if(!isInteger(areacode) && mobno=="Mobile Number")
	{
		document.getElementById("phnocheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.area_num;
	}
	else if(phno=="" && mobno=="Mobile Number")
	{
		document.getElementById("phnocheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_phno;
	}	
	else if(!isInteger(phno) && mobno=="Mobile Number")
	{
		document.getElementById("phnocheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.phno_num;
	}
	else if(mobno=="" && areacode=="Area Code" && phno=="Telephone")
	{
		document.getElementById("phnocheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_mob;
	}
	else if(!isInteger(mobno) && areacode=="Area Code" && phno=="Telephone")
	{
		document.getElementById("phnocheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.mob_num;
	}
	else
	{
	  document.getElementById("phnocheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	  
	} 
	
}

//======== validate total experience ======
function validateexp()
{
	var expyer = trim(document.regfrm.expyear.value);
	var expmon= trim(document.regfrm.expmonth.value);
		
	if(expyer=="")
	{
		 document.getElementById("expriencecheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.year_exp;
	}
	else if(expmon=="")
	{
		 document.getElementById("expriencecheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.month_exp;	
	}
	else
	{
	  document.getElementById("expriencecheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	  
	} 	
}

//========== Validate salary selection =============
function validatesalary()
{
	var sallac = trim(document.regfrm.ctclacs.value);
	var saltho= trim(document.regfrm.ctcthousands.value);
		
	if(sallac=="")
	{
		 document.getElementById("salarycheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.lac_sal;
	}
	else if(saltho=="")
	{
		 document.getElementById("salarycheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.tho_sal;	
	}
	else
	{
	  document.getElementById("salarycheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	  
	} 	
}

//========= to validate functional area ==============
function validatefunarea()
{
	var funarea = trim(document.regfrm.farea.value);
	if(funarea=="")
	{
		 document.getElementById("funareacheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_farea;
	}	
	else
	{
	  document.getElementById("funareacheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	  
	} 	
}

//=========== To validate working industry ======
function validateindustry()
{
	var ind_val = trim(document.regfrm.industry.value);
	if(ind_val=="")
	{
		 document.getElementById("industrycheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_ind;
	}	
	else
	{
	  document.getElementById("industrycheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	  
	} 	
}

//========== Key skill textarea validation ===========
function maxlengthval()
{
	if(document.regfrm.keyskills.value.length > 200)
	{
		alert("Keyskills should not be more than 200 characters.");
		return false;		
	}
}

function validatekeyskil()
{
	var keyskil = trim(document.regfrm.keyskills.value);
	if(keyskil=="")
	{
		 document.getElementById("keyskillcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_key;
	}	
	else
	{
	  document.getElementById("keyskillcheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	  
	} 	
}

//============== validate resume heading ===============
function validateheading()
{
	var resumeheading = trim(document.regfrm.resumeHeadline.value);
	if(resumeheading=="")
	{
		 document.getElementById("headingcheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_head;
	}	
	else
	{
	  document.getElementById("headingcheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	  
	} 	
}

//======== valiadte resume format ===========
function validateresume()
{
	var resumeformat = trim(document.regfrm.uploadresume.value);
	var copypaste = trim(document.regfrm.copypaste.value);
	
	if(resumeformat=="" && copypaste=="")
	{
		 document.getElementById("resumecheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_up;
	}
	else if(resumeformat!="")
	{
		var ss;
		ss=1 + resumeformat.lastIndexOf(".");
		 var ext =resumeformat.substr(ss);
		ext=ext.toLowerCase();
		if (!(ext == "doc"||ext == "pdf" ))
		 {
			document.getElementById("resumecheck").innerHTML = "<img src='images/i_error.gif' alt='Error' align='absmiddle'> " + ACCOUNTS_MSG.blank_for;
		 }
		
	}
	else
	{
	  document.getElementById("resumecheck").innerHTML = "<img src='images/i_ok.gif' alt='Correct' align='absmiddle'> ";	  
	}	
}

//=============== validate user details form ===============
function validatesubmit()
{
	//========== User name validate ===================
	var username = trim(document.regfrm.username.value);
	if (username =="") 
	{
	  alert(ACCOUNTS_MSG.blank_un);	
	  document.regfrm.username.focus();
	  return false;
	}
	else if(!ischeckspecial(username))
	{
	  alert(ACCOUNTS_MSG.bad_un);
	  document.regfrm.username.focus();
	  return false;
	}
	else if(username.length <5)
	{
	  alert(ACCOUNTS_MSG.short_un);
	  document.regfrm.username.focus();
	  return false;
	}
	else if(username.length >20)
	{
	  alert(ACCOUNTS_MSG.long_un);
	  document.regfrm.username.focus();
	  return false;
	}
	
	//=========== Password validate ==================	
	var password = trim(document.regfrm.password.value);	
	if(password=="")
	{
		alert(ACCOUNTS_MSG.blank_pswd);
		document.regfrm.password.focus();
		return false;
	}
	else if(!ischeckspecial(password))
	{
		alert(ACCOUNTS_MSG.bad_pswd);
		document.regfrm.password.focus();
		return false;
	}
	else if(password.length <5)
	{
	  	alert(ACCOUNTS_MSG.short_pswd);
	  	document.regfrm.password.focus();
		return false;
	}
	else if(password.length >20)
	{
	  	alert(ACCOUNTS_MSG.long_pswd);
		document.regfrm.password.focus();
		return false;
	}
	//========== Confirm password ================
	var cpassword = trim(document.regfrm.confirmPassword.value);
	if(password!=cpassword)
	{
		alert(ACCOUNTS_MSG.comp_pswd);
		document.regfrm.confirmPassword.focus();
		return false;
	}
	//============= email validation===============
	var emailadd = trim(document.regfrm.jsemail.value);	
	if (emailadd == '') 
	{
	  alert(ACCOUNTS_MSG.blank_email);
	  document.regfrm.jsemail.focus();
	  return false;	  
	}
	else if(!isEmail(emailadd))
	{
		alert(ACCOUNTS_MSG.invalid_email);	
		document.regfrm.jsemail.focus();
		return false;	  
	}
	//====== First name validation ===========
	var fname = trim(document.regfrm.fname.value);
	if(fname=="")
	{
		alert(ACCOUNTS_MSG.blank_fname);
		document.regfrm.fname.focus();
		return false;
	}
	else if(!ischeckspecial(fname))
	{
		alert(ACCOUNTS_MSG.bad_fname);
		document.regfrm.fname.focus();
		return false;
	}	
	//============== Last name validation ============
	var lname = trim(document.regfrm.lname.value);
	if(lname=="")
	{
		alert(ACCOUNTS_MSG.blank_lname);
		document.regfrm.lname.focus();
		return false;
	}
	else if(!ischeckspecial(lname))
	{
		alert(ACCOUNTS_MSG.bad_lname);
		document.regfrm.lname.focus();
		return false;
	}	
	//=========== gender validation ==================
	if(document.getElementById("gender_Male").checked==false)
	{
		alert("Please select gender.");
		return false;
	}
	
	//============= DOB validation ===================
	var selday = trim(document.regfrm.StartDateDay.value);
	var selmonth = trim(document.regfrm.StartDateMonth.value);
	var selyear = trim(document.regfrm.StartDateYear.value);	
	if(selday=="")
	{
		 alert(ACCOUNTS_MSG.blank_day);
		 document.regfrm.StartDateDay.focus();
		 return false;		 
	}
	else if(selmonth=="")
	{
		alert(ACCOUNTS_MSG.blank_month);
		document.regfrm.StartDateMonth.focus();
		return false;
	}
	else if(selyear=="")
	{
		alert(ACCOUNTS_MSG.blank_year);
		document.regfrm.StartDateYear.focus();
		return false;
	}	
	//=========== country validation ==============
	var selcountry = trim(document.regfrm.country.value);
	if(selcountry=="")
	{
		alert(ACCOUNTS_MSG.blank_cou);
		document.regfrm.country.focus();
		return false;
	}	
	//========= Validate current location ==========
	var selcity = trim(document.regfrm.stateCity.value);
	if(selcity=="")
	{
		alert(ACCOUNTS_MSG.blank_city);
		document.regfrm.stateCity.focus();
		return false;
	}
	//===========Validate Phone number ===============
	var areacode = trim(document.regfrm.residence_area.value);
	var phno= trim(document.regfrm.residence_phoneno.value);
	var mobno= trim(document.regfrm.Mobile.value);
	
	if(phno=="Telephone" && mobno=="Mobile Number" && areacode=="Area Code")
	{
		alert(ACCOUNTS_MSG.blank_both);
		document.regfrm.residence_area.focus();
		return false;
	}
	else if(areacode=="" && mobno=="Mobile Number")
	{
		alert(ACCOUNTS_MSG.blank_area);
		document.regfrm.residence_area.focus();
		return false;
	}
	else if(!isInteger(areacode) && mobno=="Mobile Number")
	{
		alert(ACCOUNTS_MSG.area_num);
		document.regfrm.residence_area.focus();
		return false;
	}
	else if(phno=="" && mobno=="Mobile Number")
	{
		alert(ACCOUNTS_MSG.blank_phno);
		document.regfrm.residence_phoneno.focus();
		return false;
	}	
	else if(!isInteger(phno) && mobno=="Mobile Number")
	{
		alert(ACCOUNTS_MSG.phno_num);
		document.regfrm.residence_phoneno.focus();
		return false;
	}
	else if(mobno=="" && areacode=="Area Code" && phno=="Telephone")
	{
		alert(ACCOUNTS_MSG.blank_mob);
		document.regfrm.Mobile.focus();
		return false;
	}
	else if(!isInteger(mobno) && areacode=="Area Code" && phno=="Telephone")
	{
		alert(ACCOUNTS_MSG.mob_num);
		document.regfrm.Mobile.focus();
		return false;
	}
	//============= validate total experience===========
	var expyer = trim(document.regfrm.expyear.value);
	var expmon= trim(document.regfrm.expmonth.value);		
	if(expyer=="")
	{
		alert(ACCOUNTS_MSG.year_exp);
		document.regfrm.expyear.focus();
		return false;
	}
	else if(expmon=="")
	{
		 alert(ACCOUNTS_MSG.month_exp);	
		 document.regfrm.expmonth.focus();
		 return false;
	}
	//=========== validate salary details==============
	var sallac = trim(document.regfrm.ctclacs.value);
	var saltho= trim(document.regfrm.ctcthousands.value);		
	if(sallac=="")
	{
		alert(ACCOUNTS_MSG.lac_sal);
		document.regfrm.ctclacs.focus();
		return false;
	}
	else if(saltho=="")
	{
		 alert(ACCOUNTS_MSG.tho_sal);	
		 document.regfrm.ctcthousands.focus();
		 return false;
	}
	//========= Validate functional area =============
	var funarea = trim(document.regfrm.farea.value);
	if(funarea=="")
	{
		 alert(ACCOUNTS_MSG.blank_farea);
		 document.regfrm.farea.focus();
		 return false;
	}	
	//=========== validate working industry ======
	var ind_val = trim(document.regfrm.industry.value);
	if(ind_val=="")
	{
		alert(ACCOUNTS_MSG.blank_ind);
		document.regfrm.industry.focus();
		return false;		
	}	
	//============= validate keyskill ===========
	var keyskil = trim(document.regfrm.keyskills.value);
	if(keyskil=="")
	{
		alert(ACCOUNTS_MSG.blank_key);
		document.regfrm.keyskills.focus();
		return false;
	}		
	//============== validate resume heading ===============
	var resumeheading = trim(document.regfrm.resumeHeadline.value);
	if(resumeheading=="")
	{
		 alert(ACCOUNTS_MSG.blank_head);
		 document.regfrm.resumeHeadline.focus();
		 return false;
	}	
	//=========== Resume upload validation ================
	var resumeformat = trim(document.regfrm.uploadresume.value);
	var copypaste = trim(document.regfrm.copypaste.value);	
	if(resumeformat=="" && copypaste=="")
	{
		 alert(ACCOUNTS_MSG.blank_up);
		 document.regfrm.uploadresume.focus();
		 return false;
	}
	else if(resumeformat!="")
	{
		var ss;
		ss=1 + resumeformat.lastIndexOf(".");
		 var ext =resumeformat.substr(ss);
		ext=ext.toLowerCase();
		if (!(ext == "doc"||ext == "pdf" ))
		 {
			alert(ACCOUNTS_MSG.blank_for);
			document.regfrm.uploadresume.focus();
			return false;
		 }
		
	}	
    
	 if (document.regfrm.AGREETNC.checked == false)
				{   
					alert("Please tick here to confirm that you have read and understood our TERMS AND CONDITIONS")
					return (false);
				}
}


function validatesubmit2()
{
	//========== User name validate ===================
	var UGCOURSE = trim(document.regfrm.UGCOURSE.value);
	if (UGCOURSE =="") 
	{
	  alert("Please select under graduate course name");	
	  document.regfrm.UGCOURSE.focus();
	  return false;
	}
	var UGSPEC = trim(document.regfrm.UGSPEC.value);
	if (UGSPEC =="") 
	{
	  alert("Please select under graduate specialization");	
	  document.regfrm.UGSPEC.focus();
	  return false;
	}
	var UGINST = trim(document.regfrm.UGINST.value);
	if (UGINST =="") 
	{
	  alert("Please select under graduate institute name");	
	  document.regfrm.UGINST.focus();
	  return false;
	}
	
	var UGYEAR = trim(document.regfrm.UGYEAR.value);
	if (UGYEAR =="") 
	{
	  alert("Please select under graduate passing year");	
	  document.regfrm.UGYEAR.focus();
	  return false;
	}
	
	var FAREA = trim(document.regfrm.FAREA.value);
	if (FAREA =="") 
	{
	  alert("Please select working functional area");	
	  document.regfrm.FAREA.focus();
	  return false;
	}
	
	var ROLE = trim(document.regfrm.ROLE.value);
	if (ROLE =="") 
	{
	  alert("Please select working role");	
	  document.regfrm.ROLE.focus();
	  return false;
	}
	var orgn1 = trim(document.regfrm.orgn1.value);
	if (orgn1 =="") 
	{
	  alert("Please enter your current company name");	
	  document.regfrm.orgn1.focus();
	  return false;
	}
	var desig1 = trim(document.regfrm.desig1.value);
	if (desig1 =="") 
	{
	  alert("Please enter your current designation");	
	  document.regfrm.desig1.focus();
	  return false;
	}
	var marital_status = trim(document.regfrm.marital_status.value);
	if (marital_status =="") 
	{
	  alert("Please select your marital status");	
	  document.regfrm.marital_status.focus();
	  return false;
	}
	var pincode = trim(document.regfrm.pincode.value);
	if (pincode !="") 
	{
	  if(!isInteger(pincode))
		  {
			  alert("Please enter numeric value");	
			  document.regfrm.pincode.focus();
			  return false;
		  }
	}
	var alter_email = trim(document.regfrm.alter_email.value);
	if (alter_email !="") 
	{
	  if(!isEmail(alter_email))
		  {
			  alert("Please enter valid alternative email");	
			  document.regfrm.pincode.focus();
			  return false;
		  }
	}
	
	
	
	
	
	
}
//=============== validate user details form ===============
function validateupdatesubmit()
{
	//====== First name validation ===========
	var fname = trim(document.regfrm.fname.value);
	if(fname=="")
	{
		alert(ACCOUNTS_MSG.blank_fname);
		document.regfrm.fname.focus();
		return false;
	}
//=========== country validation ==============
	var selcountry = trim(document.regfrm.country.value);
	if(selcountry=="")
	{
		alert(ACCOUNTS_MSG.blank_cou);
		document.regfrm.country.focus();
		return false;
	}	
	//========= Validate current location ==========
	var selcity = trim(document.regfrm.stateCity.value);
	if(selcity=="")
	{
		alert(ACCOUNTS_MSG.blank_city);
		document.regfrm.stateCity.focus();
		return false;
	}
	//===========Validate Phone number ===============
	var areacode = trim(document.regfrm.residence_area.value);
	var phno= trim(document.regfrm.residence_phoneno.value);
	var mobno= trim(document.regfrm.Mobile.value);
	
	if(phno=="Telephone" && mobno=="Mobile Number" && areacode=="Area Code")
	{
		alert(ACCOUNTS_MSG.blank_both);
		document.regfrm.residence_area.focus();
		return false;
	}
	else if(areacode=="" && mobno=="Mobile Number")
	{
		alert(ACCOUNTS_MSG.blank_area);
		document.regfrm.residence_area.focus();
		return false;
	}
	else if(!isInteger(areacode) && mobno=="Mobile Number")
	{
		alert(ACCOUNTS_MSG.area_num);
		document.regfrm.residence_area.focus();
		return false;
	}
	else if(phno=="" && mobno=="Mobile Number")
	{
		alert(ACCOUNTS_MSG.blank_phno);
		document.regfrm.residence_phoneno.focus();
		return false;
	}	
	else if(!isInteger(phno) && mobno=="Mobile Number")
	{
		alert(ACCOUNTS_MSG.phno_num);
		document.regfrm.residence_phoneno.focus();
		return false;
	}
	else if(mobno=="" && areacode=="Area Code" && phno=="Telephone")
	{
		alert(ACCOUNTS_MSG.blank_mob);
		document.regfrm.Mobile.focus();
		return false;
	}
	else if(!isInteger(mobno) && areacode=="Area Code" && phno=="Telephone")
	{
		alert(ACCOUNTS_MSG.mob_num);
		document.regfrm.Mobile.focus();
		return false;
	}
	
}

//=========== To check availability of user name===============
function availableusername()
{
var xmlHttp;
	try
	  {
	  // Firefox, Opera 8.0+, Safari
	  xmlHttp=new XMLHttpRequest();
	  }
	catch (e)
	  {
	  // Internet Explorer
	  try
		{
		xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
	  catch (e)
		{
		try
		  {
		  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		catch (e)
		  {
		  alert("Your browser does not support AJAX!");
		  return false;
		  }
		}
	  }
	  
	  //========== User name validate ===================
		var username = trim(document.regfrm.username.value);
		if (username =="") 
		{
		  alert(ACCOUNTS_MSG.blank_un);	
		  document.regfrm.username.focus();
		  return false;
		}
		else if(!ischeckspecial(username))
		{
		  alert(ACCOUNTS_MSG.bad_un);
		  document.regfrm.username.focus();
		  return false;
		}
		else if(username.length <5)
		{
		  alert(ACCOUNTS_MSG.short_un);
		  document.regfrm.username.focus();
		  return false;
		}
		else if(username.length >20)
		{
		  alert(ACCOUNTS_MSG.long_un);
		  document.regfrm.username.focus();
		  return false;
		}
		else
		{
	  
		  xmlHttp.open("GET","checkavailty.php?uname="+username,true);
		  
		  xmlHttp.onreadystatechange=function()
			{
			if(xmlHttp.readyState==4)
			  {
			 document.getElementById('avai_result').innerHTML=xmlHttp.responseText;
			  }
			}	  
		  xmlHttp.send(null);
		}
}



// JavaScript Document
//=========== Search country details =======
function srcuser(countryname)
{
	//alert(id+'==='+incstatus+'===='+uptdiv);
	$.post("srcblipuser.php", {
		countryname:countryname
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#srcid').html(""+unescape(response)+"");
		
	});
	return false;
}
//=============


//======== Change User status =====================
function upuserstatus(id,incstatus,uptdiv)
{
	//alert(id+'==='+incstatus+'===='+uptdiv);
	$.post("userstatus.php", {
		id:id,
		incstatus:incstatus
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#'+uptdiv).html(""+unescape(response)+"");
		
	});
	return false;
}

//======== Job approval section start =====================
function adminjobapp(id,incstatus,uptdiv)
{
	//alert(id+'==='+incstatus+'===='+uptdiv);
	$.post("updjobapp.php", {
		id:id,
		incstatus:incstatus
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#'+uptdiv).html(""+unescape(response)+"");
		
	});
	return false;
}


//======== Share Assets section start =====================
function adminprjapp(id,incstatus,uptdiv)
{
	//alert(id+'==='+incstatus+'===='+uptdiv);
	$.post("updprjapp.php", {
		id:id,
		incstatus:incstatus
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#'+uptdiv).html(""+unescape(response)+"");
		
	});
	return false;
}



//======== Share Assets section start =====================
function adminappstatus(id,incstatus,uptdiv)
{
	//alert(id+'==='+incstatus+'===='+uptdiv);
	$.post("updapp.php", {
		id:id,
		incstatus:incstatus
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#'+uptdiv).html(""+unescape(response)+"");
		
	});
	return false;
}

//=========== Search country details =======
function srccountry(countryname)
{
	//alert(id+'==='+incstatus+'===='+uptdiv);
	$.post("srccountry.php", {
		countryname:countryname
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#srcid').html(""+unescape(response)+"");
		
	});
	return false;
}
//=============

function srctraingreq(countryname)
{
	//alert(id+'==='+incstatus+'===='+uptdiv);
	$.post("srctraingreq.php", {
		countryname:countryname
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#srcid').html(""+unescape(response)+"");
		
	});
	return false;
}



function srctraing(countryname)
{
	//alert(id+'==='+incstatus+'===='+uptdiv);
	$.post("srctraing.php", {
		countryname:countryname
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#srcid').html(""+unescape(response)+"");
		
	});
	return false;
}

//======== delete country =========

function deletecountry(incid,srcval){
	//$('#srcdet').slideToggle(1000);
	//alert('asssd');
	$.post("delcountry.php", {
		incid:incid,
		srcval:srcval
	}, function(response){
		var respond=unescape(response);
		
		if(respond=="101")
		{
			srccountry(srcval);			
		}
		else
		{
			alert("Selected item not deleted successfully.");
			return false;			
		}	
	});
	return false;
}

function deletetraing(incid,srcval){
	//$('#srcdet').slideToggle(1000);
	//alert('asssd');
	$.post("deltraing.php", {
		incid:incid,
		srcval:srcval
	}, function(response){
		var respond=unescape(response);
		
		if(respond=="101")
		{
			srctraing(srcval);			
		}
		else
		{
			alert("Selected item not deleted successfully.");
			return false;			
		}	
	});
	return false;
}




//========= Board section start =============
function srcboard(countryname)
{
	//alert(id+'==='+incstatus+'===='+uptdiv);
	$.post("srcboard.php", {
		countryname:countryname
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#srcid').html(""+unescape(response)+"");
		
	});
	return false;
}


function deleteboard(incid,srcval){
	//$('#srcdet').slideToggle(1000);
	//alert('asssd');
	$.post("delboard.php", {
		incid:incid,
		srcval:srcval
	}, function(response){
		var respond=unescape(response);
		
		if(respond=="101")
		{
			srcboard(srcval);			
		}
		else
		{
			alert("Selected item not deleted successfully.");
			return false;			
		}	
	});
	return false;
}




//=========== Board section end ================

//========= Stream section start =============
function srcstream(countryname)
{
	//alert(id+'==='+incstatus+'===='+uptdiv);
	$.post("srcstream.php", {
		countryname:countryname
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#srcid').html(""+unescape(response)+"");
		
	});
	return false;
}


function deletestream(incid,srcval){
	//$('#srcdet').slideToggle(1000);
	//alert('asssd');
	$.post("delstream.php", {
		incid:incid,
		srcval:srcval
	}, function(response){
		var respond=unescape(response);
		
		if(respond=="101")
		{
			srcstream(srcval);			
		}
		else
		{
			alert("Selected item not deleted successfully.");
			return false;			
		}	
	});
	return false;
}
//=========== Stream section end ================

//========= University section start =============
function srcuniversity(countryname)
{
	//alert(id+'==='+incstatus+'===='+uptdiv);
	$.post("srcuniversity.php", {
		countryname:countryname
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#srcid').html(""+unescape(response)+"");
		
	});
	return false;
}


function deleteuniversity(incid,srcval){
	//$('#srcdet').slideToggle(1000);
	//alert('asssd');
	$.post("deluniversity.php", {
		incid:incid,
		srcval:srcval
	}, function(response){
		var respond=unescape(response);
		
		if(respond=="101")
		{
			srcuniversity(srcval);			
		}
		else
		{
			alert("Selected item not deleted successfully.");
			return false;			
		}	
	});
	return false;
}
//=========== University section end ================

//========= Industry type section start =============
function srcindtype(countryname)
{
	//alert(id+'==='+incstatus+'===='+uptdiv);
	$.post("srcindtype.php", {
		countryname:countryname
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#srcid').html(""+unescape(response)+"");
		
	});
	return false;
}


function deleteindty(incid,srcval){
	//$('#srcdet').slideToggle(1000);
	//alert('asssd');
	$.post("delindtype.php", {
		incid:incid,
		srcval:srcval
	}, function(response){
		var respond=unescape(response);
		
		if(respond=="101")
		{
			srcindtype(srcval);			
		}
		else
		{
			alert("Selected item not deleted successfully.");
			return false;			
		}	
	});
	return false;
}
//=========== Industry type section end ================


//=========== State details =============
//=========== Search state details =======
function srcstate(name)
{
	//alert(id+'==='+incstatus+'===='+uptdiv);
	$.post("srcstate.php", {
		name:name
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#srcid').html(""+unescape(response)+"");
		
	});
	return false;
}


function deletestate(incid,srcval){
	//$('#srcdet').slideToggle(1000);
	//alert('asssd');
	$.post("delstate.php", {
		incid:incid,
		srcval:srcval
	}, function(response){
		var respond=unescape(response);
		
		if(respond=="101")
		{
			srcstate(srcval);			
		}
		else
		{
			alert("Selected item not deleted successfully.");
			return false;			
		}	
	});
	return false;
}

//========= for city add state list ==========
function funstate(countryid)
{
	//alert(id+'==='+incstatus+'===='+uptdiv);
	$.post("statelist.php", {
		countryid:countryid
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#statelist').html(""+unescape(response)+"");
		
	});
	return false;
}


function srccity(name)
{
	//alert(id+'==='+incstatus+'===='+uptdiv);
	$.post("srccity.php", {
		name:name
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#srcid').html(""+unescape(response)+"");
		
	});
	return false;
}



function deletecity(incid,srcval){
	//$('#srcdet').slideToggle(1000);
	//alert('asssd');
	$.post("deletecity.php", {
		incid:incid,
		srcval:srcval
	}, function(response){
		var respond=unescape(response);
		
		if(respond=="101")
		{
			srccity(srcval);			
		}
		else
		{
			alert("Selected item not deleted successfully.");
			return false;			
		}	
	});
	return false;
}

// JavaScript Document
//=========== Search country details =======
function srcuser(countryname)
{
	//alert(id+'==='+incstatus+'===='+uptdiv);
	$.post("srcblipuser.php", {
		countryname:countryname
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#product_details').html(""+unescape(response)+"");
		
	});
	return false;
}
//=============

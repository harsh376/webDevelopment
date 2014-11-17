// JavaScript Document
//=========== Search country details =======
function srcuser2(val,product_id)
{
	//alert(quantity+" "+product_id);
	iffeatproduct = product_id;
	//alert(subtotalid);
	$.post("srcblipuser2.php", {
		val:val,
		product_id:product_id
		
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#'+iffeatproduct).html(""+unescape(response)+"");
		
		//var respond=unescape(response);
		//alert(respond);
		/*
		if(respond=="101")
		{
			//srctraing(srcval);
			alert("Update successfully.");
			return false;	
		}
		else
		{
			alert("Not updated successfully.");
			return false;			
		}
		*/
		
		
	});
	
	$.post("srcblipuser2.php", {
		quantity:quantity,
		product_id:product_id
		
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#total').html(""+unescape(response)+"");
		
		//var respond=unescape(response);
		//alert(respond);
		/*
		if(respond=="101")
		{
			//srctraing(srcval);
			alert("Update successfully.");
			return false;	
		}
		else
		{
			alert("Not updated successfully.");
			return false;			
		}
		*/
		
		
	});
	
	return false;
}
//=============
// JavaScript Document// JavaScript Document
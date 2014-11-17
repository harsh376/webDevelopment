// JavaScript Document
//=========== Search country details =======
function srcuser1(quantity,product_id)
{
	//alert(quantity+" "+product_id);
	subtotalid = "subtotal_"+product_id;
	//alert(subtotalid);
	$.post("srcblipuser1.php", {
		quantity:quantity,
		product_id:product_id
		
	},function(response){	
		//$('#newsmoney').fadeOut(1000);	
		$('#'+subtotalid).html(""+unescape(response)+"");
		
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
// JavaScript Document
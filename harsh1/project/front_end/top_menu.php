<script language="javascript" type="text/javascript">
function pagemetadet2()
{ 	
	
	imgview=window.open("addtocart.php?a=1","Details",'height=525,width=700,resizable=1,scrollbars=1,screenX=100,screenY=50, menubar=1,fullscreen=No');
	
	if(window.focus)
	{
		imgview.focus();
	}
	
}
</script>

<script type="text/javascript">
    var GB_ROOT_DIR = "Greybox/greybox/";
</script>

<script type="text/javascript" src="Greybox/greybox/AJS.js"></script>
<script type="text/javascript" src="Greybox/greybox/AJS_fx.js"></script>
<script type="text/javascript" src="Greybox/greybox/gb_scripts.js"></script>
<link href="Greybox/greybox/gb_styles.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
  GB_myShow = function(caption, url, height, width, is_reload_on_close) {
    var options = {
      caption: caption,
      height: height || 500,
      width: width || 500,
      fullscreen: false,
      overlay_click_close: true,
      show_loading: true,
      reload_on_close: is_reload_on_close || false
    }
  var 
    win = new GB_Window(options);
  return win.show(url);
}
</script>

<?php include ("refreshOnfocus.php"); ?>

<?php

$sqlcart = "SELECT * FROM tbl_cart WHERE user_id='".$_SESSION["user_id"]."' AND date_added='".date("Y-m-d")."' ";
$rescart = $db->Execute($sqlcart) or die(mysql_error());
$totalcart = $rescart->RecordCount();

?>

<ul class="topmenu orange">
            <!--	<li class="current"><a href="index.php" title="">Home</a></li>	-->
			<li><a href="index.php" title="">Home</a></li>
            <li><a href="beautifulthoughts.php" title="">Beautiful thoughts</a></li>
            <li><a href="comments.php" title="" >Comments & Feedback</a></li>
            <li><a href="contactus.php" title="">Contact Us</a></li>
            <li style="text-align:right; float:right; font-size:13px; ">
			<?php if($_SESSION['user_id']==""){ ?><a href="login.php" title=""><b>Log in</b></a><?php } else{ ?><a href="" title=""><b>Welcome <?php echo $_SESSION['fname']; ?></b></a>
            
      <!--      <a href="addtocart.php?a=1" title="My Cart" rel="gb_page_center[700, 500]"><b>Cart(<?php// echo $totalcart; ?>)</b></a>                       doesn't refresh the parent window when closed      -->
            
            <a href="addtocart.php?a=1" 
  onclick="return GB_myShow('My Cart', this.href, 500,700, true)" 
  title="My Cart"><b>Cart(<?php echo $totalcart; ?>)</b></a>			<!--  refreshes the parent window when closed  -->
            
            <a href="wishlist.php" title=""><b>Wishlist</b></a><a href="logout.php" title=""><b>Log out</b></a><?php } ?></li>
</ul>	
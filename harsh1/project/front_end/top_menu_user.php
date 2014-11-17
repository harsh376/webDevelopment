<?php 
$sqlapp2 = " SELECT * FROM tbl_users WHERE user_id='".$user_id."' ";
$resapp2 = $db->Execute($sqlapp2) or die(mysql_error());

while(!$resapp2->EOF)
{
	$fname = stripslashes($resapp2->fields["fname"]);
	$resapp2->MoveNext();
}
?>
<ul class="topmenu orange">
            <!--	<li class="current"><a href="index.php" title="">Home</a></li>	-->
			<li><a href="index_user.php?user_id=<?php echo $user_id; ?>" title="">Home</a></li>
            <li><a href="beautifulthoughts.php" title="">Beautiful thoughts</a></li>
            <li><a href="comments.php" title="" >Comments & Feedback</a></li>
            <li><a href="contactus.php" title="">Contact Us</a></li>
            <li style="text-align:right; float:right; font-size:13px; "><a href="" title=""><b>Welcome <?php echo $fname; ?></b></a></li>
</ul>	
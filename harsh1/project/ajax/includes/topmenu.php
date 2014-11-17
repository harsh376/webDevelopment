 <?php
 $imgpath="http://".$_SERVER['HTTP_HOST']."/anujp/admin/";
 //$imgpath="http://".$_SERVER['HTTP_HOST']."/admin/";
 ?>
 <div id="ddtopmenubar" class="mattblackmenu">
    <ul>
    <li><a href="<?php echo $imgpath;?>index.php">Home</a></li>
    <li><a href="#" rel="ddsubmenu4">Approve Registration</a></li> 
    <li><a href="#" rel="ddsubmenu2">Master Data</a></li>
    <li><a href="#" rel="ddsubmenu3">Waiting Approval</a></li>
    <li><a href="#" rel="ddsubmenu1">Manage Training</a></li>
    <li><a href="#" rel="ddsubmenu5">Reports</a></li>
    <?php if(isset($_SESSION['cnt_id']) && !empty($_SESSION['cnt_id'])) {?>
   <!-- <li><a href="<?php echo $imgpath;?>aboutus.php" rel="ddsubmenu2">My Details</a></li>
    <li><a href="<?php echo $imgpath;?>partner_preferences.php">Partner Preferences</a></li>
    <li><a href="#" rel="ddsubmenu4">Photo & Video</a></li>
    <li><a href="#" rel="ddsubmenu3">My Swamyavar</a></li>
    <li><a href="<?php echo $imgpath;?>msgmanagement.php">Message Management</a></li>-->
    <?php }?>
    <!--<li><a href="<?php echo $imgpath;?>contact.php">Contact Us</a></li>-->
    <?php if(isset($_SESSION['cnt_id']) && !empty($_SESSION['cnt_id'])) {?>
	<li><a href="<?php echo $imgpath;?>adm_logout.php">Logout</a></li>
    <?php }?>
    </ul>
    </div>        
    <script type="text/javascript">
    ddlevelsmenu.setup("ddtopmenubar", "topbar") //ddlevelsmenu.setup("mainmenuid", "topbar|sidebar")
    </script>
    <ul id="ddsubmenu3" class="ddsubmenustyle">
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>prjapproval.php">Project Approval</a></li>
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>jobapproval.php">Job Approval</a></li>
    <!--<li style="text-align:left;"><a href="<?php echo $imgpath;?>myswamyavarinvit.php">Manage Invitation</a></li>
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>ongingsawyavar.php">Ongoing Swamyavar</a></li>
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>otherswamyavarinvit.php">Other Swamyavar Invitation</a></li>-->
    </ul>
    
    <ul id="ddsubmenu2" class="ddsubmenustyle">
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>mngblipuser.php">Manage Users</a></li>
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>mngcountry.php">Manage Country</a></li>
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>mngstate.php">Manage State</a></li>
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>mngcity.php">Manage City</a></li>
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>mngboard.php">Manage Board</a></li>
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>mngstream.php">Manage Stream</a></li>
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>mnguniversity.php">Manage University</a></li>
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>mngindtype.php">Manage Industry Type</a></li>
    <!--<li style="text-align:left;"><a href="stoneprd.php">Search3</a></li>
    <li style="text-align:left;"><a href="mosaicprd.php">Search4</a></li>-->
    </ul>
    
    <ul id="ddsubmenu4" class="ddsubmenustyle">
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>approval.php?id=4">College Approval</a></li>
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>approval.php?id=5">Company Approval</a></li>
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>approval.php?id=7">Freelancer Approval</a></li>
    </ul>
    
    <ul id="ddsubmenu1" class="ddsubmenustyle">
    <li  style="text-align:left;"><a href="<?php echo $imgpath;?>mngtrain.php">Manage BLIP Training</a></li>
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>mngreqtrain.php">Requested Training</a></li>
<!--    <li style="text-align:left;"><a href="<?php echo $imgpath;?>approval.php?id=7">Freelancer Approval</a></li>-->
    </ul>
    
    <ul id="ddsubmenu5" class="ddsubmenustyle">
    <li  style="text-align:left;"><a href="<?php echo $imgpath;?>appproject.php">Approve Project</a></li>
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>biddetails.php">Bid Details</a></li>
	<li style="text-align:left;"><a href="<?php echo $imgpath;?>regdetails.php">College Details</a></li> 
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>companydetails.php">Company Details</a></li> 
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>studentdwn.php">Student Details</a></li> 
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>freelancerdwn.php">Freelancer Details</a></li> 
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>bliptraindwn.php">BLIP Training Details</a></li> 
    <li style="text-align:left;"><a href="<?php echo $imgpath;?>reqtraindwn.php">Requested Training Details</a></li> 
    </ul>
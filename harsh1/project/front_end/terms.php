<?php
session_start();
include("../configuration.php");

$cat_id=$_REQUEST["cat_id"];
$catergory_id;

//$sqlapp  :  main menu

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css">
	@import url(../front_end/top_menu_style.css);
</style>

<link rel="stylesheet" href="../front_end/main_menu_style.css" type="text/css" />

<style type="text/css" media="screen">
	@import url(../front_end/slideshow_style.css);
</style>

<link rel="stylesheet" href="../front_end/vertical_menu_style.css" type="text/css" />

<link rel="stylesheet" href="../front_end/featured_style.css" type="text/css" />

<!-- JavaScripts-->
<script type="text/javascript" src="../front_end/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="../front_end/s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 4000
        });
    });
</script>


</head>

<body topmargin="0" style="background-color:#E6E6E6; height:7400px; margin-top:auto;">

<center>

<div style="width:1024px; border:0px solid #000000; height:7300px; background-color:#FFFFFF;">						<!--	page div		-->

	<div style="width:1024px; border:0px solid #FF0000; height:35px; background-color:#570202;">					<!-- 	top menu div	-->
    
	  <?php
		include ("top_menu.php");
		?>
       
    </div>																						<!-- 	end of top menu div		-->

	<div style="width:1024px; border:0px solid #000099; height:150px; background-color:none;">				<!-- 	site name div	-->
        	<img src="../front_end/logo.jpg" style="float:left;" />
    </div>																						<!-- 	end of site name div	-->

	<div class="main_menu" style="width:1024px; border:0px solid #006666; height:50px;">					<!-- 		main menu div		-->
    	
   	  <?php
		include ("main_menu.php");					//$sqlapp
		?>
       
    </div>											<!-- 		end of main menu div		-->

	<div style="width:700px; height:7000px; background-color:none; float:left;">			<!-- content div	-->
    	
        <div style="width:660px; margin-left:40px; background-color:none; height:7000px; float:left;">		<!-- this div is for the left margin	-->
       	  <div style="width:660px; height:35px; background-color:none;">
                <br/>
                
            <a href="../front_end/index.php" style="text-decoration:none; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; float:left; color:#666666;">Home&nbsp;>&nbsp;</a>
                <font style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; float:left; font-weight:600; color:#666666;"> 
                <!--page name-->
                Terms and Conditions
                </font>
   		  </div>
          <hr />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Introduction</b></p>
                    
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Welcome to swayamindia.com (also known as Swayamlinen.com), a service provided by Cannoneye Marketing Pvt Ltd.</p>
		  
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">In using www.swayamindia.com service, you are deemed to have accepted the terms and conditions listed below. All products/services and information displayed on Swayamindia.com (also known as swayamlinen.com) constitute an "invitation to offer". Your order for purchase constitutes your "offer" which shall be subject to the terms and conditions as listed below. Swayamindia.com (also known as swayamlinen.com) reserves the right to accept or reject your offer. If you have supplied us with your valid email address, we will notify you by email as soon as possible to confirm receipt of your order and email you again to confirm details and therefore process the order. Our acceptance of your order will take place upon dispatch of the product(s) ordered. No act or omission of Swayamindia.com (also known as swayamlinen.com) prior to the actual dispatch of the product(s) ordered will constitute acceptance of your offer.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Membership Eligibility</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Use of the Site is available only to persons who can form legally binding contracts under applicable law. Persons who are "incompetent to contract" within the meaning of the Indian Contract Act, 1872 including un-discharged insolvents etc. are not eligible to use the Site. If you are a minor i.e. under the age of 18 years but at least 13 years of age you may use this Site only under the supervision of a parent or legal guardian who agrees to be bound by these Terms of Use. If your age is below that of 18 years your parents or legal guardians can transact on behalf of you if they are registered users. You are prohibited from purchasing any material which is for adult consumption the sale or purchase of which to/by minors are strictly prohibited.</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Swayamindia.com (also known as swayamlinen.com) reserves the right to terminate your membership and refuse to provide you with access to the Site if Swayamindia.com (also known as swayamlinen.com) discovers that you are under the age of 18 years. The Site is not available to persons whose membership has been suspended or terminated by Swayamindia.com (also known as swayamlinen.com) for any reason whatsoever. If you are registering as a business entity, you represent that you have the authority to bind the entity to this User Agreement. Unless otherwise specified, the materials on this website are directed solely at those who access this website from India. Swayamindia.com (also known as swayamlinen.com) makes no representation that any products or services referred to in the materials on this website are appropriate for use, or available outside India. Those who choose to access this Site from outside India are responsible for compliance with local laws if and to the extent local laws are applicable. Swayamindia.com (also known as swayamlinen.com) will deliver the products only within India and will not be liable for any claims relating to any products ordered from outside India.</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Except where additional terms and conditions are provided which are product specific, these terms and conditions supersede all previous representations, understandings, or agreements and shall prevail notwithstanding any variance with any other terms of any order submitted. By using the services of Swayamindia.com (also known as swayamlinen.com) you agree to be bound by the Terms and Conditions.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Account and Registration Obligations</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">"Your Information" is defined as any information you provide to us in the registration, buying or listing process, in the feedback area or through any email feature. We will protect Your Information in accordance with our Privacy Policy. If you use the Site, you are responsible for maintaining the confidentiality of Your Account and Password and for restricting access to your computer, and you agree to accept responsibility for all activities that occur under Your Account or Password. Swayamindia.com (also known as swayamlinen.com) shall not be liable to any person for any loss or damage which may arise as a result of any failure by you to protect your password or account. If you know or suspect that someone else knows your password you should notify us by contacting us immediately through the address provided below. If Swayamindia.com (also known as swayamlinen.com) has reason to believe that there is likely to be a breach of security or misuse of the Swayamindia.com (also known as swayamlinen.com) Site, we may require you to change your password or we may suspend your account without any liability to Swayamindia.com (also known as swayamlinen.com).</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">You also agree to: </p>

          	<ol type="1" style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
            	<li>Provide true, accurate, current and complete information about yourself as prompted by Swayamindia's registration form (such information being the "Registration Data")</li>
                <li>Maintain and promptly update the Registration Data to keep it true, accurate, current and complete. If you provide any information that is untrue, inaccurate, incomplete, or not current or if Swayamindia.com (also known as swayamlinen.com) has reasonable grounds to suspect that such information is untrue, inaccurate, not current or not in accordance with the User Agreement, Swayamindia.com (also known as swayamlinen.com) has the right to indefinitely suspend or terminate your membership and refuse to provide you with access to the Site.</li>
            </ol>
                    
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Pricing Information</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">While Swayamindia.com (also known as swayamlinen.com) strives to provide accurate product and pricing information, pricing or typographical errors may occur. Swayamindia.com (also known as swayamlinen.com) cannot confirm the price of a product until after you order. In the event that a product is listed at an incorrect price or with incorrect information due to an error in pricing or product information, Swayamindia.com (also known as swayamlinen.com) shall have the right, at our sole discretion, to refuse or cancel any orders placed for that product, unless the product has already been dispatched. In the event that an item is mis-priced, Swayamindia.com (also known as swayamlinen.com) may, at its discretion, either contact you for instructions or cancel your order and notify you of such cancellation. Unless the product ordered by you has been dispatched, your offer will not be deemed accepted and Swayamindia.com (also known as swayamlinen.com) will have the right to modify the price of the product and contact you for further instructions using the e-mail address provided by you during the time of registration, or cancel the order and notify you of such cancellation. In the event that Swayamindia.com (also known as swayamlinen.com) accepts your order the same shall be debited to your credit card account and duly notified to you by email that the payment has been processed. The payment may be processed prior to Swayamindia.com (also known as swayamlinen.com) dispatch of the product that you have ordered. If we have to cancel the order after we have processed the payment, the said amount will be reversed back to your credit card account.</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">We strive to provide you with the best prices possible on Swayamindia.com (also known as swayamlinen.com) as well as in all our stores Swayamindia.com (also known as swayamlinen.com). However, sometimes a price online does not match the price in a store. In our effort to be the lowest price provider in your particular geographic region, store pricing will sometimes differ from online prices. Prices and availability are subject to change without notice.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Cancellation by Swayamindia.com (also known as swayamlinen.com)</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Please note that there may be certain orders that we are unable to accept and must cancel. We reserve the right, at our sole discretion, to refuse or cancel any order for any reason. Some situations that may result in your order being cancelled include limitations on quantities available for purchase, inaccuracies or errors in product or pricing information, or problems identified by our credit and fraud avoidance department. We may also require additional verifications or information before accepting any order. We will contact you if all or any portion of your order is cancelled or if additional information is required to accept your order. If your order is cancelled after your credit card has been charged, the said amount will be reversed back in your Card Account.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Cancellations by the Customer</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">In case we receive a cancellation notice and the order has not been shipped by us, we shall cancel the order and refund the entire amount. The orders that have already been shipped out by us will not be cancelled and you will have to check our return policy on those orders. The customer agrees not to dispute the decision made by Swayamindia.com (also known as swayamlinen.com) and accept Swayamindia.com (also known as swayamlinen.com)'s decision regarding the cancellation.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Credit Card Details</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">You agree, understand and confirm that the credit card details provided by you for availing of services on Swayamindia.com (also known as swayamlinen.com) will be correct and accurate and you shall not use the credit card which is not lawfully owned by you, i.e. in a credit card transaction, you must use your own credit card. You further agree and undertake to provide the correct and valid credit card details to Swayamindia.com (also known as swayamlinen.com). Further the said information will not be utilized and shared by Swayamindia.com (also known as swayamlinen.com) with any of the third parties unless required for fraud verifications or by law, regulation or court order. Swayamindia.com (also known as swayamlinen.com) will not be liable for any credit card fraud. The liability for use of a card fraudulently will be on you and the onus to 'prove otherwise' shall be exclusively on you.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Fraudulent /Declined Transactions</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Swayamindia.com (also known as swayamlinen.com) reserves the right to recover the cost of goods, collection charges and lawyers fees from persons using the Site fraudulently. Swayamindia.com (also known as swayamlinen.com) reserves the right to initiate legal proceedings against such persons for fraudulent use of the Site and any other unlawful acts or acts or omissions in breach of these terms and conditions.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Electronic Communications</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">When you visit the Site or send emails to us, you are communicating with us electronically. You consent to receive communications from us electronically. We will communicate with you by email or by posting notices on the Site. You agree that all agreements, notices, disclosures and other communications that we provide to you electronically satisfy any legal requirement that such communications be in writing.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>You Agree and Confirm</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
          	<ol type="1" style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
            	<li>That in the event that a non-delivery occurs on account of a mistake by you (i.e. wrong name or address or any other wrong information) any extra cost incurred by Swayamindia.com (also known as swayamlinen.com) for redelivery shall be claimed from you.</li>
                <li>That you will use the services provided by Swayamindia.com (also known as swayamlinen.com), its affiliates, consultants and contracted companies, for lawful purposes only and comply with all applicable laws and regulations while using the Site and transacting on the Site.</li>
				<li>You will provide authentic and true information in all instances where such information is requested of you. Swayamindia.com (also known as swayamlinen.com) reserves the right to confirm and validate the information and other details provided by you at any point of time. If upon confirmation your details are found not to be true (wholly or partly), Swayamindia.com (also known as swayamlinen.com) has the right in its sole discretion to reject the registration and debar you from using the Services of Swayamindia.com (also known as swayamlinen.com) and / or other affiliated websites without prior intimation whatsoever.</li>
				<li>That you are accessing the services available on this Site and transacting at your sole risk and are using your best and prudent judgment before entering into any transaction through this Site
5. That the address at which delivery of the product ordered by you is to be made will be correct and proper in all respects. </li>
                <li>That before placing an order you will check the product description carefully. By placing an order for a product you agree to be bound by the conditions of sale included in the item's description.</li>
            </ol>
          </p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">You may not use the Site for any of the following purposes: </p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
          	<ol type="1" style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
            	<li>Disseminating any unlawful, harassing, libelous, abusive, threatening, harmful, vulgar, obscene, or otherwise objectionable material.</li>
                <li>Transmitting material that encourages conduct that constitutes a criminal offence, results in civil liability or otherwise breaches any relevant laws, regulations or code of practice.</li>
				<li> Gaining unauthorized access to other computer systems.</li>
				<li> Interfering with any other person's use or enjoyment of the Site.</li>
                <li> Breaching any applicable laws;</li>
                <li>Interfering or disrupting networks or web sites connected to the Site. </li>
                <li>Making, transmitting or storing electronic copies of materials protected by copyright without the permission of the owner.
</li>
            </ol>
          </p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Colors</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">We have made every effort to display the colours of our products that appear on the Site as accurately as possible. However, as the actual colours you see will depend on your monitor, we cannot guarantee that your monitor's display of any colour will be accurate.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Modification of Terms & Conditions of Service</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Swayamindia.com (also known as swayamlinen.com) may at any time modify the Terms & Conditions of Use of the site without any prior notification to you. You can access the latest version of the User Agreement at any given time on Swayamindia.com (also known as swayamlinen.com). You should regularly review the Terms & Conditions on Swayamindia.com (also known as swayamlinen.com). In the event the modified Terms & Conditions is not acceptable to you, you should discontinue using the service. However, if you continue to use the service you shall be deemed to have agreed to accept and abide by the modified Terms & Conditions of Use of this site.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Governing Law and Jurisdiction</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">This User Agreement shall be construed in accordance with the applicable laws of India. The Courts at Gurgaon shall have exclusive jurisdiction in any proceedings arising out of this agreement. Any dispute or difference either in interpretation or otherwise, of any terms of this User Agreement between the parties hereto, the same shall be referred to an independent arbitrator who will be appointed by Swayam and his decision shall be final and binding on the parties hereto. The above arbitration shall be in accordance with the Arbitration and Conciliation Act, 1996 as amended from time to time. The arbitration shall be held in Mumbai. The High Court of judicature at Delhi alone shall have the jurisdiction and the Laws of India shall apply.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Reviews, Feedback, Submissions</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">All reviews, comments, feedback, postcards, suggestions, ideas, and other submissions disclosed, submitted or offered to Swayamindia.com (also known as swayamlinen.com) on or by this Site or otherwise disclosed, submitted or offered in connection with your use of this Site (collectively, the "Comments") shall be and remain Swayamindia.com (also known as swayamlinen.com) property. Such disclosure, submission or offer of any Comments shall constitute an assignment to Swayamindia.com (also known as swayamlinen.com) of all worldwide rights, titles and interests in all copyrights and other intellectual properties in the Comments. Thus, Swayamindia.com (also known as swayamlinen.com) owns exclusively all such rights, titles and interests and shall not be limited in any way in its use, commercial or otherwise, of any Comments. Swayamindia.com (also known as swayamlinen.com) will be entitled to use, reproduce, disclose, modify, adapt, create derivative works from, publish, display and distribute any Comments you submit for any purpose whatsoever, without restriction and without compensating you in any way. Swayamindia.com (also known as swayamlinen.com) is and shall be under no obligation (1) to maintain any Comments in confidence; (2) to pay you any compensation for any Comments; or (3) to respond to any Comments. You agree that any Comments submitted by you to the Site will not violate this policy or any right of any third party, including copyright, trademark, privacy or other personal or proprietary right(s), and will not cause injury to any person or entity. You further agree that no Comments submitted by you to the Site will be or contain libelous or otherwise unlawful, threatening, abusive or obscene material, or contain software viruses, political campaigning, commercial solicitation, chain letters, mass mailings or any form of "spam".</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Swayamindia.com (also known as swayamlinen.com) does not regularly review posted Comments, but does reserve the right (but not the obligation) to monitor and edit or remove any Comments submitted to the Site. You grant Swayamindia.com (also known as swayamlinen.com) the right to use the name that you submit in connection with any Comments. You agree not to use a false email address, impersonate any person or entity, or otherwise mislead as to the origin of any Comments you submit. You are and shall remain solely responsible for the content of any Comments you make and you agree to indemnify Swayamindia.com (also known as swayamlinen.com) and its affiliates for all claims resulting from any Comments you submit. Swayamindia.com (also known as swayamlinen.com) and its affiliates take no responsibility and assume no liability for any Comments submitted by you or any third party.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Copyright & Trademark</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Swayamindia.com (also known as swayamlinen.com) and its suppliers and licensors expressly reserve all intellectual property rights in all text, programs, products, processes, technology, content and other materials, which appear on this Site. Access to this Site does not confer and shall not be considered as conferring upon anyone any license under any of Swayamindia.com (also known as swayamlinen.com) or any third party's intellectual property rights. All rights, including copyright, in this website are owned by or licensed to Swayamindia.com (also known as swayamlinen.com). Any use of this website or its contents, including copying or storing it or them in whole or part, other than for your own personal, non-commercial use is prohibited without the permission of Swayamindia.com (also known as swayamlinen.com). You may not modify, distribute or re-post anything on this website for any purpose.</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">The Swayamindia.com (also known as swayamlinen.com) names and logos and all related product and service names, design marks and slogans are the trademarks or service marks of Swayam. All other marks are the property of their respective companies. No trademark or service mark license is granted in connection with the materials contained on this Site. Access to this Site does not authorize anyone to use any name, logo or mark in any manner. References on this Site to any names, marks, products or services of third parties or hypertext links to third party sites or information are provided solely as a convenience to you and do not in any way constitute or imply Swayamindia.com (also known as swayamlinen.com) endorsement, sponsorship or recommendation of the third party, information, product or service.</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Swayamindia.com (also known as swayamlinen.com) is not responsible for the content of any third party sites and does not make any representations regarding the content or accuracy of material on such sites. If you decide to link to any such third party websites, you do so entirely at your own risk.</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">All materials, including images, text, illustrations, designs, icons, photographs, programs, music clips or downloads, video clips and written and other materials that are part of this Site (collectively, the "Contents") are intended solely for personal, non-commercial use. You may download or copy the Contents and other downloadable materials displayed on the Site for your personal use only. No right, title or interest in any downloaded materials or software is transferred to you as a result of any such downloading or copying. You may not reproduce (except as noted above), publish, transmit, distribute, display, modify, create derivative works from, sell or participate in any sale of or exploit in any way, in whole or in part, any of the Contents, the Site or any related software. All software used on this Site is the property of Swayamindia.com (also known as swayamlinen.com) or its suppliers and protected by Indian and international copyright laws. The Contents and software on this Site may be used only as a shopping resource. Any other use, including the reproduction, modification, distribution, transmission, republication, display, or performance, of the Contents on this Site is strictly prohibited. Unless otherwise noted, all Contents are copyrights, trademarks, trade dress and/or other intellectual property owned, controlled or licensed by Swayamindia.com (also known as swayamlinen.com) ,one of its affiliates or by third parties who have licensed their materials to Swayamindia.com (also known as swayamlinen.com) and are protected by Indian and international copyright laws. The compilation (meaning the collection, arrangement, and assembly) of all Contents on this Site is the exclusive property of Swayamindia.com (also known as swayamlinen.com) and is also protected by Indian and international copyright laws.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Objectionable Material</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">You understand that by using this Site or any services provided on the Site, you may encounter Content that may be deemed by some to be offensive, indecent, or objectionable, which Content may or may not be identified as such. You agree to use the Site and any service at your sole risk and that to the fullest extent permitted under applicable law, Swayamindia.com (also known as swayamlinen.com) and its affiliates shall have no liability to you for Content that may be deemed offensive, indecent, or objectionable to you.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Indemnity</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">You agree to defend, indemnify and hold harmless Swayamindia.com (also known as swayamlinen.com), its employees, directors, officers, agents and their successors and assigns from and against any and all claims, liabilities, damages, losses, costs and expenses, including attorney's fees, caused by or arising out of claims based upon your actions or inactions, which may result in any loss or liability to Swayamindia.com (also known as swayamlinen.com) or any third party including but not limited to breach of any warranties, representations or undertakings or in relation to the non-fulfillment of any of your obligations under this User Agreement or arising out of the your violation of any applicable laws, regulations including but not limited to Intellectual Property Rights, payment of statutory dues and taxes, claim of libel, defamation, violation of rights of privacy or publicity, loss of service by other subscribers and infringement of intellectual property or other rights. This clause shall survive the expiry or termination of this User Agreement.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Termination</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">This User Agreement is effective unless and until terminated by either you or Swayamindia.com (also known as swayamlinen.com). You may terminate this User Agreement at any time, provided that you discontinue any further use of this Site. Swayamindia.com (also known as swayamlinen.com) may terminate this User Agreement at any time and may do so immediately without notice, and accordingly deny you access to the Site, Such termination will be without any liability to Swayamindia.com (also known as swayamlinen.com). Upon any termination of the User Agreement by either you or Swayamindia.com (also known as swayamlinen.com), you must promptly destroy all materials downloaded or otherwise obtained from this Site, as well as all copies of such materials, whether made under the User Agreement or otherwise. Swayamindia.com (also known as swayamlinen.com)'s right to any Comments shall survive any termination of this User Agreement. Any such termination of the User Agreement shall not cancel your obligation to pay for the product already ordered from the Site or affect any liability that may have arisen under the User Agreement.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Limitation of Liability and Disclaimers</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">The Site is provided without any warranties or guarantees and in an "As Is" condition. You must bear the risks associated with the use of the Site.</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">The Site provides content from other Internet sites or resources and while Swayamindia.com (also known as swayamlinen.com) tries to ensure that material included on the Site is correct, reputable and of high quality, it cannot accept responsibility if this is not the case. Swayamindia.com (also known as swayamlinen.com) will not be responsible for any errors or omissions or for the results obtained from the use of such information or for any technical problems you may experience with the Site.</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">This disclaimer does not apply to any product warranty offered by the manufacturer of the product as specified in the product specifications. This disclaimer constitutes an essential part of this User Agreement.</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">To the fullest extent permitted under applicable law, Swayamindia.com (also known as swayamlinen.com) or its suppliers shall not be liable for any indirect, incidental, special, incidental, consequential or exemplary damages, including but not limited to, damages for loss of profits, goodwill, use, data or other intangible losses arising out of or in connection with the Site, its services or this User Agreement.</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Without prejudice to the generality of the section above, the total liability of Swayamindia.com (also known as swayamlinen.com) to you for all liabilities arising out of this User Agreement be it in tort or contract is limited to the value of the product ordered by you.</p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Swayamindia.com (also known as swayamlinen.com), its associates and technology partners make no representations or warranties about the accuracy, reliability, completeness, current-ness and/or timeliness of any content, information, software, text, graphics, links or communications provided on or through the use of the Site or that the operation of the Site will be error free and/or uninterrupted. Consequently, Swayamindia.com (also known as swayamlinen.com) assumes no liability whatsoever for any monetary or other damage suffered by you on account of the delay, failure, interruption, or corruption of any data or other information transmitted in connection with use of the Site; and/or any interruption or errors in the operation of the Site.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Site Security</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">You are prohibited from violating or attempting to violate the security of the Site, including, without limitation, (a) accessing data not intended for you or logging onto a server or an account which you are not authorized to access; (b) attempting to probe, scan or test the vulnerability of a system or network or to breach security or authentication measures without proper authorization; (c) attempting to interfere with service to any other user, host or network, including, without limitation, via means of submitting a virus to the Site, overloading, "flooding," "spamming," "mail bombing" or "crashing;" (d) sending unsolicited email, including promotions and/or advertising of products or services; or (e) forging any TCP/IP packet header or any part of the header information in any email or newsgroup posting. Violations of system or network security may result in civil or criminal liability. Swayamindia.com (also known as swayamlinen.com) will investigate occurrences that may involve such violations and may involve, and cooperate with, law enforcement authorities in prosecuting users who are involved in such violations. You agree not to use any device, software or routine to interfere or attempt to interfere with the proper working of this Site or any activity being conducted on this Site. You agree, further, not to use or attempt to use any engine, software, tool, agent or other device or mechanism (including without limitation browsers, spiders, robots, avatars or intelligent agents) to navigate or search this Site other than the search engine and search agents available from Swayamindia.com (also known as swayamlinen.com) on this Site and other than generally available third party web browsers (e.g., Netscape Navigator, Microsoft Explorer).</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Entire Agreement</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">If any part of this agreement is determined to be invalid or unenforceable pursuant to applicable law including, but not limited to, the warranty disclaimers and liability limitations set forth above, then the invalid or unenforceable provision will be deemed to be superseded by a valid, enforceable provision that most closely matches the intent of the original provision and the remainder of the agreement shall continue in effect. Unless otherwise specified herein, this agreement constitutes the entire agreement between you and Swayamindia.com (also known as swayamlinen.com) with respect to the Swayamindia.com (also known as swayamlinen.com) sites/services and it supersedes all prior or contemporaneous communications and proposals, whether electronic, oral or written, between you and Swayamindia.com (also known as swayamlinen.com) with respect to the Swayamindia.com (also known as swayamlinen.com) sites/services. Swayamindia.com (also known as swayamlinen.com)'s failure to act with respect to a breach by you or others does not waive its right to act with respect to subsequent or similar breaches.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Privacy Policy</b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">We do not sell or rent your personal information to third parties for their marketing purposes without your explicit consent and we only use your information as described in the Privacy Policy. We view protection of your privacy as a very important community principle. We understand clearly that you and Your Information is one of our most important assets. We store and process Your Information on computers located in the India that are protected by physical as well as technological security devices. We use third parties to verify and certify our privacy principles. If you object to your Information being transferred or used in this way please do not use the Site.</p>
          
          <hr style="border:1px dotted;" />
          
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;"><b>Contact Details : </b></p>
          <p style="text-align:left; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
          	Swayam,<br/> 
            142, Mohiyal Colony <br/>
            Opp Sector 31, Jharsa<br/>
            Gurgaon 122001<br/>
            INDIA.<br/>
            Phone: +(91) (124) 4370068<br/>
            E-mail: info@swayamlinen.com<br/>
                     
          </p>
 
         

         
        </div>
    </div>																					<!--	end of content div	-->
    
    
    <div id="vertmenu" style="float:left; background-color:none; border:0px solid #CCFF33; padding-left:40px; padding-right:40px; width:244px; height:7000px;">	<!--vertical side menu div	-->
		
       <?php
	   include ("vertical_menu.php");
	   ?>
        
      <br/><br/>
        
        
	      
                
    	<div style="width:244px; height:200px; float:left; background-color:none;">
    
    	<img src="../front_end/images3/slide_03.jpg" />
    
    	</div>    

	
	</div>																<!-- 	end of vertical side menu div	-->
    
    


</div>																								<!--	end of page div		-->
</center>



</body>
</html>

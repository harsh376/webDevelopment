<div>
              		
					<a href="prd_details.php?product_id=<?php echo $resapp2->fields["product_id"] ?>" onclick="return GB_myShow('Product Details', this.href, 500,700, true)"><img src="../admin/images_products_big/<?php echo stripslashes($resapp2->fields["img_big"]); ?>" style="float:left; cursor:pointer;" /></a>
                    
                    <div style="width:250px; height:200px; background-color:none; float:left; margin-left:20px;">
                    	
                        <font style="font-family:Verdana, Arial, Helvetica, sans-serif; float:left; font-size:12px;">Available</font>
                        <br/><br/>
                        
                        <font style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; font-weight:600px; float:left; font-weight:600; color:#666666;"><?php echo stripslashes($resapp2->fields["product_name"]); ?></font>
                        <br/>
                        <font style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; font-weight:600px; float:left; color:#666666;">For more details click on this image</font>
                        
                        
                    
                    </div>
                    
                    <div style="width:150px; height:200px; background-color:none; float:right;">
                    
                    	<span class="price" style="float:left;">Rs. <?php echo stripslashes($resapp2->fields["product_price"]); ?>/-</span> 
                		<br/><br/>
                       
                        
                        <a <?php if($_SESSION["user_id"]!=""){ ?>href="addtocart.php?product_id=<?php echo $resapp2->fields["product_id"]; ?>" 
  onclick="return GB_myShow('My Cart', this.href, 500,700, true)" <?php } else{ ?> href="login.php?a=1" <?php } ?> 
  title="" style="float:right; font-family:Arial, Helvetica, sans-serif; font-size:14px; border:0px; width:150px; height:30px; background-color:#694321; color:#ffffff; text-decoration:none; text-align:center; padding:5px 0px 5px 0px;">Add to Cart</a>			<!--  refreshes the parent window when closed  -->
                        
                        
                        <br/><br/><br/>
                        <a href="prd_details.php?product_id=<?php echo $resapp2->fields["product_id"] ?>" style="text-decoration:none; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; font-weight:600; color:#666666; float:left;" onclick="return GB_myShow('Product Details', this.href, 500,700, true)"><u>View</u></a>
                        
                       	<br/><br/>
                    	<input type="checkbox" name="txtbox1" id="txtbox1" style="float:left;" />
                        <font style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000; float:left">Select to compare</font>
                        <br/><br/>
                        
                        <?php 
						if($_SESSION["user_id"]!="")
						{ 
							if($wl!=1)
							{
							?>
                        <a href="addtowish.php?product_id=<?php echo $resapp2->fields["product_id"]; ?>&catergory_id=<?php echo $resapp2->fields["catergory_id"]; ?>" style="text-decoration:none; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#666666; float:left;" ><u>Add to Wishlist</u></a>
                        <?php 
							}
						
							else
							{
						?>	
								<a href="removefromwish.php?product_id=<?php echo $resapp2->fields["product_id"]; ?>" style="text-decoration:none; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#666666; float:left;" ><u>Remove from Wishlist</u></a>
						
						<?php	
                            }
						
						
						}
						?>
                                                             
                        
                    </div>
                    
              </div>
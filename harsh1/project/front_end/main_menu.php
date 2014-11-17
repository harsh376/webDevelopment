<?php
$sqlapp = " SELECT * FROM tbl_catergories ";
$resapp = $db->Execute($sqlapp) or die(mysql_error());
$totalapp = $resapp->RecordCount();											
?>	

<ul>
			<?php
			while(!$resapp->EOF)
			{
			?>            
            <li><a href="../front_end/product_details.php?cat_id=<?php echo stripslashes($resapp->fields["id"]); ?>" <?php if($cat_id==$resapp->fields["id"]){ $catergory_id=$cat_id;?>style="background-color:#694321;"<?php }?>><?php echo stripslashes($resapp->fields["catergory"]); ?></a> </li>
            <?php
			$resapp->MoveNext();
			}
			?>
			
</ul>


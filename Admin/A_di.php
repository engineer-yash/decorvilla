<?php
include('A_header.php');
?><br><br><br>
<?php 
include("includes/common.inc.php");

	$d=new dbo();
	
	$res=$d->get("select * from addimage");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	
		
				<div align="center">
				<fieldset style="border-color:#000000">
				<h2 class="about_us">
				  <legend><font color="#FF0000" size="+4"> DecorVilla Information</font></legend>
				</h2><br>
					<table width="99%"  border="5" cellpadding="3" bordercolor="#000000">
					<tr align="center">
					<td width="18%"><font color="#000000">
							Image_path
							 </font>						</td>
					   
						<td width="17%"><font color="#000000">
							 Event_type
							 </font>						</td>
						
						<td width="25%"><font color="#000000">
							 Decoration_Price
							 </font>						</td>
						
						
						<td width="16%"><font color="#000000">
							 Image_Sr_No
							 </font>						</td>
						
						<td width="11%"><font color="#000000">
							 Delete 
							 </font>						</td>
					</tr>
					                                                
					<tr align="center">
					<?php

	$i=1;
	
						
						while($row=mysql_fetch_assoc($res))
						{	
							echo '<tr style="color:black;"><td align="center">'.$row['image_path'].' 
								  
								    <td align="center">'.$row['event_type'].'
								  <td align="center">'.$row['price'].'
								  <td align="center">'.$row['image_sr_no'].'
								  								  
								 
								  
								   
								   <td align="center">
								  <a href="delete.php?id='.$row['id'].'"><input type="image" 		src="images/delete.png"></a>';
								  
						}
					?>		
	 <tr> <td colspan="18" align="center"><input type="button" name="print" onClick="javascript:window.print();" value="Print"/></td></tr> 
	 <tr>   					
					</tr>
					
					
				</table>
					
				</fieldset><br><br>
			</div>
		
        <div class="cleaner_h20"></div>

		
      </div>
     <div class="cleaner"></div>
    </div>
  </div>
</div>
<div id="footer_wrapper">


	<?php
include('A_footer.php');
?>
</div>
</body>
</html>

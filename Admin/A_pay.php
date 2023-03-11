<?php
include('A_header.php');
?><br /><br /><br />

<?php 
include("includes/common.inc.php");

	$d=new dbo();
	
	$res=$d->get("select * from paynow");

?>




<div id="content_wrapper_outer">
  <div id="content_wrapper_inner">
    <div id="content_wrapper">
      <div id="content">
	
			<div id='fg_membersite'>
				
				<fieldset >
				<div align="center"><h2><legend><font color="#FF0000" size="+4"> Payment</font></legend></h2></div>
					<table width="100%"  border="5" cellpadding="3" bordercolor="#000000">
					<tr align="center">
						<td>
							 <font color="#FF0000">location</font>
						</td>
						<td>
							 <font color="#FF0000">full Name</font>
						</td>
						
						<td>
							 <font color="#FF0000">Address</font>
						</td>
						<td>
							 <font color="#FF0000">Address line 2</font>
						</td>
						<td>
							 <font color="#FF0000">city</font>
						</td>
						<td>
							 <font color="#FF0000">State</font>
						</td>
						<td>
							 <font color="#FF0000">Zip Code</font>
						</td>
						<td>
							 <font color="#FF0000">phone</font>
						</td>
						<td>
							 <font color="#FF0000">Email</font>
						</td>
						<td>
							 <font color="#FF0000">Card number</font>
						</td>
						<td>
							 <font color="#FF0000">Exp Month</font>
						</td>
						<td>
							 <font color="#FF0000">Exp Year</font>
						</td>
						<td>
							 <font color="#FF0000">CVV</font>
						</td>
						<td>
							 <font color="#FF0000">Delete</font>
						</td>
					</tr>
					
					<tr align="center">
					<?php
						
						while($row=mysql_fetch_assoc($res))
						{	
							echo '<tr style="color:black;"><td align="center">'.$row['location'].' 
								  <td align="center">'.$row['full_name'].'
								 <td align="center">'.$row['address'].'							  
								  <td align="center">'.$row['add_line'].'
								  <td align="center">'.$row['city'].'
								  <td align="center">'.$row['state'].'
								   <td align="center">'.$row['zip'].'
								   <td align="center">'.$row['phone'].'
								   <td align="center">'.$row['email'].'
								   <td align="center">'.$row['card_no'].'
								   <td align="center">'.$row['exp_month'].'
								   <td align="center">'.$row['exp_year'].'
								   <td align="center">'.$row['cvv'].'
								  <td align="center"><a href="process_del_pay.php?id='.$row['id'].'"><input type="image" 		src="images/delete.png"></a>';
								  
						}
					?>		
						
					</tr>
				</table>
					
				</fieldset>
			</div>
		
        <div class="cleaner_h20"></div>

		
      </div>
     <div class="cleaner"></div>
    </div>
  </div>
</div><br><br><br><br><br><br>
<div id="footer_wrapper">
	<?php
include('A_footer.php');
?>
</div>
</body>
</html>

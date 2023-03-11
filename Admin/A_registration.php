
<?php
include('A_header.php');
?><br><br><br>
<?php 
include("includes/common.inc.php");

	$d=new dbo();
	
	$res=$d->get("select * from registration");

?>




<div id="content_wrapper_outer">
  <div id="content_wrapper_inner">
    <div id="content_wrapper">
      <div id="content">
	
			<div id='fg_membersite'>
				
				<fieldset >
				<div align="center"><h2 class="about_us"><legend><font color="#FF0000" size="+4"> Registration</font></legend></h2></div>
					<table width="100%"  border="5" cellpadding="3" bordercolor="#000000">
					<tr align="center">
						<td>
							 <font color="#FF0000">Name</font>
						</td>
						<td>
							 <font color="#FF0000">User Name</font>
						</td>
						
						<td>
							 <font color="#FF0000">Password </font>
						</td>
						<td>
							 <font color="#FF0000"> Confirg Password</font>
						</td>
						<td>
							 <font color="#FF0000">Email Id</font>
						</td>
						<td>
							 <font color="#FF0000">Mobile No</font>
						</td>
						<td>
							 <font color="#FF0000">Delete</font>
						</td>
					</tr>
					
					<tr align="center">
					<?php
						
						while($row=mysql_fetch_assoc($res))
						{	
							echo '<tr style="color:black;"><td align="center">'.$row['name'].' 
								  <td align="center">'.$row['user_name'].'								 								  
								  <td align="center">'.$row['password'].'
								  <td align="center">'.$row['confirg_password'].'
								  <td align="center">'.$row['email_id'].'
								  <td align="center">'.$row['mobile_no'].'
								  <td align="center"><a href="process_del_registration.php?id='.$row['id'].'"><input type="image" 		src="images/delete.png"></a>';
								  
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
</div><br><br><br><br><br>
<div id="footer_wrapper">
	<?php
include('A_footer.php');
?>
</div>
</body>
</html>
<?php
include('A_header.php');
?>

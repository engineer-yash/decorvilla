<?php
include('A_header.php');
?><br /><br /><br />

<?php 
include("includes/common.inc.php");

	$d=new dbo();
	
	$res=$d->get("select * from feedback");

?>




<div id="content_wrapper_outer">
  <div id="content_wrapper_inner">
    <div id="content_wrapper">
      <div id="content">
	
			<div id='fg_membersite'>
				
				<fieldset >
				<div align="center"><h2><legend><font color="#FF0000" size="+4"> Feedback</font></legend></h2></div>
					<table width="100%"  border="5" cellpadding="3" bordercolor="#000000">
					<tr align="center">
						<td>
							 <font color="#FF0000">first Name</font>
						</td>
						<td>
							 <font color="#FF0000"> last name</font>
						</td>
						
						<td>
							 <font color="#FF0000"> Message </font>
						</td>
						<td>
							 <font color="#FF0000"> Delete</font>
						</td>
					</tr>
					
					<tr align="center">
					<?php
						
						while($row=mysqli_fetch_assoc($res))
						{	
							echo '<tr style="color:black;"><td align="center">'.$row['first_name'].' 
								  <td align="center">'.$row['last_name'].'
								 								  
								  <td align="center">'.$row['message'].'
								  <td align="center"><a href="process_del_feedback.php?id='.$row['id'].'"><input type="image" 		src="images/delete.png"></a>';
								  
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

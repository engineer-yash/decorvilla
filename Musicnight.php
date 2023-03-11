<?php
	include('header.php');
	?><br>
	
	<?php
      include("includes/common.inc.php");
	$d=new dbo();
	
	$res=$d->get("select * from addimage");


?>
<table border="5" align="center" class="b">
  <tr  class="c" >
   <td><br><?php
  	
  ?></div>
  
	<?php
					while($row=mysqli_fetch_assoc($res))
					{if($row['event_type'] == 'Music Night'){

		 echo "<p align='center'><img src='Admin/uploads/7 Music Night/".$row['image_path']."'>";
			  echo "<p align='center'><font color ='red'>".$row['event_type']."";
			  echo "<p align='center'>Decoration Price  :   <font color ='red'>".$row['price']."";
			  echo "<p align='center'>Image_Sr_No  :   <font color ='red'>".$row['image_sr_no']."";
			  echo "<form action='ordern.php' align='center'> <input type='submit' name='btnoprder' value='Order Now'></form>";
			  echo "<p> </p>";
				}
				
				}
			?>
             
            </td>
			</tr>
			</table>
          </section>
      
      </div>
     </div>
	
<style>
.a
{
margin-left:600px;
}
.b
{
margin-left:180px;
margin-right:100px;
width:1000px;
height:700px;


}
.c
{
margin-right:30px;
}

</style>
  <body background="img/wallpaper2you_170176.jpg">  
  <br><br>
  <?php
include "user_question.php";
?>
<?php
  include('footer.php');
?>    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('A_header.php');
?>

<?php
include('A_connection.php');
if(isset($_REQUEST['submit']))
{

$sql="INSERT INTO addimage(id,image_path,event_type,price,image_sr_no) VALUES('','".$_REQUEST['image_path']."','".$_REQUEST['event_type']."','".$_REQUEST['price']."','".$_REQUEST['image_sr_no']."')";
$con -> query($sql);

}

?><br>
<br>
	<br>
	<div align="center">
	<form>
<table width="335" border="0">
  <tr>
    <td width="199"><font color="#000000">Image </font></td>
    <td width="378"><span class="textarea_box">
     <font color="#000000"> <input type="file"  name="image_path" id="image_path" value="Choose File"  /></font>
    </span></td>
  </tr>
  <tr>
    <td><font color="#000000">Event_Type</font></td>
    <td><select style="width: 170px; height: 23px;margin-left: 8px" name="event_type" id="event_type"/>
	<option value="Wedding">Wedding</option>
	<option value="Birthday">Birthday</option>
	<option value="Entertainment">Entertainment</option> 
	<option value="Reception">Reception</option>
	<option value="Path Way">Path Way</option>
	<option value="Dinner">Dinner</option> 
	<option value="Car">Car</option>
	<option value="Music Night">Music Night</option>
	<option value="Dance Flore">Dance Flore</option> 
	<option value="Water Party">Water Party</option>   </td>
  </tr>
  <tr>
    <td><font color="#000000">Decoration_Price</font></td>
    <td><input style="width: 170px; height: 20px;margin-left: 8px" name="price" id="price" required /></td>
  </tr>
  <tr>
    <td><font color="#000000">image_Sr_No</font></td>
    <td><input style="width: 170px; height: 20px;margin-left: 8px" name="image_sr_no"  id="image_sr_no" required /></td>
  </tr>
  <tr>
  <td    align="center" colspan="2">
  <input class="contact_button button" type="submit" name="submit" id="submit" value="Additem" />&nbsp;<a href="" class="button1">Clear</a>  </td>
              
    </tr>
</table>
</div><form>
</div>
<br>

      <!-- content -->
	  
<article id="content"></article>
    </div>
  </div>
</div>
</div><br /><br /><br />

<?php
include('A_footer.php');
?>

<script>Cufon.now();</script>
</body>
</html>

</body>
</html>

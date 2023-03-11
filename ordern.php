<?php
error_reporting(0);
 include ('connection.php');
 if(isset($_REQUEST['submit']))
{
$sql="INSERT INTO ordera(id,event_type,event_date,image_sr_no,your_budget,address,contact_person_name,contact_no) VALUES('','".$_REQUEST['event_type']."','".$_REQUEST['event_date']."','".$_REQUEST['image_sr_no']."','".$_REQUEST['your_budget']."','".$_REQUEST['address']."','".$_REQUEST['contact_person_name']."','".$_REQUEST['contact_no']."')";
$con -> query($sql);
header("location:paynow.php");

}

 ?>
<?php
include('header.php');
?><br /><br /><br /><br /><br />
<div align="center"><font color="#FF0000" size="+4">Order</font></div><br />
<table width="991" height="425" border="5" align="center" bgcolor="#D1D1D1">
  <tr>	


<form action="" name="order"  method="post">

 <td><table width="240" border="0" align="center"><br />
    
    <tr>
      <td width="177"><font color="#000000" size="+1">event type:</font></td>
    </tr>
    <tr>
      <td>
	  <div class="col-sm-10">
	  <input type="text" name="event_type" id="event_type" required /></div></td>
    </tr>
    <tr>
      <td><font color="#000000" size="+1">event date:</font></td>
    </tr>
    <tr>
      <td>
	  <div class="col-sm-10">
	  <input type="text" name="event_date" id="event_date" placeholder="DD/MM/YYYY" required /></div></td>
    </tr>
    <tr>
      <td><font color="#000000" size="+1">image sr no:</font></td>
    </tr>
    <tr>
      <td>
	  <div class="col-sm-10">
	  <input type="text" name="image_sr_no" id="image_sr_no" required /></div></td>
    </tr>
    <tr>
      <td><font color="#000000" size="+1">your budget:</font></td>
    </tr>
    <tr>
      <td>
	  <div class="col-sm-10">
	  <input type="text" name="your_budget" id="your_budget" required /></div></td>
    </tr>
    <tr>
      <td><font color="#000000" size="+1">address:</font></td>
    </tr>
    <tr>
      <td><div class="textarea_box" >
       <div class="col-sm-10">
	   <textarea cols="23" rows="5" name="address"></textarea></div>
     </div></td>
    </tr>
    <tr>
      <td><font color="#000000" size="+1">contact_person_name:</font></td>
    </tr>
    <tr>
      <td>
	  <div class="col-sm-10">
	  <input type="text" name="contact_person_name"  id="contact_person_name" required /></div></td>
    </tr>
    <tr>
      <td><font color="#000000" size="+1">contact_no:</font></td>
    </tr>
    <tr>
      <td>
	  <div class="col-sm-10">
	  <input type="text" name="contact_no"  id="contact_no" required /></div></td><br />
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="submit" value="Submit" />&nbsp;<input type="submit" name="submit" value="Reset"  style="background-color:#FFFFFF"/></td>
    </tr>
  </table>
</form>
</td>
</tr>
</table>
<br />
<?php
include"footer.php";
?>

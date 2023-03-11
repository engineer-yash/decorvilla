<?php
 include ('connection.php');
 if(isset($_REQUEST['btnsubmit']))
{

$sql="INSERT INTO paynow(id,location,full_name,address,add_line,city,state,zip,phone,email,card_no,exp_month,exp_year,cvv) VALUES('','".$_REQUEST['location']."','".$_REQUEST['full_name']."','".$_REQUEST['address']."','".$_REQUEST['add_line']."','".$_REQUEST['city']."','".$_REQUEST['state']."','".$_REQUEST['zip']."','".$_REQUEST['phone']."','".$_REQUEST['email']."','".$_REQUEST['card_no']."','".$_REQUEST['exp_month']."','".$_REQUEST['exp_year']."','".$_REQUEST['cvv']."')";
$con -> query($sql);
header("location:home.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title></head>
</html>
L
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>

<body>

<?php
   include "header.php";
   ?><br /><br /><br /><br /><br />
   
   <form action="" method="post">
   
<div align="center"><font color="#FF0000" size="+4">CheckOut Form</font></div><br />

<table width="991" height="621" border="5" align="center" bgcolor="#D1D1D1" >
<tr>
<td>
<table width="603" height="545" border="0" align="center"><br />
  <tr>
    <td width="205"><div align="center"><font color="#000000" size="+3">Billing Address</font> </div></td>
    <td width="191">&nbsp;</td>
    <td width="193"><font color="#000000" size="+3">Payment Method</font> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><font color="#000000"><img src="Admin/images/icons8-house-24.png" width="24" height="24" longdesc="Admin/images/icons8-house-24.png" /> Location</font>
	  <div class="col-sm-10"> 
      <input type="text" id="location" name="location" placeholder="contry" required />
	  </div>	  </td>
    <td>&nbsp;</td>
    <td><img src="Admin/images/amex.png" width="48" height="48" longdesc="Admin/images/amex.png" /><img src="Admin/images/visa.png" width="48" height="48" longdesc="Admin/images/visa.png" /><img src="Admin/images/mastercard.png" width="48" height="48" longdesc="Admin/images/mastercard.png" /><img src="Admin/images/discover.png" width="48" height="48" longdesc="Admin/images/discover.png" /></td>
  </tr>
  <tr>
    <td height="29"><font color="#000000"><img src="Admin/images/icons8-user-24.png" width="24" height="24" longdesc="Admin/images/icons8-user-24.png" /> Full Name</font>
	  <div class="col-sm-10"> 
      <input type="text" id="full_name" name="full_name" placeholder="your name" required />
	  </div>	  </td>
    <td>&nbsp;</td>
    <td><font color="#000000">Card Number</font>
	<div class="col-sm-10"> 
      <input type="text" id="card_no" name="card_no" placeholder="0000-0000-0000-0000" required />
	  </div>	  </td>
  </tr>
  <tr>
    <td><font color="#000000"><img src="Admin/images/icons8-home-address-24.png" width="24" height="24" longdesc="Admin/images/icons8-home-address-24.png" /> Address</font>
	  <div class="col-sm-10"> 
      <input type="text" id="address" name="address" placeholder="address" required />
	  </div>	  </td>
    <td>&nbsp;</td>
    <td><font color="#000000">Exp Month</font>
	<div class="col-sm-10"> 
      <input type="text" id="exp_month" name="exp_month" placeholder="MM" required />
	  </div>	  </td>
  </tr>
  <tr>
    <td><font color="#000000"><img src="Admin/images/icons8-home-address-24.png" width="24" height="24" longdesc="Admin/images/icons8-home-address-24.png" /> Address line 2</font>
	<div class="col-sm-10"> 
    <input type="text" id="add_line" name="add_line" placeholder="line 2" />
	<div class="col-sm-10">	</td>
    <td>&nbsp;</td>
    <td><font color="#000000">Exp Year</font>
	<div class="col-sm-10"> 
      <input type="text" id="exp_year" name="exp_year" placeholder="YYYY" required />
	  <div class="col-sm-10">	  </td>
  </tr>
  <tr>
    <td><font color="#000000"><img src="Admin/images/icons8-city-24.png" width="24" height="24" longdesc="Admin/images/icons8-city-24.png" /> City</font>
	  <div class="col-sm-10"> 
      <input type="text" id="city" name="city" placeholder="city" required />
	  </div>	  </td>
    <td>&nbsp;</td>
    <td><font color="#000000">CVV</font> 
	<div class="col-sm-10">        
      <input type="text" id="cvv" name="cvv" placeholder="cvv" required />
	  <div class="col-sm-10">	  </td>
  </tr>
  <tr>
    <td><font color="#000000"><img src="Admin/images/icons8-museum-24.png" width="24" height="24" longdesc="Admin/images/icons8-museum-24.png" /> State</font>
	  <div class="col-sm-10"> 
      <input type="text" id="state" name="state" placeholder="state" required />
	  </div>	  </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><font color="#000000"><img src="Admin/images/icons8-zip-code-24.png" width="24" height="24" longdesc="Admin/images/icons8-zip-code-24.png" /> Zip Code</font>
	  <div class="col-sm-10"> 
      <input type="text" id="zip" name="zip" placeholder="000000" required />
	  </div>	  </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><font color="#000000"><img src="Admin/images/icons8-phone-24.png" width="24" height="24" longdesc="Admin/images/icons8-phone-24.png" /> Phone</font>
	  <div class="col-sm-10"> 
      <input type="text" id="phone" name="phone" placeholder="00+0000000000" required />
	  </div>	  </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><font color="#000000"><img src="Admin/images/icons8-new-post-24.png" width="24" height="24" longdesc="Admin/images/icons8-new-post-24.png" /> Email</font>
	  <div class="col-sm-10"> 
      <input type="text" id="email" name="email" placeholder="abc@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required />
	  </div>	  </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3"><input type="submit" value="Continue to checkout" class="btn" id="btnsubmit" name="btnsubmit" style="background-color:#FFFFFF"></td>
    <td>&nbsp;</td>
  </tr>
</table></td>
</tr>

</table>
</form>

</body>
</html>


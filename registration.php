<?php
 include ('connection.php');
 if(isset($_REQUEST['btnsubmit']))
{

$sql="INSERT INTO registration(id,name,user_name,password,confirg_password,email_id,mobile_no) VALUES('','".$_REQUEST['name']."','".$_REQUEST['user_name']."','".$_REQUEST['password']."','".$_REQUEST['confirg_password']."','".$_REQUEST['email_id']."','".$_REQUEST['mobile_no']."')";
$con -> query($sql);
header("location:inspirations.php");
}

?>

  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
     <?php
   include "header.php";
   ?>

	<br /><br /><br /><br /><br />
<div align="center"><font color="#FF0000" size="+4">Registration Form </font></div>
<table width="991" height="421" border="5" align="center" bgcolor="#D1D1D1">
  <tr>	
<form name="registration" action="" method="post">
  <div align="center"><br />
  
    <td><table width="155" border="0" align="center">
      <tr>
        <td width="149" ><font color="#000000"><img src="Admin/images/username.png" width="24" height="24" longdesc="Admin/images/username.png" />Your_Name</font></td>
    </tr>
	 <tr>
    <td>
	<div class="col-sm-10">
	<input type="text" name="name" id="name" required /></div></td>
  </tr>
      <tr>
        <td><font color="#000000"><img src="Admin/images/icons8-user-24.png" width="24" height="24" longdesc="Admin/images/icons8-user-24.png" />Your_Username</font></td>
    </tr>
	<tr>
    <td>
	<div class="col-sm-10">
	<input type="text" name="user_name" id="user_name" required /></div></td>
  </tr>
      <tr>
        <td><font color="#000000"><img src="Admin/images/icons8-password-24.png" width="24" height="24" longdesc="Admin/images/icons8-password-24.png" />Your_Password</font></td>
    </tr>
	<tr>
   <td>
   <div class="col-sm-10">
   <input type="password" name="password" id="password" required /></div></td>
  </tr>
	<tr>
        <td><font color="#000000"><img src="Admin/images/icons8-password-24.png" width="24" height="24" longdesc="Admin/images/icons8-password-24.png" />Confirg_Password</font></td>
    </tr>
	<tr>
    <td>
	<div class="col-sm-10">
	<input type="password" name="confirg_password" id="confirg_password" required /></div></td>
  </tr>
      <tr>
        <td><font color="#000000"><img src="Admin/images/icons8-new-post-24.png" width="24" height="24" longdesc="Admin/images/icons8-new-post-24.png" />Your_Email_id</font></td>
    </tr>
	<tr>
   <td>
   <div class="col-sm-10">
   <input type="text" name="email_id"  id="email_id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required /></div></td>
  </tr>
      <tr>
        <td><font color="#000000"><img src="Admin/images/icons8-phone-24.png" width="24" height="24" longdesc="Admin/images/icons8-phone-24.png" />Your_Mobile_no</font> </td>
    </tr>
	<tr>
    <td>
	<div class="col-sm-10">
	<input type="text" name="mobile_no"  id="mobile_no"required /></div></td>
  </tr>
  
      <tr>
        <td height="68" align="center" colspan="2"><input type="submit" name="btnsubmit" value="Registration" style="background-color:#FFFFFF"/> &nbsp;&nbsp;&nbsp;<input type="submit" name="btnsubmit" value="Reset" style="background-color:#FFFFFF"/>       </td>
    </tr>
    </table>
  </div>
</form>
</td>
</tr>
</table>

   <?php
   include "footer.php";
   ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>





   
       
 

  


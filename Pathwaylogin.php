
 <?php
include('A_connection.php');
if(isset($_REQUEST['submit']))
{

$sql="INSERT INTO registration(id,user_name,password) VALUES('','".$_REQUEST['user_name']."','".$_REQUEST['password']."')";
$con -> query($sql);
header("location:Pathway.php");

}
?>

    <!-- Navigation -->
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
    

    <!-- Page Content -->
	<div align="center"><font color="#FF0000" size="+4">Login Form </font></div>
<table width="991" height="321" border="5" align="center" bgcolor="#D1D1D1">
  <tr>	
<form name="registration" action="process_Pathwaylogin.php" method="post">
  <div align="center"><br />
  
    <td><table width="155" border="0" align="center">
     
      <tr>
        <td><font color="#000000" size="+1"><img src="Admin/images/icons8-user-24.png" width="24" height="24" longdesc="Admin/images/icons8-user-24.png" />Username</font></td>
    </tr>
	<tr>
    <td>
	<div class="col-sm-10">
	<input type="text" name="user_name" id="user_name"  placeholder="username" required /></div></td>
  </tr>
  <tr>
  <td>&nbsp; </td>
  </tr>
   <tr>
        <td width="149" ><font color="#000000" size="+1"><img src="Admin/images/icons8-password-24.png" width="24" height="24" longdesc="Admin/images/icons8-password-24.png" />Password</font></td>
    </tr>
	 <tr>
    <td>
	<div class="col-sm-10">
	<input type="password" name="password" id="password"  placeholder="password" required /></div></td>
  </tr>
  <tr>
  <td>&nbsp; </td>
  </tr>
      <tr>
        <td height="68" align="center" colspan="2"><input type="submit" value="Login" class="btn" id="submit" name="submit" style="background-color:#FFFFFF"> </td>
    </tr>
    </table>
  </div>
</form>
</td>
</tr>
</table><br> 
    <!-- /.container -->
 
  <?php
   include "footer.php";
   ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>





    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>

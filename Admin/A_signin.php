<?php
include"head.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>



<?php
include('A_connection.php');
if(isset($_REQUEST['submit']))
{

$sql="INSERT INTO a_login(id,user_name,password) VALUES('','".$_REQUEST['user_name']."','".$_REQUEST['password']."')";
$con -> query($sql);

}
?>
    <!-- Navigation -->
     <br><br><br><br><br><br>

    <!-- Page Content -->
	
	<!--<article id="content">
        <div class="wrap">
          <div class="box">
            <div>
             <div align="center">
             <form name="" action="process_login.php" method="post">
                <tr>
   				 <td><font color="#000000">User Name</font></td><br>
  				  <td><input type="text" name="user_name" placeholder="username" /></td>
  				</tr>
    			 <tr>
					<td><br><font color="#000000">Password</font></td><br>
    		<td><input type="password" name="password" placeholder="password" /></td>
  </tr><br><br>
  
				  <input type="submit" class="button" name="submit" value="Login" />
              </form>
			  </div>
            </div>
          </div>
        </div>
      </article>-->
    <!-- /.container -->

</head>
<body>

<div class="container">
  
  <form action="process_login.php">
    <div class="form-group">
      <font color="#000000" size="+3">&nbsp;&nbsp;User name</font>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="user_name" placeholder="Enter User Name" name="user_name">
      </div>
    </div>
    <div class="form-group">
      <font color="#000000" size="+3">&nbsp;&nbsp;Password</font>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
       
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"><font size="+2">Submit</font></button>
      </div>
    </div>
  </form>
</div>

</body>


    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>

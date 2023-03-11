<?php
include('head.php');
?><br><br><br>
<?php 
include("includes/common.inc.php");

if(empty($_POST)) { header("location:Wedding.php");}
		
		
		$msg = array();
		
		if(empty($_POST['user_name']))
		{
			$msg[]="PLEASE ENTER USER NAME";
		}
		if(empty($_POST['password']))
		{
			$msg[]="PLEASE ENTER PASSWORD"; 
		}
				
		if(!empty($msg))
		{
			foreach($msg as $i)
			{
				echo "<li>".$i;
				echo "<li>".$i;
			}
		}
		else
		{
		
			$d = new dbo();
			$res = $d->get("select * from registration where user_name = '".$_POST['user_name']."' and password = '".$_POST['password']."'");
			
				if(mysqli_num_rows($res) > 0)
				{
					$row = mysqli_fetch_assoc($res);
		
					$_SESSION["user_name"] = $row['user_name'];
					$_SESSION["id"] = $row["id"];
					$_SESSION["status"]=true;
					//header("location: ".$_POST["return_url"]);
					header("location:Wedding.php");
					
				}
				else
				{	
					echo "&nbsp;&nbsp;&nbsp;<p><li align='center'><font color='black' size='+2'>Wrong Username & Password Combination";
					echo "&nbsp;&nbsp;&nbsp;<p><li align='center'>Username & Password Same  As Registration";
					 echo "<p><form action='Weddinglogin.php' align='center'> <input type='submit' name='btnlogin' value='Login Now'></form>";
				}
			}
		
?><br><br><br><br><br><br><br><br><br>
<?php
include('footer.php');
?>


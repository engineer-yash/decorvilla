<?php 
include("includes/common.inc.php");

if(empty($_POST)) { header("location: A_home.php");}
		
		
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
			}
		}
		else
		{
		
			$d = new dbo();
			$res = $d->get("select * from a_login where user_name = '".$_POST['user_name']."' and password = '".$_POST['password']."'");
			
				if(mysql_num_rows($res) > 0)
				{
					$row = mysql_fetch_assoc($res);
		
					$_SESSION["user_name"] = $row['user_name'];
					$_SESSION["id"] = $row["id"];
					$_SESSION["status"]=true;
					//header("location: ".$_POST["return_url"]);
					header("location:A_home.php");
					
				}
				else
				{	
					echo "<li>Wrong Username & Password Combination";
				}
			}
		
?>
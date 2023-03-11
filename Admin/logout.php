<?php
include("includes/common.inc.php");

	session_start();
	$_SESSION=array();
	
	header("location:A_signin.php");
?>
<?php 
include("includes/common.inc.php");


	if(!isset($_GET['id'])) { header("location:registration.php"); }
	
	$d = new dbo();
	$d->dml("delete from registration where id = ".$_GET['id']);
	header("location:A_registration.php");

?>
<?php 
include("includes/common.inc.php");


	if(!isset($_GET['id'])) { header("location: A_di.php"); }
	
	$d = new dbo();
	$d->dml("delete from addimage where id = ".$_GET['id']);
	header("location: A_di.php");

?>
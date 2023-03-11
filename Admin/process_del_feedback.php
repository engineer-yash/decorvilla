<?php 
include("includes/common.inc.php");


	if(!isset($_GET['id'])) { header("location:feedback.php"); }
	
	$d = new dbo();
	$d->dml("delete from feedback where id = ".$_GET['id']);
	header("location:A_feedback.php");

?>
<?php 
include("includes/common.inc.php");


	if(!isset($_GET['id'])) { header("location:paynow.php"); }
	
	$d = new dbo();
	$d->dml("delete from paynow where id = ".$_GET['id']);
	header("location:A_pay.php");

?>
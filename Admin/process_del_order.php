<?php 
include("includes/common.inc.php");


	if(!isset($_GET['id'])) { header("location:ordera.php"); }
	
	$d = new dbo();
	$d->dml("delete from ordera where id = ".$_GET['id']);
	header("location:A_order.php");

?>
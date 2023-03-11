<?php 
include("includes/common.inc.php");


	if(!isset($_GET['id'])) { header("location:user_question.php"); }
	
	$d = new dbo();
	$d->dml("delete from user_question where id = ".$_GET['id']);
	header("location:A_user_question.php");

?>
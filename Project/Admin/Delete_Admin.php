<?php 

include('../includes/adminClass.php');
   	$x = new admin();
	$id =$_GET['id'];

	$x->delete($id);

	header("location:Admins_Management.php");
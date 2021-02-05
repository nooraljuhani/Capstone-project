<?php 

include('../includes/customerClass.php');
   	$c = new customer();
	$id =$_GET['id'];

	$c->delete($id);

	header("location:Customer_Management.php");
	?>
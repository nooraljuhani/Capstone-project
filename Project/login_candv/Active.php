<?php 

include('../includes/vendorClass.php');
   	$c = new vendor();
	$id =$_GET['id'];

	$c->active($id);
	$active++;

	header("location:Vendor_Management.php");
	?>
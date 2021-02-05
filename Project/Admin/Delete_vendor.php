<?php 

include('../includes/vendorClass.php');
   	$x = new vendor();
	$id =$_GET['id'];

	$x->delete($id);

	header("location:Vendor_Management.php");
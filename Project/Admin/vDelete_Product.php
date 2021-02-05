<?php 

include('../includes/prodectClass.php');
   	$x = new product();
	$id =$_GET['id'];

	$x->delete($id);

	header("location:prodect.php");
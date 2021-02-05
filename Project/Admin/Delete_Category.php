<?php 

include('../includes/categoryClass.php');
   	$x = new category();
	$id =$_GET['id'];

	$x->delete($id);

	header("location:Category_Management.php");
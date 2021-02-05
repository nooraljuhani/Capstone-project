<?php 

include('../includes/order.php');
   	$x = new order();
	$id =$_GET['id'];

	$x->delete($id);

	header("location:Orders.php");
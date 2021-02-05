<?php
session_start();
$id=$_GET['id'];
echo $id;
foreach ($_SESSION['cart'] as $key => $value) 
{   
	if ($key==$id) 
	{
		unset($_SESSION['cart'][$key]);
		header("location:shoping-cart.php");
	}
}
?>
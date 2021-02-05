<?php
include('connection.php');
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.png" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">

<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">

<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body class="animsition" style="background: #fff">

<section class="section-slide">
<div class="wrap-slick1">
<div class="slick1">
<div class="item-slick1" style="background-image: url(images/nn5.jpg);padding-top: 50px" >
<div class="container h-full">
<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
<span class="ltext-101 cl2 respon2" style="color: #fff">
Women Collection 2021
</span>
</div>
<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="color:red">
NEW SEASON
</h2>
</div>
<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
<a href="../login_candv/slogin.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
Shop Now
</a>
</div>
</div>
</div>
</div>
<div class="item-slick1" style="background-image: url(images/n9.jpg);">
<div class="container h-full">
<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
<span class="ltext-101 cl2 respon2" style="color: #fff">
Men Collection 2021
</span>
</div>
<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="color: red">
NEW SEASON
</h2>
</div>
<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
<a href="../login_candv/slogin.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
Shop Now
</a>
</div>
</div>
</div>
</div>
<div class="item-slick1" style="background-image: url(images/nn6.jpeg);">
<div class="container h-full">
<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
<span class="ltext-101 cl2 respon2" style="color: #fff">
Makeup Collection 2021
</span>
</div>
<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="color: red">
New Brand
</h2>
</div>
<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
<a href="../login_candv/slogin.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
Shop Now
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!--category-->
<div class="sec-banner bg0 p-t-80 p-b-50">
<div class="container">
<div class="row">
<?php
$query="select * from category";
$result=mysqli_query($conn,$query);
while ($row=mysqli_fetch_assoc($result))
{

 ?>
<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
<div class="block1 wrap-pic-w">
<?php
	echo "<img src='../Admin/image/{$row['cat_image']}' width='512' height='234' alt='IMG-BANNER'>";

echo "<a href='product.php?id={$row['cat_id']}' class='block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3'> "; 
?>
<div class="block1-txt-child2 p-b-4 trans-05">
<span class="block1-name ltext-102 trans-04 p-b-8">
<?php echo $row['cat_name']; ?>
</span>
<div>
<div class="block1-link stext-101 cl0 trans-09">
Shop Now
</div>
</div>
</div>
</a>
</div>
</div>
<?php } ?>
</div>
</div>
</div>
<!--category-->

<!--Product-->
<section class="bg0 p-t-23 p-b-140" >
<div class="p-b-10">
<h3 class="ltext-103 cl5 ml-5 mb-5">
Product Overview
</h3>
</div>
<div class="ltext-103 cl5">
<div class="container">
<div class="row">
	
<?php
$query="select * from product LIMIT 24";
$result=mysqli_query($conn,$query);
while ($row=mysqli_fetch_assoc($result))
{

 ?>
<div class="col-sm-4 col-md-4 col-lg-3 p-b-35 ">
<div class='block2-pic hov-img0'>
<?php

	echo"<img src='../Admin/image/{$row['image']}' width='512' height='234' alt='IMG-BANNER'><br><br>";
echo	"<span class='block1-name h6 trans-04 p-b-8 '>
{$row['name']}<br>
 {$row['price']}$
</span>";
?>

</div>
</div>
<?php } ?>
</div>
</div>
</div>
</section>
<?php  include('footer1.php') ?>
<?php
include('connection.php');
session_start();
$id = isset($_GET['id']) ? $_GET['id'] : '';
if(isset($_POST['add'])){
$_SESSION['cart'][$id]=$_POST['num'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Product Detail</title>
<style type="text/css">
.scroll-area{
  width:100%;
  height:calc(100% - 200px);
  float:left;
  overflow-y:scroll;
}

	div.h a.d:before
{
    position: absolute;
    width: 50%;
    height: 2px;
    left: 0px;
    bottom: 0px;
    content: '';
    background: #FFF;
    opacity: 0.3;
    transition: all 0.3s;
   
}

div.h a.d:hover:before
{
    height: 100%;
}



</style>
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


<div class="p-b-5">
<div class="">
<div class="row" style="margin-left: 10px;width: 2700px">
<a href="index.php"><img src="../Admin/image/iii.png" width="40px"></a>
<?php
$query="select * from category";
$result=mysqli_query($conn,$query);
while ($row=mysqli_fetch_assoc($result))
{
 ?> 
<div class="col-md-2 col-xl-1 p-b-10 h" style="background: #15181f;color:#fff;font-family:Cursive;font-size:16px; ">
<?php
 echo $row['cat_name'];
echo "<a href='product.php?id={$row['cat_id']}' class=' ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3 d'> "; 
?>

</a>
</div>
<?php } ?>
</div>
</div>
</div>

<div class="container-menu-desktop" >
<div class="wrap-menu-desktop how-shadow1" >
<nav class="limiter-menu-desktop container ">
<div class="wrap-icon-header flex-w flex-r-m ">

	<?php
if(isset($_SESSION['cart'])){
	 echo "
<div class='icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 mt-3 icon-header-noti js-show-cart '
 data-notify='{$_SESSION['count']}'>
<i class='zmdi zmdi-shopping-cart'></i></div>";}
else{echo"<i class='zmdi zmdi-shopping-cart'></i>";}
 ?>
</div>
</nav>
</div>
</div>
<div class=" wrap-header-cart js-panel-cart" >
<div class="header-cart  p-l-65 p-r-25 scroll-area" >
<div class="header-cart-title flex-w flex-sb-m p-b-8" >
<span class="mtext-103 cl2 ">
Your Cart
</span>
</div>


<?php
 $c=1;
  foreach ($_SESSION['cart'] as $k=> $v) {
 $query  = "select * from product where pro_id=$k";
 $result = mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($result)) {
?>
<div class="product-item" >
<form method="post" action="" enctype="multipart/form-data" >
<div class="product-image ">
<?php echo"<img src='../Admin/image/{$row['image']}' width='100' hight='140'/>"?></div>
<div class="product-tile-footer">
<div class="product-title"><?php echo $row["name"]; ?></div>
<div class="product-price"><?php echo "$".$row["price"];
$c++;
 ?></div>
</div>
</form>
</div>

<?php
}}
$_SESSION['count']=$c;

?>
<div class="header-cart-buttons flex-w w-full">
<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 btn-outline-success p-lr-15 trans-04 m-r-8 m-b-10">
View Cart
</a>
<a href="../login_candv/login.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 btn-outline-success p-lr-15 trans-04 m-b-10">
Check Out
</a>

</div>
</div>
</div>

<div class="container">
<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
</div>
</div>

<section class="sec-product-detail bg0 p-t-65 p-b-60">
<div class="container">
<div class="row">
<div class="col-md-6 col-lg-7 p-b-30">
<div class="p-l-25 p-r-30 p-lr-0-lg">
<div class="wrap-slick3 flex-sb flex-w">
<div class="wrap-slick3-dots"></div>
<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
<div class="size-204 respon6-next">
</div>
</div>
	<?php
 $query  = "select * from product where pro_id=$id";
  $result = mysqli_query($conn,$query);
 while($row = mysqli_fetch_assoc($result)){
 	?>	
<div class="item-slick3" style="margin-top:30px;">

<?php echo"<img src='../Admin/image/{$row['image']}' width='300' hight='300'/>"?>
<span style="margin-left: 20px;color: black" class="h4"><?php echo "{$row['name']}";?></span>
<span style="margin-left: 20px;color: green"class="h5"><?php  echo "$"."{$row['price']}"?></span>
<span style="margin-left: 20px ;color: red"class="h6"><?php echo "{$row['pro_desc']}";?></span>

</div>
</div>
<?php } ?>
</div>

<form method="post">
<div class="flex-w flex-r-m p-b-10">
<div class="size-204 respon6-next" style="margin-top: 240px">
<div class="wrap-num-product flex-w m-r-20 m-tb-10">
<div class="btn-num-product-down cl8  btn-outline-danger trans-04 flex-c-m">
<i class="fs-16 zmdi zmdi-minus"></i>
</div>
<input class="mtext-104 cl3 txt-center num-product" type="number" name="num" value="1">
<div class="btn-num-product-up cl8  btn-outline-success trans-04 flex-c-m">
<i class="fs-16 zmdi zmdi-plus"></i>
</div>
</div>
<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1  btn-outline-success p-lr-15 trans-04 js-addcart-detail" name ="add">
Add to cart
</button>
</div>
</div>
</div>
</form>
<div class="header-cart-buttons flex-w w-full ml-4">
<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 btn-outline-success p-lr-15 trans-04 m-r-8 m-b-10">
View Cart
</a>
<a href="../login_candv/login.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 btn-outline-success p-lr-15 trans-04 m-b-10">
Check Out
</a>

</div>
<div class="flex-w flex-m p-l-100 p-t-40 respon7">
<div class="flex-m bor9 p-r-10 m-r-11">

</div>
<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="N&Nstore">
<i class="fa fa-facebook"></i>
</a>
<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="N&Nstore">
<i class="fa fa-twitter"></i>
</a>
<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="N&Nstore">
<i class="fa fa-google-plus"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<?php include('footer1.php')?>
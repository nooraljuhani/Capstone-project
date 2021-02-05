<?php
include('connection.php');

$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Vendors</title>

<style type="text/css">
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
<div class="row h" style="margin-left: 20px;width: 2700px">
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

<div class="sec-banner" style="margin-top: 100px;">
<div class="container ">
<div class="row">
<?php
 $query  = "select * from vendor where $id=vendor.cat_id";
  $result = mysqli_query($conn,$query);
 while($row = mysqli_fetch_assoc($result)){
 	?>

<div class="block2-pic  p-t-14 p-l-50 ">
<?php echo"<img src='../Admin/image/{$row['ven_img']}' width='250px' hight='200px'/><br>
<a href='product2.php?id={$row['ven_id']}' class='block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 btn btn-outline-dark p-lr-15 trans-04' >
 View
</a>";?>

<div class="block2-txt flex-w flex-t p-t-14">
<div class="block2-txt-child1 flex-col-l  ">
<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
<?php echo "{$row['ven_name']}";?>
</a>
<span class="stext-105 cl3">
<?php  echo "{$row['ven_add']}"?>
</span>
</div>
</div>
</div>
<?php }?>
</div>
</div>
</div>

</div>
<div class="block2-txt-child2 flex-r p-t-3">
<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
</a>
</div>
</div>
</div>
</div>
</div>


</div>
</div>

<?php include('footer1.php');?>
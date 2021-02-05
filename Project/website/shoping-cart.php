<?php
session_start();
$id = isset($_SESSION['c_id']);
include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Shoping Cart</title>

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

<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body class="animsition" style="background: #fff">




<div class="p-b-5">
<div class="">
<div class="row" style="margin-left: 20px;width: 2700px">
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


<form class="bg0 p-t-75 p-b-85" method="post" action="" enctype="multipart/form-data" style="margin-top: 100px">
<div class="container">
<div class="row">
<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
<div class="m-l-25 m-r--38 m-lr-0-xl">
<div class="wrap-table-shopping-cart">
<table class="table-shopping-cart">
<tr class="table_head">
<th class="column-1">Product</th>
<th class="column-2"></th>
<th class="column-3">Price</th>
<th class="column-4">Quantity</th>
<th class="column-5">Total</th>
<th class="column-5">Remove</th>

</tr>

<?php
$total=0;
$Subtotal=0;
if(isset($_SESSION['cart'])){
foreach ($_SESSION['cart'] as $k=> $v) {
 $query  = "select * from product where pro_id='$k'";
 $result = mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($result);
 	
echo"<tr class='table_row'>
<td class='column-1'>
<div class='how-itemcart1'>
<img src='../Admin/image/{$row['image']}' width='100' hight='140'/>'
</div>
</td>
<td class='column-2'> {$row['name']}</td>
<td class='column-3'>  {$row['price']}</td>
<td class='column-4'>


<input class='column-4' type='number' name='num' value='$v'>

</td>";
echo"<td class='column-5 text-success'> $";
echo $total=$row['price']*$v;
echo "<td class='column-6'><a href='delete.php?id={$row['pro_id']}' class='btn btn-danger'>Remove</a></td>";
$Subtotal+=$total;

echo "</td></tr>";
}
}
 if($Subtotal>=1000&&$Subtotal<2500){
echo "<div class='text-danger  text-center h4'> -You got a 25% discount because your bill exceeded $1000- </div>";
$p=75;
$Subtotal=$Subtotal*($p/100);
}
else{
	echo "<div class='text-danger  text-center h5'> -You can get 30% discount if you exceed $ 2500 and 25% if you exceed $ 1000- </div>";
}

if($Subtotal>=2500){
echo "<div class='text-danger  text-center h4'> -You got a 30% discount because your bill exceeded $2500- </div>";
$p=70;
$Subtotal=$Subtotal*($p/100);
}

?>
</table>
</div>
</div>

</div>
<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
<h4 class="mtext-109 cl2 p-b-30">

</h4>
<div class="flex-w flex-t bor6 p-b-13">

<div class="flex-w">
<div class="flex-c-m stext-101 cl2 size-115 ">
Total:<?php echo "$"." ".$Subtotal;?><br><br>
</div>

<?php
if(isset($_SESSION['c_id']))
{
echo"<a href='success1.php'>
	<div class='flex-c-m stext-101 cl2 size-115 bg8 bor10 btn-outline-success p-lr-10 trans-04 pointer'>
Proceed to Checkout
</div>
</a>";}
else{
echo"<a href='../login_candv/login.php'>
	<div class='flex-c-m stext-101 cl2 size-115 bg8 bor10 btn-outline-success p-lr-10 trans-04 pointer mt-5'>
Proceed to Checkout
</div>
</a>";}
?>
<div class="shadow-lg  mb-5 bg-white rounded" style="color: red;font-family: Cursive">Paiement when recieving<img src="image/2cc.png" height="80px"></div>
</div>
</div>
</div>
</div>



</div>
</div>
</div>
</div>
</form>

</form>
</div>
</div>

</div>


<?php include('footer1.php')?>
</body>


</html>
<?php
session_start();
include('connection.php');
$id = $_SESSION['c_id'];
$query1="insert into orders(c_id)values($id)";
$result1=mysqli_query($conn,$query1); 
$query2="select * from orders ORDER BY order_id DESC LIMIT 1";
$result2=mysqli_query($conn,$query2); 
$row1=mysqli_fetch_assoc($result2);
$oid=$row1['order_id'];
foreach ($_SESSION['cart'] as $k => $v) {
$query4  = "select * from product where pro_id=$k";
$result4 = mysqli_query($conn,$query4);
 $row3 = mysqli_fetch_assoc($result4);
 $total=$row3['price']*$v;
$q3="insert into item_order (pro_id,total,qty,order_id)values ($k,'$total',$v,$oid)";
$result3=mysqli_query($conn,$q3);
}
unset($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Shoping Cart</title>
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
<body class="animsition">



<div class="container">
<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
<a href="shoping-cart.php" class="stext-109 cl8 hov-cl1 trans-04">
Shoping Cart
<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
</a>
<span class="stext-109 cl4">
Success
</span>
</div>
</div>

<form class="bg0 p-t-75 p-b-85" method="post" enctype="multipart/form-data">
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
</tr>

<?php
$Subtotal=0;
 $query  ="SELECT * From product,item_order WHERE item_order.pro_id=product.pro_id";
			
  $result = mysqli_query($conn,$query);
  while($row = mysqli_fetch_assoc($result))
  {
echo"<tr class='table_row'>
<td class='column-1'>
<div class='how-itemcart1'>
<img src='../Admin/image/{$row['image']}' width='100' hight='140'/>
</div>
</td>
<td class='column-2'> {$row['name']}</td>
<td class='column-3'>  {$row['price']}</td>
<td class='column-4'>-$v-</td>
</div>
</td>";
echo"<td class='column-5 text-success'> $";
echo $total=$row['price']*$v;
$Subtotal+=$total;
echo "</td></tr>";

}

?>
</table>
<div class="flex-c-m stext-101 cl2 size-115  bor10   ">
Total:<?php echo "$"." ".$Subtotal;?><br>

</div>

</div>
</div>

</div>

<div class="flex-c-m stext-101 cl2 size-115 bg8 bor10 hov-btn3 p-lr-15 trans-04 pointer">
<a href="index.php">

	Back to shop
</a>
</div>
<form method="post">
<div class="flex ">
	<a href="success1.php">

<div class="flex-c-m stext-101 cl2 size-115 bg8 bor10 hov-btn3 p-lr-15 trans-04 pointer  js-addcart-detail" style="background-color: black;color: #fff">

BUY
</div>
</div>
</div>
</form>
</a>
</div>
</div>
</div>
</div>
</form>


<?php include('footer1.php');?>


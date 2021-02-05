<?php 
session_start();
include('connection.php');
$Subtotal=0;
if(isset($_SESSION['cart'])){
  $query2="select * from orders ORDER BY order_id DESC LIMIT 1";
$result2=mysqli_query($conn,$query2); 
$row1=mysqli_fetch_assoc($result2);
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
 $Subtotal+=$total;
$q3="insert into item_order (pro_id,total,qty,order_id)values ($k,'$total',$v,$oid)";
$result3=mysqli_query($conn,$q3);
}
unset($_SESSION['cart']);
}

/*else
{
   
  header("location:index.php");
}
*/
if(isset($_POST['submit'])){

header("location:index.php");
unset($_SESSION['cart']);
}
?>


<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #000;
      }
        h1 , .order{
          color: #660033;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        .order{
          color: #660033;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size: 30px;
          margin-bottom: 10px;
        }
        p {
          color: #b30059;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body style=" background-image: url('../Admin/image/sc.jpg')">
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>Thank you, our dear customer we have received your request<br/> and it will arrive with 3 days</p>
       <br>
        <p class="order">Total:<?php echo "$"." ".$Subtotal;?></p><br>
        <p class="order">Your Order ID : <?php echo $row1['order_id'] ?></p>
        <br>
       <form method="post" action="" >
         <input type="submit" class="btn btn-dark" name="submit"  value="Back To Shop">
           <a href="logout.php" >
   <button class="btn btn-dark" type="button" >
    Logout
   </button>
 </a>
       </form >
       
      </div>
    </body>
</html>
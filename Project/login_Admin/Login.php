<?php
   session_start();
   include('../includes/adminClass.php');
   $x = new admin();
   $email="";
   $password="";

    if(isset($_POST['login'])){
      
        
    
    $email = $_POST['email'];
    $password  = $_POST['password'];
    $q=$x->login($email,$password);
   
    
    if($q)
{
         $row=$q[0];
         $_SESSION['id']=$row['admin_id'];
         $_SESSION['admin_name']=$row['name'];
     
         header("location:../Admin/Admins_Management.php");
}
    else
      {
        $error="Uncorrect Username Or Password";
      }
}

 ?>






<!DOCTYPE html>
<html lang="en">
<!-- head start-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin_Login</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
      <link href="css/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
<style type="text/css">
  body {
  font-size: 14px;
  line-height: 1.8;
  color: #222;
  font-weight: 400;
  font-family: 'Montserrat';
  background-image: url("images/3.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  -moz-background-size: cover;
  -webkit-background-size: cover;
  -o-background-size: cover;
  -ms-background-size: cover;
  background-position: center center;
  padding: 115px 0; }

</style>
</head>
<!-- head end-->

<!-- body start-->
<body>
  
    <!-- Sing in  Form -->
    <section class="">
      <div class="container" style="width: 550px">
        <div class="signin-content">
           <div class="signin-form">
           <h2 class="form-title" style="color: #66a3ff;text-align: center; margin-bottom: 100px"> Admin Login<img src="images/1.png" style="width: 40px;height: 40px"></h2>
     
            <form method="POST">
             <div class="form-group">
               <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                 <input type="email" name="email" id="your_name" placeholder="Your Email"
                   value="<?php echo $email; ?>" required />
             </div>
             <div class="form-group">
                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                 <input type="password" name="password" id="your_pass" placeholder="Password"
                    value="<?php echo $password; ?>" required />
             </div>
             <div class=" form-button text-center">
               <input type="submit"   class="form-submit" value="LOGIN" name="login"  style= 'width:170px;'/>
             </div>
                      

            </form>
            <br>
            <div class="text-center">
              <?php if (isset($error)) 
                   {  echo "<div class='alert alert-danger ' role='alert'> $error
                  </div>";
                   }
               ?>
                 
               </div>
                         
            </div>
                    
          </div>
               
       </div>
 </section>

</div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
<!-- body end-->
</html>
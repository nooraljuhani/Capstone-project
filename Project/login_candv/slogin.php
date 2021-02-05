<?php
   session_start();
   include('../includes/customerClass.php');
   $x = new customer();

    if(isset($_POST['login'])){

    $email     = $_POST['email'];
    $password  = $_POST['password'];
    $q=$x->login($email,$password);
   
    if($q)
    {
            $row=$q[0];
            $_SESSION['c_id']=$row['c_id'];
             header("location:../website/index.php");   
    }
    else
      {
        $error="Uncorrect Username Or Password";
      }
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

</head>
<body style=" background-image: url('images/4444.jpg')">

   

        <section class="signup">
         <div class="container"  style="width: 550px">
          <div class="signup-content">
            <form method="POST" id="signup-form" class="signup-form">
              <h2 class="form-title" style="color: #66a3ff;text-align: center; margin-bottom: 100px">User Login <img src="images/1.png" style="width: 40px;height: 40px"></h2>
                        
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" placeholder="Your Email" required />
                        </div>
                       
                        
                      
                         <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" required />
                             <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                         <div class="form-group">
                    
                            <input type="submit" name="login" id="submit" class="form-submit" value="LOGIN"/>
                        </div>
                       
                        
                        

                    </form>
                    <br>
                        <div class="text-center">
                           <?php
                                if (isset($error)) 
                                {  echo "
                                    <div class='alert alert-danger ' role='alert'>
                                            $error
                                        </div>";
                                }
                                ?>

                        </div>
                            <div class="register-link">
                                <p style="color: red">
                                    If you don't have an account?
                                    <a href="ssignup.php">Sign-up Here</a>
                                </p>
                            </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
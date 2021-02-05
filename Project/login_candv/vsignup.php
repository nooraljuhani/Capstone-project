<?php
include('../includes/vendorClass.php');
$x = new vendor();
$email     = "";
$phone    = "";
$address   ="";
$pass      ="";
$conpass   = "";
$name      ="";
$error     =0;

 if(isset($_POST['submit'])){
    $email     = $_POST['email'];
    $phone     = $_POST['phone'];
    $address   =$_POST['address'];
    $pass      =$_POST['pass'];
    $conpass   = $_POST['con_pass'];
    $name      =$_POST['name'];
    $cat_id    =$_POST['cat_id'];
    
   
    

    if ($conpass != $pass) 
    {  
       $errorcon=" * Password not match !!";
       $error=1;

    }
    if (! filter_var($email,FILTER_VALIDATE_EMAIL)) 
    {
       $emailerror=" * Invaild email format";
       $error=1;
    }
    if ( ! preg_match("/^[A-Z][a-zA-Z0-9]+$/", $pass)) 
    {
       $errorpass=" * Password must start with upper case letter and contain letters and digits";
       $error=1;
    }
    if (empty($phone)|| strlen($phone)>10 || strlen($phone)<10) 
    {
       $errormobile=" * Mobile not vaild";
       $error=1;
    }

    if ($error == 0) 
    {   
      
        $x->email              = $email;
        $x->phone              = $phone;
        $x->address            = $address;
        $x->pass               = $pass;
        $x->name               = $name;
        $x->cat_id                    =$cat_id;
        $x->active                  =$active;
        $x->img                = $_FILES['img']['name'];
        $tmp_name              = $_FILES['img']['tmp_name'];
        $path                  ='image'; 
        move_uploaded_file($tmp_name,$path.$x->img);



        $q=$x->create();
        if ($q) 
        {
            header("location:vlogin.php");
        } 
        

    }

} 
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
     <link href="css/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
</head>
<body style=" background-image: url('images/8.jpg')">


        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container" style="width: 700px">
                <div class="signup-content">
                    <form method="post" id="signup-form" class="signup-form" action="" enctype='multipart/form-data'>
                        <h2 class="form-title">Create your account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name"  placeholder="Organisation Name"
                            value="<?php echo $name;?>" required  />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="email" placeholder="Your Email" value="<?php echo $email;?>" required />
                            <div style="color:red; ">
                                <?php if (isset($emailerror))
                                { echo $emailerror; }?>
                                    
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <input type="text" class="form-input"  placeholder="Phone" name="phone"  value="<?php echo $phone;?>" required />
                            <div style="color:red; ">
                                <?php if (isset($errorphone)) 
                                { echo $errorphone; }?>       
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" placeholder="Address" name="address"  value="<?php echo $address;?>" required/>
                        </div>
                       
                         <div class="form-group">
                            <input type="password" class="form-input" name="pass" id="password" placeholder="Password" value="<?php echo $pass;?>" required />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            <div style="color:red; ">
                                <?php if (isset($errorpass)) 
                                { echo $errorpass; }?>       
                            </div>

                            
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="con_pass" id="password" placeholder="Confirm-Password" required/>
                              <div style="color:red; ">
                                <?php if (isset($errorcon)) 
                                { echo $errorcon; }?>       
                             </div>

                        </div>
                        <div class="form-group">
                            <label>Upload Image:</label>
                            <input type="file" name ="img" class="form-input"  placeholder="Your Image"/>
                        </div>
                           <div class="form-group">
                  <label>category</label>
                  <select class="form-control" name="cat_id" >
                    <option  >Select</option>
                          <?php
                                             if ($data=$x->readAllcat()){       
                         
                                        foreach ($data as $key => $value) {
                                            foreach ($value as $k => $v) {$row[$k]=$v;}
                                            
                                            $i=$row['cat_id'];
                                            echo "<option value=$i>";
                                            echo "{$row['cat_name']}";
                                            echo "</option>";

                                            }
                                        }
                                             ?>
                  </select>
            </div>
          
                         <div class="form-group">
                        
                            <input type="submit" name="submit"  class="form-submit" value="Sign up"/>
                        </div>              

                    </form>
                     <br>
                       <div class="register-link">
                                <p style="color: red">
                                    Already have an account?
                                    <a href="vlogin.php">Login Here</a>
                                </p>
                            </div>
                   
                </div>

            </div>
             
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
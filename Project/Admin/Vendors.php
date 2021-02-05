<?php 
session_start();
include('../includes/vendorClass.php');
$v= new vendor();
$id=$_SESSION['ven_id'];
$data=$v->readById($id);
$studentSet=$data[0];

 if(isset($_POST['submit'])){
    $v->email     = $_POST['email'];
    $v->phone     = $_POST['phone'];
    $v->address    =$_POST['address'];
    $v->pass      =$_POST['pass'];
    $v->name      =$_POST['name'];
   if ($_FILES['img']['name'])
    {$v->img       = $_FILES['img']['name'];}
      else
       { $v->img      = $studentSet['ven_img'];}
       $tmp_name       =$_FILES['img']['tmp_name'];
        $path          ='image';

    move_uploaded_file($tmp_name,$path.$v->img);
    $q=$v->update($id); 
    if($q){
      header("location:Vendors.php");;
        
    }
    

    
    }
   

include('test2.php');

?>

<!--Start body-->
 <section class="content">
      <div class="container-fluid" >
        <div class="row">
          <div class="col-md-8" style="margin-left: 350px;margin-top: 70px">
           <form method="post" id="signup-form" class="signup-form" action="" enctype='multipart/form-data'>
            <div class="card card-primary " style="padding-left:50px;padding-right:50px;padding-top:30px; ">
              <div class="text-center" name="img">
                 
                <?php
                 $img=$studentSet['ven_img']; 
                echo "<img src='image/$img' width='150' hight='100'>";?>

                </div>
            <h3 class="profile-username text-center">
            <input type="text" class="form-input text-primary" name="name"  
             value="<?php  echo $studentSet['ven_name'];?>"/></h3>

                <p class="text-muted text-center text-primary">ID:<?php  echo $studentSet['ven_id'];?></p>

                <ul class="list-group list-group-unbordered mb-3">

                  <li class="list-group-item">
                  <b>Email</b>
                   <a class="float-right">
                   <input type="text" class="form-input text-primary" name="email" 
                                   value="<?php  echo $studentSet['ven_email'];?>">
                   </a>
                  </li>

                  <li class="list-group-item">
                    <b>Password</b> 
                    <a class="float-right text-primary">
                    <input type="text" class="form-input text-primary" name="pass" 
                    value="<?php  echo $studentSet['ven_pass'];?>">
                   </a>
                  </li>


                  <li class="list-group-item">
                    <b>Address</b> 
                    <a class="float-right text-primary">
                    <input type="text" class="form-input text-primary" name="address" 
                    value="<?php  echo $studentSet['ven_add'];?>">
                   </a>
                  </li>

                  <li class="list-group-item">
                    <b>Phone</b> 
                    <a class="float-right text-primary">
                    <input type="text" class="form-input text-primary" name="phone" 
                     value="<?php  echo $studentSet['ven_phone'];?>">
                   </a>
                  </li>

                 <li>
<b>Change Image</b>
                  <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12 float-right text-primary">
                            
                             <input  name="img" type="file"  class="form-control" >
                         </div></li>


                </ul>

    
              
              </div>
               <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit" style="margin-left: 400px">Update</button>
                </div>
              <!-- /.card-body -->
            </div>
          </form> 
            <!-- /.card -->
            </div>
        </div>        
    </div>
</section>
<!--end body-->
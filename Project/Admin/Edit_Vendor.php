<?php

 include('../includes/vendorClass.php');
    
   $v= new vendor();
   $id =$_GET['id'];
  $cat_id   =$_GET['cat_id'];
  $data=$v->readById($id);
   $venSet=$data[0]; 
  

 if(isset($_POST['submit'])){
      
     $v->name        = $_POST['name'];
    $v->email       = $_POST['email'];
    $v->pass        = $_POST['pass'];
    $v->phone       = $_POST['phone'];
    $v->address     = $_POST['address'];
    $v->cat_id          =$_POST['cat_id'];
     if ($_FILES['img']['name']){
        $x->img      = $_FILES['img']['name'];
        }
        else{
        $v->img        = $venset['img'];}
        $tmp_name      =$_FILES['img']['tmp_name'];
        $path          ='image';
      move_uploaded_file($tmp_name,$path.$v->img);
    
    $q=$v->update($id);
    if($q){
        header("location:Vendor_Management.php");
      }
  }
   
 
  

include("test.php");


?>


<!--body start-->
    <!-- Main content -->
                 <!-- form start -->
    <div  style="margin-left: 300px;margin-top: 20px;width: 2000px">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" style="margin-left: 350px">Edit-Vendor  <i class="fas fa-user-shield"></i></h3>
              </div>
              <!-- /.card-header -->
             
              <form method="post"   enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Organasation Name</label>
                    <input type="text" class="form-control" name="name" 
                     value="<?php echo $venSet['name'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control"  placeholder="Enter email" value="<?php
                                 echo  $venSet['email'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" name="pass" placeholder="Password" value="<?php 
                                echo $venSet['pass'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="tel" class="form-control" name="phone" placeholder="phone" value="<?php 
                                echo $venSet['phone'];?>">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address" value="<?php 
                                echo $venSet['address'];?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" class="form-control" name="img" placeholder="Upload-image">
                    <?php
                             echo "<img src='image{$venSet['img']}' width='50' height='50'>"?>
                  </div>
                   <select name="cat_id" id="select" class="form-control">
                                        <option value="0">Please select</option>
                                        <?php
                                              if ($d=$v->readAllcat()){
                                                 foreach ($d as $key => $value) {
                                            foreach ($value as $k => $g) {$row[$k]=$g;}
                                            $i=$row['cat_id'];
                                            echo "<option value=$i";
                                            if($catid==$row['cat_id']){echo " selected";}
                                            echo ">";
                                            echo "{$row['name']}";
                                            echo "</option>";

                                            }
                                        }
                                             ?>
                                                    </select>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit" style="margin-left: 400px">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
</div>
</section>
<!--end form-->
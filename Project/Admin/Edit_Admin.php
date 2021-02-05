<?php
 
   include('../includes/adminClass.php');
   $x = new admin();
   $id =$_GET['id'];

    if(isset($_POST['submit'])){
      
        
    
    $x->email       = $_POST['email'];
    $x->password    = $_POST['password'];
    $x->name        = $_POST['name'];
    $q=$x->update($id);
    
    if($q){
        header("location:Admins_Management.php");
        
    }
}       
        $data=$x->readById($id);
        $adminSet=$data[0];
       




?>
 <?php include("test.php");?>

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
                <h3 class="card-title" style="margin-left: 350px">Edit-Admin<i class="fas fa-user-shield"></i></h3>
              </div>
              <!-- /.card-header -->
             
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Full-name" value="<?php 
                                echo $adminSet['name'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control"  placeholder="Enter email" value="<?php
                                 echo $adminSet['email']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Password" value="<?php
                              echo $adminSet['password']; ?>">
                  </div>
                
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
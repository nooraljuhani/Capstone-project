<?php
    
  include('../includes/customerClass.php');
    $c = new customer();
     $id =$_GET['id'];
     $da=$c->readById($id);
      $cusSet=$da[0];

    if(isset($_POST['submit'])){
      
    $c->email       = $_POST['email'];
    $c->password    = $_POST['password'];
    $c->full_name        = $_POST['full_name'];
 $c->address       = $_POST['address'];
    $c->mobile    = $_POST['mobile'];
   

    $r=$c->update($id);

    if($r){
        header("location:Customer_Management.php");
        
    }
}
      

        
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
                <h3 class="card-title" style="margin-left: 350px">customer-Mangament  <i class="fas fa-user-shield"></i></h3>
              </div>
              <!-- /.card-header -->
             
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">full_name</label>
                    <input type="text" class="form-control" name="full_name" placeholder="Full-name" value="<?php 
                                echo $cusSet['full_name'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control"  placeholder="Enter email" value="<?php 
                                echo $cusSet['email'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Password" value="<?php 
                                echo $cusSet['password'];?>">
                  </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address" value="<?php 
                                echo $cusSet['address'];?>">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" class="form-control" name="mobile" placeholder="Phone" value="<?php 
                                echo $cusSet['mobile'];?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"  name="submit" style="margin-left: 400px">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
</div>
</section>
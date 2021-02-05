<?php
    
   include('../includes/customerClass.php');
   $c= new customer();

    if(isset($_POST['submit'])){
    $c->full_name   = $_POST['full_name'];
    $c->email       = $_POST['email'];
    $c->password    = $_POST['password'];
    $c->address     = $_POST['address'];
    $c->mobile      = $_POST['mobile'];
    $q=$c->create();

    if($q){
        header("location:Customer_Management.php");
        
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
                <h3 class="card-title" style="margin-left: 350px">customer-Mangament  <i class="fas fa-user-shield"></i></h3>
              </div>
              <!-- /.card-header -->
             
              <form method="post" action="">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">full_name</label>
                    <input type="text" class="form-control" name="full_name" placeholder="Full-name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control"  placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Password">
                  </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" class="form-control" name="mobile" placeholder="Phone">
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
  <!-- table start -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">CRUD Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>full_name</th>
                      <th>E-mail</th>
                      <th>Password</th>
                      <th>Address</th>
                      <th>Phone</th>
                       <th>Edit</th>
                        <th>Delete</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                          if($data=$c->readAll()){
                         
                                        foreach ($data as $key => $value) {
                                            foreach ($value as $k => $v) {$row[$k]=$v;}
                                                echo "<tr>";
                                                echo "<td>{$row['c_id']}</td>";
                                                echo "<td>{$row['full_name']}</td>";
                                                echo "<td>{$row['email']}</td>";
                                                echo "<td>{$row['password']}</td>";
                                               echo "<td>{$row['address']}</td>";
                                               echo "<td>{$row['mobile']}</td>";
                                                echo "<td><a href='Edit_Customer.php?id={$row['c_id']}' class='btn btn-warning'>Edit</a></td>";
                                                echo "<td><a href='Delete_Customer.php?id={$row['c_id']}' class='btn btn-danger'>Delete</a></td>";
                                                echo "</tr>";
                                            
                                            
                                        }
                                           

                                            }
                        ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- table end -->


<!-- Body End -->
<?php
    
  include('../includes/adminClass.php');
 $x = new admin();

    if(isset($_POST['submit'])){
      
    $x->email       = $_POST['email'];
    $x->password    = $_POST['password'];
    $x->name        = $_POST['name'];
    $q=$x->create();

    if($q){
        header("location:Admins_Management.php");
        
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
                <h3 class="card-title" style="margin-left: 350px">Admin-Mangament  <i class="fas fa-user-shield"></i></h3>
              </div>
              <!-- /.card-header -->
             
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Full-name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control"  placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Password">
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
                      <th>Name</th>
                      <th>E-mail</th>
                      <th>Password</th>
                       <th>Edit</th>
                        <th>Delete</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                          if($data=$x->readAll()){
                         
                                        foreach ($data as $key => $value) {
                                            foreach ($value as $k => $v) {$row[$k]=$v;}
                                                echo "<tr>";
                                                echo "<td>{$row['admin_id']}</td>";
                                                echo "<td>{$row['name']}</td>";
                                                echo "<td>{$row['email']}</td>";
                                                
                                                echo "<td>{$row['password']}</td>";
                                                echo "<td><a href='Edit_Admin.php?id={$row['admin_id']}' class='btn btn-warning'>Edit</a></td>";
                                                echo "<td><a href='Delete_Admin.php?id={$row['admin_id']}' class='btn btn-danger'>Delete</a></td>";
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
    <hr>
  
                   
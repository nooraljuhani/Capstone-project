<?php

   include('../includes/vendorClass.php');
   $v= new vendor();

    if(isset($_POST['submit'])){
    $v->email       = $_POST['email'];
    $v->pass        = $_POST['pass'];
    $v->name        = $_POST['name'];
    $v->phone       = $_POST['phone'];
    $v->address     = $_POST['address'];
    $v->cat_id      = $_POST['cat_id'];
    $v->img         = $_FILES['img']['name'];;
    $tmp_name       = $_FILES['img']['tmp_name'];
    $path           ='image'; 
    


    move_uploaded_file($tmp_name,$path.$v->img);

    $q=$v->create();

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
                <h3 class="card-title" style="margin-left: 350px">Vendor-Mangament  <i class="fas fa-user-shield"></i></h3>

              </div>
              <!-- /.card-header -->
             
              <form method="post"   enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Organasation Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Full-name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control"  placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" name="pass" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="tel" class="form-control" name="phone" placeholder="phone">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" class="form-control" name="img" placeholder="Upload-image">
                  </div>
              
      <div class="container-fluid">
       
      <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="cat_id">
                    <option value="0" >Select</option>
                          <?php
                                             if ($data=$v->readAllcat()){       
                         
                                        foreach ($data as $key => $value) {
                                            foreach ($value as $k => $g) {$row[$k]=$g;}
                                            
                                            $i=$row['cat_id'];
                                            echo "<option value=$i>";
                                            echo "{$row['cat_name']}";
                                            echo "</option>";

                                            }
                                        }
                                             ?>
                  </select>
             
                

            </div>
<div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit" style="margin-left: 400px">Submit</button>
                </div>
</form>
</div>
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
            <div class="card" style="width: 1040px">
              <div class="card-header">
                <h3 class="card-title">CRUD Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" >
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Cattegory</th>
                      <th>Name</th>
                      <th>E-mail</th>
                      <th>Password</th>
                        <th>Phone</th>
                          <th>Address</th>
                            <th>Image</th>
                       <th>Accept</th>
                        <th>Delete</th>
                    
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                           if ($data=$v->readAll()){
                                        foreach ($data as $key => $value) {
                                            foreach ($value as $k => $o) {$row[$k]=$o;}
                                                echo "<tr>";
                                                echo "<td>{$row['ven_id']}</td>";
                                                echo "<td>{$row['cat_name']}</td>";
                                                echo "<td>{$row['ven_name']}</td>";
                                                echo "<td>{$row['ven_email']}</td>";
                                                echo "<td>{$row['ven_pass']}</td>";
                                                echo "<td>{$row['ven_phone']}</td>";
                                                echo "<td>{$row['ven_add']}</td>";
                                                echo"<td><img src='image/{$row['ven_img']}' alt=''  width='50' height='50'/></td>";
                                                echo "<td><a href='Accept.php?id={$row['ven_id']}'class='btn btn-warning' >Accept</a></td>";
                                                echo "<td><a href='Delete_vendor.php?id={$row['ven_id']}' class='btn btn-danger'>Delete</a></td>";

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
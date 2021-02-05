 <?php
  include('../includes/prodectClass.php');
   $x = new  product();

    if(isset($_POST['submit'])){
      
    $x->name        = $_POST['name'];
    $x->pro_desc    = $_POST['pro_desc'];
    $x->price        = $_POST['price'];
    $x->image       = $_FILES['image']['name'];
    $tmp_name       =$_FILES['image']['tmp_name'];
    $path           ='image';

    move_uploaded_file($tmp_name,$path.$x->image);
    
    $q=$x->create();
    
    if($q){
        header("location:vProduct_Management.php");
        
    }
}
include("test.php");

 ?>


       <!-- Body -->
        <div  style="margin-left: 300px;margin-top: 20px;width: 2000px">
    <section class="content">
    
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" style="margin-left: 350px">Product-Mangament  <i class="fas fa-user-shield"></i></h3>
              </div>
              <!-- /.card-header -->
             
              <form method="post"   enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Product Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Full-name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">  Product Description</label>
                    <input type="text" name="pro_desc" class="form-control"  placeholder="Enter Description ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">  Product Price</label>
                    <input type="text" name="price" class="form-control"  placeholder="Enter Price ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Image</label>
                    <input type="file" class="form-control" name="image" placeholder="Password">
                  </div>
        
  

           

</div><div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit" style="margin-left: 400px">Submit</button>
                </div>
                </div>
                <!-- /.card-body -->

               
              </form>
                
            </div>
            <!-- /.card -->
</div>


</section>
<!--end form-->
  <!-- table start -->
   <section class="content" >
      <div class="container-fluid" >
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
                     
                      <th>vendor-ID</th>
                      <th>Name</th>
                      <th>Description</th>
                       <th>Price</th>
                      <th>Image</th>
                       <th>Edit</th>
                        <th>Delete</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        if ($data=$x->readAll()){
                          
                         
                                        foreach ($data as $key => $value) {
                                            foreach ($value as $k => $v) {$row[$k]=$v;}
                                                echo "<tr>";
                                                echo "<td>{$row['pro_id']}</td>";
                                                 echo "<td>{$row['ven_name']}</td>";
                                                echo "<td>{$row['name']}</td>";
                                                echo "<td>{$row['pro_desc']}</td>";
                                                echo "<td>{$row['price']}</td>";
                                                echo "<td><img src='image{$row['image']}' width='50' height='50'></td>";
                                                echo "<td><a href='Edit_Product.php?id={$row['pro_id']}&ven_id={$row['ven_id']}' class='btn btn-warning'>Edit</a></td>";
                                                echo "<td><a href='Delete_Product.php?id={$row['pro_id']}' class='btn btn-danger'>Delete</a></td>";
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

s
<!-- Body End -->

     
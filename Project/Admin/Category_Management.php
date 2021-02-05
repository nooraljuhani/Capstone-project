 <?php
  include('../includes/categoryClass.php');
   $x = new category();

    if(isset($_POST['submit'])){
      
        
    
    $x->cat_name    = $_POST['cat_name'];
    $x->cat_desc    = $_POST['cat_desc'];
    $x->cat_image       = $_FILES['cat_image']['name'];
    $tmp_name       =$_FILES['cat_image']['tmp_name'];
    $path           ='image';

    move_uploaded_file($tmp_name,$path.$x->cat_image);
    
    $q=$x->create();
    
    if($q){
        header("location:Category_Management.php");
        
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
                <h3 class="card-title" style="margin-left: 350px">Category-Mangament  <i class="fas fa-user-shield"></i></h3>
              </div>
              <!-- /.card-header -->
             
              <form method="post"   enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Category Name</label>
                    <input type="text" class="form-control" name="cat_name" placeholder="Full-name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">  Category Description</label>
                    <input type="text" name="cat_desc" class="form-control"  placeholder="Enter Description ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category Image</label>
                    <input type="file" class="form-control" name="cat_image" placeholder="Image">
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
              <div class="card-header" >
                <h3 class="card-title">CRUD Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                     
                      <th>Name</th>
                      <th>Description</th>
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
                                                echo "<td>{$row['cat_id']}</td>";
                                                echo "<td>{$row['cat_name']}</td>";
                                                echo "<td>{$row['cat_desc']}</td>";
                                                echo "<td><img src='image/{$row['cat_image']}' width='50' height='50'></td>";
                                                echo "<td><a href='Edit_Category.php?id={$row['cat_id']}' class='btn btn-warning'>Edit</a></td>";
                                                echo "<td><a href='Delete_Category.php?id={$row['cat_id']}' class='btn btn-danger'>Delete</a></td>";
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

     
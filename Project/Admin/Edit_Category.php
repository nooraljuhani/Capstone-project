 <?php
    
   include('../includes/categoryClass.php');
   $x = new category();
   $id =$_GET['id'];
   $data=$x->readById($id);
   $categorySet=$data[0];

    if(isset($_POST['submit'])){
    $x->cat_name    = $_POST['cat_name'];
    $x->cat_desc    = $_POST['cat_desc'];
    if ($_FILES['cat_image']['name']){
        $x->cat_image      = $_FILES['cat_image']['name'];
        }
        else{
        $x->cat_image      = $categorySet['cat_image'];}
        $tmp_name      =$_FILES['cat_image']['tmp_name'];
        $path          ='image';

        move_uploaded_file($tmp_name,$path.$x->cat_image);
    
    $q=$x->update($id);
    
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
                <h3 class="card-title" style="margin-left: 350px">Category-Management  <i class="fas fa-user-shield"></i></h3>
              </div>
              <!-- /.card-header -->
             
              <form method="post"   enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Category Name</label>
                    <input type="text" class="form-control" name="cat_name" placeholder="Full-name" value="<?php 
                                echo $categorySet['cat_name'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">  Category Description</label>
                    <input type="text" name="cat_desc" class="form-control"  placeholder="Enter Description "value="<?php 
                                echo $categorySet['cat_desc'];?>">
                  </div>
                  <div >
                   
                    <label  name="cat_image"> Category Image
                    <?php
                             echo "<img src='image{$categorySet['cat_image']}' width='50' height='50'>";
                             ?></label>
                  </div>
        <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                            Change category Image
                             <input  name="cat_image" type="file"  class="form-control" >
                         </div>  
                     </div>
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
 

 <?php
 session_start();
  include('../includes/prodectClass2.php');
   $x = new  product();
   $id =$_GET['id'];
  
   $data=$x->readById($id);
   $categorySet=$data[0];

  if(isset($_POST['submit'])){
      
    $x->name        = $_POST['name'];
    $x->pro_desc    = $_POST['pro_desc'];
    $x->price        = $_POST['price'];
 $x->ven_id      = $_SESSION['ven_id'];

  if ($_FILES['image']['name'])
    {$x->image       = $_FILES['image']['name'];}
      else
       { $x->image      = $categorySet['image'];}
       $tmp_name       =$_FILES['image']['tmp_name'];
        $path          ='image';

    move_uploaded_file($tmp_name,$path.$x->image);
    $q=$x->update($id); 
    if($q){
        header("location:Prodect.php");
        
    }
}
include("test2.php");

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
                <h3 class="card-title" style="margin-left: 350px"> Edit-Product  <i class="fas fa-user-shield"></i></h3>
              </div>
              <!-- /.card-header -->
             
              <form method="post"   enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Product Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Full-name" value="<?php 
                                echo $categorySet['name'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">  Product Description</label>
                    <input type="text" name="pro_desc" class="form-control"  placeholder="Enter Description " value="<?php 
                                echo $categorySet['pro_desc'];?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">  Product Price</label>
                    <input type="text" name="price" class="form-control"  placeholder="Enter Price " value="<?php 
                                echo $categorySet['price'];?>">
                  </div>
                  <div >
                   
                    <label  name="image"> Product Image
                    <?php
                             echo "<img src='image{$categorySet['image']}' width='50' height='50'>";
                             ?></label>
                  </div>
                  <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                            Change product Image
                             <input  name="image" type="file"  class="form-control" >
                         </div>  
                     </div>
                 </div>   
  
        
  

              </div>

                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit" style="margin-left: 400px">Submit</button>
                </div>
                </div>
                <!-- /.card-body -->

               
              </form>
                
            </div>
            <!-- /.card -->
</div>


</section>
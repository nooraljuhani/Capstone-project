 <?php
  session_start();
  include('../includes/order.php');
   $x = new  order();
 
   include('test2.php');
   ?>
    <section class="content" >
      
        <div class="row">
          <div class="" style="margin-left: 280px;margin-top: 80px">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-left: 400px;font-family: bold">Orders </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Customer</th>
                      <th>Address</th>
                       <th>Phone</th>
                       <th>Email</th>
                      <th>Name</th>
                       <th>Price</th>
                       
                       <th>Total</th>
                       <th>Quantity</th>
                      <th>Date</th>
                      <th>Delete</th>
                       
                        
                    
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $id=$_SESSION['ven_id'];
                    $data=$x->test($id);
                        if ($data){
                          foreach ($data as $row) {
                                            
                                                echo "<tr>";
                                                echo "<td>{$row['order_id']}</td>";
                                               echo"<td> {$row['full_name']}</td>";
                                                echo "<td>{$row['address']}</td>";
                                                echo "<td>{$row['mobile']}</td>";
                                                echo "<td>{$row['email']}</td>";
                                               
                                                 echo "<td>{$row['name']}</td>";
                                                   echo "<td>{$row['price']}</td>";
                                                     echo "<td>{$row['total']}</td>";
                                                       echo "<td>{$row['qty']}</td>";
                                                         echo "<td>{$row['odate']}</td>";
                                                
                                             
                                                echo "<td><a href='oDelete-orders.php?id={$row['order_id']}' class='btn btn-danger'>Delete</a></td>";
                                                echo "</tr>";
                                            
                                            
                                        
                                           
       }}
                        ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

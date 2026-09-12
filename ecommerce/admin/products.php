<?php 
include_once("./components/header.php");
include_once("../config/connection.php");


?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Products
            </h3>
          </div>
          <div class="row grid-margin">
           
 <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Product #</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>


<?php 

  $getProducts= "SELECT * FROM `products` as p
  INNER JOIN `categories` as c
  ON p.cat_id = c.cat_id; ";

  $result= mysqli_query($conn,$getProducts);

  if(mysqli_num_rows($result)   > 0){

  while($row = mysqli_fetch_assoc($result) ){
?>
<tr>
                            <td><?php echo $row['product_id'] ?></td>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['price'] ?></td>
                            <td><?php echo $row['stock'] ?></td>
                            <td><img src="<?php echo $row['image'] ?>" alt="" height="65" class="rounded-circle"></td>
                            <td><?php echo $row['cat_name'] ?></td>
                            <td>
                              <label class="badge badge-info"><?php echo $row['created_at'] ?></label>
                            </td>
                            <td>
                              <a href="./productDetails.php?id=<?php echo $row['product_id'] ?>" class="btn btn-outline-primary my-1">View</a>
                              <a  href="./editProduct.php?id=<?php echo $row['product_id'] ?>"class="btn btn-outline-success my-1">Edit</a>
                              <a  href="./deleteProduct.php?id=<?php echo $row['product_id'] ?>"class="btn btn-outline-danger my-1">Delete</a>
                            </td>
                        </tr>
<?php
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



          </div>
        
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
  <?php 
include_once("./components/footer.php");

?>
  <!-- Custom js for this page-->
  <script src="./js/data-table.js"></script>
  <!-- End custom js for this page-->
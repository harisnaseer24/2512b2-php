<?php 
include_once("./components/header.php");
include_once("../config/connection.php");


?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Add Product
            </h3>
          </div>
          <div class="row grid-margin">
           <!-- form -->
           
           
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Enter product details</h4>
                  
                  <form class="forms-sample" action="" method="post">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text"  required class="form-control" name="title"id="title" placeholder="Enter product title">
                    </div>
                    

                    <div class="form-group">
                      <label for="price">price</label>
                      <input type="number"  required class="form-control" name="price"id="title" placeholder="Enter product price">
                    </div>
                    <div class="form-group">
                      <label for="stock">stock</label>
                      <input type="number" required class="form-control" name="stock"id="stock" placeholder="Enter product stock">
                    </div>
                           <div class="form-group">
                      <label for="image">image</label>
                      <input type="text" required class="form-control" name="image"id="image" placeholder="Enter product image">
                    </div>
                    
                    <div class="form-group">
                      <label for="cat_id">Category</label>
                        <select class="form-control" required name="cat_id" id="exampleSelectGender">
                          <option selected disabled>Select Category</option>

              <?php 
              
              $getCategories= "SELECT * FROM `categories`";

$getCategoriesresult= mysqli_query($conn,$getCategories);

if(mysqli_num_rows($getCategoriesresult)   > 0){

while($row = mysqli_fetch_assoc($getCategoriesresult) ){
     
?>


 <option value="<?= $row['cat_id'] ?>"><?= $row['cat_name'] ?></option>

<?php
}
       }       ?>

                         
                         
                        </select>
                      </div>
                    <!-- <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div> -->
                   
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea class="form-control" required name="description" id="description" rows="4"></textarea>
                    </div>
                    <button type="submit" name="addproduct" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
           <!-- form -->

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


if(isset($_POST['addproduct'])){

$title= $_POST['title'];
$price= $_POST['price'];
$stock= $_POST['stock'];
$image= $_POST['image'];
$cat_id= $_POST['cat_id'];
$description= $_POST['description'];

$add = "INSERT INTO `products`( `title`, `description`, `price`, `stock`, `image`, `cat_id`) VALUES ('$title','$description','$price','$stock','$image','$cat_id')";

$result= mysqli_query($conn, $add);
if ($result) {
  # code...
  echo "<script>alert('Product added successfully')
  window.location.href='./products.php'
  </script>";
} else {
  # code...
    echo "<script>alert('Failed to add product')</script>";
}



}



?>


<?php 
session_start();
require_once('../config/connection.php');
if( !isset($_SESSION['role']) ||  $_SESSION['role']!="user"){
    echo "<script>location.href='../user/login.php'</script>";
}
if (isset ($_POST['addtocart'])) {
$qty= $_POST['qty'];
$product_id= $_POST['product_id'];
$price= $_POST['price'];
$user_id= $_SESSION['user_id'];
$total= $price * $qty;


$checkProduct="SELECT * FROM CART WHERE product_id=$product_id and user_id=$user_id";
$checkProductresult = mysqli_query($conn, $checkProduct);

if(mysqli_num_rows($checkProductresult) > 0){

$cartData= mysqli_fetch_assoc($checkProductresult);
//          2   +   3 = 5
$newQty= $qty + $cartData['qty'];
//          12000 * 5 = 60000
$newTotal = $price * $newQty;

    //update
$updateCart= "Update `cart` set `qty`= $newQty , `total`=$newTotal WHERE product_id=$product_id and user_id=$user_id";
$result = mysqli_query($conn, $updateCart);
if ($result) {
      echo "<script>alert('Product added to cart!') 
  window.location.href='./index.php'</script>";
} else {
   echo "<script>alert('Failed to add product to cart!') 
  window.location.href='./index.php'</script>";
}
}else{


$addtocart= "INSERT INTO `cart`(`user_id`, `product_id`, `qty`, `total`) VALUES ('$user_id','$product_id','$qty','$total')";
$result = mysqli_query($conn, $addtocart);
if ($result) {
      echo "<script>alert('Product added to cart!') 
  window.location.href='./index.php'</script>";
} else {
   echo "<script>alert('Failed to add product to cart!') 
  window.location.href='./index.php'</script>";
}

}




}



    ?>
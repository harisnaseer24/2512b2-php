<?php 

require_once("../config/connection.php");

if (isset($_GET['id'])) {
  
    $id= $_GET['id'];
$delQuery="DELETE FROM `products` WHERE product_id=$id;";
$result= mysqli_query($conn,$delQuery);
if ($result) {
    echo "<script>alert('Product deleted succesfully.')
location.href ='./products.php'</script>";
} else {
      echo "<script>alert('Failed to delete product.')
location.href ='./products.php'</script>";
}
} else {
 echo "<script>alert('No id found.')
location.href ='./products.php'</script>";
}

?>

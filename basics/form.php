<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Signup Now</h1>
<!-- GET   - data retrieval, url, size low 
POST  - data send , secure, size -->

<form action="result.php" method="post">
<input type="text" placeholder="Enter username" name="username" id="username"><br>
<input type="email" placeholder="Enter email" name="email" id="email"><br>
<input type="password" placeholder="Enter password" name="password" id="password"><br>
<input type="submit"  name="signup" ><br>
</form>

</body>
</html>


<?php 

// super globals $_GET, $_POST, $_REQUEST, $_FILES, $_SESSION, $_SERVER (ASSOCIATIVE ARRAY)
//  if(isset($_GET['signup'])){

// $username= $_GET['username'];
// $email= $_GET['email'];
// $password= $_GET['password'];

// echo "<h2>$username</h2>";
// echo "<h2>$email</h2>";
// echo "<h2>$password</h2>";



//  }


//  post
if(isset($_POST['signup'])){
$username= $_POST['username'];
$email= $_POST['email'];
$password= $_POST['password'];
echo "<h2>$username</h2>";
echo "<h2>$email</h2>";
echo "<h2>$password</h2>";

}

 //request

 if(
    isset($_REQUEST['signup'])  // jese hi form submit
        ){

$username= $_REQUEST['username'];
$email= $_REQUEST['email'];
$password= $_REQUEST['password'];

echo "<h2>$username</h2>";
echo "<h2>$email</h2>";
echo "<h2>$password</h2>";



 }


?>

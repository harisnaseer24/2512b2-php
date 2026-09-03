<?php 

 if(isset($_REQUEST['signup'])  )// jese hi form submit
 {

$username= $_REQUEST['username'];
$email= $_REQUEST['email'];
$password= $_REQUEST['password'];

echo "<h2>$username</h2>";
echo "<h2>$email</h2>";
echo "<h2>$password</h2>";

}


?>
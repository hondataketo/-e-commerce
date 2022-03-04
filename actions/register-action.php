<?php 
include '../classes/User.php';



$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$user_obj = new User;
$eval = $user_obj->create_register($username,$email,$password);

if($eval == TRUE){
   echo '<script> 
            var url= "../messages/register-create-success.php"; 
            window.location = url; 
        </script> ';
}else{
    echo '<script> 
            var url= "../messages/register-create-failed.php"; 
            window.location = url; 
        </script> ';
}
?>
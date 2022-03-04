<?php 
include '../classes/User.php';



$username = $_POST['username'];
$password = $_POST['password'];

$user_obj = new User;
$eval = $user_obj->login($username,$password);

if($eval == TRUE){
   echo '<script> 
            var url= "../homepage.php"; 
            window.location = url; 
        </script> ';
}else{
    echo '<script> 
            var url= "../login.php"; 
            window.location = url; 
        </script> ';
}
?>
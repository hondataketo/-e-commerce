<?php 
include '../classes/Cart.php';

$user_id = $_POST['user_id'];
$cart_id = $_POST['cart_id'];


$cartObj = new Cart;
$eval = $cartObj->buy($cart_id,$user_id);

if($eval == TRUE){
   echo '<script> 
            var url= "../messages/item-buy-success.php"; 
            window.location = url; 
        </script> ';
}else{
    echo '<script> 
            var url= "messages/item-buy-failed.php"; 
            window.location = url; 
        </script> ';
}
?>
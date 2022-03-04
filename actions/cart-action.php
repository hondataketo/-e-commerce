<?php 
include '../classes/Cart.php';


$item_id = $_POST['item_id'];
$user_id = $_POST['user_id'];
$btn = $_POST['submit'];


if($btn  == 'buy'){
    $eval = $cartObj->buy_directly($item_id,$user_id);

    // echo "success";

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
   

}else{

$cartObj->addtocart($item_id,$user_id);



}




?>
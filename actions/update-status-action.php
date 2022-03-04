<?php 
include '../classes/Item.php';



$status = $_POST['status'];
$id = $_POST['item-id'];

$item_obj = new Item;
$eval = $item_obj->update_status($id,$status);

if($eval == TRUE){
   echo '<script> 
            var url= "../admin.php"; 
            window.location = url; 
        </script> ';
}else{
    echo '<script> 
            var url= "messages/item-create-failed.php"; 
            window.location = url; 
        </script> ';
}
?>
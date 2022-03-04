<?php 
include '../classes/Item.php';



$item_name = $_POST['item-name'];
$item_desc = $_POST['item-desc'];
$item_price = $_POST['item-price'];
$item_image_name = $_FILES['item-image']['name'];
$item_image_tmp = $_FILES['item-image']['tmp_name'];

$item_obj = new Item;
$eval = $item_obj->create_item($item_name,$item_desc,$item_price,$item_image_name,$item_image_tmp);

if($eval == TRUE){
   echo '<script> 
            var url= "../messages/item-create-success.php"; 
            window.location = url; 
        </script> ';
}else{
    echo '<script> 
            var url= "../messages/item-create-failed.php"; 
            window.location = url; 
        </script> ';
}
?>
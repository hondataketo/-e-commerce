<?php

include 'Connection.php'; // combines 2 files



class Item extends connection{ // combines 2 classes

   
    
    public function create_item($item_name,$item_desc,$item_price,$item_image_name,$item_image_tmp){
        $sql = "INSERT INTO items(item_name,item_desc,item_price,item_image)VALUES('$item_name','$item_desc','$item_price','$item_image_name')";
        $result = $this->conn->query($sql);
        $destination = "../assets/img/" .$item_image_name;
        move_uploaded_file($item_image_tmp,$destination);

        if($result == TRUE){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function show_items(){
        $sql = "SELECT * FROM items";
        $result = $this->conn->query($sql);

        if($result->num_rows>0){
            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }
            return $row;
        }else{
            return false;
        }
    }

    public function update_item($id,$item_name,$item_desc,$item_price,$item_image_name,$item_image_tmp){
        if($item_image_name){
            $sql = "UPDATE items SET item_name = '$item_name', item_desc='$item_desc', item_price = '$item_price', item_image = '$item_image_name' WHERE item_id = '$id'";
            
            $destination = "../assets/img/" .$item_image_name;
            move_uploaded_file($item_image_tmp,$destination);
        }else{
            $sql = "UPDATE items SET item_name = '$item_name', item_desc='$item_desc', item_price = '$item_price' WHERE item_id = '$id'";
        }
        
        $result = $this->conn->query($sql);

        if($result == TRUE){

            return TRUE;
        }else{
            die('ERROR: '.$this->conn->error);
        }
    }

    public function delete($id){
        $sql = "DELETE FROM items WHERE item_id = '$id'";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            header('location: admin.php');
        }else{
            die('ERROR: '.$this->conn->error);
        } 
    }

    public function get_item($id){
        $sql = "SELECT * FROM items WHERE item_id = '$id'";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){
            return $result->fetch_assoc();
        }else{
            return false;
        }
    }

    public function paid(){
        $sql = "SELECT * FROM cart INNER JOIN items ON cart.item_id =  items.item_id INNER JOIN login ON cart.user_id = login.id  WHERE cart.status = 'PAID'";
        $result = $this->conn->query($sql);

        if($result->num_rows>0){
            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }
            return $row;
        }else{
            return false;
        }
    }

    public function cart(){
        $sql = "SELECT * FROM cart INNER JOIN items ON cart.item_id =  items.item_id INNER JOIN login ON cart.user_id = login.id WHERE cart.status = 'cart'";
        $result = $this->conn->query($sql);

        if($result->num_rows>0){
            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }
            return $row;
        }else{
            return false;
        }
    }
    
    public function delete_status($id){
        $sql = "DELETE FROM cart WHERE cart_id = '$id'";
        $result = $this->conn->query($sql);

        if($result == TRUE){
              header('location: admin.php');
        }else{
            die('ERROR: '.$this->conn->error);
        } 
    }

    public function update_status($id,$status){
        $sql = "UPDATE cart SET status = '$status' WHERE cart_id = '$id'";

        $result = $this->conn->query($sql);

        if($result == TRUE){

            return TRUE;
        }else{
            die('ERROR: '.$this->conn->error);
        }
    }

    public function get_status($id){
        $sql = "SELECT * FROM cart WHERE cart_id = '$id'";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){
            return $result->fetch_assoc();
        }else{
            return false;
        }
    }
}
?>
<?php

include 'Connection.php'; // combines 2 files



class Cart extends connection{

    public function get_cart($item_id,$user_id){
        $sql = "INSERT INTO cart(item_id,user_id)VALUE($item_id,$user_id)";
        $result = $this->conn->query($sql);

        if($result == TRUE){
           header('location: '.$_SERVER['HTTP_REFERER']);
           
        }else{
            die('ERROR :'.$this->conn->error);
        }
    }
    public function addtocart($item_id,$user_id){
        $sql = "INSERT INTO cart(item_id,user_id)VALUE($item_id,$user_id)";
        $result = $this->conn->query($sql);

        if($result == TRUE){
           header('location: ../cart.php');
           
        }else{
            die('ERROR :'.$this->conn->error);
        }
    }

    public function show_cart($id){
        $sql = "SELECT * FROM cart INNER JOIN items ON cart.item_id =  items.item_id WHERE cart.user_id = '$id' AND cart.status = 'cart'";
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

    public function delete($id){
        $sql = "DELETE FROM cart WHERE cart_id = '$id'";
        $result = $this->conn->query($sql);

        if($result == TRUE){
              header('location: cart.php');
        }else{
            die('ERROR: '.$this->conn->error);
        } 
    }

    public function buy($cart_id,$user_id){
        $sql = "UPDATE cart SET status = 'PAID' WHERE user_id = '$user_id' AND cart_id = '$cart_id'";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            return TRUE;
        }else{
            die('ERROR: '.$this->conn->error);
        }
    }
    public function buy_directly($item_id,$user_id){
        $sql = "INSERT INTO cart (item_id,user_id,status)VALUES($item_id,$user_id,'PAID')";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            return TRUE;
        }else{
            die('ERROR: '.$this->conn->error);
        }
    }

    public function status($id){
        $sql = "SELECT * FROM cart INNER JOIN items ON cart.item_id =  items.item_id WHERE cart.user_id = '$id' AND cart.status = 'PAID'";
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
}

$cartObj = new Cart;

?>
<?php
include 'Connection.php'; // combines 2 files


class User extends connection{ 


    public function create_register($username,$email,$password){
        // $password = password_hash($password, PASSWORD_DEFAULT); 
        $sql = "INSERT INTO login(username,email,password)VALUES('$username','$email','$password')";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    function login($username,$password){

        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            // Check if the password is correct.
            $row = $result->fetch_assoc();

         
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];

                return true;
            
        }else{
            return false;
        }
    } 
}
?>
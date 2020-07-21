<?php
include_once 'dbh.inc.php';
class Store_class extends Database{
    
    public function __construct(){

        $this->db_connect();
    }

    function add_user($fname,$lname,$username,$Encrypted_password,$role){

        $query="Insert into tbl_users(fname,lname,username,password,role) values ('$fname','$lname','$username','$Encrypted_password','$role')";
        $result=mysqli_query($this->connection,$query);
        return $result;
    }
}
?>
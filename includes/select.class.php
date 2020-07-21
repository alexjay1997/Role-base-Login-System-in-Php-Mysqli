<?php
include_once 'dbh.inc.php';
class Select_class extends Database{

    public function __construct(){

        $this->db_connect();
    }

    function select_login_user($username){

        $query="Select * from tbl_users where username='$username'";
        $result=mysqli_query($this->connection,$query);
        return $result;
    }
}
?>
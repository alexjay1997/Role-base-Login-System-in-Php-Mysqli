<?php
include '../includes/store.class.php';

if(isset($_POST['reg-btn'])){

    $conn_add_user =new Store_class();
    $fname=mysqli_real_escape_string($conn_add_user->connection,$_POST['fname']);
    $lname=mysqli_real_escape_string($conn_add_user->connection,$_POST['lname']);
    $username=mysqli_real_escape_string($conn_add_user->connection,$_POST['username']);
    $password=mysqli_real_escape_string($conn_add_user->connection,$_POST['password']);
    $Encrypted_password=password_hash($password,PASSWORD_DEFAULT);
    $role=mysqli_real_escape_string($conn_add_user->connection,$_POST['role']);

    $insert_user =$conn_add_user->add_user($fname,$lname,$username,$Encrypted_password,$role);
    if($insert_user){

        echo "<script>alert('Successfully Added new User');</script>";
        echo "<script>window.location.replace='../index.php';</script>";

    }
    else{
        echo "<script>alert('Failed! to add new user!!');</script>";
        echo "<script>window.location.replace='../index.php';</script>";
    }
}

?>
<?php
session_start();



if(isset($_POST['login-btn'])){
    include '../includes/select.class.php';
    $conn_select_user = new Select_class();
$username = mysqli_real_escape_string($conn_select_user->connection,$_POST['username']);
$password = mysqli_real_escape_string($conn_select_user->connection,$_POST['password']);


$login_user =$conn_select_user->select_login_user($username);

if(mysqli_num_rows($login_user)>0){

  

while($row = mysqli_fetch_array($login_user))  
{  
    
        if(password_verify($password, $row["password"])&& $row["role"]=='admin')  
        {  
            //return true;  
           // $row=mysqli_fetch_assoc($login_user);
            $_SESSION['id'] = $row['user_id'];
            header('location:../index.php'); 
        }
        else if (password_verify($password, $row["password"]) && $row["role"]=='staff'){

            $_SESSION['id'] = $row['user_id'];
            header('location:../staff.php'); 

        }
        else  
        {  
             //return false;  
             echo '<script>alert("Wrong User Details")</script>';  
        }  


    
    
}

}//end ng if mysqli_num_rows

}

?>
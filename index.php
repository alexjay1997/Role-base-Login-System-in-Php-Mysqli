<?php
session_start();
if(isset($_SESSION['id']) && $_SESSION['id']==true){


}
else{

   header('location:login.page.php'); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud_oop5</title>
</head>
<body>
    <div class="form-wrapper" style="margin:0px auto;width:400px;padding:20px;box-shadow:1px 1px 1px 1px #eee;">
    <form method="post" action="functions/add_user.php">
        <input type="text" name="fname" placeholder="Firstname"><br>
        <input type="text" name="lname" placeholder="laststname"><br>
        <input type="text" name="username" placeholder="username"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="text" name="role" placeholder="Role"><br>
        <input type="submit" name="reg-btn" value="Submit">
    </form> 
    </div>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
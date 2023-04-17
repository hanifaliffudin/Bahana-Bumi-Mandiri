<?php
session_start();
include "../dbconnect.php";
if(isset($_POST["login"]))  
{  
     if(empty($_POST["username"]) || empty($_POST["password"]))  
     {  
          $message = 'All fields are required';
          echo "<script type='text/javascript'>alert('$message');</script>";  
     }  
     else  
     {  
          $query = "SELECT * FROM users WHERE username = :username AND password = :password";  
          $statement = $db->prepare($query);  
          $statement->execute(  
               array(  
                    'username'     =>     $_POST["username"],  
                    'password'     =>     $_POST["password"]  
               )  
          );  
          $count = $statement->rowCount();  
          if($count > 0)  
          {  
               $_SESSION["username"] = $_POST["username"];  
               header("location:index-karir.php");  
          }  
          else  
          {  
               $message = 'Username/Password Salah';
               echo "<script type='text/javascript'>alert('$message');</script>";   
          }  
     }  
}  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>BBM Admin</title>
  <link
      rel="shortcut icon"
      href="assets/img/favicon-bbm.ico"
      type="image/x-icon"
    />

  <!-- ========== Css Files ========== -->
  <link href="css/root.css" rel="stylesheet">
  </head>
  <body style="background-color: #f5f5f5;">

    <div class="login-form">
      <form method="POST">
        <div class="top">
          <h1>Login</h1>
        </div>
        <div class="form-area">
          <div class="group">
            <input type="text" name="username" class="form-control" placeholder="Username">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <i class="fa fa-key"></i>
          </div>
          <button type="submit" name="login" class="btn btn-default btn-block">LOGIN</button>
        </div>
      </form>
     
    </div>

</body>
</html>
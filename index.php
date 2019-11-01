<?php

// This Page is completed. Please Do not edit..
// Final


$message = "";

if(isset($_POST['SubmitButton'])){
  $con = mysqli_connect("localhost","root","","Attendance");

  $username = $_POST['email'];
  $pass = $_POST['pass'];

  $password = md5($pass);

  $sql = "SELECT * FROM Users WHERE TEACHER_ID = '$username' && PASSWORD = '$password'";
  $result = mysqli_query($con,$sql);

  $row = mysqli_num_rows($result);

  if($row>0){
    session_start();
    $_SESSION["TEACHER_ID"] = $username;
    header("Location: Faculty/");
  }else{
    $message = "Invalid Username Or Password.";
  }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Attentry - Attendance Management System</title>
    <link rel="stylesheet" href="Style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  </head>
  <body>
    <div class="nav-bar">
      <h1 class="logo">attentry</h1>
    </div>
<div class="login-box">
  <form class="form1" action="" method="post">
    <input class="input1" type="text" name="email" value="" placeholder="Email..."><br>
    <input class="input2" type="password" name="pass" value="" placeholder="Password..."><br>
    <input class="login-btn" type="submit" name="SubmitButton" value="Login">

    <div class="message"><?php if($message!="") { echo $message; } ?></div>
  </form>
</div>
</body>
</html>

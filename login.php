<?php

  $con = mysqli_connect("localhost","root","","Attendance");

  $username = $_POST['email'];
  $pass = $_POST['pass'];

  $password = md5($pass);

  $sql = "SELECT * FROM Users WHERE TEACHER_ID = '$username' && PASSWORD = '$password'";
  $result = mysqli_query($con,$sql);

  $row = mysqli_num_rows($result);

  if($ad > 0){
    session_start();
    $_SESSION["TEACHER_ID"] = $row['TEACHER_ID'];
    $_SESSION["NAME"] = $row['NAME'];
    header("Location: classes.php");
  }else{
    header("Location: index.php");
  }

?>

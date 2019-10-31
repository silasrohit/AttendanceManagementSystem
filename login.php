<?php

$con = mysqli_connect("localhost","root","","Attendance");

  $username = $_POST['email'];
  $pass = $_POST['pass'];

  $password = md5($pass);

  $sql = "SELECT * FROM Users WHERE TEACHER_ID = '$username' && PASSWORD = '$password'";
  $result = mysqli_query($con,$sql);

  $ad = mysqli_num_rows($result);

  if($ad > 0){
    header("Location: classes.php");
  }else{
    header("Location: index.php");
  }

?>

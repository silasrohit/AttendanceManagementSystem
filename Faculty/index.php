<?php
session_start();

if($_SESSION["TEACHER_ID"]){

}else{
  header("Location:..\index.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Attentry - Student</title>
    <link rel="stylesheet" href="..\Style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  </head>
  <body>
    <div class="nav-bar">
      <h1 class="logo">attentry</h1>
    </div>
      <div class="faculty-logout"><a href="logout.php">Logout</a></div>
    </div>
</body>
</html>

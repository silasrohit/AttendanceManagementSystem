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
    <div class="login-box-student">
  <form class="form1" action="login.php" method="post">
    <input class="input2" type="text" name="" value="" placeholder="Name"><br>
    <input class="input2" type="text" name="" value="" placeholder="Roll NO."><br><br>

    <select class="branch_box"  name="" value="BRANCH">
      <option value="AUTOMOBILE">AUTOMOBILE</option>
      <option value="COMPUTER">COMPUTER</option>
      <option value="EEE">EEE</option>
      <option value="EE">EE</option>
      <option value="MANUFACTURING">MANUFACTURING</option>
      <option value="MECHANICAL">MECHANICAL</option>
    </select>

    <select class="semester_box" name="Semester" value="SEMESTER">
      <?php
          for($i=1; $i<=6; $i++)
          {
              echo '<option>' .$i.  '</option>';
          }
       ?>


    </select><br>


    <input class="input2" type="" name="" value="" placeholder="Phone Number"><br>
    <input class="input2" type="text" name="" value="" placeholder="Email"><br>
    <input class="input2" type="password" name="" value="" placeholder="Password"><br>
    <input class="login-btn" type="submit" name="" value="Sign Up">

  </form>

</div>
</body>
</html>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $con = mysqli_connect("localhost","root","","Attendance");

      $sql = "SELECT SNAME FROM Student_Info WHERE BRANCH = 'COMPUTER' && SEM = '5'";
      $result = mysqli_query($con,$sql);

      $rows = mysqli_num_rows($result);

      if ($rows > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            echo $row['SNAME']. "<input type='checkbox' name='' value='' checked>";
            echo '</br>';
          }

          echo '<input type="submit" name="" value="POST ATTENDANCE">';
        } else {
          echo "0 results";
        }

     ?>

  </body>
</html>

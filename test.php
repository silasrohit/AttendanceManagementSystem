
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="test.php" method="post">
      <?php
        for($i=0;$i<=30;$i++){
          echo "$i = <input type='checkbox' name='check' value='$i'></br>";
        } 
       ?>
       <input type="submit" name="" value="Submit">
    </form>

    <?php

    if(isset($_POST['submit'])){
      foreach($_POST['check'] as $present){
        echo $present;
      }
    }

     ?>

  </body>
</html>

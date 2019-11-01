<?php
session_start();
unset($_SESSION["TEACHER_ID"]);
unset($_SESSION["NAME"]);
header("Location:..\index.php");
?>

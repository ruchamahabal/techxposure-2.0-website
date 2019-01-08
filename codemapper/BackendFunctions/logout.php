<?php

if (isset($_POST['yes'])) {
  session_start();
  session_unset();
  session_destroy();
  header("Location: ../index.php");
  exit();
} else {
  header("Location: ../index.php");
  exit();
}


?>

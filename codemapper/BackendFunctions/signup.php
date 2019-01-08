<?php

if (isset($_POST['submit'])) {

  include_once 'db_conn.php';

  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  $pwdchk = mysqli_real_escape_string($conn, $_POST['pwdchk']);

  // Error handlers
  // check for empty fields
  if (empty($first) || empty($last) || empty($email) || empty($pwd) || empty($pwdchk)) {
    header("Location: ../index.php?signup=empty");
    exit();
  } else {
    // check is input characters are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
      header("Location: ../index.php?signup=invalidCharacters");
      exit();
    } else {
      // check if email is valid
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?signup=invalidEmail");
        exit();
      } else {
        // check if email is already registered
        $sql = "SELECT * FROM users WHERE user_email ='$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
          header("Location: ../index.php?signup=emailAlreadyExists");
          exit();
        } else {
          // compare the passwords
          if ($pwd != $pwdchk ) {
            header("Location: ../index.php?signup=passwordError");
            exit();
          } else {
            // hash the password
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            // insert the user into database
            $sql = "INSERT INTO users (user_first, user_last, user_email, user_pwd) VALUES ('$first', '$last', '$email', '$hashedPwd');";

            mysqli_query($conn, $sql);
            header("Location: ../index.php?signup=success");
            exit();

          }
        }
      }
    }
  }


} else {
  // if user directly enters the url of signup page he will be automatically redirected to homepage
  header("Location: ../index.php");
  exit();
}



?>

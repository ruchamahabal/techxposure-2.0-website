<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Title -->
    <title> Techxposure 2.0</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">


    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="../css/custom.css">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="favicon.png">

    <!-- form css -->
    <link rel="stylesheet" type="text/css" href="css/form.css">


  </head>
  <body>

    <!-- navbar-->
    <header class="site-header" role="banner">
      <nav id="navbar-main" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <img id="navbar-logo" src="../assets/images/txp-logo.png" width="110" height="60" alt="">
        <h3><a class="navbar-brand" href="#hero-section">Techxposure 2.0</a></h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       </nav>
    </header>

<div class="container jumbotron" style="margin-top:110px;">
  <form action="index.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
    </div>
    <input type="submit" name="login" value="Login" class="btn btn-primary">
  </form>
</div>


<?php
error_reporting(0);
$username = $_POST['username'];
$password = $_POST['password'];

if ($_POST['login']) {
    if ($username === 'admin' && $password === 'Techxposure2k19') {
        $_SESSION['login'] = true;
        echo "<script> location.href='dashboard.php'; </script>";
        exit();

    }
}
?>

<?php include_once '../footer.php'; ?>
<!DOCTYPE html>

<?php session_start(); ?>

<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="vendors/img/favicon.ico">

        <title>CodeMapper</title>

        <!--Bootstrap CORE CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!--Font Awesome CSS-->
        <link rel="stylesheet" href="vendors/fonts/css/fontawesome.min.css">


        <!--Custom CSS-->
        <link rel="stylesheet" href="resources/css/custom.css" type="text/css">

        <!--Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css">

        <!-- Animation Header -->
        <link rel="stylesheet" href="vendors/css/normalize.css">
        <link rel="stylesheet" href="vendors/css/demo.css">
        <link rel="stylesheet" href="vendors/css/component.css">

        <link rel="stylesheet" type="text/css" href="vendors/plugin/codemirror/lib/codemirror.css">
        <link rel="stylesheet" type="text/css" href="vendors/plugin/codemirror/theme/rubyblue.css">
    </head>

    <body>

        <!--HEADER-->
        <header class="site-header" role="banner">

            <!--NAVBAR-->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="color:white;" >
                    <a class="navbar-brand" href="index.php">CodeMapper</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="rules.php">Compete</a></li>
                            <li class="nav-item"><a class="nav-link" href="DocumentationSect.php">Resources</a></li>
                        </ul>

                         <?php

                          if (isset($_SESSION['u_email'])) {
                            $name = $_SESSION['u_first'];
                            echo "Hey, ",$name;
                          }
                        ?>
                        <?php
                          if (isset($_SESSION['u_email'])) {
                            echo '<button type="button" id="signout-btn" class="btn btn-success" data-toggle="modal" data-target="#logout-modal">Logout</button>';
                          } else {
                            echo '<button type="button" id="login-btn" class="btn btn-primary" data-toggle="modal" data-target="#login-modal">Login</button>
                            <button type="button" id="signup-btn" class="btn btn-success" data-toggle="modal" data-target="#signup-modal">Sign Up</button>';
                          }
                        ?>


                    </div><!--collapse-->
                </nav><!--navbar-->
        </header><!--header-->



        <!--MODAL-->
        <!--=================================================-->
        <div class="modal fade" id="logout-modal" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logout">Logout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!-- modal-header -->
                    <div class="modal-body">
                        <form method="post" action="BackendFunctions/logout.php">
                            <label for="logoutQuestion">Are you sure?</label><br>
                            <button type="submit" name="yes" class="btn btn-primary">Yes</button>
                            <button type="submit" name="no" class="btn btn-primary">No</button>
                        </form><!--form login-->

                    </div><!-- modal-body -->
                </div><!--modal-content-->
            </div><!--modal-dialog-->
        </div><!--modal-->

        <div class="modal fade" id="login-modal" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="login">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!-- modal-header -->
                    <div class="modal-body">
                        <form method="post" action="BackendFunctions/login.php">
                            <div class="form-group">
                                <label for="InputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email" id="loginEmail" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="InputPassword1">Password</label>
                                <input type="password" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Log in</button>
                        </form><!--form login-->

                    </div><!-- modal-body -->
                </div><!--modal-content-->
            </div><!--modal-dialog-->
        </div><!--modal-->

        <div class="modal fade" id="signup-modal" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="login">Sign Up</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div><!-- modal-header -->
                    <div class="modal-body">
                        <form method="post" action="BackendFunctions/signup.php">
                            <div class="form-group">
                                <label for="InputFirstName">Firstname</label>
                                <input type="text" class="form-control" id="FirstName" aria-describedby="FName" name="first" placeholder="Enter your first name">
                            </div>
                            <div class="form-group">
                                <label for="InputLastName">Lastname</label>
                                <input type="text" class="form-control" id="LastName" aria-describedby="LName" name="last" placeholder="Enter your last name">
                            </div>
                            <div class="form-group">
                                <label for="InputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="InputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="InputPassword1">Confirm Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="pwdchk" placeholder="Re-type Password">
                            </div>
                            <button type="submit" name="submit" class="btn btn-success">Sign up</button>
                        </form><!--form signup-->

                    </div><!-- modal-body -->
                </div><!--modal-content-->
            </div><!--modal-dialog-->
        </div><!--modal-->

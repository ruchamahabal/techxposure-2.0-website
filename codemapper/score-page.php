<?php
  session_start();?>
  <!DOCTYPE html>
  <html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

          <link rel="stylesheet" type="text/css" href="vendors/plugin/codemirror/theme/rubyblue.css">

          <title>Your Score</title>
          <style>
          .card {
            position: fixed;
            top: 50%;
            left: 50%;
            /* bring your own prefixes */
            transform: translate(-50%, -50%);
          }
          </style>
        </head>
        <body>
          <div class="card" style="width: 20rem;">
            <div class="card-body">
              <h5 class="card-title">Your Score</h5>
              <p class="card-text"><?php echo $_SESSION['user_score']?> out of 300</p>
              <p class="card-text">Time Remaining: <?php echo $_SESSION['time']?> seconds</p>
              <p class="card-text">Compilation Calls Remaining: <?php echo $_SESSION['compilationCalls']?></p>
              <p class="card-text">Hidden Testcases Passed: <?php echo $_SESSION['hidden']?> out of 9</p>
              <p class="card-text">Thankyou for completing the challenge. Happy coding!</p>
              <a href="index.php" class="btn btn-primary">Home</a>
            </div>
          </div>
          <script type="text/javascript" src="vendors/js/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
</html>

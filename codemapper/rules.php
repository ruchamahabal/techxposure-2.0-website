<?php include_once 'header.php'; ?>
        <div class="container" id="rules-container" style="padding-top: 75px;">
        <div class="card w-100 bg-light">
          <div class="card-body">
            <h5 class="card-title">Rules for the challenge</h5>
                <p class="card-text">The challenge duration is of 2 hours i.e 7200 seconds</p>
                <p class="card-text">Access to any electronic media is prohibited.</p>
                <p class="card-text">Three python levels to be solved as a part of the challenge.</p>
                <p class="card-text">Once you click on the start challenge button you would be redirected to the compete section and the timer will start</p>
                <p class="card-text">DO NOT REFRESH THE PAGE THROUGHOUT THE CHALLENGE. THIS WILL LEAD TO IMMEDIATE DISQUALIFICATION.</p>
                <p class="card-text">DO NOT CLICK ON BROWSER'S BACK BUTTON THROUGHOUT THE CHALLENGE. THIS WILL LEAD TO IMMEDIATE DISQUALIFICATION.</p>
                <p class="card-text">USING ANY KIND OF SEARCH ENGINE WILL LEAD TO IMMEDIATE DISQUALIFICATION.</p>
                <p class="card-text">USE OF TAB BUTTON WHILE CODING IS PROHIBITED.</p>
                <p class="card-text">You cannot go to next question till you pass all sample testcases of the current question.</p>
                <p class="card-text">There is a Compile/Run button to compile the code below the coding window. Once compilation is finished, you will be shown how many testcases have you passed.</p>
                <p class="card-text">Compilation is allowed only limited number of times (20) in the entire challenge.</p>
                <p class="card-text">When you click on submit and next button your score for current question will be saved and the next question for the challenge would be displayed</p>
                <p class="card-text">Rough work is allowed on the papers provided to you</p>
                <p class="card-text">All your functions must return a value. You are not allowed to print anything.</p>
                <p class="card-text">Once you finish all the questions or you run out of compilation calls or time, your score will be displayed</p>
                <p class="card-text">Judgement will be based on the final score which comprises of time taken to solve the entire challenge and the testcases passes. (There will be some hidden test cases as well)</p>
                <p class="card-text">All the best! happy coding!</p>
            <a href="index.php" class="btn btn-primary">Home</a>

            <?php
              if (isset($_SESSION['u_email'])) {
                echo '<a href="challenge-page.php" id="challengeStart" class="btn btn-success" style="margin-left:25px;">Start Challenge</a>';
              } else {
                echo '<button type="button" id="loginF" class="btn btn-primary" data-toggle="modal" data-target="#login-modal" style="margin-left:25px;">Start Challenge</button>';
              }
            ?>
        </div>
      </div>
      </div>
<?php include_once 'footer.php'?>

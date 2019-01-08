
<?php include 'db_conn.php'; session_start(); ?>
<?php if ($_SESSION['login']) {
  echo '<!DOCTYPE html>
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

    <!-- swiper css -->
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="../css/custom.css">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="favicon.png">

    <!-- form css -->
    <link rel="stylesheet" type="text/css" href="css/form.css">


  </head>';
  echo '<body style="background-color:white;">

    <!-- navbar-->
    <header class="site-header" role="banner">
      <nav id="navbar-main" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <img id="navbar-logo" src="../assets/images/txp-logo.png" width="110" height="60" alt="">
        <h3><a class="navbar-brand" href="../index.php#hero-section">Techxposure 2.0</a></h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#solo">Solo<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team">Team</a>
            </li>
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarSubEvents" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Sub Events
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarSubEvents">
                  <a class="dropdown-item" href="#sub-solo">Solo</a>
                  <a class="dropdown-item" href="#sub-team">Team</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Tech Events
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#tech-solo">Solo</a>
                  <a class="dropdown-item" href="#tech-team">Team</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Fine Arts Events
                </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#fine-arts-solo">Solo</a>
                  <a class="dropdown-item" href="#fine-arts-team">Team</a>
                </div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
       </nav>
    </header>
    
    <div id="sub-solo" class="container" style="padding-top:110px;">
        <h1>Sub-Events SOLO Registrations</h1>
        <!-- Table -->
        <div class="container shadow-sm p-3 mb-5 bg-white rounded" style="margin-top:50px;">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">College Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Event Name</th>
              </tr>
            </thead>
            <tbody id="member_table_body">';

  
              
              $query = "SELECT name, college_name, participants.email, phone, event_name from participants inner join solo_registrations where participants.email = solo_registrations.email and event_name in (select title from sub_events)
;";
              $result = mysqli_query($conn, $query);
              $resultCheck = mysqli_num_rows($result);
              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['college_name'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['phone'] . "</td>";
                  echo "<td>" . $row['event_name'] . "</td>";
                  echo "</tr>";
                }
              }
              $query = "SELECT name, college_name, participants.email, phone, event_name from participants inner join solo_registrations where participants.email = solo_registrations.email and event_name='PUBG Solo';";
              $result = mysqli_query($conn, $query);
              $resultCheck = mysqli_num_rows($result);
              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['college_name'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['phone'] . "</td>";
                  echo "<td>" . $row['event_name'] . "</td>";
                  echo "</tr>";
                }
              }
            echo ' </tbody>
          </table>
          </div>
        </div>
    </div>
    <div id="sub-team" class="container" style="padding-top:110px;">
        <h1>Sub Events TEAM Registrations</h1>
        <!-- Table -->
        <div class="container shadow-sm p-3 mb-5 bg-white rounded" style="margin-top:50px;">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">College Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">No. of Members</th>
                <th scope="col">Event Name</th>
              </tr>
            </thead>
            <tbody id="member_table_body">';
           
              
              $query = "SELECT name, college_name, participants.email, phone,no_of_members, event_name from participants inner join team_registrations where participants.email = team_registrations.email and event_name in (select title from sub_events);
;";
              $result = mysqli_query($conn, $query);
              $resultCheck = mysqli_num_rows($result);
              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['college_name'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['phone'] . "</td>";
                  echo "<td>" . $row['no_of_members'] . "</td>";
                  echo "<td>" . $row['event_name'] . "</td>";
                  echo "</tr>";
                }
              }
              $query = "SELECT name, college_name, participants.email, phone,no_of_members, event_name from participants inner join team_registrations where participants.email = team_registrations.email and event_name='PUBG Squad';
;";
              $result = mysqli_query($conn, $query);
              $resultCheck = mysqli_num_rows($result);
              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['college_name'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['phone'] . "</td>";
                  echo "<td>" . $row['no_of_members'] . "</td>";
                  echo "<td>" . $row['event_name'] . "</td>";
                  echo "</tr>";
                }
              }
            echo ' </tbody>
          </table>
          </div>
        </div>
    </div>
    <div id="tech-solo" class="container" style="padding-top:110px;">
        <h1>Tech Events SOLO Registrations</h1>
        <!-- Table -->
        <div class="container shadow-sm p-3 mb-5 bg-white rounded" style="margin-top:50px;">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">College Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Event Name</th>
              </tr>
            </thead>
            <tbody id="member_table_body">';
           
              
              $query = "SELECT name, college_name, participants.email, phone, event_name from participants inner join solo_registrations where participants.email = solo_registrations.email and event_name in (select title from tech_events)
;";
              $result = mysqli_query($conn, $query);
              $resultCheck = mysqli_num_rows($result);
              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['college_name'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['phone'] . "</td>";
                  echo "<td>" . $row['event_name'] . "</td>";
                  echo "</tr>";
                }
              }
            echo '</tbody>
          </table>
          </div>
        </div>
    </div>
    <div id="tech-team" class="container" style="padding-top:110px;">
        <h1>Tech Events TEAM Registrations</h1>
        <!-- Table -->
        <div class="container shadow-sm p-3 mb-5 bg-white rounded" style="margin-top:50px;">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">College Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                 <th scope="col">No. of Members</th>
                <th scope="col">Event Name</th>
              </tr>
            </thead>
            <tbody id="member_table_body">';
            
              
              $query = "SELECT name, college_name, participants.email, phone,no_of_members, event_name from participants inner join team_registrations where participants.email = team_registrations.email and event_name in (select title from tech_events)
;";
              $result = mysqli_query($conn, $query);
              $resultCheck = mysqli_num_rows($result);
              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['college_name'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['phone'] . "</td>";
                  echo "<td>" . $row['no_of_members'] . "</td>";
                  echo "<td>" . $row['event_name'] . "</td>";
                  echo "</tr>";
                }
              }
            echo '</tbody>
          </table>
          </div>
        </div>
    </div>
    <div id="fine-arts-solo" class="container" style="padding-top:110px;">
        <h1>Fine Arts SOLO Registrations</h1>
        <!-- Table -->
        <div class="container shadow-sm p-3 mb-5 bg-white rounded" style="margin-top:50px;">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">College Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Event Name</th>
              </tr>
            </thead>
            <tbody id="member_table_body">';
            
              
              $query = "SELECT name, college_name, participants.email, phone, event_name from participants inner join solo_registrations where participants.email = solo_registrations.email and event_name in (select title from fine_arts_events)
;";
              $result = mysqli_query($conn, $query);
              $resultCheck = mysqli_num_rows($result);
              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['college_name'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['phone'] . "</td>";
                  echo "<td>" . $row['event_name'] . "</td>";
                  echo "</tr>";
                }
              }
            echo ' </tbody>
          </table>
          <div>
        </div>
    </div>
    <div id="fine-arts-team" class="container" style="padding-top:110px;">
        <h1>Fine Arts TEAM Registrations</h1>
        <!-- Table -->
        <div class="container shadow-sm p-3 mb-5 bg-white rounded" style="margin-top:50px;">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">College Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                 <th scope="col">No. of Members</th>
                <th scope="col">Event Name</th>
              </tr>
            </thead>
            <tbody id="member_table_body">';
           
              
              $query = "SELECT name, college_name, participants.email, phone,no_of_members, event_name from participants inner join team_registrations where participants.email = team_registrations.email and event_name in (select title from fine_arts_events)
;";
              $result = mysqli_query($conn, $query);
              $resultCheck = mysqli_num_rows($result);
              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['college_name'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['phone'] . "</td>";
                  echo "<td>" . $row['no_of_members'] . "</td>";
                  echo "<td>" . $row['event_name'] . "</td>";
                  echo "</tr>";
                }
              }
            echo '</tbody>
          </table>
          </div>
        </div>
    </div>
    <div id="solo" class="container" style="padding-top:110px;">
        <h1>SOLO Registrations</h1>
        <!-- Table -->
        <div class="container shadow-sm p-3 mb-5 bg-white rounded" style="margin-top:50px;">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">College Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Event Name</th>
              </tr>
            </thead>
            <tbody id="member_table_body">';
            
            
              $query = "SELECT name, college_name, participants.email, phone, event_name from participants inner join solo_registrations where participants.email = solo_registrations.email;";
              $result = mysqli_query($conn, $query);
              $resultCheck = mysqli_num_rows($result);
              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['college_name'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['phone'] . "</td>";
                  echo "<td>" . $row['event_name'] . "</td>";
                  echo "</tr>";
                }
              }
            echo '</tbody>
          </table>
          </div>
        </div>
    </div>
     <div id="team" class="container" style="padding-top:110px;">
        <h1>TEAM Registrations</h1>
        <!-- Table -->
        <div class="container shadow-sm p-3 mb-5 bg-white rounded" style="margin-top:50px;">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">College Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Number of Members</th>
                <th scope="col">Event Name</th>
              </tr>
            </thead>
            <tbody id="member_table_body">';
            
            
              $query = "SELECT name, college_name, participants.email, phone,no_of_members, event_name from participants inner join team_registrations where participants.email = team_registrations.email;";
              $result = mysqli_query($conn, $query);
              $resultCheck = mysqli_num_rows($result);
              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['college_name'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['phone'] . "</td>";
                  echo "<td>" . $row['no_of_members'] . "</td>";
                  echo "<td>" . $row['event_name'] . "</td>";
                  echo "</tr>";
                }
              }
            echo '</tbody>
          </table>
          </div>
        </div>
    </div>

   <section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.facebook.com/techxposure/"><i class="fab fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.youtube.com/channel/UCFa_PfH4dVvyupOmvh8QIww"><i class="fab fa-youtube"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/techxposure_2.0"><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="mailto:techxposuretxp@gmail.com"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><h5><b>TechXposure 2.0</b> is a Techno-Cultural fest of S.K. Somaiya College of Arts, Science and Commerce</h5></p>
					<p class="h6">&copy Copyright 2018-2019 TechXposure 2.0</p>
					<p class="h6">Assets by: Akhilesh Nair and Om Thakkar</p>
          <p class="h6"><h5>Designed and Developed By: Rucha Mahabal and Shubham Parchure</h5></p>
				</div>
				</hr>
			</div>
		</div>
	</section>
  <!-- /Footer -->
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js\popper.min.js"></script>
    <script src="../js\bootstrap.min.js"></script>
  </body>
</html> ';
            }
else {
  header("Location: index.php");
  exit();
}
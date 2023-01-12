<?php
// Initialize the session
// Include config file
require_once "admin_config.php";
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fly Frew CMS</title>
    <script src="https://kit.fontawesome.com/ea02caf681.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,500&display=swap" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap');
  body  {
    font-family: 'Rubik', sans-serif;

  }
    .col-md-6,
    .col-md-4,
    .col-md-3 {  
              padding-top: 15px;
    }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">FlyFrew CMS - PJH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <div class="d flex justify-content-end">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Manage Airports</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">PJH</a></li>

    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Manage Lounges</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="pjh-cms-pjhlounge.php">PJH Lounge</a></li>
    </ul>
  </li>


                     <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
                    {
                    ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?></span>
          </a>
          <ul class="dropdown-menu">

            <li><a class="dropdown-item" href="reset-password.php">Reset Password</a></li>
            <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
          </ul>
        </li>
                <?php }else{ ?>
                  
                  <li class="nav-item">
                        <a class="nav-link" href="registration.php" style="padding-right: 100px;">Register</a>
                     </li>
                  <li class="nav-item">
                        <a class="nav-link" href="login.php" >Log In</a>
                     </li>
                <?php } ?>
                  </ul>
               </div>
            </div>
</nav>

<!-- start of container--><div class="container">
<h2 style="padding-top: 15px;"> Manage content for all your services </h2>
<div class="row">
<div class="col-md-4">
<div class="card">
  <h5 class="card-header">PJH Lounge Content</h5>
  <div class="card-body">
    <h5 class="card-title">Content for PJH Lounge</h5>
    <p class="card-text">Here you will be able to manage everything that is displayed on the PJH Lounge Demo</p>
    <a href="pjh-cms-pjhlounge.php" class="btn btn-primary">Manage PJH</a>
  </div>
  <div class="card-footer text-muted">
    Last update 2 days ago
  </div>
</div>
</div>
<div class="col-md-4">
<div class="card">
  <h5 class="card-header">PJH Aiport</h5>
  <div class="card-body">
    <h5 class="card-title">Content for PJH Airport</h5>
    <p class="card-text">Here you will be able to manage everything that is displayed on the PJH Airport Demo</p>
    <a href="pjh-cms.php" class="btn btn-primary">Manage PJH</a>
  </div>
  <div class="card-footer text-muted">
    Last update 2 days ago
  </div>
</div>
</div>
</div>

<!-- Footer Start -->

  <!-- Footer End --></footer>

<!-- end of container--></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
</body>
</html>

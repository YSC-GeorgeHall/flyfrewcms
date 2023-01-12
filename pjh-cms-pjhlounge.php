<?php
// Initialize the session
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,500&display=swap" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap');

    body {
        font-family: 'Rubik', sans-serif;

    }

    .col-md-6,
    .col-md-2,
    .col-md-3 {
        padding-top: 15px;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">FlyFrew CMS - Managing PJH Lounge</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <div class="d flex justify-content-end">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="pjh-cms-ordertotablecontent.php">Manage Order to Table</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="alllistings.php">Manage Duty Free</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lastmin.php">Manage Book a Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pricing.php">Manage Give Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pricing.php">Manage Lounge Info</a>
                        </li>

                        <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
                    {
                    ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
                            <a class="nav-link" href="login.php">Log In</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
    </nav>

    <!-- start of container-->
    <div class="container">



        <div class="row">
            <div class="col-md-2">
                <div class="card ">
                    <h5 class="card-header ">Order to table</h5>
                    <div class="card-body">
                        <a href="pjh-cms-ordertotablecontent.php" class="btn btn-primary">Update Content</a>
                    </div>
                    <div class="card-footer text-muted">
                        Updated 2 days ago
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card ">
                    <h5 class="card-header ">Duty Free</h5>
                    <div class="card-body">
                        <a href="pjh-cms.php" class="btn btn-primary">Update Content</a>
                    </div>
                    <div class="card-footer text-muted">
                        Updated 2 days ago
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card ">
                    <h5 class="card-header ">Book a Service</h5>
                    <div class="card-body">
                        <a href="pjh-cms.php" class="btn btn-primary">Update Content</a>
                    </div>
                    <div class="card-footer text-muted">
                        Updated 2 days ago
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card ">
                    <h5 class="card-header ">Give Feedback</h5>
                    <div class="card-body">
                        <a href="pjh-cms.php" class="btn btn-primary">Update Content</a>
                    </div>
                    <div class="card-footer text-muted">
                        Updated 2 days ago
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card ">
                    <h5 class="card-header ">Lounge Info</h5>
                    <div class="card-body">
                        <a href="pjh-cms.php" class="btn btn-primary">Update Content</a>
                    </div>
                    <div class="card-footer text-muted">
                        Updated 2 days ago
                    </div>
                </div>
            </div>
            <!-- Footer Start -->

            <!-- Footer End -->
            </footer>
            <!-- end of container-->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
</body>

</html>
</body>

</html>
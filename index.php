<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
   // header("location: home.php");
   // exit;
  // echo "login success";
}
else{
    header("location: sign.php");
}
?>

<!-- stationary shop web ctrl+/ for comment -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SM Stationary</title>
</head>

<body>
    <!-- code from here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/AssignWeb">SM Stationary</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/AssignWeb/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/AssignWeb/about.php">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/AssignWeb/service.php">Stationary</a>
                        <a class="dropdown-item" href="/AssignWeb/service.php">Xerox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/AssignWeb/service.php">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/AssignWeb/sign.php">Sign in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/AssignWeb/contact.php">Contact Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/AssignWeb/logout.php">Logout</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Limited Time Sale!</strong> 50% Off on all Stationay Items.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <!-- mt-3 for margin in bootstrap -->
    <div class="container mt-3">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to SM Stationary</h1>
            <p class="lead">We deals in all kinds of Stationary items in dicounted rates.</p>
            <hr class="my-4">
            <p>For location you can click below.</p>
            <a class="btn btn-primary btn-lg" href="https://www.google.com/maps/place/Siddiqia+Stationers/@33.6005219,72.9724294,14z/data=!4m10!1m2!2m1!1sstationery+rawalpindi!3m6!1s0x38df952b8a4acc9f:0xb08501586319f1ab!8m2!3d33.6005219!4d73.0084783!15sChVzdGF0aW9uZXJ5IHJhd2FscGluZGmSARBzdGF0aW9uZXJ5X3N0b3Jl4AEA!16s%2Fg%2F11tmhpjq15" target="_blank" role="button">google maps</a>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-md-4  text-center">
                    <img src="download.jpeg"class="bd-placeholder-img rounded-circle" width="140" height="140"/>
                    <h2>Books</h2>
                    <p>All kinds of Books School, Colleges, Universities. </p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="download2.jpeg"class="bd-placeholder-img rounded-circle" width="140" height="140"/>
                    <h2>Bindings</h2>
                    <p>All kinds of Binding Available. </p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="download3.jpeg"class="bd-placeholder-img rounded-circle" width="140" height="140"/>
                    <h2>Pens & Pencils</h2>
                    <p>All items available of different ranges.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
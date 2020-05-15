<?php
session_start();


if (isset($_POST["logout"])) {

    setcookie('login', '', time() - 3600,  "/");
    setcookie('userId', NULL , time() - 3600,  "/");
    setcookie('name', '', time() - 3600,  "/");
//    echo "<h1>Logiut Here</h1>";
    header('Location:../views/login.php');
}


$isAuth = '';

if(isset($_COOKIE['userId'])) {
    $isAuth = $_COOKIE['userId'];
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Event Manager</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/materialize.min.js"></script>

</head>

<body>


    <header>
        <nav class="nav-wrapper teal darken-2">
            <div class="container">
                <form action="#" method="POST">
                <a href="home.php" class="brand-logo">Smart Event Manager</a>
                <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="signup.php" class="btn-small black-text teal lighten-5 <?php  echo $isAuth ? 'hide': ''  ?>" data-position="bottom"
                            data-tooltip="Instagram">
                            SIGN UP
                        </a></li>
                    <li><a href="login.php" class="btn-small purple darken-1 <?php  echo $isAuth  ? 'hide': ''  ?>" data-position="bottom"
                            data-tooltip="Facebook">
                            LOG IN
                        </a></li>
                    <li><button type="submit" name="logout" class="btn-small red darken-1 <?php  echo $isAuth ? '' : 'hide'  ?>" data-position="bottom"
                           data-tooltip="Facebook">
                            Logout
                        </button></li>

                </ul>
                <ul class="sidenav grey lighten-2" id="mobile-menu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                </form>
            </div>
        </nav>

    </header>
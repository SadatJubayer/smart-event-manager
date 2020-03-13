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

</head>

<body>

    <header>
        <nav class="nav-wrapper teal darken-2">
            <div class="container">
                <a href="#" class="brand-logo">Smart Event Manager</a>
                <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="signup.php" class="btn-small black-text teal lighten-5" data-position="bottom" data-tooltip="Instagram">
                            SIGN UP
                        </a></li>
                    <li><a href="login.php" class="btn-small purple darken-1" data-position="bottom" data-tooltip="Facebook">
                            LOG IN
                        </a></li>

                </ul>
                <ul class="sidenav grey lighten-2" id="mobile-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="container">
        <div class="row">
            <h4 class="center">Organizer Home</h4>
        </div>
        <div class="row">
            <div class="col s12 m6 l3">
                <a href="#">
                    <div class="card hoverable black-text center org-card">
                        <div class="card-content">
                            <span class="card-title black-text"><i class="large material-icons">
                                    event
                                </i></span>
                            <h5>My Events</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col s12 m6 l3">
                <a href="#">
                    <div class="card hoverable black-text center org-card ">
                        <div class="card-content">
                            <span class="card-title black-text "><i class="large material-icons">add_box
                                </i></span>
                            <h5>Add New Event</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col s12 m6 l3">
                <a href="#">
                    <div class="card hoverable black-text center org-card">
                        <div class="card-content">
                            <span class="card-title black-text"><i class="large material-icons">
                                    ballot
                                </i></span>
                            <h5>Tickets</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col s12 m6 l3">
                <a href="#">
                    <div class="card hoverable black-text center org-card">
                        <div class="card-content">
                            <span class="card-title black-text "><i class="large material-icons">
                                    error
                                </i></span>
                            <h5>Reports</h5>
                        </div>
                    </div>
                </a>
            </div>



        </div>
    </div>


    <!-- Footer -->
    <footer class="page-footer teal">
        <div class="footer-copyright">
            <div class="container">
                © 2020 Smart Event Manager
                <a class="grey-text text-lighten-4 right" href="#!">Made with ❤ by SADAT</a>
            </div>
        </div>
    </footer>


    <script src="js/materialize.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
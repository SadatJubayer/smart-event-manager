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
            <h4 class="center">Admin Home</h4>
            <div class="col s12">
                <ul id="tabs-swipe-demo" class="tabs">
                    <li class="tab col s3"><a class="active" href="#test-swipe-1">Users</a></li>
                    <li class="tab col s3"><a href="#test-swipe-2">Organizers</a></li>
                    <li class="tab col s3"><a href="#test-swipe-3">Events</a></li>
                </ul>
                <div id="test-swipe-1" class="col s12">

                    <table id="datatable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Reg. Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh@gmail.com</td>
                                <td>male</td>
                                <td>2011/04/25</td>
                                <td>
                                    <a class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons">edit</i></a>
                                    <a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh@gmail.com</td>
                                <td>male</td>
                                <td>2011/04/25</td>
                                <td>
                                    <a class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons">edit</i></a>
                                    <a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh@gmail.com</td>
                                <td>male</td>
                                <td>2011/04/25</td>
                                <td>
                                    <a class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons">edit</i></a>
                                    <a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh@gmail.com</td>
                                <td>male</td>
                                <td>2011/04/25</td>
                                <td>
                                    <a class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons">edit</i></a>
                                    <a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh@gmail.com</td>
                                <td>male</td>
                                <td>2011/04/25</td>
                                <td>
                                    <a class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons">edit</i></a>
                                    <a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh@gmail.com</td>
                                <td>male</td>
                                <td>2011/04/25</td>
                                <td>
                                    <a class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons">edit</i></a>
                                    <a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh@gmail.com</td>
                                <td>male</td>
                                <td>2011/04/25</td>
                                <td>
                                    <a class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons">edit</i></a>
                                    <a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div id="test-swipe-2" class="col s12 red">Test 2</div>
                <div id="test-swipe-3" class="col s12 green">Test 3</div>

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
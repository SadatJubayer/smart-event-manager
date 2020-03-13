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



    <!-- Events Gallery -->

    <section id="events">

        <div class="row">
            <div class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">textsms</i>
                        <input type="text" id="autocomplete-input" class="autocomplete">
                        <label for="autocomplete-input">Search Events</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row">
                <h4 class="center">
                    <span class="teal-text">Popular</span> Events</h4>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://image.ibb.co/hbEMux/resort1.jpg" alt="">
                            <span class="card-title">Cancun, Mexico</span>
                        </div>
                        <div class="card-content">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                                delectus?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://image.ibb.co/mn1egc/resort2.jpg" alt="">
                            <span class="card-title">The Bahamas</span>
                        </div>
                        <div class="card-content">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                                delectus?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://image.ibb.co/mbCVnH/resort3.jpg" alt="">
                            <span class="card-title">Nova Scotia</span>
                        </div>
                        <div class="card-content">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                                delectus?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://image.ibb.co/hbEMux/resort1.jpg" alt="">
                            <span class="card-title">Cancun, Mexico</span>
                        </div>
                        <div class="card-content">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                                delectus?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://image.ibb.co/mn1egc/resort2.jpg" alt="">
                            <span class="card-title">The Bahamas</span>
                        </div>
                        <div class="card-content">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                                delectus?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://image.ibb.co/mbCVnH/resort3.jpg" alt="">
                            <span class="card-title">Nova Scotia</span>
                        </div>
                        <div class="card-content">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                                delectus?
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row center">
                <ul class="pagination">
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li>
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                </ul>
            </div>
    </section>


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
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
                    <li><a href="#home">Home</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="signup.php" class="btn-small black-text teal lighten-5" data-position="bottom" data-tooltip="Instagram">
                            SIGN UP
                        </a></li>
                    <li><a href="login.php" class="btn-small purple darken-1" data-position="bottom" data-tooltip="Facebook">
                            LOG IN
                        </a></li>

                </ul>
                <ul class="sidenav grey lighten-2" id="mobile-menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#contact">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <style>
        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;

        }

        .loginCard {
            padding: 1em 2em;
        }
    </style>

    <div class="valign-wrapper row login-box">
        <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
            <form>
                <div class="card-content">
                    <span class="card-title">Enter credentials</span>
                    <div class="row">
                        <div class="input-field col s12">
                            <label for="email">Email address</label>
                            <input type="email" class="validate" name="email" id="email" />
                        </div>
                        <div class="input-field col s12">
                            <label for="password">Password </label>
                            <input type="password" class="validate" name="password" id="password" />
                        </div>
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light col s12" type="submit" name="action">Log In
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6 m6 l6">
                            <p class="margin medium-small"><a href="signup.php">Register Now!</a></p>
                        </div>
                        <div class="input-field col s6 m6 l6">
                            <p class="margin right-align medium-small"><a href="#">Forgot password?</a></p>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
<?php include './common/header.php';
$success = '';
if(isset($_GET['success'])) {
    $success = 'Registration successful! You can now Login';
}

?>



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
        <div class="green-text center bold" style="margin-top: 15px">
            <?php echo $success ?>
        </div>
        <form method='POST' action='../controllers/authController.php'>
            <div class="card-content">
                <span class="card-title">Enter credentials</span>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="email">Email address</label>
                        <input type="text" class="validate" name="email" id="email" />
                    </div>
                    <div class="input-field col s12">
                        <label for="password">Password </label>
                        <input type="password" class="validate" name="password" id="password" />
                    </div>

                    <div class="row text-center">
                        <div style="text-align: center;">
                            <div class="alert red-text">

                                <?php if (isset($_GET['error'])) {
                                    echo $_GET['error'];
                                }
                                ?>
                            </div>
                        </div>
                    </div>


                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light col s12" type="submit" name="login">Log In
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

<?php include './common/footer.php';?>>
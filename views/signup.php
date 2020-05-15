<?php
include './common/header.php';
include "../controllers/authController.php";

$anyError = '';
$fName = '';
$lName = '';
$email = '';
$password = '';
$password2 = '';
$gender = '';
$role = '';

if (isset($_POST['register'])) {
    $fName = htmlspecialchars($_POST['firstName']);
    $lName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password2 = htmlspecialchars($_POST['password2']);
    $gender = $_POST['gender'];


    if(isset($_POST['isManager'])) {
       $role = 'manager';
    }
    else {
        $role = 'user';
    }

    if ($fName == '' || $lName == '' || $email == '' || $password == '' || $password2 == '') {
        $anyError = 'All fields are required';
    }
    else {
        registerUser($fName, $lName, $email, $password, $gender, $role );
    }



}


?>


    <div class="valign-wrapper row login-box">
        <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
            <form action="#" method="POST" id='form' class="col s12">
                <div class="row center">
                    <h4>Sign Up</h4>
                    <span class="red-text"><?php echo $anyError ?></span>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input value="<?php echo $fName ?>" name="firstName" id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                        <span class="helper-text" data-error="wrong" data-success="right">Enter Last Name</span>
                    </div>
                    <div class="input-field col s6">
                        <input value="<?php echo $lName ?>"  name="lastName" id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                        <span class="helper-text" data-error="wrong" data-success="right">Enter Last Name</span>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input  value="<?php echo $email ?>"  name="email" id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input  name="password" id="password" type="password" class="validate">
                        <label for="password">Password</label>
                        <span class="red-text" id="mainPassError"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="password2" id="password2" type="password" class="validate">
                        <label for="password2">Re-enter Password</label>
                        <span class="red-text" id="passError"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <select name="gender">
                            <option value="none" selected>Select your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class=" col s12">
                        <label>
                            <input name="isManager" id="indeterminate-checkbox" type="checkbox"/>
                            <span>I want to register as an Organizer</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="row">
                        <div class="input-field col s12">
                            <button id="submitButton" class="btn waves-effect waves-light col s12" type="submit" name="register">Register
                                <i class="material-icons right">send</i>
                            </button>
                        </div>

                    </div>
                    <div class="row">
                        <div class="input-field col s6 m6 l6">
                            <p class="margin medium-small"><a href="login.php">Already have an account?</a></p>
                        </div>
                        <div class="input-field col s6 m6 l6">
                            <p class="margin right-align medium-small"><a href="#">Forgot password?</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>

        $(document).ready(function ($) {

            const firstName = document.getElementById('firstName');
            const lastName = document.getElementById('lastName');
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const password2 = document.getElementById('password2');
            const passError = document.getElementById('passError');
            const mainPassError = document.getElementById('mainPassError');
            const submitButton = document.getElementById('submitButton');



            password.addEventListener('keyup', () => {
                if (password.value.length <= 5) {
                    mainPassError.innerHTML = 'Password must be longer than 6 characters';
                    submitButton.disabled = true;
                }
                else if (password.value.length >= 20) {
                    mainPassError.innerHTML = 'Password must be less than 20 characters';
                    submitButton.disabled = true;
                }
                else {
                    mainPassError.innerHTML = ''
                    submitButton.disabled = false;

                }
            })


            password2.addEventListener('keyup', () => {
                if (password2.value !== password.value) {
                    passError.innerHTML = 'password does not matched';
                    submitButton.disabled = true;
                } else {
                    passError.innerHTML = '';
                    submitButton.disabled = false;
                }
            })


        });


    </script>


<?php include './common/footer.php'; ?>
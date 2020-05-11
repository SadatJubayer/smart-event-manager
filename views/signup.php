<?php include './common/header.php';?>

<div class="valign-wrapper row login-box">
    <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
        <form class="col s12">
            <div class="row center">
                <h4>Sign Up</h4>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                    <span class="helper-text" data-error="wrong" data-success="right">Enter Last Name</span>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                    <span class="helper-text" data-error="wrong" data-success="right">Enter Last Name</span>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password2" type="password" class="validate">
                    <label for="password2">Re-enter Password</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <select>
                        <option value="" disabled selected>Select your Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class=" col s12">
                    <label>
                        <input id="indeterminate-checkbox" type="checkbox" />
                        <span>I want to register as an Organizer</span>
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="row">
                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light col s12" type="submit" name="action">Register
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


<?php include './common/footer.php';?>
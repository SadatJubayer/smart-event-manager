<?php
include './common/header.php';
include '../controllers/adminController.php';

$users = getAllUsers();
$managers = getAllManagers();
$events = getAllEvents();
?>

    <div class="container">

        <div class="row">
            <h4 class="center">Admin Home</h4>
            <div class="col s12">
                <ul id="tabs-swipe-demo" class="tabs">
                    <li class="tab col s3"><a class="active" href="#usersTable">Users</a></li>
                    <li class="tab col s3"><a href="#organizersTable">Organizers</a></li>
                    <li class="tab col s3"><a href="#eventsTable">Events</a></li>
                </ul>
                <div id="usersTable" class="col s12">
                    <table id="datatable">
                        <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Reg. Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        foreach ($users as $user) {
                            echo '<tr>';
                            echo ' <td>' . $user["firstName"] . '.</td>';
                            echo ' <td>' . $user["lastName"] . '</td>';
                            echo ' <td>' . $user["email"] . '.</td>';
                            echo ' <td>' . $user["gender"] . '.</td>';
                            echo ' <td>' . $user["createdAt"] . '.</td>';

                            echo ' <td>
                                <a  href="#userEdit" class="modal-trigger btn-floating btn-small waves-effect waves-light blue "><i
                                        class="material-icons">edit</i></a>
                                <a class="btn-floating btn-small waves-effect waves-light red"><i
                                        class="material-icons">delete</i></a>
                            </td>';

                            echo '</td>';

                        }
                        ?>

                        </tbody>
                    </table>
                </div>
                <div id="organizersTable" class="col s12">
                    <table id="datatable">
                        <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Reg. Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        foreach ($managers as $manager) {
                            echo '<tr>';
                            echo ' <td>' . $manager["firstName"] . '.</td>';
                            echo ' <td>' . $manager["lastName"] . '</td>';
                            echo ' <td>' . $manager["email"] . '.</td>';
                            echo ' <td>' . $manager["gender"] . '.</td>';
                            echo ' <td>' . $manager["createdAt"] . '.</td>';

                            echo ' <td>
                                <a class="btn-floating btn-small waves-effect waves-light blue"><i
                                        class="material-icons">edit</i></a>
                                <a class="btn-floating btn-small waves-effect waves-light red"><i
                                        class="material-icons">delete</i></a>
                            </td>';

                            echo '</td>';

                        }
                        ?>

                        </tbody>
                    </table>


                </div>
                <div id="eventsTable" class="col s12">
                    <table id="datatable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        foreach ($events as $event) {
                            echo '<tr>';
                            echo ' <td>' . $event["id"] . '.</td>';
                            echo ' <td>' . $event["title"] . '.</td>';
                            echo ' <td>' . $event["description"] . '</td>';


                            echo ' <td>
                                <a class="btn-floating btn-small waves-effect waves-light blue"><i
                                        class="material-icons">edit</i></a>
                                <a class="btn-floating btn-small waves-effect waves-light red"><i
                                        class="material-icons">delete</i></a>
                            </td>';

                            echo '</td>';

                        }
                        ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>


        <!-- User Modal -->


        <div id="userEdit" class="modal">
            <div class="modal-content">
                <form action="">
                    <div class="row">
                        <div class="input-field col s6">
                            <input value="datetw" id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Email</label>
                        </div>
                        <div class="input-field col s6">
                            <select>
                                <option value="" disabled selected>Select your Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="center">
                        <button class="btn waves-effect deep-purple darken-4" type="submit" name="action">Update Profile
                        </button>
                    </div>

                </form>

            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            </div>
        </div>


    </div>

    <script>

        $(document).ready(function () {
            $('.modal').modal();
        });
    </script>

<?php include './common/footer.php'; ?>
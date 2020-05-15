<?php
include './common/header.php';
include "./../controllers/userController.php";


$userId = $_COOKIE['userId'];


$user = getUser($userId);


if ($user) {
    while ($result = $user->fetch_assoc()) {
        $name = $result['firstName'] . $result['lastName'];
        $email = $result['email'];
        $gender = $result['gender'];
    }
}

$userEvents = getUserEvents($userId);


?>

    <style>
        .row {
            margin-top: 5%;
        }

        .btn {
            margin-top: 10px;

        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <div class="card-title">
                            <div class="col">
                                <i class="small material-icons">account_box</i>
                            </div>
                            <div class="col">
                                Profile
                            </div>
                        </div>
                        <br><br>
                        <h6>Name: <strong><?php echo $name ?> </strong></h6>
                        <h6>Email: <strong><?php echo $email ?></strong></h6>
                        <h6>Gender: <strong><?php echo $gender ?></strong></h6>
                    </div>

                </div>
                <a href='./events.php' class='right btn-small red darken-1'>
                    Book new event
                </a>
            </div>
            <div class="col s12 m6">
                <blockquote>
                    Events booked by you:
                </blockquote>

                <table id="datatable">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    if ($userEvents) {
                        $i = 0;
                        foreach ($userEvents as $userEvent) {
                            echo '<tr>';
                            echo "<td>" . ++$i . "</td>";
                            echo "<td>" . $userEvent["title"] . "</td>";
                            echo "<td>" . date('m-d-Y', strtotime($userEvent["from"])) . "</td>";
                            if ($userEvent["isActive"] == '1') {
                                echo "<td> Active</td>";
                            } else {
                                echo "<td> Finished</td>";
                            }
                            echo "<td><a href='./event.php?id=" . $userEvent['id']  ." ' class='btn-small purple darken-1'>
                            Details
                        </a></td>";
                            echo ' </tr>';
                        }
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include './common/footer.php';

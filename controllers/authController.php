<?php

include '../models/database.php';

if (isset($_POST["login"])) {
    loginUser();
}



function loginUser()
{

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $db = new Database();

    $sql = "SELECT * FROM users WHERE email='$email' and password='$password'";

    $result = $db->select($sql);

    if ($result) {
        $value = mysqli_fetch_array($result);
        $rows = mysqli_num_fields($result);
        if ($rows > 0) {



            setcookie('login', $value['true'], time() + (86400 * 30), "/");
            setcookie('userId', $value['id'], time() + (86400 * 30), "/");
            setcookie('name', $value['firstName'], time() + (86400 * 30), "/");


            if ($value['role'] == 'admin') {

                header('Location:../views/admin.php');
            }

            if ($value['role'] == 'manager') {

                header('Location:../views/manager.php');
            }

            if ($value['role'] == 'user') {
              header('Location:../views/userProfile.php');
            }
        }

    } else {

        $err = 'Invalid credentials';
        header("Location:../views/login.php?error=$err");
    }

}
function registerUser($fName, $lName, $email, $password, $gender, $role )
{

    $db = new Database();

    $sql = "INSERT INTO users VALUES (NULL, '$role', '$fName', '$lName', '$email', '$password', '$gender', 1 , NULL)";

    $inserted = $db->insert($sql);

    if($inserted) {
        header('Location:../views/login.php?success=1');
    }
}



function logoutUser()
{
    header('Location:../views/home.php');
}


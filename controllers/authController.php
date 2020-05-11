<?php
include '../models/session.php';
Session::init();

include '../models/database.php';

if (isset($_POST["login"])) {
    loginUser();
}

if (isset($_POST["register"])) {
    registerUser();
}

if (isset($_POST["logout"])) {
    logoutUser();
}

function loginUser()
{

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $db = new Database();

    $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";

    $result = $db->select($sql);

    if ($result) {
        $value = mysqli_fetch_array($result);
        $rows = mysqli_num_fields($result);
        if ($rows > 0) {
            Session::set('login', true);
            Session::set('userId', $value['id']);

            Session::set('name', $value['firstName']);

            if ($value['role'] == 'admin') {

                header('Location:../views/admin.php');
            }

            if ($value['role'] == 'manager') {

                header('Location:../views/manager.php');
            }

            if ($value['role'] == 'user') {

                header('Location:../views/home.php');
            }
        }

    } else {

        $err = 'Invalid credentials';
        header("Location:../views/login.php?error=$err");
    }

}

function registerUser()
{
    header('Location:../views/home.php');

}

function logoutUser()
{
    header('Location:../views/home.php');
}

function isAuthenticated()
{
    if (Session::get('login') === false) {
        header('Location:../views/login.php');
    }
    return true;
}
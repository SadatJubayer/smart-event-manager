<?php

include '../models/session.php';
Session::init();

include '../models/database.php';

if (isset($_POST["createEvent"])) {
    createEvent();
}

if (isset($_POST["logout"])) {
    logoutUser();
}

function createEvent()
{
    $title = htmlspecialchars($_POST['title']);
    $image = $_FILES['image'];
    $description = htmlspecialchars($_POST['description']);
    $from = $_POST['from'];
    $to = $_POST['to'];
    $category = $_POST['category'];
    $userId = Session::get('userId');

    if (!$title || !$image || !$description || !$from || !$to || !$category) {
        $err = 'All Fields are required';
        header("Location:../views/manager.php?error=$err");
        return;
    }

    $imageName = $_FILES['image']['name'];
    $imageSize = $_FILES['image']['size'];
    $tempLocation = $_FILES['image']['tmp_name'];
    $imageType = $_FILES['image']['type'];

    $fileExt = explode('.', $imageName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($imageSize < 5000000) {
            $ImageName = uniqid('', true) . "." . $fileActualExt;
            $destination = '../uploads/' . $ImageName;
            move_uploaded_file($tempLocation, $destination);

            //id`, `creator`, `title`, `image`, `descipton`, `from`, `to`, `category`, `isActive`
            $db = new Database();
            $query = "INSERT INTO events VALUES(NULL, $userId, '$title', '$ImageName', '$description','$from', '$to', $category, 1)";
            echo $query;
            $result = $db->insert($query);

            header('Location:../views/events.php');


        } else {
            $err = 'File Size Too Big';
            header("Location:../views/manager.php?error=$err");
        }
    } else {
        $err = 'Only JPG PNG and JEPG allowed';
        header("Location:../views/manager.php?error=$err");
    }
}

function getAllEvents()
{
    $query = "SELECT * FROM events ORDER BY id DESC";
    $db = new Database();
    return $db->select($query);
}

function getSingleEvent($id)  {
    $query = "SELECT * FROM events WHERE id=$id";
    $db = new Database();
    return $db->select($query);

}
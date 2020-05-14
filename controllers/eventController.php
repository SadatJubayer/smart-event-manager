<?php

include '../models/session.php';
Session::init();

include '../models/database.php';

if (isset($_POST["createEvent"])) {
    createEvent();
}


function createEvent()
{
    $title = htmlspecialchars($_POST['title']);
    $image = $_FILES['image'];
    $description = htmlspecialchars($_POST['description']);
    $from = $_POST['from'];
    $to = $_POST['to'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $total = $_POST['total'];

    $userId = $_COOKIE['userId'];


//    echo $title . '<br>';
//    //echo $image[0] . '<br>';
//    echo $description . '<br>';
//    echo $from . '<br>';
//    echo $to . '<br>';
//    echo $category . '<br>';
//    echo $price . '<br>';
//    echo $total . '<br>';







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
            $result = $db->insert($query);

            $sql = "SELECT id FROM events WHERE image='$ImageName'";
            $EventId = $db->select($sql);
            //var_dump($EventId);
            $row = mysqli_fetch_assoc($EventId);
            $eventID =  $row['id'];


            $ticketSql = "INSERT INTO ticket VALUES(NULL, $price, $total, 0 , $eventID )";
            $result = $db->insert($ticketSql);
            var_dump($result);

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

function bookEvent($eventId, $userId, $seats) {

    // insert into user_event table
    $query = "INSERT INTO userevent VALUES(NULL, $userId, $eventId)";
    $db = new Database();
    $inserted = $db->insert($query);


    // update the ticket
    $preBooked = getBooked($eventId);
    $ticketId = getTicketId($eventId);

    $newBooked = $preBooked + $seats;

    $query = "UPDATE `ticket` SET `booked` = $newBooked WHERE `ticket`.`id` = $ticketId";
    $updated = $db->update($query);

    if($inserted && $updated) {
        header("Location:../views/userProfile.php");
    }
    else {
        header("Location:../views/404.php");
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

function getPrice($id){
    $query = "SELECT * FROM ticket WHERE eventId=$id";
    $db = new Database();
    $category = $db->select($query);
    if($category) {
        $price = '';
        while ($result = $category->fetch_assoc()){
            $price = $result['price'];
        }
        return $price;
    }
}
function getTotal($id){
    $query = "SELECT * FROM ticket WHERE eventId=$id";
    $db = new Database();
    $category = $db->select($query);
    if($category) {
        $total = '';
        while ($result = $category->fetch_assoc()){
            $total = $result['total'];
        }
        return $total;
    }
}
function getBooked($id){
    $query = "SELECT * FROM ticket WHERE eventId=$id";
    $db = new Database();
    $category = $db->select($query);
    if($category) {
        $booked = '';
        while ($result = $category->fetch_assoc()){
            $booked = $result['booked'];
        }
        return $booked;
    }
}

function getTicketId($id) {
    $query = "SELECT * FROM ticket WHERE eventId=$id";
    $db = new Database();
    $category = $db->select($query);
    if($category) {
        $ticketId = '';
        while ($result = $category->fetch_assoc()){
            $ticketId = $result['id'];
        }
        return $ticketId;
    }
}


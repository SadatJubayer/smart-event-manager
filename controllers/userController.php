<?php

require_once '../models/database.php';


function getOrganizerName($id)
{
    $query = "SELECT * FROM users WHERE id=$id";
    $db = new Database();
    $category = $db->select($query);
    if ($category) {
        $name = '';
        while ($result = $category->fetch_assoc()) {
            $name = $result['firstName'];
        }
        return $name;
    }
}

function getUser($id) {
    $query = "SELECT * FROM users WHERE id=$id";
    $db = new Database();
    return $db->select($query);
}

function getUserEvents($id) {

    $query = "SELECT e.id, e.title, e.from, e.isActive FROM events e, userevent ue WHERE e.id = ue.eventId AND ue.userId = $id";
    $db = new Database();
    return $db->select($query);



}
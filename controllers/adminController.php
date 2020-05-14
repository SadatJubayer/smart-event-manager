<?php

include '../models/database.php';

function getAllUsers()
{
    $db = new Database();
    $query = "SELECT * FROM users WHERE role='user'";
    return  $db->select($query);

}

function getAllManagers()
{
    $db = new Database();
    $query = "SELECT * FROM users WHERE role='manager'";
    return  $db->select($query);

}

function getAllEvents()
{
    $db = new Database();
    $query = "SELECT * FROM events";
    return  $db->select($query);

}
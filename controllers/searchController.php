<?php

include '../models/database.php';

if(isset($_POST['query'])) {
    $inputText = $_POST['query'];
    $sql = "SELECT title FROM events WHERE title LIKE '%$inputText%'";

    $db = new Database();
    $result = $db->select($sql);

    while ($row = $result->fetch_assoc()) {
       echo '<a  class="flow-text" href=""><li>'. $row['title'] .'</li></a>';
    }


}
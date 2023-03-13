<?php

function getImageByDestination($dest) {
    $mysqli = new mysqli('localhost', 'root', '', 'fin_travel');
    $stmt = $mysqli->prepare("SELECT path from images WHERE destination = ?");
    $stmt->bind_param('s', $dest);

    $stmt->execute();

    $result = $stmt->get_result();
    $images = array();
    while ($row = $result->fetch_assoc()){
        array_push($images, $row['path']);
    }
    return $images;
}



//echo getImageByDestination("Kragujevac");

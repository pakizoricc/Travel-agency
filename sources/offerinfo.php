<?php

$title = isset($_POST['title']) ? $_POST['title'] : '';
$destination = isset($_POST['destination']) ? $_POST['destination'] : '';
$continent = isset($_POST['continent']) ? $_POST['continent'] : '';
$travel_type = isset($_POST['travel_type']) ? $_POST['travel_type'] : '';
$num_days = isset($_POST['num_days']) ? $_POST['num_days'] : '';
$price_offer = isset($_POST['price_offer']) ? $_POST['price_offer'] : '';
$trans_type = isset($_POST['trans_type']) ? $_POST['trans_type'] : '';

$conn = mysqli_connect('localhost', 'root', '', 'fin_travel');

$sql = "SELECT arangements.*, images.path
        FROM arangements 
        LEFT JOIN images ON arangements.destination = images.destination";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $title = $row["title"];
        $destination = $row["destination"];
        $continent = $row["continent"];
        $trans_type = $row["trans_type"];
        $num_days = $row["num_days"];
        $price_offer = $row["price_offer"];
        $trans_type = $row["trans_type"];
    }
} else {
    echo "0 results";
}

mysqli_close($conn)
?>
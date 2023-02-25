<?php
if(isset($_POST['first_name']) && $_POST['first_name'] !== '') {
    $first_name = $_POST['first_name'];
} else {
    $first_name = '';
}

if(isset($_POST['last_name']) && $_POST['last_name'] !== '') {
    $last_name = $_POST['last_name'];
} else {
    $last_name = '';
}

if(isset($_POST['phone_number']) && $_POST['phone_number'] !== '') {
    $phone_number = $_POST['phone_number'];
} else {
    $phone_number = '';
}

if(isset($_POST['email']) && $_POST['email'] !== '') {
    $email = $_POST['email'];
} else {
    $email = '';
}

if(isset($_POST['number_1']) && $_POST['number_1'] !== '') {
    $number_1 = $_POST['number_1'];
} else {
    $number_1 = '';
}

if(isset($_POST['number_2']) && $_POST['number_2'] !== '') {
    $number_2 = $_POST['number_2'];
} else {
    $number_2 = '';
}

if(isset($_POST['comment']) && $_POST['comment'] !== '') {
    $comment = $_POST['comment'];
} else {
    $commnet = '';
}

$sql = "SELECT * FROM reservation WHERE 1=1";

if (!empty($first_name)) {
    $sql .= " AND first_name LIKE '%$first_name%'";
}

if (!empty($last_name)) {
    $sql .= " AND last_name LIKE '%$last_name%'";
}

if (!empty($phone_number)) {
    $sql .= " AND phone_number LIKE '%$phone_number%'";
}

if (!empty($email)) {
    $sql .= " AND email LIKE '%$email%'";
}

if (!empty($number_1)) {
    $sql .= " AND number_1 LIKE '%$number_1%'";
}

if (!empty($number_2)) {
    $sql .= " AND number_2 LIKE '%$number_2%'";
}

if (!empty($comment)) {
    $sql .= " AND comment LIKE '%$comment%'";
}

// Execute the query and retrieve the results
$connection = mysqli_connect('localhost', 'root', '', 'fin_travel');
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($connection, $sql);
if ($result === false) {
    die("Query failed: " . mysqli_error($connection));
}
$reservation = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
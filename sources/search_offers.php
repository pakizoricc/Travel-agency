<?php
session_start();
$title = "";
$destination = "";
$trans_type = "";
$from_date = "";
$to_date = "";

if(isset($_POST['search'])){
    // Retrieve search parameters from the form
    $title = $_POST['title'];
    $destination = $_POST['destination'];
    $trans_type = $_POST['trans_type'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
}

// Build the SQL query to search for results
$conditions = array();

// Build the search conditions based on the user's input
if (!empty($title)) {
    $conditions[] = "LOWER(title) LIKE LOWER('%$title%')";
}
if (!empty($destination)) {
    $conditions[] = "LOWER(destination) LIKE LOWER('%$destination%')";
}
if (!empty($from_date)) {
    $conditions[] = " from_date <= '$from_date'";
}
if (!empty($to_date)) {
    $conditions[] = " to_date >= '$to_date'";
}
if (!empty($trans_type)) {
    $conditions[] = "LOWER(trans_type) LIKE LOWER('%$trans_type%')";
}
// Build the SQL query
$sql = "SELECT * FROM arangements";

if (!empty($conditions)) {
    $sql .= " WHERE " . implode(" AND ", $conditions);
}

$_SESSION['title'] = $title;
$_SESSION['destination'] = $destination;
$_SESSION['trans_type'] = $trans_type;
$_SESSION['from_date'] = $from_date;
$_SESSION['to_date'] = $to_date;

// Execute the query and retrieve the results
$connection = mysqli_connect('localhost', 'root', '', 'fin_travel');
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($connection, $sql);
if ($result === false) {
    die("Query failed: " . mysqli_error($connection));
}
$searches = mysqli_fetch_all($result, MYSQLI_NUM);
$_SESSION['searches'] = $searches;

// Redirect the user to the search results page
header('Location: ../adminRezultatPretrage.php');
exit();
?>

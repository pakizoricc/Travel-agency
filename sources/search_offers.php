<?php
session_start();
$title = "";
$destination = "";
$trans_type = "";
$from_date = "";
$to_date = "";

if(isset($_POST['search'])){
    // Retrieve search parameters from the form
    $title = isset($_POST['title']);
    $destination = isset($_POST['destination']);
    $trans_type = isset($_POST['trans_type']);
    $from_date = isset($_POST['from_date']);
    $to_date = isset($_POST['to_date']);
}

// Build the SQL query to search for results
$conditions = array();

// Build the search conditions based on the user's input
if (!empty($title)) {
    $conditions[] = "arangements.title LIKE '%$title%'";
}
if (!empty($destination)) {
    $conditions[] = "arangements.destination LIKE '%$destination%'";
}
if (!empty($from_date)) {
    $conditions[] = "arangements.from_date <= '$from_date'";
}
if (!empty($to_date)) {
    $conditions[] = "arangements.to_date >= '$to_date'";
}
if (!empty($trans_type)) {
    $conditions[] = "arangements.trans_type LIKE '%$trans_type%'";
}
// Build the SQL query
$sql = "SELECT images.*, arangements.* FROM images INNER JOIN arangements ON images.destination = arangements.destination";
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
$searches = mysqli_fetch_all($result, MYSQLI_ASSOC);

header('Location: ../adminRezultatPretrage.php');
?>

<?php

// Retrieve search parameters from the form
$naziv = isset($_POST['naziv']) ? $_POST['naziv'] : '';
$lokacija = isset($_POST['lokacija']) ? $_POST['lokacija'] : '';
$kontinent = isset($_POST['kontinent']) ? $_POST['kontinent'] : '';
$prevoz_id = isset($_POST['prevoz_id']) ? $_POST['prevoz_id'] : '';
$od_datuma = isset($_POST['od_datuma']) ? $_POST['od_datuma'] : '';
$do_datuma = isset($_POST['do_datuma']) ? $_POST['do_datuma'] : '';

// Build the SQL query to search for results
$sql = "SELECT * FROM searches WHERE 1=1";

if (!empty($naziv)) {
    $sql .= " AND naziv LIKE '%$naziv%'";
}

if (!empty($lokacija)) {
    $sql .= " AND lokacija LIKE '%$lokacija%'";
}

if (!empty($kontinent)) {
    $sql .= " AND kontinent LIKE '%$kontinent%'";
}

if (!empty($prevoz_id)) {
    $sql .= " AND prevoz_id = $prevoz_id";
}

if (!empty($od_datuma)) {
    $sql .= " AND datum_polaska >= '$od_datuma'";
}

if (!empty($do_datuma)) {
    $sql .= " AND datum_povratka <= '$do_datuma'";
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
$searches = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
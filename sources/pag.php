<?php

// Connect to your database
$mysqli = new mysqli('localhost', 'root', '', 'fin_travel');

// Query your database to get the total number of users
$result = $mysqli->query("SELECT COUNT(*) AS total_arr FROM arangements");
$row = $result->fetch_assoc();
$total = $row['total_arr'];

// Set the number of arrangements per page
$arr_per_page = 25;

// Calculate the total number of pages
$total_pages = ceil($total / $arr_per_page);

// Get the current page number from the URL
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the offset and limit for your query
$offset = ($current_page - 1) * $arr_per_page;
$limit = $arr_per_page;

$result = $mysqli->query("SELECT * FROM arangements LIMIT $offset, $limit");
$arrs = $result->fetch_all(MYSQLI_ASSOC);

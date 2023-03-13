<?php

$category = isset($_POST['category']) ? $_POST['category'] : '';
$internet_connection = isset($_POST['internet_connection']) ? $_POST['internet_connection'] : '';
$room_refriginator = isset($_POST['room_refriginator']) ? $_POST['room_refriginator'] : '';

$conn = mysqli_connect('localhost', 'root', '', 'fin_travel');

$sql = 'SELECT * FROM accomodation ORDER BY RAND () LIMIT 1';

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $category = $row["category"];
        $internet_connection = $row["internet_connection"];
        $room_refriginator = $row["room_refriginator"];
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

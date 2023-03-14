<?php
session_start();

$id = "";
$id2 = "";
$title = "";
$destination = "";
$continent = "";
$country = "";
$trans_type = "";
$price = "";
$from_date = "";
$to_date = "";
$name_accomodation = "";
$type_accomodation = "";
$category = "";
$internet_connection = "";
$room_refriginator = "";
$num_days = "";

$conn = mysqli_connect('localhost', 'root', '', 'fin_travel');

if(isset($_POST['add'])){
    $id = $_POST['id'];
    $id2 = $_POST['id2'];
    $title = $_POST['title'];
    $country = $_POST['country'];
    $continent = $_POST['continent'];
    $destination = $_POST['destination'];
    $trans_type = $_POST['trans_type'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $price = $_POST['price'];
    $name_accomodation = $_POST['name_accomodation'];
    $type_accomodation = $_POST['type_accomodation'];
    $category = $_POST['category'];
    $internet_connection = $_POST['internet_connection'];
    $room_refriginator = $_POST['room_refriginator'];
    $num_days = $_POST['num_days'];
} 
    $query = "INSERT INTO `arangements`(`id_arangement`, `id_img`, `title`, `destination`, `continent`, `from_date`, `to_date`, `num_days`, `price_offer`, `trans_type`) 
    VALUES ('$id','$id_img','$title','$destination','$continent','$from_date','$to_date','$num_days','$price','$trans_type')";
    $query2 = "INSERT INTO `accomodation`(`id_accomodation`, `name_accomodation`, `type_accomodation`, `category`, `internet_connection`, `room_refriginator`) 
    VALUES ('$id2','$name_accomodation','$type_accomodation','$category','$internet_connection','$room_refriginator')";
    
    $_SESSION['title'] = $title;
    $_SESSION['destination'] = $destination;
    $_SESSION['continent'] = $continent;
    $_SESSION['country'] = $country;
    $_SESSION['trans_type'] = $trans_type;
    $_SESSION['price'] = $price;
    $_SESSION['from_date'] = $from_date;
    $_SESSION['to_date'] = $to_date;
    $_SESSION['name_accomodation'] = $name_accomodation;
    $_SESSION['type_accomodation'] = $type_accomodation;
    $_SESSION['category'] = $category;
    $_SESSION['image'] = $image;
    $_SESSION['internet_connection'] = $internet_connection;
    $_SESSION['num_days'] = $num_days;

    // Close the database connection  
$stmt = mysqli_prepare($conn, $query);
$stmt2 = mysqli_prepare($conn, $query2);
mysqli_stmt_execute($stmt);
mysqli_stmt_execute($stmt2);
mysqli_stmt_close($stmt);
mysqli_stmt_close($stmt2);
mysqli_close($conn);

header('Location: ../admin.php?add-success=true');
?>
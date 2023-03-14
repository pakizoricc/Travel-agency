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
$image = "";
$internet_connection = "";
$num_days = "";

$conn = mysqli_connect('localhost', 'root', '', 'fin_travel');

if(isset($_POST['add'])){
    $id = $_POST['id'];
    $id2 = $_POST['id2'];
    $title = $_POST['title'];
    $country = $_POST['country'];
    $destination = $_POST['destination'];
    $trans_type = $_POST['trans_type'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $price = $_POST['price'];
    $name_accomodation = $_POST['name_accomodation'];
    $type_accomodation = $_POST['type_accomodation'];
    $category = $_POST['category'];
    $image = $_POST['image'];
    $internet_connection = $_POST['internet_connection'];
    $num_days = $_POST['num_days'];
} 
    $query = "UPDATE arangements SET title='$title', destination = '$destination', from_date='$from_date', to_date='$to_date', 
    num_days='$num_days', price_offer='$price', trans_type='$trans_type' WHERE id_arangement='$id'";
    $query2 = "UPDATE accomodation SET name_accomodation='$name_accomodation', type_accomodation='$type_accomodation', 
    internet_connection='$internet_connection' WHERE category = '$category' AND id_accomodation='$id2'";
    
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

    header('Location: ../izmenaAranzmana.php?update-success=true');
?>
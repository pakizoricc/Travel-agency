<?php
session_start();

$first_name = "";
$last_name = "";
$phone_number = "";
$email = "";
$num_adults = "";
$num_kids = "";
$payment = "";

$conn = mysqli_connect('localhost', 'root', '', 'fin_travel');

if(isset($_POST['prosledi'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $num_adults = $_POST['num_adults'];
    $num_kids = $_POST['num_kids'];
    $payment = $_POST['payment'];
}   

$query = "INSERT INTO reservation (first_name, last_name, phone_number,
email, num_adults, num_kids, payment) VALUES (?,  ?,  ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $query);

mysqli_stmt_bind_param($stmt, "ssssiis", $first_name, $last_name, $phone_number, $email, $num_adults, $num_kids, $payment);

if (!empty($first_name) && !empty($last_name) && !empty($phone_number) && !empty($email) && !empty($num_adults) 
&& !empty($num_kids) && !empty($payment)) {
mysqli_stmt_execute($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;
$_SESSION['phone_number'] = $phone_number;
$_SESSION['email'] = $email;
$_SESSION['num_adults'] = $num_adults;
$_SESSION['num_kids'] = $num_kids;
$_SESSION['payment'] = $payment;

header('Location: ../admin.php');
?>

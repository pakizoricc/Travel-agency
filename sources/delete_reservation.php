<?php
    $conn = mysqli_connect('localhost', 'root', '', 'fin_travel');
    $id = "";
    
    if (isset($_GET['btn-danger'])) {
        $id = $_GET['btn-danger'];
        $query = "DELETE FROM reservation WHERE id_reservation = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
    
    mysqli_close($conn);
    
    header('location: ../admin.php');
    exit();
?>
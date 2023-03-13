<?php
session_start();
$username = "";
$password = "";
$errors = array();

$conn = mysqli_connect('localhost', 'root', '', 'fin_travel');
// LOGIN USER
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : '';
  
    if (empty($username)) {
        header('Location: ../prijava.php');
        array_push($errors, "Korisničko ime nije popunjeno");
        exit();
    }
    if (empty($password)) {
        header('Location: ../prijava.php');
        array_push($errors, "Šifra nije postavljena");
        echo $errors;
        exit();
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          echo "Setujem sesiju....";
          echo "<script>alert('".$_SESSION['username']."');</script>";
          header('location: ../pocetna.php');
        } else {
            header('Location: ../prijava.php');
            array_push($errors, "Pogrešno ste uneli korisničko ime ili šifru");
            exit();
        }
    }
}
?>

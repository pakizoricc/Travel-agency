<?php
session_start();

$first_name = "";
$last_name = "";
$username = "";
$email = "";
$password_1 = "";
$password_2 = "";
$errors = array(); 

//konekcija ka bazi
$conn = mysqli_connect('localhost', 'root', '', 'fin_travel');

//registracija
if (isset($_POST['reg_user'])) {
  //ulazni podaci
  $first_name = $_POST['first_name'];
  $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : "";
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];
  
  if (empty($first_name)) { $errors['first_name'] = "Ime nije popunjeno"; }
  if (empty($last_name)) { $errors['last_name'] = "Prezime nije popunjeno"; }
  if (empty($username)) { $errors['username'] = "Korisničko ime nije popunjeno"; }
  if (empty($email)) { $errors['email'] = "E-mail nije popunjen"; }
  if (empty($password_1)) { $errors['password'] = "Šifra nije postavljena"; }
  if ($password_1 != $password_2) {
    $errors['password_match'] = "Šifre se ne poklapaju";
  }
}

  //da li postoji nalog vec, provera na osnovu username i email polja
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if (count($errors) == 0) {
    //hash-ovanje sifre
    $password = md5($password_1);
    
    //unos podataka korisnika u bazu
    $query = "INSERT INTO users (first_name, last_name, username, email, password) 
              VALUES('$first_name', '$last_name', '$username', '$email', '$password')";
    mysqli_query($conn, $query);
  
    $_SESSION['username'] = $username;
    $_SESSION['registration_complete'] = true;
    $_SESSION['success'] = "You are now logged in";
  
    //redirekcija na pocetna.php
    header('location: ../pocetna.php');
    exit();
  }
?>

<?php
session_start();

// initializing variables
$first_name = "";
$last_name = "";
$username = "";
$email = "";
$password_1 = "";
$password_2 = "";
$errors = array(); 

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'fin_travel');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $first_name = $_POST['first_name'];
  $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : "";
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) { $errors['first_name'] = "Ime nije popunjeno"; }
  if (empty($last_name)) { $errors['last_name'] = "Prezime nije popunjeno"; }
  if (empty($username)) { $errors['username'] = "Korisničko ime nije popunjeno"; }
  if (empty($email)) { $errors['email'] = "E-mail nije popunjen"; }
  if (empty($password_1)) { $errors['password'] = "Šifra nije postavljena"; }
  if ($password_1 != $password_2) {
    $errors['password_match'] = "Šifre se ne poklapaju";
  }
}


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    // encrypt the password before saving in the database
    $password = md5($password_1);
  
    // insert user into database
    $query = "INSERT INTO users (first_name, last_name, username, email, password) 
              VALUES('$first_name', '$last_name', '$username', '$email', '$password')";
    mysqli_query($conn, $query);
  
    // set session variables
    $_SESSION['username'] = $username;
    $_SESSION['registration_complete'] = true;
    $_SESSION['success'] = "You are now logged in";
  
    // redirect to homepage
    header('location: ../pocetna.php');
    exit();
  }
?>
<?php
session_start();

// initializing variables
$first_name = "";
$last_name = "";
$username = "";
$email = "";
$password_1 = "";
$password_2 = "";
$role = "";
$errors = array(); 

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'fin_travel');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  //kupi sve vrednosti unete u polja
  $first_name = $_POST['first_name'];
  $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : "";
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];
  $role = $_POST['role'];
  // polja moraju biti popunjena
  if (empty($first_name)) { 
    header('Location: ../registracija.php');
    array_push($errors, "Ime nije popunjeno");
    exit();
  }
  if (empty($last_name)) { 
    header('Location: ../registracija.php');
    array_push($errors, "Prezime nije popunjeno");
    exit();
  }
  if (empty($username)) { 
    header('Location: ../registracija.php');
    array_push($errors, "Korisničko ime nije popunjeno");
    exit();
  }
  if (empty($email)) {
    header('Location: ../registracija.php');
    array_push($errors, "E-mail nije popunjen");
    exit();
  }
  if (empty($password_1)) {
    header('Location: ../registracija.php');
    array_push($errors, "Šifra nije popunjena");
    exit();
  }
  if ($password_1 != $password_2) {
    header('Location: ../registracija.php');
    array_push($errors, "Šifre se ne poklapaju");
    exit();
  }
  if (empty($role)) { 
    header('Location: ../registracija.php');
    array_push($errors, "Niste odabrali rolu");
    exit();
  }
}

  //proverava u bazi da li vec postoje postojeci username i email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if (count($errors) == 0) {
    //enkripcija sifre
    $password = md5($password_1);
    
    //unos u tabelu users nakon uspesne registracije
    $query = "INSERT INTO users (first_name, last_name, username, email, password, role) 
              VALUES('$first_name', '$last_name', '$username', '$email', '$password', '$role')";
    mysqli_query($conn, $query);
  
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;
    $_SESSION['registration_complete'] = true;
    $_SESSION['success'] = "Uspesno ste se registrovali";
  
    //redirekcija ka stranici u zavisnosti od role
    if ($role == "admin"){
      header('Location: ../adminPregledP.php');
    } else {
      header('Location: ../pocetna.php');
    }
    exit();
  }
?>

<?php
session_start();

// display success message if registration was completed successfully
if (isset($_SESSION['registration_complete'])) {
  echo '<div class="alert alert-success">Registracija je uspešna!</div>';

  // unset the session variable to prevent the message from displaying again on refresh
  unset($_SESSION['registration_complete']);
}

if (isset($_GET['fname-fail']) && $_GET['fname-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Niste sva polja popunili!"); }</script>';
}
if (isset($_GET['lname-fail']) && $_GET['lname-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Niste sva polja popunili!"); }</script>';
}
if (isset($_GET['username-fail']) && $_GET['username-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Niste sva polja popunili!"); }</script>';
}
if (isset($_GET['email-fail']) && $_GET['email-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Niste sva polja popunili!"); }</script>';
}
if (isset($_GET['pass1-fail']) && $_GET['pass1-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Niste sva polja popunili!"); }</script>';
}
if (isset($_GET['pass-fail']) && $_GET['pass-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Šifre moraju da budu iste!"); }</script>';
}
if (isset($_GET['role-fail']) && $_GET['role-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Niste sva polja popunili!"); }</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINTravel</title>
    <link rel="icon" type="image/png" href="Screenshot 2023-01-19 021232.png"/>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist\css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="bootstrap-5.3.0-alpha1-dist\js\bootstrap.bundle.js"></script>
  </head>
  <style>
    body {
        background-color: #fff;
        color: #666666;
        font-size: 14px;
        font-family: 'Raleway', sans-serif;
        line-height: 1.80857;
        font-weight: bold;
    }
  </style>
  <body>    
    <?php include 'nav.php' ?>


 
      <form action="sources\registration.php" method="post">
        <section class="vh-100" data-bs-theme="light">
          <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                  <div class="card-body p-5 text-center">
                    <h3 class="mb-5" style="font-family: Arial, Helvetica, sans-serif;
                    font-weight: bold;">Napravite novi nalog</h3>

                    <div class="form-outline mb-4">
                      <input type="text" name="first_name" id="typeEmailX-2" class="form-control form-control-lg" 
                      value="<?php echo isset($first_name) ? $first_name : ''; ?>"/>
                      <label class="form-label" for="typeNameX-2" 
                      style="font-family: Arial, Helvetica, sans-serif;">Ime</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" name="last_name" id="typeEmailX-2" class="form-control form-control-lg" 
                      value="<?php echo isset($last_name) ? $last_name : ''; ?>"/>
                      <label class="form-label" for="typeNameX-2" 
                      style="font-family: Arial, Helvetica, sans-serif;">Prezime</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" name="username" id="typeUsernameX-2" class="form-control form-control-lg" 
                      value="<?php echo isset($username) ? $username : ''; ?>"/>
                      <label class="form-label" for="typeUsernameX-2" 
                      style="font-family: Arial, Helvetica, sans-serif;">Korisničko ime</label>
                    </div>
      
                    <div class="form-outline mb-4">
                      <input type="email" name="email" id="typeEmailX-2" class="form-control form-control-lg" 
                      value="<?php echo isset($email) ? $email : ''; ?>"/>
                      <label class="form-label" for="typeEmailX-2" 
                      style="font-family: Arial, Helvetica, sans-serif;">E-mail</label>
                    </div>
      
                    <div class="form-outline mb-4">
                      <input type="password" name="password_1" id="typePasswordX-1" class="form-control form-control-lg" 
                      value="<?php echo isset($password_1) ? $password_1 : ''; ?>"/>
                      <label class="form-label" for="typePasswordX-2" 
                      style="font-family: Arial, Helvetica, sans-serif;">Lozinka</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" name="password_2" id="typePasswordX-2" class="form-control form-control-lg" 
                      value="<?php echo isset($password_2) ? $password_2 : ''; ?>"/>
                      <label class="form-label" for="typePasswordX-2" 
                      style="font-family: Arial, Helvetica, sans-serif;">Potvrdi lozinku</label>
                    </div>

                    <div class="radio-buttons">
                      <label for="role" style="font-family: Arial, Helvetica, sans-serif; 
                      font-weight:bold; margin-right: 10px;">Odaberi rolu:</label>
                      <label style="font-family: Arial, Helvetica, sans-serif;">
                        <input type="radio" name="role" value="admin"
                        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == "admin") echo " checked"; ?>>Administrator
                      </label>
                      <label style="font-family: Arial, Helvetica, sans-serif;">
                        <input type="radio" name="role" value="staff"
                        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == "staff") echo " checked"; ?>>STAFF
                      </label>
                    </div>
      
                    <button class="btn btn-primary btn-lg btn-block" type="submit" 
                    style="font-family: Arial, Helvetica, sans-serif; margin-top: 30px" name="reg_user">Registruj se</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </form>

      <?php include 'footer.php' ?>
  </body>
</html>
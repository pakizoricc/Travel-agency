<?php
session_start();

// display success message if registration was completed successfully
if (isset($_SESSION['registration_complete'])) {
  echo '<div class="alert alert-success">Registracija je uspešna!</div>';

  // unset the session variable to prevent the message from displaying again on refresh
  unset($_SESSION['registration_complete']);
}

if (isset($_GET['fname-fail']) && $_GET['fname-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Ime nije popunjeno!"); }</script>';
}
if (isset($_GET['lname-fail']) && $_GET['lname-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Prezime nije popunjeno!"); }</script>';
}
if (isset($_GET['username-fail']) && $_GET['username-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Korisnicko ime nije popunjeno!"); }</script>';
}
if (isset($_GET['email-fail']) && $_GET['email-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("E-mail nije popunjen!"); }</script>';
}
if (isset($_GET['pass1-fail']) && $_GET['pass1-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Šifra nije popunjena!"); }</script>';
}
if (isset($_GET['pass-fail']) && $_GET['pass-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Šifre nisu iste!"); }</script>';
}
if (isset($_GET['role-fail']) && $_GET['role-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Rola nije odabrana!"); }</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava</title>
    <link rel="icon" type="image/png" href="Screenshot 2023-01-19 021232.png"/>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist\css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="bootstrap-5.3.0-alpha1-dist\js\bootstrap.bundle.js"></script>
  </head>
  <style>
    body {
        background-color: lightblue;
        color: #666666;
        font-size: 14px;
        font-family: 'Raleway', sans-serif;
        line-height: 1.80857;
        font-weight: bold;
    }
  </style>
  <body>    
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="dark"
    style="font-family: Arial, Helvetica, sans-serif;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="Screenshot 2023-01-19 021232.png" alt="Bootstrap" width="70" height="35">
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="pocetna.php" 
                style="font-weight: bold;">Početna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pretraga.php" style="font-weight: bold;">Pretraga</a>
              </li>
              <li class="nav-item dropdown">
                <li class="nav-item">
                  <a class="nav-link ms-auto" href="prijava.php" style="font-weight: bold;">Uloguj se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-auto" href="registracija.php" style="font-weight: bold;">Registracija</a>
                </li>
              </li>
            </ul>
          </div>
        </div>
    </nav>


 
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
                      <label style="font-family: Arial, Helvetica, sans-serif; margin-right: 5px;">
                        <input type="radio" name="role" value="user"
                        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == "user") echo " checked"; ?>>Korisnik
                      </label>
                      <label style="font-family: Arial, Helvetica, sans-serif;">
                        <input type="radio" name="role" value="admin"
                        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == "admin") echo " checked"; ?>>Administrator
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

      <section class="footer" style="width: 100%; background-color: #1c2331; padding-top: 80px; margin-top: 240px; 
      bottom: 0; text-align: center; text-decoration-color: #fff;">
        <section class="" style="color: #ccc;">
          <div class="container text-center text-md-start mt-5">
            
            <div class="row mt-3">
              
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                
                <h6 class="text-uppercase fw-bold" style="font-family: Arial, Helvetica, sans-serif;">Opis</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p style="font-family: Arial, Helvetica, sans-serif;">
                  FIN Travel - ponude za letovanje su savršen izbor 
                  za sve one koji hoće spoj odmora, provoda i uživanja na nekoj od fenomenalnih 
                  letnjih destinacija koje imamo u ponudi. 
                </p>
              </div>
                 
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              
                <h6 class="text-uppercase fw-bold">Društvene mreže</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
                <p>
                  <a class="link" href="https://www.facebook.com" target="_BLANK">
                    <div class="social-image">
                        <i class="fab fa-facebook"></i>
                    </div>
                    Facebook
                  </a>
                </p>
                <p>
                  <a class="link" href="https://www.instagram.com" target="_BLANK">
                    <div class="social-image">
                        <i class="fab fa-facebook"></i>
                    </div>
                    Instagram
                  </a>
                </p>
              </div>
              
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                
                <h6 class="text-uppercase fw-bold" style="font-family: Arial, Helvetica, sans-serif;">Kontakti</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p><i class="fas fa-home mr-3" style="font-family: Arial, Helvetica, sans-serif;"></i> Kragujevac, Srbija 34000</p>
                <p><i class="fas fa-envelope mr-3" style="font-family: Arial, Helvetica, sans-serif;"></i> fintravel@gmail.com</p>
                <p><i class="fas fa-phone mr-3" style="font-family: Arial, Helvetica, sans-serif;"></i> +381 6234 567 88</p>
                <p><i class="fas fa-print mr-3" style="font-family: Arial, Helvetica, sans-serif;"></i> +381 6234 567 89</p>
              </div>
             
            </div>
            
          </div>
        </section>
     
        
    
        
        <div
             class="text-center p-3"
             style="background-color: rgba(0, 0, 0, 0.2)"
             >
          <P style="color: #ccc;" style="font-family: Arial, Helvetica, sans-serif;">© 2020 Copyright: FIN travel</P>
          
        </div>
     </section>
  </body>
</html>

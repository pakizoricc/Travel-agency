<?php
if (isset($_GET['username-fail']) && $_GET['username-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Korisničko ime nije popunjeno!"); }</script>';
}

if (isset($_GET['password-fail']) && $_GET['password-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Šifra nije popunjena!"); }</script>';
}

if (isset($_GET['role-fail']) && $_GET['role-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Niste odabrali rolu!"); }</script>';
}

if (isset($_GET['error-fail']) && $_GET['error-fail'] === 'true') {
  echo '<script>window.onload = function() { alert("Uneli ste pogrešno podatke!"); }</script>';
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
        background-color: #D3D3D3;
        color: #666666;
        font-size: 14px;
        font-family: 'Raleway', sans-serif;
        line-height: 1.80857;
        font-weight: bold;
  }
</style>
  <body>
    <?php include 'nav.php' ?>

    <form action="sources/login.php" method="post">
      <section class="vh-100 " data-bs-theme="light">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <h3 class="mb-5" style="font-family: Arial, Helvetica, sans-serif;
                  font-weight: bold;">Prijava</h3>
                  <div class="form-outline mb-4">
                    <input type="text" name="username" id="user" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX-2" style="font-family: Arial, Helvetica, sans-serif;"
                    value="<?php echo isset($username) ? $username : ''; ?>">Korisničko ime</label>
                  </div>
      
                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="pass" class="form-control form-control-lg" />
                    <label class="form-label" for="typePasswordX-2" style="font-family: Arial, Helvetica, sans-serif;"
                    value="<?php echo isset($password) ? $password : ''; ?>">Lozinka</label>
                  </div>

                  <div class="radio-buttons">
                      <label for="role" style="font-family: Arial, Helvetica, sans-serif; 
                      font-weight:bold; margin-right: 10px;">Odaberi rolu:</label>
                      <label style="font-family: Arial, Helvetica, sans-serif; margin-right: 5px;">
                        <input type="radio" name="role" value="user"
                        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == "staff") echo " checked"; ?>>STAFF
                      </label>
                      <label style="font-family: Arial, Helvetica, sans-serif;">
                        <input type="radio" name="role" value="admin"
                        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == "admin") echo " checked"; ?>>Administrator
                      </label>
                  </div>
      
                  <button class="btn btn-primary btn-lg btn-block" type="submit" 
                  name="submit" style="font-family: Arial, Helvetica, sans-serif;">Prijavi se</button>

                  <div class="form-outline mb-4" style="margin-top: 25px">
                    <p style = "font-family:Arial, Helvetica, sans-serif;">
                      Nemate nalog? <a href="registracija.php" style="font-family: Arial, Helvetica, sans-serif;">Registrujte se ovde!</a>
                    </p>
                  </div>
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
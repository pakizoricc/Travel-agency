
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
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" 
    data-bs-theme="dark" style="font-family: Arial, Helvetica, sans-serif;">
        <div class="container">
            <a class="navbar-brand">
                <img src="Screenshot 2023-01-19 021232.png" alt="Bootstrap" width="70" height="35">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="pocetna.php" style="font-weight: bold;">Početna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pretraga.php" style="font-weight: bold;">Pretraga</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ms-auto" href="prijava.php" style="font-weight: bold;">Prijavi se</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ms-auto" href="registracija.php" style="font-weight: bold;">Registracija</a>
              </li>
            </ul>  
          </div>
        </div>
    </nav>


 
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
                    <input type="text" name="username" id="typeEmailX-2" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX-2" style="font-family: Arial, Helvetica, sans-serif;"
                    value="<?php echo $username; ?>">Korisničko ime</label>
                  </div>
      
                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" />
                    <label class="form-label" for="typePasswordX-2" style="font-family: Arial, Helvetica, sans-serif;"
                    value="<?php echo $password; ?>">Lozinka</label>
                  </div>
      
                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-start mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3"/>
                    <label class="form-check-label" for="form1Example3" style="font-family: Arial, Helvetica, sans-serif; margin-left: 10px;">Zapamti lozinku</label>
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
      

      <section class="footer" style="width: 100%; background-color: #1c2331; padding-top: 40px; bottom: 0; 
      text-align: center; text-decoration-color: #fff; font-family: Arial, Helvetica, sans-serif;">
        <section class="" style="color: #ccc;">
          <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold">FIN travel</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p>
                  pavlezoric2000@gmail.com
                </p>
              </div>
              
    
              
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                
                <h6 class="text-uppercase fw-bold">Nesto</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p>
                  Nesto
                </p>
                <p>
                  Nesto
                </p>
                <p>
                  Nesto
                </p>
                <p>
                  Nesto
                </p>
              </div>
              
    
              
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                
                <h6 class="text-uppercase fw-bold">Nesto</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p>
                  Nesto
                </p>
                <p>
                  Nesto
                </p>
                <p>
                  Nesto
                </p>
                <p>
                  Nesto
                </p>
              </div>
              
    
              
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                
                <h6 class="text-uppercase fw-bold">Kontakti</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p><i class="fas fa-home mr-3">
                </i> Kragujevac, Srbija 34000</p>
                <p><i class="fas fa-envelope mr-3">
                </i> fintravel@gmail.com</p>
                <p><i class="fas fa-phone mr-3"></i> +381 6234 567 88</p>
                <p><i class="fas fa-print mr-3"></i> +381 6234 567 89</p>
              </div>
            </div>
          </div>
        </section>
     
        
    
        
        <div
             class="text-center p-3"
             style="background-color: rgba(0, 0, 0, 0.2)"
             >
          <P style="color: #ccc; font-family: Arial, Helvetica, sans-serif;">© 2020 Copyright: FIN travel</P>
          
        </div>
      </section>




    </body>
    </html>
    
    
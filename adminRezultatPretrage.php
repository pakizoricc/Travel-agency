<?php session_start(); ?>
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
    <style>
      a:link { text-decoration: none; }


      a:visited { text-decoration: none; }


      a:hover { text-decoration: none; }


      a:active { text-decoration: none; }
      body{
        background-color: lightblue;
        color: #666666;
        font-size: 14px;
        font-family: 'Raleway', sans-serif;
        line-height: 1.80857;
        font-weight: bold;
      }
    
    </style>
</head>
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

    
    <form action="sources/search_offers.php" method="post">
      <div class="container" style="padding-top: 150px; padding-bottom: 400px;">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card " style="margin-top: 100px; ">
              <h5 class="card-header">Na osnovu izabranih parametara</h5>
              <div class="card-body">
                <p class="card-text"><?php echo 'Naziv aranzmana - ' . $_SESSION['title']; ?></p>
                <hr class="hr hr-blurry" />
                <p class="card-text"><?php echo 'Lokacija - ' . $_SESSION['destination']; ?></p>
                <hr class="hr hr-blurry" />
                <p class="card-text"><?php echo 'Prevoz - ' . $_SESSION['trans_type']; ?></p>
                <hr class="hr hr-blurry" />
                <p class="card-text"><?php echo 'Od datuma - ' . $_SESSION['from_date']; ?></p>
                <hr class="hr hr-blurry" />
                <p class="card-text"><?php echo 'Do datuma - ' . $_SESSION['to_date']; ?></p>
                <hr class="hr hr-blurry" />
                <a href="pretraga.php" class="btn btn-primary">Izmeni parametre</a>
              </div>
            </div>
          </div>
          <div class="col-lg col-md-6 col-sm-12">
          <div class="col text-center mb-5">
            <h1>Rezultat pretrage</h1>
          </div>
      
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 col-mb-4">
            <div class="row">
              <div class="card-footer my-2 mx-2 " >
                  <a class="btn btn-block btn-danger  mx-2">Ukloni ponudu</a>
              </div>  
            </div> 
          </div>
        </div>
      </div>
    </form>
    
    <section class="footer footer-expand-lg" style="width: 100%; background-color: #1c2331; font-family:Arial, Helvetica, sans-serif; font-weight:bold; padding-top: 40px; text-align: center; text-decoration-color: #fff; position: absolute;
      left: 0; right: 0; margin-top: 1400px;">
      <section class="" style="color: #ccc;">
        <div class="container text-center text-md-start mt-5">
              
          <div class="row mt-3">
                
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              
              <h6 class="text-uppercase fw-bold">Opis</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
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
                  
            <h6 class="text-uppercase fw-bold">Kontakti</h6>
            <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px; background-color: #7c4dff; height: 2px"
                      />
            <p><i class="fas fa-home mr-3"></i> Kragujevac, Srbija 34000</p>
            <p><i class="fas fa-envelope mr-3"></i> fintravel@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 381 6234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 381 6234 567 89</p>
          </div>
               
        </div>
              
      </div>
    </section>
       
          
      
          
      <div
               class="text-center p-3"
               style="background-color: rgba(0, 0, 0, 0.2)"
               >
        <P style="color: #ccc;">© 2020 Copyright: FIN travel</P>
            
      </div>
    </section>
   


</body>
</html>

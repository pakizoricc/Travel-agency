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

      body {
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


        <form action = "sources/search_offers.php" method="post">
          <div class="container-sm" style="padding: 100px;margin-bottom: 500px; font-family: Arial, Helvetica, sans-serif;">
            <div class="my-2 card">
              <div class="card-body">
                <h5 class="card-title">Pretraga</h5>
                <div class="row">
                  <div class="col-sm">
                    <div class="mb-2">
                      <label id="naziv-label" for="naziv-input" class="form-label">Naziv aranžmana</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="naziv-input" name="title" placeholder="Naziv aranžmana" value=<?php echo isset($title) ? $title : ''; ?>>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm">
                      <div class="mb-2">
                        <label id="lokacija-label" for="lokacija-input" class="form-label">Lokacija</label>
                        <div class="input-group">
                          <span class="input-group-text"><i class="bi-pin-map"></i> </span>
                          <input
                          type="text"
                          class="form-control"
                          list="lokacija-options"
                          id="lokacija-input"
                          placeholder="Lokacija"
                          name = "destination"
                          aria-describedby="lokacija-label"
                          value=<?php echo isset($destination) ? $destination : ''; ?>/>
                          <datalist id="lokacija-options"></datalist>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm">
                    <div class="mb-2">
                      <label for="role">Tip prevoza</label>
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi-pin-map"></i> </span>
                          <input
                          type="text"
                          class="form-control"
                          list="kontinent-options"
                          id="trans_type-input"
                          placeholder="tip prevoza"
                          name="trans_type"
                          aria-describedby="transport-label"
                          value=<?php echo isset($trans_type) ? $trans_type : ''; ?>/>
                          <datalist id="transport-options"></datalist>
                      </div>      
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="mb-2 col">
                    <div class="h-100 card">
                      <div class="card-body">
                        <h5 class="card-title">Termin</h5>
                          <div class="mb-2">
                            <div id="departure-date" class="mb-2">
                              <label id="departure-date-label" for="departure-date-input" class="form-label">Od kog datuma</label>
                              <div class="input-group">
                                <span class="input-group-text"><i class="bi-calendar"></i></span>
                                <input
                                  type="date"
                                  class="form-control"
                                  id="departure-date-input"
                                  aria-describedby="departure-date-label"
                                  name="from_date"
                                  value=<?php echo isset($from_date) ? $from_date : ''; ?>
                                />
                              </div>
                            </div>
                            <div id="return-date" class="mb-2">
                              <label id="return-date-label" for="return-date-input" class="form-label">Do kod datuma</label>
                              <div class="input-group">
                                <span class="input-group-text"><i class="bi-calendar-fill"></i> </span>
                                <input
                                  type="date"
                                  class="form-control"
                                  id="return-date-input"
                                  name="to_date"
                                  aria-describedby="return-date-label"
                                  value=<?php echo isset($to_date) ? $to_date : ''; ?>
                                />
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <button id="search-button" class="w-100 btn btn-primary" type="submit" name="search">
                      Trazi
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        
      
      <section class="footer" style="width: 100%; background-color: #1c2331; padding-top: 40px; bottom: 0; 
      text-align: center; text-decoration-color: #fff; font-family: Arial, Helvetica, sans-serif;">
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

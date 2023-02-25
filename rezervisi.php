<?php include('sources\reservation.php') ?>
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
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="dark" 
    style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">
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
                <a class="nav-link active" aria-current="page" href="#">Početna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pretraga</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ms-auto" href="#">Prijavi se</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ms-auto" href="#">Registracija</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <form action = "rezervisi.php" method="post">
      <div class="container-sm" style="padding: 100px;margin-bottom: 500px; font-family: Arial, Helvetica, sans-serif;">
        <div class="my-2 card">
          <div class="card-body">
            <h4 class="card-title">Rezervacija</h4>
            <div class="row">
              <div class="col-sm">
                  <div class="mb-2">
                    <label id="imeR-label" for="imeR-input" class="form-label"
                      >Ime</label
                    >
                    <div class="input-group">
                      
                      <input
                      type="text"
                      class="form-control"
                      
                      id="imeR-input"
                      placeholder="Ime"
                      aria-describedby="imeR-label"/>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="mb-2">
                    <label id="prezimeR-label" for="prezimeR-input" class="form-label"
                      >Prezime</label
                    >
                    <div class="input-group">
                    
                      <input
                      type="text"
                      class="form-control"
                      
                      id="prezimeR-input"
                      placeholder="Prezime"
                      aria-describedby="prezimeR-label"/>
                      
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="mb-2">
                      <label id="brTelefona-label" for="brTelefona-input" class="form-label"
                        >Kontakt telefon</label
                      >
                      <div class="input-group">
                      
                        <input
                        type="text"
                        class="form-control"
                        
                        id="brTelefona-input"
                        placeholder="Broj telefona"
                        aria-describedby="brTelefona-label"/>
                        
                      </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="mb-2">
                      <label id="email-label" for="email-input" class="form-label"
                        >Email adresa</label>
                        <div class="input-group">
                    
                          <input
                          type="text"
                          class="form-control"
                          
                          id="email-input"
                          placeholder="email"
                          aria-describedby="email-label"/>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  mb-2"  >
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title text-center">Broj putnika</h6>
              
                
            </div>
            <div class="row">
                <div class="col-sm">
                  <div class="mb-2">
                    <label id="brOdraslih-label" for="brOdraslih-input" class="form-label">Odrasli</label>
                    <div class="input-group">
                      <select name="brOdraslih_id" class="form-control">
                          <option  style="font-weight:bold;" value="1">1</option>
                          <option  style="font-weight:bold;" value="2">2</option>
                          <option  style="font-weight:bold;" value="3">3</option>
                          <option  style="font-weight:bold;" value="4">4</option>
                          <option  style="font-weight:bold;" value="5">5</option>
                          <option  style="font-weight:bold;" value="6">6</option>
                          <option  style="font-weight:bold;" value="7">7</option>
                          <option  style="font-weight:bold;" value="8">8</option>
                          <option  style="font-weight:bold;" value="9">9</option>
                          <option  style="font-weight:bold;" value="10">10</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="mb-2">
                    <label id="brDece-label" for="brDece-input" class="form-label">Broj dece</label>
                      <div class="input-group">
                        <select name="brDece_id" class="form-control">
                          <option  style="font-weight:bold;" value="0">0</option>
                          <option  style="font-weight:bold;" value="1">1</option>
                          <option  style="font-weight:bold;" value="2">2</option>
                          <option  style="font-weight:bold;" value="3">3</option>
                          <option  style="font-weight:bold;" value="4">4</option>
                          <option  style="font-weight:bold;" value="5">5</option>
                          <option  style="font-weight:bold;" value="6">6</option>
                          <option  style="font-weight:bold;" value="7">7</option>
                          <option  style="font-weight:bold;" value="8">8</option>
                          <option  style="font-weight:bold;" value="9">9</option>
                          <option  style="font-weight:bold;" value="10">10</option>
                        </select>
                      </div>
                  </div>
                </div>
            </div>
        </div>
            <div class="row">
              <div class="col-sm">
                  <div class="mb-2">
                    <label   for="komentar">Komentar</label>
                    <input
                          type="text"
                          class="form-control"
                          
                          id="komentar-input"
                          placeholder="komentar"
                          aria-describedby="komentar-label"/>  
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <button id="search-button" class="w-100 btn btn-primary">
                  Prosledi rezervaciju
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
      
      <section class="footer" style="width: 100%; background-color: #1c2331; padding-top: 40px; 
      bottom: 0; text-align: center; text-decoration-color: #fff; font-family: Arial, Helvetica, sans-serif;">
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
                  neki mali opis
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
                <p><i class="fas fa-home mr-3"></i> Kragujevac, Srbija 34000</p>
                <p><i class="fas fa-envelope mr-3"></i> fintravel@gmail.com</p>
                <p><i class="fas fa-phone mr-3"></i> + 381 6234 567 88</p>
                <p><i class="fas fa-print mr-3"></i> + 381 6234 567 89</p>
              </div>
             
            </div>
            
          </div>
        </section>
  
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
          <P style="color: #ccc;">© 2020 Copyright: FIN travel</P>
        </div>
      </section>
    
    
    </body>
    </html>
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


      <div class="container " style="min-height: 500px; padding-top: 100px;">
      <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
            
                
      <div class="container-sm" style="padding: 20px;margin-bottom: 200px; ">
        <form action="">
        <div class="my-2 card" >
          <div class="card-body " style="background-color: beige;">
            <h5 class="card-title">Izmeni ponudu</h5>
            <div class="row">
              <div class="col-sm">
                  <div class="mb-2">
                    <label id="naziv-label" for="nazivNovog-input" class="form-label"
                      >Naziv aranzmana</label
                    >
                    <div class="input-group">
                      
                      <input
                      type="text"
                      class="form-control"
                      
                      id="nazivNovog-input"
                      placeholder="Naziv novog aranzmana"
                      aria-describedby="nazivNovigNogog-label"/>
                      
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="mb-2">
                      <label id="lokacijeNovog-label" for="lokacijeNovog-input" class="form-label"
                        >Lokacije</label
                      >
                      <div class="input-group">
                        
                        <input
                        type="text"
                        class="form-control"
                        
                        id="lokacija-input"
                        placeholder="Lokacije "
                        aria-describedby="lokacijeNovog-label"/>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="mb-2">
                      <label id="kontinentNovog-label" for="kontinentNovog-input" class="form-label"
                        >Kontinent</label>
                      <div class="input-group">
                        
                        <input
                        type="text"
                        class="form-control"
                        
                        id="kontinentNovog-input"
                        placeholder="Kontinent"
                        aria-describedby="kontinentNovog-label"/>
                        

                      </div>
                    </div>
                  </div>
            </div>
            <div class="row">
              <div class="col-sm">
                  <div class="mb-2">
                    <label   for="role">Tip prevoza</label>
                          <select name="prevozNovog_id" class="form-control">
                              
                                      <option  style="font-weight:bold;" value="">nesto</option>
                                      <option  style="font-weight:bold;" value="">nesto</option>
                                      <option  style="font-weight:bold;" value="">nesto</option>
                             
                          </select>
                      
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="mb-2">
                      <label for="role" style="font-family: Arial, Helvetica, sans-serif;">Cena u evrima</label>
                      <div class="input-group">
                          
                          <input
                          type="text"
                          class="form-control"
                          
                          id="cenaNovog-input"
                          placeholder="Cena"
                          aria-describedby="cenaNovog-label"/>
                          
  
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
                            <div id="departure-date-New" class="mb-2">
                                <label id="departure-date-New-label" for="departure-date-New-input" class="form-label"
                                  >Od kog datuma</label
                                >
                                <div class="input-group">
                                  <span class="input-group-text"><i class="bi-calendar"></i></span>
                                  <input
                                    type="date"
                                    class="form-control"
                                    id="departure-date-New-input"
                                    aria-describedby="departure-date-New-label"
                                  />
                                </div>
                              </div>
                              <div id="return-date-New" class="mb-2">
                                <label id="return-date-New-label" for="return-date-New-input" class="form-label"
                                  >Do kod datuma</label
                                >
                                <div class="input-group">
                                  <span class="input-group-text"><i class="bi-calendar-fill"></i> </span>
                                  <input
                                    type="date"
                                    class="form-control"
                                    id="return-date-New-input"
                                    aria-describedby="return-date-New-label"
                                  />
                                </div>
                              </div>
                            </div>
                    </div>
                  </div>
                  
            </div>
          </div>

          <div class="row">
            <div class="mb-2 col">
              <div class="h-100 card">
                <div class="card-body">
                  <h5 class="card-title">Opis smestaja</h5>
                  <div class="mb-2">
                    
                      <label id="imeObjekta-label" for="imeObjekta-input" class="form-label"
                        >Ime smestajnog objekta</label>
                      <div class="input-group">
                        
                        <input
                        type="text"
                        class="form-control"
                        
                        id="imeObjekta-input"
                        placeholder="Ime objekta"
                        aria-describedby="imeObjekta-label"/>
                        

                      
                    </div>
                    
                      </div>
                      <div class="row">
                       
                        <div class="col-sm">
                            <div class="mb-2">
                              <label   for="role">Tip smestaja</label>
                                    <select name="tipSmestaja" class="form-control">
                                        
                                                <option  style="font-weight:bold;" value="">Hotelski</option>
                                                <option  style="font-weight:bold;" value="">Bungalovski</option>
                                                
                                       
                                    </select>
                                
                              </div>
                              <div class="mb-2">
                    
                                <label  for="tipSmestajaSoba" class="form-label"
                                  >Tip smestaja u sobi</label>
                                  <select name="tipSmestajaSoba" class="form-control">
                                              
                                    <option  style="font-weight:bold;" value="">nesto</option>
                                    <option  style="font-weight:bold;" value="">nesto</option>
                                    <option  style="font-weight:bold;" value="">nesto</option>
                           
                                  </select>
                              
                                </div>
                            </div>
                            
                        
                      
                        <div class="mb-2">
                    
                          <label id="-label" for="kategorijaSmestaja-input" class="form-label"
                            >Kategorija smestaja</label>
                            <select name="kategorijaS" class="form-control">
                                        
                              <option  style="font-weight:bold;" value="">nesto</option>
                              <option  style="font-weight:bold;" value="">nesto</option>
                              <option  style="font-weight:bold;" value="">nesto</option>
                     
                  </select>
                      </div>
                      </div>
                      <div class="row">
                        <div class="mb-2 col">
                          <div class="h-100 card">
                            <div class="card-body">
                              <h5 class="card-title">Unesite url-ove za slike</h5>
                         
                             
                                  <hr class="my-4">
                                  <div class="row">
                                    <div class="mb-3">
                                      <label for="formFileMultiple" class="form-label">Unesi slike</label>
                                      <input class="form-control" type="file" id="formFileMultiple" multiple>
                                    </div>
                                  
                                          
                  
                                        
                                      </div>
                                     
                                      
                                         
                                  
                                  <hr class="my-4">
                        
                               
                                   
            
            
                                
                        </div>
                      </div>
                      
                </div>
            
                      </div>
                          
                          <div class="mb-2">
                    
                            <label id="sadrzi-label" for="sadrzi-input" class="form-label"
                              >Sadrzi</label>
                            <div class="input-group">
                              
                              <input
                              type="text"
                              class="form-control"
                              
                              id="sadrzi-input"
                              placeholder="navedi..."
                              aria-describedby="sadrzi-label"/>
                              
      
                            
                          </div>
                          
                            </div>
                        
                      
                      
                       


                    
            </div>
          </div>
          
    </div>

          </div>
          <div class="row">
            <div class="mb-2 col">
              <div class="h-100 card">
                <div class="card-body">
                  <h5 class="card-title">Detaljan opis putovanja</h5>
             
                 
                      <hr class="my-4">
                      <!--napisacu prvi dan i posle se sve isto ponavlja koliko dana ima-->
                      <label id="dan-label" for="dan-input" class="form-label"
                              >Dan broj:</label>
                            <div class="input-group">
                              
                              <input
                              type="text"
                              class="form-control"
                              
                              id="dan-input"
                              placeholder="opis dana"
                              aria-describedby="dan-label"/>
                              
      
                            
                          </div>
                      
                      <hr class="my-4">
            
                   
                       


                    
            </div>
          </div>
          
    </div>

          </div>
          <div class="row">
            <div class="col-sm">
              <div class="mb-2">
                <label id="napomenaNovog-label" for="napomenaNovog-input" class="form-label"
                  >Napomena</label>
                <div class="input-group">
                  
                  <input
                  type="text"
                  class="form-control"
                  
                  id="napomenaNovog-input"
                  placeholder="napomena..."
                  aria-describedby="napomenaNovog-label"/>
                  

                </div>
              </div>
            </div>

          </div>
            <div class="row">
              <div class="col">
                <button id="search-button" class="w-100 btn btn-primary">
                  Primeni izmene
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

</form>
    
          </div>






      </div>
            
      </div>







      <section class="footer" style="width: 100%; background-color: #1c2331; padding-top: 40px; bottom: 0; text-align: center; text-decoration-color: #fff; ">
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

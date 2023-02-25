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
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="dark">
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
                <a class="nav-link active" aria-current="page" href="#" 
                style="font-family: Arial, Helvetica, sans-serif;">Početna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="font-family: Arial, Helvetica, sans-serif;">Pretraga</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" 
                data-bs-toggle="dropdown" aria-expanded="false" style="font-family: Arial, Helvetica, sans-serif;">
                  Upravljanje korisnicima
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#" 
                    style="font-family: Arial, Helvetica, sans-serif;">Dodaj novog korisnika</a></li>
                  <li><a class="dropdown-item" href="#" 
                    style="font-family: Arial, Helvetica, sans-serif;">Pregled trenutnih korisnika</a></li>
                </ul>
                <li class="nav-item">
                  <a class="nav-link ms-auto" href="#" 
                  style="font-family: Arial, Helvetica, sans-serif;">Odjavi se</a>
                </li>
              </li>
              
             
            
            <!--
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>-->
          </div>
        </div>
      </nav>


      <div class="container " style="min-height: 500px; padding-top: 100px;">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            
                
      <div class="container-sm" style="padding: 20px;margin-bottom: 200px;">
        <form action="">
        <div class="my-2 card">
          <div class="card-body">
            <h5 class="card-title" style="font-family: Arial, Helvetica, sans-serif;">Dodaj ponudu</h5>
            <div class="row">
              <div class="col-sm">
                  <div class="mb-2">
                    <label id="naziv-label" for="nazivNovog-input" class="form-label"
                    style="font-family: Arial, Helvetica, sans-serif;">Naziv aranžmana</label>
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
                      style="font-family: Arial, Helvetica, sans-serif;">Lokacije</label>
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
                      style="font-family: Arial, Helvetica, sans-serif;">Kontinent</label>
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
                    <label for="role" style="font-family: Arial, Helvetica, sans-serif;">Tip prevoza</label>
                          <select name="prevozNovog_id" class="form-control">
                              
                                      <option  style="font-weight:bold;" value="">nesto</option>
                                      <option  style="font-weight:bold;" value="">nesto</option>
                                      <option  style="font-weight:bold;" value="">nesto</option>
                             
                          </select>
                      
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="mb-2 col">
                      <div class="h-100 card">
                        <div class="card-body">
                          <h5 class="card-title" style="font-family: Arial, Helvetica, sans-serif;">Termin</h5>
                          <div class="mb-2">
                            <div id="departure-date-New" class="mb-2">
                                <label id="departure-date-New-label" for="departure-date-New-input" class="form-label"
                                style="font-family: Arial, Helvetica, sans-serif;">Od kog datuma</label
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
                                style="font-family: Arial, Helvetica, sans-serif;">Do kod datuma</label
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
                  <h5 class="card-title" style="font-family: Arial, Helvetica, sans-serif;">Opis smeštaja</h5>
                  <div class="mb-2">
                    
                      <label id="imeObjekta-label" for="imeObjekta-input" class="form-label"
                      style="font-family: Arial, Helvetica, sans-serif;">Ime smeštajnog objekta</label>
                      <div class="input-group">
                        
                        <input
                        type="text"
                        class="form-control"
                        
                        id="imeObjekta-input"
                        placeholder="Ime objekta"
                        aria-describedby="imeObjekta-label"/>
                        

                      
                    </div>
                    
                      </div>
                      <div class="mb-2">
                    
                        <label id="tipSmestaja-label" for="tipSmestaja-input" class="form-label"
                        style="font-family: Arial, Helvetica, sans-serif;">Tip smeštaja</label>
                        <div class="input-group">
                          
                          <input
                          type="text"
                          class="form-control"
                          
                          id="tipSmestaja-input"
                          placeholder="Tip smestaja"
                          aria-describedby="tipSmestaja-label"/>
                          
  
                        
                      </div>
                      
                        </div>
                        <div class="mb-2">
                    
                          <label id="kategorijaSmestaja-label" for="kategorijaSmestaja-input" class="form-label"
                          style="font-family: Arial, Helvetica, sans-serif;">Kategorija smeštaja</label>
                          <div class="input-group">
                            
                            <input
                            type="text"
                            class="form-control"
                            
                            id="kategorijaSmestaja-input"
                            placeholder="Kategorija smestaja"
                            aria-describedby="kategorijaSmestaja-label"/>
                            
    
                          
                        </div>
                        
                          </div>
                          <div class="mb-2">
                    
                            <label id="sadrzi-label" for="sadrzi-input" class="form-label"
                            style="font-family: Arial, Helvetica, sans-serif;">Sadrži</label>
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
                  <h5 class="card-title" style="font-family: Arial, Helvetica, sans-serif;">Detaljan opis putovanja</h5>
             
                 
                      <hr class="my-4">
                      <!--napisacu prvi dan i posle se sve isto ponavlja koliko dana ima-->
                      <label id="dan-label" for="dan-input" class="form-label"
                      style="font-family: Arial, Helvetica, sans-serif;">Dan broj:</label>
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
                style="font-family: Arial, Helvetica, sans-serif;">Napomena</label>
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
                <button id="search-button" class="w-100 btn btn-primary" style="font-family: Arial, Helvetica, sans-serif;">
                  Dodaj
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

</form>
    </div>
    

          
          


          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="row">
              
            
            <h2 class="text-center" style="font-family: Arial, Helvetica, sans-serif;">Rezevacije koje čekaju odobrenje</h2>
              <div class="col" style="margin-top: 10px; margin-bottom: 10px;">
              
                <div class="card " style="margin-top: 5px; margin-bottom: 5px;">
                  <div class="card-body">
                    <h5 class="card-title text-center" style="font-family: Arial, Helvetica, sans-serif;">Naziv ponude:</h5>
                    <p class="card-text" style="font-family: Arial, Helvetica, sans-serif;">Puno ime klijenta:</p>
                    <p class="card-text" style="font-family: Arial, Helvetica, sans-serif;">Kontakti:</p>
                    <p class="card-text" style="font-family: Arial, Helvetica, sans-serif;">Broj putnika:</p>
                    <p class="card-text" style="font-family: Arial, Helvetica, sans-serif;">Dece:</p>
                    <p class="card-text" style="font-family: Arial, Helvetica, sans-serif;">Odraslih:</p>
                    
                    <p class="card-text" style="font-family: Arial, Helvetica, sans-serif;">Navedena napomena:</p>
                  </div>
                
              
                
                <div class="card-footer text-center">
                  <div class="row">
                    <div class="col">
                    <button id="search-button" class="w-50 mb-2 btn btn-primary" style="font-family: Arial, Helvetica, sans-serif;">
                      Prihvati
                    </button>
                  
                  </div>
                  <div class="col">

                    <button id="btn-danger" class="w-50 mb-2 btn btn-danger" style="font-family: Arial, Helvetica, sans-serif;">
                      Izbriši
                    </button>
                  </div>
                </div>
              </div>
            </div>
              </div>
          </div>
        </div>










          </div>






      </div>
            
      </div>







      <section class="footer" style="width: 100%; background-color: #1c2331; padding-top: 40px; bottom: 0; text-align: center; text-decoration-color: #fff; ">
        <section class="" style="color: #ccc;">
          <div class="container text-center text-md-start mt-5">
            
            <div class="row mt-3">
              
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                
                <h6 class="text-uppercase fw-bold" style="font-family: Arial, Helvetica, sans-serif;">FIN travel</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p style="font-family: Arial, Helvetica, sans-serif;">
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
                
                <h6 class="text-uppercase fw-bold" style="font-family: Arial, Helvetica, sans-serif;">Kontakti</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p style="font-family: Arial, Helvetica, sans-serif;"><i class="fas fa-home mr-3"></i> Kragujevac, Srbija 34000</p>
                <p style="font-family: Arial, Helvetica, sans-serif;"><i class="fas fa-envelope mr-3"></i> fintravel@gmail.com</p>
                <p style="font-family: Arial, Helvetica, sans-serif;"><i class="fas fa-phone mr-3"></i> + 381 6234 567 88</p>
                <p style="font-family: Arial, Helvetica, sans-serif;"><i class="fas fa-print mr-3"></i> + 381 6234 567 89</p>
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
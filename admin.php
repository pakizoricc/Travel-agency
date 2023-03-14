<?php 
session_start(); 
if (isset($_GET['add-success']) && $_GET['add-success'] === 'true') {
  echo '<script>window.onload = function() { alert("Uspešno ste dodali aranžman!"); }</script>';
}?>
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
        background-color: #D3D3D3;
        color: #666666;
        font-size: 14px;
        font-family: 'Raleway', sans-serif;
        line-height: 1.80857;
        font-weight: bold;
      }
    </style>
</head>
<body>
    <?php include 'nav.php'?>

    

    <div class="container " style="min-height: 500px; padding-top: 100px;">
        <div class="row">
          <form action="sources/update_arangement.php" method="post">
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
                            name="title"
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
                          <label id="naziv-label" for="nazivNovog-input" class="form-label">ID aranzmana</label>
                          <div class="input-group">
                            
                            <input
                            type="text"
                            class="form-control"
                            name="id"
                            id="nazivNovog-input"
                            placeholder="ID_aranzmana"
                            aria-describedby="nazivNovigNogog-label"
                            />
                            
                          </div>
                        </div>
                      </div>
                      <div class="col-sm">
                        <div class="mb-2">
                          <label id="naziv-label" for="nazivNovog-input" class="form-label">ID smestaja</label>
                          <div class="input-group">
                            
                            <input
                            type="text"
                            class="form-control"
                            name="id2"
                            id="nazivNovog-input"
                            placeholder="ID_smestaja"
                            aria-describedby="nazivNovigNogog-label"
                            />
                            
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
                              name="destination"
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
                              name="continent"
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
                                <select name="trans_type" class="form-control">
                                    
                                            <option  style="font-weight:bold;" value="autobus">Autobus</option>
                                            <option  style="font-weight:bold;" value="voz">Voz</option>
                                            <option  style="font-weight:bold;" value="avion">Avion</option>
                                            <option  style="font-weight:bold;" value="automobil">Automobil</option>
                                            <option  style="font-weight:bold;" value="brod">Brod</option>
                                   
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
                                          name="from_date"
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
                                          name="to_date"
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
                              name="name_accomodation"
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
                                name="type_accomodation"
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
                                  name="category"
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
                                    name="room_refriginator"
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
                                    name="num_days"
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
                        name="internet_connection"
                        id="napomenaNovog-input"
                        placeholder="napomena..."
                        aria-describedby="napomenaNovog-label"/>
                        
      
                      </div>
                    </div>
                  </div>
      
                </div>
                  <div class="row">
                    <div class="col">
                      <button id="add" class="w-100 btn btn-primary" style="font-family: Arial, Helvetica, sans-serif;">
                        Dodaj
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </form>
          
    

          
          

        <form action = "sources/reservation.php" method = "post">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="row">
              <h2 class="text-center" style="font-family: Arial, Helvetica, sans-serif;">Rezevacije koje čekaju odobrenje</h2>
              <div class="col" style="margin-top: 10px; margin-bottom: 10px;">
                <div class="card " style="margin-top: 5px; margin-bottom: 5px;">
                  <div class="card-body">
                    <p class="card-text" style="font-family: Arial, Helvetica, sans-serif;"><?php echo 'Puno ime klijenta: ' . $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?></p>
                    <p class="card-text" style="font-family: Arial, Helvetica, sans-serif;"><?php echo 'Kontakti: ' . $_SESSION['phone_number']; ?></p>
                    <p class="card-text" style="font-family: Arial, Helvetica, sans-serif;"><?php echo 'E-mail: ' . $_SESSION['email']; ?></p>
                    <p class="card-text" style="font-family: Arial, Helvetica, sans-serif;"><?php echo 'Dece: ' . $_SESSION['num_kids']; ?></p>
                    <p class="card-text" style="font-family: Arial, Helvetica, sans-serif;"><?php echo 'Odraslih: ' . $_SESSION['num_adults']; ?></p>
                    <p class="card-text" style="font-family: Arial, Helvetica, sans-serif;"><?php echo 'Nacin placanja: ' . $_SESSION['payment']; ?></p>
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
                    <form action = "sources/delete_reservation.php" method = "get">
                      <button id="btn-danger" name="btn-danger" class="w-50 mb-2 btn btn-danger" style="font-family: Arial, Helvetica, sans-serif;">
                        Izbriši
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>

          
      <?php include 'footer.php' ?>
</body>
</html>
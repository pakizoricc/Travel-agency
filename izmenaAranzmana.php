<?php 
session_start(); 
if (isset($_GET['update-success']) && $_GET['update-success'] === 'true') {
  echo '<script>window.onload = function() { alert("Uspešno ste ažurirali aranžman!"); }</script>';
}?>
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
      
    <?php include 'nav.php' ?>

    <form action="sources/update_arangement.php" method="post">
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
                    <label id="naziv-label" for="nazivNovog-input" class="form-label"
                      >Naziv aranzmana</label
                    >
                    <div class="input-group">
                      
                      <input
                      type="text"
                      class="form-control"
                      name="title"
                      id="nazivNovog-input"
                      placeholder="Naziv novog aranzmana"
                      aria-describedby="nazivNovigNogog-label"
                      />
                      
                    </div>
                  </div>
                </div>

                <div class="col-sm">
                  <div class="mb-2">
                    <label id="naziv-label" for="nazivNovog-input" class="form-label"
                      >Drzava</label
                    >
                    <div class="input-group">
                      <input
                      type="text"
                      class="form-control"
                      name="country"
                      id="nazivNovog-input"
                      placeholder="Drzava"
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
                        >Lokacije</label
                      >
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
                        >Kontinent</label>
                      <div class="input-group">
                        
                        <input
                        type="text"
                        class="form-control"
                        name="continent"
                        id="kontinentNovog-input"
                        placeholder="Kontinent"
                        aria-describedby="kontinentNovog-label"
                        />
                        

                      </div>
                    </div>
                  </div>
                </div>
              <div class="row">
                <div class="col-sm">
                  <div class="mb-2">
                    <label   for="role">Tip prevoza</label>
                          <select name="trans_type" class="form-control">
                                      <option  style="font-weight:bold;" value="autobus">Autobus</option>
                                      <option  style="font-weight:bold;" value="voz">Voz</option>
                                      <option  style="font-weight:bold;" value="avion">Avion</option>
                                      <option  style="font-weight:bold;" value="automobil">Automobil</option>
                                      <option  style="font-weight:bold;" value="brod">Brod</option>
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
                          name="price"
                          id="cenaNovog-input"
                          placeholder="Cena"
                          aria-describedby="cenaNovog-label"
                          />
                          
  
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
                                    name="from_date"
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
                                    name="to_date"
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
                        name="name_accomodation"
                        id="imeObjekta-input"
                        placeholder="Ime objekta"
                        aria-describedby="imeObjekta-label"
                      />
                        

                      
                    </div>
                    
                      </div>
                      <div class="row">
                       
                        <div class="col-sm">
                              <div class="mb-2">
                    
                                <label  for="tipSmestajaSoba" class="form-label"
                                  >Tip smestaja u sobi</label>
                                  <select name="type_accomodation" class="form-control">
                                    <option  style="font-weight:bold;" value="1/1">1/1</option>
                                    <option  style="font-weight:bold;" value="1/2">1/2</option>
                                    <option  style="font-weight:bold;" value="1/3">1/3</option>
                                    <option  style="font-weight:bold;" value="1/2+1">1/2+1</option>
                                    <option  style="font-weight:bold;" value="1/3+1">1/3+1</option>
                                    <option  style="font-weight:bold;" value="1/4">1/4</option>
                                  </select>
                              
                                </div>
                            </div>
                            
                        
                      
                        <div class="mb-2">
                          <label id="-label" for="kategorijaSmestaja-input" class="form-label"
                            >Kategorija smestaja</label>
                            <select name="category" class="form-control">   
                              <option  style="font-weight:bold;" value="1">1</option>
                              <option  style="font-weight:bold;" value="2">2</option>
                              <option  style="font-weight:bold;" value="3">3</option>
                              <option  style="font-weight:bold;" value="4">4</option>
                              <option  style="font-weight:bold;" value="5">5</option>
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
                                      <input class="form-control" type="file" name="image" id="formFileMultiple" multiple>
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
                              name="internet_connection"
                              id="sadrzi-input"
                              placeholder="navedi..."
                              aria-describedby="sadrzi-label"
                              />
                              
      
                            
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
                              name="num_days"
                              id="dan-input"
                              placeholder="opis dana"
                              aria-describedby="dan-label"
                              />
                              
      
                            
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
                <button id="search-button" name= "add" class="w-100 btn btn-primary">
                  Dodaj aranzman
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </form>
      

      <?php include 'footer.php' ?>

</body>
</html>
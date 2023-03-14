<?php
if (isset($_GET['reservation-success']) && $_GET['reservation-success'] === 'true') {
  echo '<script>window.onload = function() { alert("Rezervacija je uspešno poslata!"); }</script>';
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

    <form action = "sources/reservation.php" method="post">
      <div class="container-sm" style="padding: 100px;margin-bottom: 500px; font-family: Arial, Helvetica, sans-serif;">
        <div class="my-2 card">
          <div class="card-body">
            <h4 class="card-title">Rezervacija</h4>
            <div class="row">
              <div class="col-sm">
                  <div class="mb-2">
                    <label id="imeR-label" for="imeR-input" class="form-label">Ime</label>
                    <div class="input-group">
                      <input type="text" name="first_name" class="form-control" id="imeR-input" placeholder="Ime"
                      aria-describedby="imeR-label" value="<?php echo isset($first_name) ? $first_name : '';  ?>"/>
                    </div>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="mb-2">
                    <label id="prezimeR-label" for="prezimeR-input" class="form-label">Prezime</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="last_name" id="prezimeR-input" placeholder="Prezime"
                      aria-describedby="prezimeR-label" value="<?php echo isset($last_name) ? $last_name : '';  ?>"/>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="mb-2">
                      <label id="brTelefona-label" for="brTelefona-input" class="form-label">Kontakt telefon</label>
                      <div class="input-group">
                      
                        <input type="text" class="form-control" name="phone_number" id="brTelefona-input"placeholder="Broj telefona"
                        aria-describedby="brTelefona-label" value="<?php echo isset($phone_number) ? $phone_number : '';  ?>"/>
                        
                      </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="mb-2">
                      <label id="email-label" for="email-input" class="form-label">E-mail adresa</label>
                        <div class="input-group">
                    
                          <input type="text" class="form-control" name="email" id="email-input" placeholder="e-mail"
                          aria-describedby="email-label" value="<?php echo isset($email) ? $email : '';  ?>"/>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  mb-2">
              <div class="card">
                <div class="card-body">
                   
            </div>
            <div class="row  mb-2"  >
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title text-center">Broj putnika</h6>
              
                
            </div>
            <div class="row " >

              <div class="col-sm">
                  <div class="mb-2">
                    <label id="brOdraslih-label" for="brOdraslih-input" class="form-label"
                      >Odrasli</label>

                    <div class="input-group">
                      <select name="num_adults" class="form-control">
                                <option  style="font-weight:bold;" value="1">1</option>
                                <option  style="font-weight:bold;" value="2">2</option>
                                <option  style="font-weight:bold;" value="3">3</option>
                                <option  style="font-weight:bold;" value="4">4</option>
                                <option  style="font-weight:bold;" value="5">5</option>
                                <option  style="font-weight:bold;" value="6">6</option>
                                <option  style="font-weight:bold;" value="7">7</option>
                                <option  style="font-weight:bold;" value="8">8</option>
                                <option  style="font-weight:bold;" value="9">>9</option>
                                <option  style="font-weight:bold;" value="10">10</option> 
                      </select>
                    </div>
                    
                  </div>
                </div>
                <div class="col-sm">
                  <div class="mb-2">
                    <label id="brDece-label" for="brDece-input" class="form-label"
                      >Broj dece</label>
                      <div class="input-group">
                  
                        <select name="num_kids" class="form-control">
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
                      <label for="nacinPlacanja">Izaberi način placanja</label>
                      <select name="payment" class="form-control">
                        <option  style="font-weight:bold;" value="gotovina">Gotovina</option>
                        <option  style="font-weight:bold;" value="kartica">Kartica</option>
                      </select> 
                    </div>
                  </div>
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
        </div>
            <div class="row">
              <div class="col">
                <button id="search-button" name="prosledi" class="w-100 btn btn-primary">
                  Prosledi rezervaciju
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
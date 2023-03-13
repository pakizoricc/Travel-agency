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
    style = "font-family:Arial, Helvetica, sans-serif; font-weight:bold;">
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
                <a class="nav-link active" aria-current="page" href="pocetna.php">Početna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pretraga.php">Pretraga</a>
              </li>
              <li class="nav-item dropdown">
                <li class="nav-item">
                  <a class="nav-link ms-auto" href="prijava.php">Uloguj se</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link ms-auto" href="registracija.php">Registracija</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link ms-auto" href="sources/logout.php">Odjavi se</a>
                </li>
                <li class="nav-item" style="margin-left: 500px;">
                  <a class="nav-link ms-auto">
                    <?php
                      session_start();
                      if (isset($_SESSION['username'])) {
                        echo "<p>Dobrodošli, " . $_SESSION['username'] . "!</p>";
                      }
                     ?>
                  </a>
                </li>
              </li>
          </div>
        </div>
      </nav>
      
      <div class="container " style="margin-top: 100px; margin-bottom: 800px; 
      font-family:Arial, Helvetica, sans-serif; font-weight:bold;">
        <div class="row">
          <div class="col text-center mb-5">
            <h1>Pregled svih putovanja</h1>
          </div>
        </div>
        
          <div class = "pagination">
            
              <?php
                  // include the pagination.php file
                  include 'sources/pag.php';
                  include 'sources/image_mapper.php';

                  $images = array();

                  foreach($arrs as $row){
                    array_push($images, getImageByDestination(trim($row['destination']))[0]);
                  }

                  // Five images per row
                  for ($i = 0; $i < count($images); $i++) {
                    if ($i % 5 == 0) {
                      echo '<div class="row">';
                    }
                    echo '<div class="col">';
                    echo '<a href = "putovanje.php?img=' . urlencode($images[$i]) . '"><img src="' . $images[$i] . '" alt="Image" width="150" height="150"></a>';
                    echo '</div>';
                    if (($i + 1) % 5 == 0 || $i == count($images) - 1) {
                      echo '</div>';
                    }
                  }

              ?>

            </div>

            <div class="pagination-controls" style="margin-top: 70px; margin-left: 530px;">
              <?php if ($current_page > 1): ?>
                <button class="btn1" style="display: inline-flex;
                  align-items: center;
                  font-size: 15px;
                  font-weight: 500;
                  color: #383838;
                  background: transparent;
                  outline: none;
                  border: none;
                  cursor: pointer;" onclick="location.href='?page=<?php echo $current_page - 1; ?>'">prev</button>
                <button class="btn1" style="display: inline-flex;
                  align-items: center;
                  font-size: 15px;
                  font-weight: 500;
                  color: #383838;
                  background: transparent;
                  outline: none;
                  border: none;
                  cursor: pointer;" onclick="location.href='?page=1'">1</button>
                <?php if ($current_page > 2): ?>
                  <span>...</span>
                <?php endif; ?>
              <?php endif; ?>
  
              <?php if ($current_page < $total_pages): ?>
                <?php if ($current_page < $total_pages - 1): ?>
                  <span>...</span>
                <?php endif; ?>
                <button class="btn1" style="display: inline-flex;
                  align-items: center;
                  font-size: 15px;
                  font-weight: 500;
                  color: #383838;
                  background: transparent;
                  outline: none;
                  border: none;
                  cursor: pointer;" onclick="location.href='?page=<?php echo $total_pages; ?>'"><?php echo $total_pages; ?></button>
                <button class="btn1" style="display: inline-flex;
                  align-items: center;
                  font-size: 15px;
                  font-weight: 500;
                  color: #383838;
                  background: transparent;
                  outline: none;
                  border: none;
                  cursor: pointer;" onclick="location.href='?page=<?php echo $current_page + 1; ?>'">next</button>
              <?php endif; ?>
            </div>

        </div>
      </div>
         
       
       </div>
      </div>
          
      <section class="footer" style="width: 100%; background-color: #1c2331; padding-top: 40px; bottom: 0; 
      text-align: center; text-decoration-color: #fff; font-family:Arial, Helvetica, sans-serif">
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
      
    <!--</footer>-->
    
  

<script>
  let link = document.getElementsByClassName("link");

  let currentValue = 1;

  function activeLink(){
    for(l in link){
      l.classList.remove("active");
    }
    event.target.classList.add("active");
    currentValue = event.target.value;
  }
  function backBtn(){
    if(currentValue > 1 ){
      l.classList.remove("active");
    }
    currentValue--;
    link[currentValue-1].classList.add("active");

  }
  function nextBtn(){
    if(currentValue < 7 ){
      l.classList.remove("active");
    }
    currentValue++;
    link[currentValue-1].classList.add("active");


  }
</script>
</body>
</html>

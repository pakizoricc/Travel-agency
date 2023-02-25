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
            <div class = "image-container">

            </div>
          </div>

          <div class="image-container" style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; ">
            <div class="pagination" style="display: flex; align-items: center; background-color: #fff; color: #383838; padding: 10px 40px;border-radius: 6px;">
              <button class="btn1" style="display: inline-flex;
              align-items: center;
              font-size: 15px;
              font-weight: 500;
              color: #383838;
              background: transparent;
              outline: none;
              border: none;
              cursor: pointer;" onclick="backBtn">prev</button>
              <?php
                /*five images per row, 25 images in one page*/
                $images = include 'sources\pagination.php';
                for($i = 0; $i < count($images); $i++){
                  if($i % 5 == 0){
                    echo '<div class = "row">';
                    echo '<div class = "image">';
                    echo '<img src="' . $images[$i] . '" alt="Image">';
                    echo '</div>';
                  }
                  if (($i + 1) % 5 == 0 || $i == count($images) - 1){
                    echo '</div>';
                  }
                }
              ?>
              <button class="btn2" style="display: inline-flex;
              align-items: center;
              font-size: 15px;
              font-weight: 500;
              color: #383838;
              background: transparent;
              outline: none;
              border: none;
              cursor: pointer;" onclick="nextBtn">next</button>
            </div>
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



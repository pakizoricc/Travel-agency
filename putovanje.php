<?php
// Retrieve the image URL from the query string
if (isset($_GET['img'])) {
    $img_url = urldecode($_GET['img']);
} else {
    // If the image URL is not specified, redirect back to the previous page
    header('Location: pocetna.php');
    exit;
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
      

      .body {
     color: #666666;
     font-size: 14px;
     font-family: 'Raleway', sans-serif;
     line-height: 1.80857;
     font-weight: normal;
          }

      img {
       max-width: 100%;
      height: auto;
        }
      .about {
          
     background: #fff;
     box-shadow: inset 0px 1px 87px -60px #6D6D6D;
     
      }

  .about .titlepage {
     text-align: right;
     padding: 0;
     max-width: 541px;
     width: 100%;
     float: left;
  }

  .about .titlepage h2 {
     margin-bottom: 20px;
     font-weight: bold;
  }

  .about .titlepage p {
     color: #030303;
     font-size: 17px;
     line-height: 28px;
     font-weight: 500;
     padding-bottom: 7px;
     font-weight: bold;
  }
  .about_img {
     max-width: 600px;
     width: 100%;
     float: right;
  }
  .about .titlepage .read_more:hover {
     color: #fff;
  }

  .about_img figure {
     margin: 0;
  }

  .about_img figure img {
     width: 100%;
  }
  .read_more:hover {
     background: #0808ff;
     color: #fff;
     transition: ease-in all 0.5s;
  }

  .blu {
     color: #0808ff;
  }
  .bla {
     color: #090807;
  }
  .red {
     color: #df0e0e;
  }

    .read_more {
     font-size: 17px;
     background-color: #090807;
     color: #fff !important;
     padding: 13px 0px;
     width: 100%;
     max-width: 190px;
     text-align: center;
     display: inline-block;
     transition: ease-in all 0.5s;
     border-radius: 30px;
     font-weight: 500;
  }

  .carousel-img {
  width: 100%;
  height: 350px; /* Change this value to set the height of the images */
  object-fit: cover;
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



    <div class="container-fluid gx-0"  >

      <div class="container-fluid gx-0" style="  margin-bottom: 100px; " >

    


        
          <div id="about" class="about" style="margin-top:10px;margin-bottom:100px;padding-top: 70px; padding-bottom: 70px;">
            <div class="container-fluid">
                <div class="row d_flex">
                  <div class="col-md-7">
                     <div class="about_img">
                        <figure><img src="<?php echo $img_url; ?>" alt="Image"></figure>
                     </div>
                  </div>
                    <div class="col-md-5">
                       <div class="titlepage">
                          <?php include 'sources/offerinfo.php' ?>
                          <p><?php echo 'Destinacija: ' . $destination; ?></p>
                          <p><?php echo 'Način prevoza: ' . $trans_type; ?></p>
                          <p><span class="blu" ><?php echo 'Broj dana: ' . $num_days; ?></span></p>
                          <p><span class="red" style="font-size: 25px;"><?php echo 'Cena: ' . $price_offer . ' evra'; ?></span></p>
                          <a class="read_more" style="text-decoration: none;" href="rezervisi.php">Rezerviši</a>
                       </div>
                    </div>
                </div>
            </div>
          </div>


             <div id="about"  class="about" style="padding-top: 70; padding-bottom: 70; box-shadow: none;">
              <div class="container-fluid">
                 <div class="row d_flex">
                    <div class="col-md-6">
                      <div class="titlepage">
                        <?php include 'sources/accomodation.php' ?>
                        <h2>Opis smeštaja </h2>
                        <p>Ime smeštajnog objekta</p>
                        <p><span class="bla" ><?php echo 'Ocena smeštaja: ' . $category; ?></span></p>
                        <p>Propratni detalji<span class="blu" ><?php echo ': ' . $internet_connection . ', ' . $room_refriginator; ?></span></p>
                      
                        <a class="read_more" style="text-decoration: none; width: fit-content; max-width: fit-content; padding: 15px; " aria-disabled="true">Napomena u vezi putovanja</a>
                      </div>
                       
                          
                       
                    </div>
                    <div class="col-md-6">
                       <div class="titlepage">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                          </div>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="apartments\330006535.jpg" class="d-block w-100 carousel-img">

                            </div>
                            <div class="carousel-item">
                              <img src="apartments\amberlair-crowdsourced-crowdfunded-boutique-hotel-ION-Hotel-room.jpg" 
                              class="d-block w-100 carousel-img">
                    
                            </div>
                            <div class="carousel-item active">
                              <img src="apartments\image3777.png" class="d-block w-100 carousel-img">
                              
                            </div>
                            <div class="carousel-item active">
                              <img src="apartments\Iris-Bazen-5.jpg" class="d-block w-100 carousel-img">
                              
                            </div>
                            <div class="carousel-item active">
                              <img src="apartments\amberlair-crowdsourced-crowdfunded-boutique-hotel-ION-Hotel-room.jpg" 
                              class="d-block w-100 carousel-img">
                              
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
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

        
        
    <section class="footer" style="width: 100%; background-color: #1c2331; font-weight: bold; font-family:Arial, Helvetica, sans-serif;
     margin-top: 150px; padding-top: 40px; bottom: 0; text-align: center; text-decoration-color: #fff; ">
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
  
  
  


</body>
</html>

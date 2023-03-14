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
  
    <?php include 'nav.php' ?>

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
                        <p><?php echo 'Ime smeštajnog objekta: ' . $name_accomodation; ?></p>
                        <p><?php echo 'Tip smeštaja u sobi: ' . $type_accomodation; ?></p>
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

        
        
    <?php include 'footer.php' ?>
      
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
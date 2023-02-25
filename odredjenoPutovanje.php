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
    style = "font-family: Arial, Helvetica, sans-serif;">
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
                <a class="nav-link active" aria-current="page" href="#">Pocetna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pretraga</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                <li class="nav-item">
                  <a class="nav-link ms-auto" href="#">Prijavi se</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link ms-auto" href="#">Registracija</a>
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

<div class="container" style="margin-bottom: 100px; font-family: Arial, Helvetica, sans-serif;" >
      <section class="vh-100 " data-bs-theme="light">
        <div class="container py-5 h-100" >
          <div class="row d-flex justify-content-center align-items-center h-100"  >
            <div class=" col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;  background-image: url(250px-Damavand_in_winter.jpg); ">

              </div>
            </div>
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem; ">
                <div class="card-body p-5 text-center">
      
                  <h3 class="mb-5">NAZIV ARANZMANA</h3>
      
                  <div class="form-outline mb-4">
                    
                    <label class="form-label">Lokacije:</label>
                  </div>
      
                  <div class="form-outline mb-4">
                    
                    <label class="form-label" >Cena aranzmana:</label>
                  </div>

                  <div class="form-outline mb-4">
                    
                    <label class="form-label" >Tip prevoza:</label>
                  </div>
      
                  <hr class="my-4">

                </div>
              </div>
            </div>
          </div>
        </div>
       
      </section>
      
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Opis smestaja</h5>
                <p class="card-text">Ime smestajnog objekta</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Tip smestaja:</li>
                  <li class="list-group-item">Kategorija smestaja:</li>
                  <li class="list-group-item">Sadrzi sledece:</li>
                </ul>
              </div>
            </div>
          </div>


        
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card">
        <div class="card-body">
          <h5 class="card-title">Detaljan program putovanja</h5>
          <hr class="my-4">
          <!--napisacu prvi dan i posle se sve isto ponavlja koliko dana ima-->
          <p class="card-text font-weight-bold">
            DAN BROJ :neki
          </p>
          <p>opis tog dana</p>
          <hr class="my-4">

        </div>
      </div>

      </div>
      
    </div>

<div class="row">
  <div class="col">
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title">Napomene:</h5>
      <p class="card-text">/napomene/</p>
      
     
    </div>
  </div>
</div>
</div>

    </div>



<!--

      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="margin-top: 100px; margin-bottom: 300px;">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" style="background-image:url( ./250px-Damavand_in_winter.jpg);">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
    
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Example headline.</h1>
                <p>Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="background-image:url(./250px-Damavand_in_winter.jpg);">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
    
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Some representative placeholder content for the second slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="background-image:url(./250px-Damavand_in_winter.jpg);">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
    
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>One more for good measure.</h1>
                <p>Some representative placeholder content for the third slide of this carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    -->
    




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
     
        
    
        
        <div
             class="text-center p-3"
             style="background-color: rgba(0, 0, 0, 0.2)"
             >
          <P style="color: #ccc;">© 2020 Copyright: FIN travel</P>
          
        </div>
      </section>

</body>
</html>
<?php session_start(); ?>
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

    
    <form action="sources/search_offers.php" method="post">
      <div class="container" style="padding-top: 150px; padding-bottom: 400px;">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card " style="margin-top: 100px; ">
              <h5 class="card-header">Na osnovu izabranih parametara</h5>
              <div class="card-body">
                <p class="card-text"><?php echo 'Naziv aranzmana - ' . $_SESSION['title']; ?></p>
                <hr class="hr hr-blurry" />
                <p class="card-text"><?php echo 'Lokacija - ' . $_SESSION['destination']; ?></p>
                <hr class="hr hr-blurry" />
                <p class="card-text"><?php echo 'Prevoz - ' . $_SESSION['trans_type']; ?></p>
                <hr class="hr hr-blurry" />
                <p class="card-text"><?php echo 'Od datuma - ' . $_SESSION['from_date']; ?></p>
                <hr class="hr hr-blurry" />
                <p class="card-text"><?php echo 'Do datuma - ' . $_SESSION['to_date']; ?></p>
                <hr class="hr hr-blurry" />
                <a href="pretraga.php" class="btn btn-primary">Izmeni parametre</a>
              </div>
            </div>
          </div>
          <div class="col-lg col-md-6 col-sm-12">
          <div class="col text-center mb-5">
            <h1>Rezultat pretrage</h1>
          </div>

        <div class="row">
          <?php
            include 'sources/image_mapper.php';
            $searches = $_SESSION['searches'];
            $images = array();

            foreach($searches as $row){
              if(isset($row['destination']) && isset($row[0])) {
                $dest = trim($row['destination']);
                array_push($images, getImageByDestination($dest)[0]);
              }
            }

            // Display the images
            foreach($images as $image){
              echo '<img src="' . $image . '" alt="Image" width="150" height="150">';
            }
          ?>
        </div>
      
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 col-mb-4">
            <div class="row">
              <div class="card-footer my-2 mx-2 " >
                  <a class="btn btn-block btn-danger  mx-2">Ukloni ponudu</a>
              </div>  
            </div> 
          </div>
        </div>
      </div>
    </form>
    
    <?php include 'footer.php' ?>
   


</body>
</html>
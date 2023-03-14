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
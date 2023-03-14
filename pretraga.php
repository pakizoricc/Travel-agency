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

        <form action = "sources/search_offers.php" method="post">
          <div class="container-sm" style="padding: 100px;margin-bottom: 500px; font-family: Arial, Helvetica, sans-serif;">
            <div class="my-2 card">
              <div class="card-body">
                <h5 class="card-title">Pretraga</h5>
                <div class="row">
                  <div class="col-sm">
                    <div class="mb-2">
                      <label id="naziv-label" for="naziv-input" class="form-label">Naziv aranžmana</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="naziv-input" name="title" placeholder="Naziv aranžmana" >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm">
                      <div class="mb-2">
                        <label id="lokacija-label" for="lokacija-input" class="form-label">Lokacija</label>
                        <div class="input-group">
                          <span class="input-group-text"><i class="bi-pin-map"></i> </span>
                          <input
                          type="text"
                          class="form-control"
                          list="lokacija-options"
                          id="lokacija-input"
                          placeholder="Lokacija"
                          name = "destination"
                          aria-describedby="lokacija-label"
                          />
                          <datalist id="lokacija-options"></datalist>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm">
                    <div class="mb-2">
                      <label for="role">Tip prevoza</label>
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi-pin-map"></i> </span>
                          <input
                          type="text"
                          class="form-control"
                          list="kontinent-options"
                          id="trans_type-input"
                          placeholder="tip prevoza"
                          name="trans_type"
                          aria-describedby="transport-label"
                          />
                          <datalist id="transport-options"></datalist>
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
                            <div id="departure-date" class="mb-2">
                              <label id="departure-date-label" for="departure-date-input" class="form-label">Od kog datuma</label>
                              <div class="input-group">
                                <span class="input-group-text"><i class="bi-calendar"></i></span>
                                <input
                                  type="date"
                                  class="form-control"
                                  id="departure-date-input"
                                  aria-describedby="departure-date-label"
                                  name="from_date"
                                />
                              </div>
                            </div>
                            <div id="return-date" class="mb-2">
                              <label id="return-date-label" for="return-date-input" class="form-label">Do kod datuma</label>
                              <div class="input-group">
                                <span class="input-group-text"><i class="bi-calendar-fill"></i> </span>
                                <input
                                  type="date"
                                  class="form-control"
                                  id="return-date-input"
                                  name="to_date"
                                  aria-describedby="return-date-label"
                                />
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <button id="search-button" class="w-100 btn btn-primary" type="submit" name="search">
                      Trazi
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
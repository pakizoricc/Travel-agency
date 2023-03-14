<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj korisnika</title>
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

      <div class="container-sm" style="padding: 100px;margin-bottom: 50px;">
        <form action="">
        <div class="my-2 card">
          <div class="card-body">
            <h5 class="card-title">Registruj korisnika</h5>
            <div class="row">
                <div class="col-sm">
                    <div class="mb-2">
                      <label id="korisnickoIme-label" for="korisnickoIme-input" class="form-label"
                        >Korisnicko ime</label>
                      <div class="input-group">

                        <input
                        type="text"
                        class="form-control"

                        id="korisnickoIme-input"
                        placeholder="korisnicko ime"
                        aria-describedby="korisnickoIme-label"/>

                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="mb-2">
                      <label id="lozinka-label" for="lozinka-input" class="form-label"
                        >Lozinka</label>
                      <div class="input-group">

                        <input
                        type="text"
                        class="form-control"

                        id="lozinka-input"
                        placeholder="Lozinka"
                        aria-describedby="lozinka-label"/>


                      </div>
                    </div>
                  </div>
            </div>
                  <div class="row">
                    <div class="col-sm">
                        <div class="mb-2">
                          <label id="email-label" for="email-input" class="form-label"
                            >Email</label>
                          <div class="input-group">

                            <input
                            type="text"
                            class="form-control"

                            id="email-input"
                            placeholder="email"
                            aria-describedby="email-label"/>

                          </div>
                        </div>
                      </div>
                      <div class="col-sm">
                        <div class="mb-2">
                          <label id="punoIme-label" for="punoIme-input" class="form-label"
                            >Ime i prezime</label>
                          <div class="input-group">

                            <input
                            type="text"
                            class="form-control"

                            id="punoIme-input"
                            placeholder="ime i prezime"
                            aria-describedby="punoIme-label"/>


                          </div>
                        </div>
                  </div>
                  </div>
                  <div class="row mb-2">
                        <div class="col">
                          <label   for="role">Tip korisnika</label>
                          <select name="role_id" class="form-control">
                              <?php foreach ($roles as $option): ?>
                                  <?php if ($option['id'] != 3): ?>
                                      <option  style="font-weight:bold;" value="<?php echo $option['id'] ?>"><?php echo $option['name']; ?></option>
                                  <?php endif ?>
                              <?php endforeach ?>
                          </select>

                        </div>

                  </div>
                  <div class="row">
                    <div class="col">
                      <button id="registracija-button" class="w-100 btn btn-primary">
                        Registruj korinsika
                      </button>
                    </div>
                  </div>
          </div>
        </div>

          </div>

</form>
      </div>
</div>


    <?php include 'footer.php' ?>

</body>
</html>
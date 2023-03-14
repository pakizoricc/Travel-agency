<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="Screenshot 2023-01-19 021232.png" alt="Bootstrap" width="70" height="35">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php
    if (isset($_SESSION['role'])) {
        if ($_SESSION['role'] == "admin") {
      ?>
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">Pocetna-admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dodajKorisnika.php">Dodaj korisnika</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Aranzmani
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.php">Svi aranzmani</a></li>
                    <li><a class="dropdown-item" href="pretraga.php">Pretraga aranzmana</a></li>
                </ul>
                <li class="nav-item">
                    <a class="nav-link ms-auto" href="registracija.php">Odjavi se</a>
                </li>
            <?php
        } elseif ($_SESSION['role'] == "staff") {
            ?>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Pocetna-staff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Svi aranzmani</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pretraga.php">Pretraga aranzmana</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-auto" href="registracija.php">Odjavi se</a>
                </li>
            <?php
        }
    } else {
            ?>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="pocetna.php">Početna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pretraga.php">Pretraga</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ms-auto" href="prijava.php">Prijavi se</a>
            </li>
        <?php
    }
?>

      </ul> 
    </div>
  </div>
</nav>

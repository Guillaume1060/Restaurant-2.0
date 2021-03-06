<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css" />
    <title>Da Rosy</title>
</head>
<body id="menu">
<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top">
  <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          <a class="navbar-brand fw-bold bg-danger text-center rounded p-3" href="index.php">DA ROSY</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav me-auto mb-4 mb-lg-0">
                <li class="nav-item bg-transparent">
                  <a class="nav-link" aria-current="page" href="menu.php">Menu</a>
                </li>
                <li class="nav-item bg-transparent">
                  <a class="nav-link" href="photos.php">Photos</a>
                </li>
                <li class="nav-item bg-transparent">
                  <a class="nav-link" href="adresses.php">Adresses</a>
                </li>
                <li class="nav-item bg-transparent">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item bg-transparent">
                    <a class="nav-link" href="guestBook.php">Guest Book</a>
                  </li>
                <li class="nav-imtem text-light fw-bold rounded">
                  <a class="nav-link" href="backOffice.php">Back Office</a>
                </li>
            </ul>
      
          </div>
  </div>
</nav>
<!-- fin Nav bar -->


  <header id="up" class="opacity-75">
  </header>
<main>

    <h1 class="text-center display-1">MENU</h1>
<!-- MENU -->
    <section class="container">

<div class="row mb-5 mt-5">
    <!-- PRIMO -->
    <ul class="list-group opacity-75">
        <li class="list-group-item active bg-danger border-0 display-6">PRIMO</li>
        <li class="list-group-item fs-3 d-flex justify-content-between align-items-center">Fregola con frutti di mare e zafferano.
            <span class="badge bg-secondary badge-pill">12 Euros</span>
        </li>
        <li class="list-group-item fs-3 d-flex justify-content-between align-items-center">Spaghetti ai ricci di mare
            <span class="badge bg-secondary">Gratuit jusqu'?? la caisse</span>
        </li>
        <li class="list-group-item fs-3 d-flex justify-content-between align-items-center">Insalata di polpo
            <span class="badge bg-secondary">8 Euros</span>
        </li>
    </ul>
</div>
<div class="row mb-5">
   <!-- SECONDO -->
   <ul class="list-group opacity-75">
    <li class="list-group-item active bg-light text-dark border-1 border-dark display-6">SECONDO</li>
    <li class="list-group-item fs-3 d-flex justify-content-between align-items-center">Agnello sardo con carciofi
        <span class="badge bg-secondary">13 Euros</span>
    </li>
    <li class="list-group-item fs-3 d-flex justify-content-between align-items-center">Porcetto arrosto o ???porcheddu???
        <span class="badge bg-secondary">16 Euros</span>
    </li>
    <li class="list-group-item fs-3 d-flex justify-content-between align-items-center">Aragosta alla Bosana
        <span class="badge bg-secondary">22 Euros</span>
    </li>
</ul>
</div>
<div class="row mb-5">
   <!-- DOLCE -->
   <ul class="list-group opacity-75">
    <li class="list-group-item active bg-success border-0 display-6">DOLCE</li>
    <li class="list-group-item fs-3 d-flex justify-content-between align-items-center">Sebadas
        <span class="badge bg-secondary">6 Euros</span>
    </li>
    <li class="list-group-item fs-3 d-flex justify-content-between align-items-center">Casadinas
        <span class="badge bg-secondary">3 Euros</span>
    </li>
    <li class="list-group-item fs-3 d-flex justify-content-between align-items-center">Tiramisu
        <span class="badge bg-secondary">6 Euros</span>
    </li>
</ul>
</div>
<div class="row">
     <!-- DOLCE -->
   <ul class="list-group opacity-75">
    <li class="list-group-item active bg-secondary border-0 display-6">BEVANDA</li>
    <li class="list-group-item fs-3 d-flex justify-content-between align-items-center">Jupiler
        <span class="badge bg-secondary">1 Euro</span>
    </li>
    <li class="list-group-item fs-3 d-flex justify-content-between align-items-center">Eau (20Cl)
        <span class="badge bg-secondary">4 Euros</span>
    </li>
    <li class="list-group-item fs-3 d-flex justify-content-between align-items-center">Vino Rosso Sardo (50Cl)
        <span class="badge bg-secondary">9 Euros</span>
    </li>
</ul>
</div>

 



</section>
</main>
<footer class="bg-light opacity-75 text-center fixed-bottom">
  <a href="#up"><span class="bi bi-chevron-up text-dark"></span></a>
  <h6 class="text-dark">?? 2022 Copyright - Breyer</h6>
</footer>

</body>

</html>
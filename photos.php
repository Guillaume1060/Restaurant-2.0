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
<body id="photos">
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


  <header id="up">
  </header>
<main>

    <section class="container">

        <div class="row">
            <div class="col-lg-8">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="photos/2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="photos/1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="photos/3.jpg" class="d-block w-100" alt="...">
                  </div>
                  <!-- /// on va cr??er une div ici pour almimenter le carousel // faut il modifier la page en PHP ou r??cup??rer une variable-->
<?php
                  if(isset($error) && $error ==0)
                  {
                    echo'<div class="carousel-item">';
                    echo'img src="'.$adress.'" class="d-block w-100" />';
                    echo '</div>';
                  }
?>
                </div>
              </div>
            </div>
            <div class="col">
                <q class="fs-3 mt-5 text-center d-block w-75 mx-auto">L'homme ne pourra jamais cesser de r??ver. Le r??ve est la nourriture de l'??me comme les aliments sont la nourriture du corps.</q>
    <p class="text-center">Paulo Coelho</p>

            </div>
        </div>
    
    </section>

    


<div class="container">
<div class="row mt-5">
    <div class="col-lg-4 g-3">
        <img src="photos/fourchette.jpg" class="img-fluid img-thumbnail" alt="fourchette">
    </div>
    <div class="col-lg-4 g-3">
        <img src="photos/Cagliari.jpg" class="img-fluid img-thumbnail" alt="cagliari">
    </div>
    <div class="col-lg-4 g-3">
        <img src="photos/mer.jpg" class="img-fluid img-thumbnail" alt="mer">
    </div>
</div>

<div class="row">
    <div class="col-lg-4 g-3">
        <img src="photos/tchin.jpg" class="img-fluid img-thumbnail" alt="table_apero">
    </div>
    <div class="col-lg-4 g-3">
        <img src="photos/PlateauCheese.jpg" class="img-fluid border border-dark img-thumbnail" alt="fromages">
    </div>
    <div class="col-lg-4 g-3">
        <img src="photos/citron.jpg" class="img-fluid img-thumbnail" alt="citrons">
    </div>
</div>
</div>

</main>
<footer class="bg-light opacity-75 text-center fixed-bottom">
  <a href="#up"><span class="bi bi-chevron-up text-dark"></span></a>
  <h6 class="text-dark">?? 2022 Copyright - Breyer</h6>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
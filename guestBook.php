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
<body id="contact">
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
            </ul>
      
          </div>
  </div>
</nav>
<!-- fin Nav bar -->


  <header id="up" class="opacity-75">
  </header>
<main>
    
    
<h1 class="text-light text-center">GUEST BOOK</h1>
    <section class="container">
    <form method="post" action="backOfficeGuestBook.php">

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Customer name</span>
            <input type="text" name="guestname" class="form-control" placeholder="firstname & lastname" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <label for="basic-url" class="form-label text-light">Quel restaurant ?</label>
          <div class="input-group">
          <select name="restaurant" class="form-select mb-3" aria-label="Default select example">
            <option selected value="Da Rosy">Da Rosy - Brussels</option>
            <option value="La Marinella">La Marinella - Cagliari</option>
          </select>
          <div class="input-group mb-3">
          <label for="basic-url" class="form-label text-light">Quelle date ?</label>
          <input class="" name="date" type="date" value="2022-08-01" min="2019-01-01" max="2030-12-31">
          </div>
          <div class="input-group">
            <span class="input-group-text">Commentaires</span>
            <textarea name="comments" class="form-control" style="height:200px" aria-label="With textarea"></textarea>
          </div>  
          </div>
          <button class="mt-3" type="submit">Envoyer</button>
    </form> 
    </section>


    <section class="mt-4">
    <h1 class="text-light text-center">ILS SONT PASSE(E)S CHEZ NOUS</h1>
<!-- DISPLAY AN ARRAY -->
    <table id="background_table">
        <tr>
            <th class="" style="width: 40px">Guest name</th>
            <th class="" style="width: 40px">Restaurant</th>
            <th style="width: 40px">Date</th>
            <th style="width: 300px">Comments</th>
        </tr>

<!-- Loop for each columns -->
<?php
include "connexion_dataBase.php";
$requete = $bdd->query('SELECT * FROM guestBook');

while ($donnees = $requete->fetch()){
  echo '  <tr>
                  <td>'.$donnees['guestname'].'</td>
                  <td>'.$donnees['restaurant'].'</td>
                  <td>'.$donnees['date'].'</td>
                  <td>'.$donnees['comments'].'</td>
          </tr>';
  }

?>
    </table>





    </section>

</main>
<footer class="bg-light opacity-75 text-center fixed-bottom">
  <a href="#up"><span class="bi bi-chevron-up text-dark"></span></a>
  <h6 class="text-dark">© 2022 Copyright - Breyer</h6>
</footer>

</body>

</html>
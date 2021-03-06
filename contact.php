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
    
    

    <section class="container">
    <form method="post" action="backOffice.php">

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Pr??nom</span>
            <input type="text" name="firstname" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          
          <div class="input-group mb-3">
            <input type="text" name="lastname" class="form-control" placeholder="family name" aria-label="Family name" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2">Nom</span>
          </div>
          
          <label for="basic-url" class="form-label text-light">Your Email Adress</label>
          <div class="input mb-5">
            <input type="text" name="email" class="form-control" id="basic-url">
          </div>
          <label for="basic-url" class="form-label text-light">Quel sujet ?</label>
          <div class="input-group">
          <select name="choix" class="form-select mb-3" aria-label="Default select example">
            <option selected value="r??servation">Vite vite r??server</option>
            <option value="Demande d'embauche">Je veux bosser chez vous!</option>
            <option value="f??licitations">Bravo au chef !</option>
            <option value="r??clamations">J'ai mal au ventre !</option>
          </select>
          
          <div class="input-group">
            <span class="input-group-text">Commentaires</span>
            <textarea name="comments" class="form-control" style="height:200px" aria-label="With textarea"></textarea>
          </div>  
          </div>
          <button type="submit">Envoyer</button>
    </form> 
   
    </section>

</main>
<footer class="bg-light opacity-75 text-center fixed-bottom">
  <a href="#up"><span class="bi bi-chevron-up text-dark"></span></a>
  <h6 class="text-dark">?? 2022 Copyright - Breyer</h6>
</footer>

</body>

</html>
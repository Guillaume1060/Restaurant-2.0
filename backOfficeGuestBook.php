<?php
///CONNEXION TO THE DATABASE
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "restaurant";

	$bdd = new PDO("mysql:host=$dbhost;dbname=$db",$dbuser,$dbpass);
	
    try {
        $bdd;
    } catch (Exception $e) {
        die('erreur: '.$e->getMessage());
        echo 'coucou';
    }

/// CATCH DATAS FROM DATABASE
$requete = $bdd->query('SELECT * FROM guestBook');


/// UPDATE THE DATABASE WHEN A NEW MESSAGE IS SENT
if (!empty($_POST['guestname']) && !empty($_POST['restaurant']) && !empty($_POST['date'])){
    
    $guestname                  = $_POST['guestname'];
    $restaurant                   = $_POST['restaurant'];
    $dateVenu                      = $_POST['date'];
    $comments                   = $_POST['comments'];


    /// si la condition est remplie (champ OK) on créé la requete, qu'on execute ensuite
    $ajoutViaFormulaire = $bdd->prepare('INSERT INTO guestBook(guestname, restaurant, date, comments) 
                            VALUES(?, ?, ?, ?)') 
                            or die(print_r($bdd->errorInfo()));

    $ajoutViaFormulaire->execute(array($guestname, $restaurant, $dateVenu, $comments));

    // ///  Permet de ne pas multiplier les ajouts (rafraichir la page)
    header('location: ../Restaurant-2.0/guestBook.php');

}


////creation de la fonction supprimer

// {
//     $requete_supprimer = $bdd->exec('DELETE FROM clients WHERE username ="arnaud"');
// }

    



?>
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
    <title>Da Rosy - Back Office</title>
</head>

  <header>
  </header>

<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top">
  <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav me-auto mb-4 mb-lg-0">
                <li class="nav-item bg-transparent">
                  <a class="nav-link" aria-current="page" href="backOffice.php">Messages</a>
                </li>
                <li class="nav-item bg-transparent">
                  <a class="nav-link" href="backOfficePictures.php">Photos</a>
                </li>
                <li class="nav-item bg-transparent">
                  <a class="nav-link text-danger" href="backOfficeGuestBook.php">Guestbook</a>
                </li>
                <li class="nav-imtem text-light fw-bold rounded">
                  <a class="nav-link" href="index.php">Site Client</a>
                </li>
            </ul>
      
          </div>
  </div>
</nav>
<!-- fin Nav bar -->



<main>



<h1 class="text-light text-center">BACK OFFICE MANAGEMENT</h1>
<h3> GUEST BOOK</h3>
<!-- DISPLAY AN ARRAY -->
    <table id="background_table">
        <tr>
            <th>Id</th>
            <th>Guest Name</th>
            <th>Restaurant</th>
            <th>Date</th>
            <th>Comments</th>
            <th>Delete</th>
        </tr>

<!-- Loop for each columns -->
<?php
while ($donnees = $requete->fetch()){
echo '  <tr>
                <td>'.$donnees['id'].'</td>
                <td>'.$donnees['guestname'].'</td>
                <td>'.$donnees['restaurant'].'</td>
                <td>'.$donnees['date'].'</td>
                <td>'.$donnees['comments'].'</td>'
                ?>
                <td><a href="deleteGuestBook.php?id=<?php echo $donnees['id']; ?>" style="text-decoration:none">Delete</a></td>
        </tr>;
<?php
}

?>
    </table>

</main>
<footer class="bg-light opacity-75 text-center fixed-bottom">
  <a href="#up"><span class="bi bi-chevron-up text-dark"></span></a>
  <h6 class="text-dark">© 2022 Copyright - Breyer</h6>
</footer>



</html>

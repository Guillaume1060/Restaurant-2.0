<?php
// ///CONNEXION TO THE DATABASE
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "restaurant";

	$bdd = new PDO("mysql:host=$dbhost;dbname=$db",$dbuser,$dbpass);
	
    try {
        $bdd;
    } catch (Exception $e) {
        die('erreur: '.$e->getMessage());
    }

/// CATCH DATAS FROM DATABASE
$requete = $bdd->query('SELECT * FROM clients');


/// UPDATE NEW PICTURES
if (isset($_FILES['image']) && !empty($_FILES['image']['error']==0)){

    $image = $_FILES['image'];
    $error = 1;
    echo exec('whoami'); 
    echo '<br/>';



    ///check taille
    if ($image['size']<= 3000000)
    {
        // check Extension
        $informationsImage = pathinfo($image['name']);
        $extensionImage = $informationsImage['extension'];
        $extensionsArray = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($extensionImage,$extensionsArray))
        {
            echo $image['tmp_name'];
            $adress = 'img/'.time().rand();
            move_uploaded_file($image['tmp_name'], $adress);
            $error = 0;
        }
    }

    /// si la condition est remplie (champ OK) on créé la requete, qu'on execute ensuite
    // $ajoutViaFormulaire = $bdd->prepare('INSERT INTO clients(firstname, lastname, email, choix, comments) 
    //                         VALUES(?, ?, ?, ?, ?)') 
    //                         or die(print_r($bdd->errorInfo()));

    // $ajoutViaFormulaire->execute(array($firstName, $lastName, $email, $type, $comments));

    ///  Permet de ne pas multiplier les ajouts (rafraichir la page)
    // header('location: ../localhost/Restaurant-2.0/backOffice.php');

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
<main>

<h1 class="text-light text-center">BACK OFFICE MANAGEMENT</h1>
<!-- DISPLAY UPLOADER -->
<div id="CONTENER" class="text-light text-center m-5">
    <article class="">
        <h2 class="text-light">Ajoutez une image</h2>
<form method="post" action="backOfficePictures.php" enctype="multipart/form-data">
    <p>
        <input type="file" name="image" required/>
        <button type="submit">Upload</button>
    </p>

    
<!-- DISPLAY AN ARRAY -->
    <table id="background_table">
        <tr>
            <th>Date</th>
            <th>Name</th>
            <th>Delete</th>
        </tr>

<!-- Loop for each columns -->
<?php
while ($donnees = $requete->fetch()){
echo '  <tr>
                <td>'.$donnees['date'].'</td>
                <td>'.$donnees['firstname'].'</td>
                <td>Click to delete</td>
        </tr>';
}

?>
    </table>






</form>




    </article>
</div>    


</main>
<footer class="bg-light opacity-75 text-center fixed-bottom">
  <a href="#up"><span class="bi bi-chevron-up text-dark"></span></a>
  <h6 class="text-dark">© 2022 Copyright - Breyer</h6>
</footer>



</html>







<?php
include "connexion_dataBase.php";

if (isset($_GET['id']) AND !empty($_GET['id']))
{
    $getid = $_GET['id'];
    $recupLine = $bdd->prepare('SELECT * FROM images WHERE id= ?');
    $recupLine->execute(array($getid));

    if($recupLine->rowCount()>0){
        $suppressionLigne = $bdd->prepare('DELETE FROM images WHERE id = ?');
        $suppressionLigne->execute(array($getid));
        header('location: backOfficePictures.php');
    }
    else{echo 'aucun membre trouvé';}
}
else{ echo "identifiant non récupéré";}

?>
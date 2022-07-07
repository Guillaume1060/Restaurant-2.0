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
    }
?>
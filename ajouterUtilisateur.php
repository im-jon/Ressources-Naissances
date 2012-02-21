<?php
	$nom = $_REQUEST['nom'];
	$prenom = $_REQUEST['prenom'];
	$courriel = $_REQUEST['courriel'];
	// Valider les champs

	include('mysql.php');
	
	requete = "INSERT INTO utilisateur VALUES('$nom', '$prenom', '$courriel')";
	mysql_query($requete) or die(mysql_error());

	mysql_close();	
	
	// pogne le courriel de la secrétaire dans la BD
	$destination = "jodeath@gmail.com";
	// Génère le contenu du courriel
	$sujet = "Nouvelle inscription sur Ressources-Naissances";
	$message = "lol";

	// Si l'inscription marche, envoyer un courriel
	mail($destination, $sujet, $message);
?>

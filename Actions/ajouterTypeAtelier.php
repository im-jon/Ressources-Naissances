<?php
	include("mysql.php");
	
	// On échappe les textes qui peuvent contenir des caractères dangeureux!
	$nom = mysql_real_escape_string($_REQUEST['nom']);
	$prix = $_REQUEST['prix'];
	$rencontres = $_REQUEST['qte-rencontres'];
	$maxPersonnes= $_REQUEST['max-personnes'];
	$description = mysql_real_escape_string($_REQUEST['description']);
	$couleur = mysql_real_escape_string($_REQUEST['couleur']);

	$requete = "INSERT INTO type_atelier (nom, description, prix, qte_rencontres, max_personnes, couleur)
		    VALUES('$nom', '$description', $prix, $rencontres, $maxPersonnes, '$couleur')";

	mysql_query($requete) or die(mysql_error());
	
	$id = mysql_insert_id();
	header("Location: ../ajouterTypeAtelier.php");
	//header("Location: ../consulterTypeAtelier.php?id=$id");
?>

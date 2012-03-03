<?php
session_start();
include('fonctions.php');

// On doit être connecté pour pouvoir s'inscrire à un atelier.
if (!estConnecte()) {
	die();
}

$idCompte = $_SESSION['id_compte'];
$presence = $_REQUEST['presence'];
$idAtelier = $_REQUEST['id_atelier'];

include("mysql.php");

$requete = "SELECT date_debut
	    FROM atelier
	    WHERE id = $idAtelier";

$resultats = mysql_query($requete) or die(mysql_error());
$val = mysql_fetch_array($resultats);
$dateDebut = strtotime($val['date_debut']);

if ($dateDebut < time()) {
	echo "Atelier dejà débutée.";
}
else {
	$requete = "SELECT id_mere, id_pere, id_personne_liee
		    FROM compte
		    WHERE id = $idCompte";

	$resultats = mysql_query($requete) or die(mysql_error());
	$val = mysql_fetch_array($resultats);

	switch($presence) {
		case 0: // Seulement la mère participera
			InscrirePersonne($val['id_mere'], $idAtelier);
			break;
		case 1: // Seulement le père participera
			InscrirePersonne($val['id_pere'], $idAtelier);
			break;
		case 2: // Le père et la mère participeront
			InscrirePersonne($val['id_mere'], $idAtelier);
			InscrirePersonne($val['id_pere'], $idAtelier);
			break;
	}

	header('Location: ../consulterAtelier?id=' . $idAtelier);
}
// Fonction pour inscrire une personne à un cours dans la base de données
function InscrirePersonne($id, $idAtelier) {
	$requete = "INSERT INTO personne_atelier
		    (id_personne, id_atelier, date_inscription)
		    VALUES($id, $idAtelier, NOW())";

	mysql_query($requete) or die(mysql_error());
}
?>

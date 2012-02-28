<?php

include('fonctions.php');

// On doit être connecté pour pouvoir s'inscrire à un atelier.
if (!estConnecte()) {
	die();
}

//$idCompte = $_REQUEST['id_compte'];
$idCompte = $_SESSION['id_compte'];
$presence = $_REQUEST['presence'];
$idAtelier = $_REQUEST['id_atelier'];

include("mysql.php");

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

// Fonction pour inscrire une personne à un cours dans la base de données
function InscrirePersonne($id, $idAtelier) {
	$date = date('r');
	$requete = "INSERT INTO personne_atelier
		    VALUES($id, $idAtelier, NOW())";

	mysql_query($requete) or die(mysql_error());
}

?>

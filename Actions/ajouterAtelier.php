<?php
session_start();
include('fonctions.php');

// On doit être administrateur
if (!estAutorise(2)) {
	die();
}

$idTypeAtelier = $_REQUEST['id_type'];
$dateDebut = date('c', strtotime($_REQUEST['date_debut']));
$dateFin = date('c', strtotime($_REQUEST['date_fin']));
$animatrice = isset($_REQUEST['animatrice']) ? $_REQUEST['animatrice'] : '';

include("mysql.php");

$requete = "INSERT INTO atelier (id_type_atelier, date_debut, date_fin, nom_animatrice)
	    VALUES($idTypeAtelier, '$dateDebut', '$dateFin', '$animatrice')";

mysql_query($requete) or die(mysql_error());

echo mysql_insert_id();
?>

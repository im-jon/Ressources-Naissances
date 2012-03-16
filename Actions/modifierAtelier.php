<?php
session_start();
include('fonctions.php');

// On doit être administrateur
if (!estAutorise(2)) {
	die();
}

$animatrice = $_REQUEST['animatrice'];
$idAtelier = $_REQUEST['id'];

include("mysql.php");

$requete = "UPDATE atelier
	    SET nom_animatrice = '$animatrice'
	    WHERE id = $idAtelier";
	   
mysql_query($requete) or die(mysql_error());

?>

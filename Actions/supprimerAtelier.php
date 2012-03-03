<?php
session_start();
include('fonctions.php');

// On doit être administrateur
if (!estAutorise(2)) {
	die();
}

$idAtelier = $_REQUEST['id'];

include("mysql.php");


$requete = "DELETE FROM atelier WHERE id = $idAtelier";

mysql_query($requete) or die(mysql_error());
?>

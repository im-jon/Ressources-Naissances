<?php
session_start();
include('fonctions.php');

// On doit être administrateur
if (!estAutorise(2)) {
	die();
}

$idAtelier = $_REQUEST['id'];
$joursDelta = $_REQUEST['joursDelta'];
$minutesDelta = $_REQUEST['minutesDelta'];

include("mysql.php");

$intervalle = ($joursDelta * 24 * 60) + $minutesDelta;

$requete = "UPDATE atelier
	    SET date_fin = DATE_ADD(date_fin, INTERVAL $intervalle MINUTE)
	    WHERE id = $idAtelier";

mysql_query($requete) or die(mysql_error());

?>

<?php 
session_start();
include('Actions/fonctions.php');

if (!estAutorise(2)) {
	die();
}

?>

<?php include("header.php"); ?>

<h2>Panneau d'administration</h2>
<ul>
	<li><a href="adminCalendrier.php">Modifier l'horaire des ateliers</a></li>
	<li><a href="ajout_publications.php">Ajout des publications (gazette des poussettes par exemple)</a></li>
	<li><a href="formEditor.php">Modification des pages</a></li>
</ul>

<?php include("footer.php"); ?>

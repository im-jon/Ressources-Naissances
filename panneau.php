<?php 
session_start();
include('Actions/fonctions.php');

if (!estAutorise(2)) {
	die();
}

?>

<?php include("header.php"); ?>

<h1>Panneau d'administration</h1>
<ul>
<<<<<<< HEAD
<<<<<<< HEAD
	<li class="titreTexte"><a href="ajouterNouvelle.php">Ajouter une nouvelle</a></li>
	<li class="titreTexte"><a href="adminCalendrier.php">Modifier l'horaire des ateliers</a></li>
	<li class="titreTexte"><a href="ajouterTypeAtelier.php">Ajouter un type d'atelier</a></li>
	<li class="titreTexte"><a href="ajout_publications.php">Ajout des publications (gazette des poussettes par exemple)</a></li>
	<li class="titreTexte"><a href="formEditor.php">Modification des pages</a></li>
	<li class="titreTexte"><a href="ajout_article.php">Ajouter un article</a></li>
	<li class="titreTexte"><a href="#">Services</a></li>


=======
	<li class="lienPanneau"><a href="ajouterNouvelle.php">Ajouter une nouvelle</a></li>
	<li class="lienPanneau"><a href="adminCalendrier.php">Modifier l'horaire des ateliers</a></li>
	<li class="lienPanneau"><a href="ajouterTypeAtelier.php">Ajouter un type d'atelier</a></li>
	<li class="lienPanneau"><a href="ajout_publications.php">Ajout des publications (gazette des poussettes par exemple)</a></li>
	<li class="lienPanneau"><a href="formEditor.php">Modification des pages</a></li>
	<li class="lienPanneau"><a href="ajout_article.php">Ajouter un article</a></li>
>>>>>>> 8ce192dcd8440084de10661d1dd785fbcb9a9d43
</ul>

<?php include("footer.php"); ?>

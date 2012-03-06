<?php
include("Actions/mysql.php");
$id = $_REQUEST['id'];
$requete = "SELECT titre, date_creation, contenu FROM nouvelle WHERE id = $id";
$resultat = mysql_query($requete);
$article = mysql_fetch_array($resultat);
?>

<?php include("header.php"); ?>

<a href="archivesNouvelles.php">Retour à l'archive</a>

<nouvelle>
	<h2><?= $article["titre"] ?></h2>
	<p>publié le <?= $article["date_creation"] ?><p>
	<div class="desc"><tgauche><?= $article["contenu"] ?></tgauche></div>
</nouvelle>

<a href="archivesNouvelles.php">Retour à l'archive</a>

<?php 
include("footer.php");
mysql_close();
?>



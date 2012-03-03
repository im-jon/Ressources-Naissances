<?php
session_start();
include('Actions/fonctions.php');

if (estConnecte()) {
	header('Location: index.php');
	die();
}
?>

<?php include("header.php"); ?>

<form method="POST" action="Actions/connexion.php">
	<label for="courriel">Courriel</label>
	<input type="text" name="courriel" id="courriel"></input>
	<label for="motdepasse">Mot de passe</label>
	<input type="password" name="motdepasse" id="motdepasse"></input>
	<input type="submit"></input>
</form>

<?php include("footer.php"); ?>

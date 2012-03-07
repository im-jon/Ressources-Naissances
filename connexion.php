<?php
session_start();
include('Actions/fonctions.php');

if (estConnecte()) {
	header('Location: index.php');
}
?>

<?php include("header.php"); ?>

<form method="POST" action="Actions/connexion.php">
	<input type="hidden" name="ReturnUrl" value="<?= $_REQUEST['ReturnUrl'] ?>"></input>
	<label for="courriel">Courriel</label><br/>
	<input type="text" name="courriel" id="courriel"></input><br/>
	<label for="motdepasse">Mot de passe</label><br/>
	<input type="password" name="motdepasse" id="motdepasse"></input><br/>
	<input type="submit"></input>
</form>

<?php include("footer.php"); ?>

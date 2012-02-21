<?php
	if(isset($_POST['submit'])) {
		$nom = $_REQUEST['nom'];
		$prenom = $_REQUEST['prenom'];
		$courriel = $_REQUEST['courriel'];

		// Valider les champs

		include('mysql.php');
	
		$requete = "INSERT INTO utilisateur VALUES('$nom', '$prenom', '$courriel')";
		mysql_query($requete) or die(mysql_error());

		mysql_close();	
	
		// pogne le courriel de la secrétaire dans la BD
		$destination = "pouliot.jonathan@gmail.com";
		// Génère le contenu du courriel
		$sujet = "Nouvelle inscription sur Ressources-Naissances";
		$message = "lol";

		// Si l'inscription marche, envoyer un courriel
		mail($destination, $sujet, $message);
	}
?>

<?php include("header.php"); ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<label for="nom">Nom</label>
	<input type="text" name="nom"></input>
	<label for="prenom">Prénom</label>
	<input type="text" name="prenom"></input>
	<label for="courriel">Courriel</label>
	<input type="text" name="courriel"></input>
	<input type="submit" name="submit"></input>
</form>

<?php include("footer.php"); ?>

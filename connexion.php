<?php
session_start();
include('Actions/fonctions.php');

if (estConnecte()) {
	header('Location: index.php');
}

if (isset($_POST['submit'])) {
	$courriel = $_REQUEST['courriel'];
	$motdepasse = $_REQUEST['motdepasse'];

	include('Actions/mysql.php');

	// Hasher le mdp

	$requete = "SELECT compte.id, compte.id_role FROM compte
			INNER JOIN personne
			ON compte.id_personne_liee = personne.id
			WHERE personne.courriel = '$courriel' AND compte.mot_de_passe = '$motdepasse'";

	$resultats = mysql_query($requete) or die(mysql_error());
	// Si succès
	if (mysql_num_rows($resultats) > 0) {
		$val = mysql_fetch_array($resultats);
		session_start();
		session_regenerate_id ();
		$_SESSION['valid'] = 1;
		$_SESSION['id_compte'] = $val['id'];
		$_SESSION['role'] = $val['id_role'];
	
		// Si le compte est administrateur...
		if ($val['id_role'] >= 2) {
			// On donne accès à KCFinder, l'outil pour uploader/explorer des fichiers.
			$_SESSION['KCFINDER']['disabled'] = false;
		}

		if (isset($_REQUEST['ReturnUrl'])) {
			header('Location: ' . $_REQUEST['ReturnUrl']);
		} else {
			header('Location: index.php');
		}
	}
	else {
		$erreur = "Mot de passe ou courriel invalide";
	}
}

?>

<?php include("header.php"); ?>

<h1>Connexion</h1>

<?php if (isset($erreur)) { ?>
	<ul>
		<li><span class="erreur"><?= $erreur ?></span></li>
	</ul>
<?php } ?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="hidden" name="ReturnUrl" value="<?= $_REQUEST['ReturnUrl'] ?>"></input>
	<label for="courriel">Courriel :</label><br/>
	<input type="text" name="courriel" id="courriel"></input><br/>
	<label for="motdepasse">Mot de passe :</label><br/>
	<input type="password" name="motdepasse" id="motdepasse"></input><br/>
	<input type="submit" name="submit" value="Connecter"></input>
</form>

<?php include("footer.php"); ?>

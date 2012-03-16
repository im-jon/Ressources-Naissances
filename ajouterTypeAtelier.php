<?php
	session_start();
	include('Actions/fonctions.php');

	if (!estAutorise(2)) {
		die();
	}

	if (isset($_REQUEST['submit'])) {
		include("Actions/mysql.php");
	
		// On échappe les textes qui peuvent contenir des caractères dangeureux!
		$nom = mysql_real_escape_string($_REQUEST['nom']);
		$prix = $_REQUEST['prix'];
		$rencontres = $_REQUEST['qte-rencontres'];
		$maxPersonnes = $_REQUEST['max-personnes'];
		$description = mysql_real_escape_string($_REQUEST['description']);
		$couleur = mysql_real_escape_string($_REQUEST['couleur']);

		$estValide = true;

		if (empty($nom)) {
			$estValide = false;
			$erreur = "Le nom est obligatoire";
		}

		if (!is_numeric($prix)) {
			$estValide = false;
			$erreur = "Le prix n'est pas un nombre";
		}
		else if ($prix < 0) {
			$estValide = false;
			$erreur = "Le prix doit être positif";
		}

		if (!is_numeric($rencontres)) {
			$estValide = false;
			$erreur = "Le nombre de rencontres n'est pas un nombre";
		}
		else if ($rencontres < 0) {
			$estValide = false;
			$erreur = "Le nombre de rencontres doit être positif";
		}

		if (!empty($maxPersonnes)) {
			if (!is_numeric($maxPersonnes)) {
				$estValide = false;
				$erreur = "Le nombre maximal de personnes n'est pas un nombre";
			}
			else if ($maxPersonnes < 0) {
				$estValide = false;
				$erreur = "Le nombre maximal de personnes doit être positif";
			}
		}
		else {
			$maxPersonnes = 0;
		}

		if ($estValide) {
			$requete = "INSERT INTO type_atelier (nom, description, prix, qte_rencontres, max_personnes, couleur)
				    VALUES('$nom', '$description', $prix, $rencontres, $maxPersonnes, '$couleur')";

			mysql_query($requete) or die(mysql_error());
	
			$id = mysql_insert_id();

			header("Location: consulterTypeAtelier.php?id=$id");
		}
	}

	include("ckeditor/ckeditor.php");
	$CKEditor = new CKEditor();
?>

<?php include("header.php"); ?>

<link rel="stylesheet" media="screen" type="text/css" href="css/colorpicker.css" />
<script type="text/javascript" src="js/colorpicker.js"></script>
<script>
	$(function() {
	 	$('#preview-couleur').ColorPicker({
			color: "#<?= isset($_REQUEST['couleur']) ? $_REQUEST['couleur'] : '3366CC' ?>",
			onChange: function (hsb, hex, rgb) {
				$('#preview-couleur').css('backgroundColor', '#' + hex);
				$('#couleur').val(hex);
			}
		});
	});
</script>

<h1>Ajout d'un type d'atelier</h1>

<?php if (isset($erreur)) {
	echo $erreur;
} ?>

<form method="GET" action="<?= $_SERVER['PHP_SELF']; ?>">
	<label for="nom">Nom * :</label><br/>
	<input type="text" id="nom" name="nom" size="60" value="<?= isset($_REQUEST['nom']) ? $_REQUEST['nom'] : '' ?>" /><br/>

	<label for="prix">Prix (laissez 0 si gratuit) :</label><br/>
	<input type="text" id="prix" name="prix" size="3" value="<?= isset($_REQUEST['prix']) ? $_REQUEST['prix'] : '0' ?>"/>.00$<br/>

	<label for="qte-rencontres">Nombre de rencontres * :</label><br/>
	<input type="text" id="qte-rencontres" name="qte-rencontres" size="3" value="<?= isset($_REQUEST['qte-rencontres']) ? $_REQUEST['qte-rencontres'] : '' ?>"/><br/>

	<label for="max-personnes">Nombre de personne maximum (laissez vide si illimité) :</label><br/>
	<input type="text" id="max-personnes" name="max-personnes" size="3" value="<?= isset($_REQUEST['max-personnes']) ? $_REQUEST['max-personnes'] : '' ?>" /><br/>

	<label for="description">Description :</label><br/>
	<?php $CKEditor->editor("description", isset($_REQUEST['description']) ? $_REQUEST['description'] : ''); ?>

	<label for="couleur">Couleur (cliquez pour choisir) :</label><br/>
	<div id="preview-couleur" style="background-color: #<?= isset($_REQUEST['couleur']) ? $_REQUEST['couleur'] : '3366CC' ?>"></div>
	<input type="hidden" id="couleur" name="couleur" /><br/>

	<input type="submit" name="submit" value="Envoyer" />
</form>

<?php include("footer.php"); ?>

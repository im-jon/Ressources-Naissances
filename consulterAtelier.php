<?php
session_start();
setlocale(LC_ALL, 'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');

$id = $_REQUEST['id'];

include('Actions/fonctions.php');
$connecte = estConnecte();

include("Actions/mysql.php");

$requete = "SELECT a.id, t.nom, a.date_debut, a.date_fin, t.description, a.id_type_atelier, a.nom_animatrice, t.prix
	    	FROM atelier a
		    INNER JOIN type_atelier t
		    ON a.id_type_atelier = t.id
		    WHERE a.id = $id";

$resultats = mysql_query($requete) or die(mysql_error());
$valAtelier = mysql_fetch_array($resultats);
$dateDebut = strtotime($valAtelier['date_debut']);

$intervalle = new DateTime(date('c', $dateDebut));
$intervalle = $intervalle->diff(new DateTime(date('c', strtotime($valAtelier['date_fin']))));


$idType = $valAtelier['id_type_atelier'];

if ($connecte == true) {
	$idCompte = $_SESSION['id_compte'];
	$requete = "SELECT COUNT(*) nb
			    FROM personne_atelier pa
			    INNER JOIN compte c
			    ON c.id = $idCompte
			    WHERE c.id = $idCompte AND pa.id_atelier = $id AND (pa.id_personne = c.id_mere OR pa.id_personne = c.id_pere)";

	$resultats = mysql_query($requete) or die(mysql_error());
	$valCompte = mysql_fetch_array($resultats);
	$compte = $valCompte['nb'];
}
?>

<?php include("header.php"); ?>

<script>
	$(function() {		
		$("#dlg-inscription").dialog({
			autoOpen: false,
			height: 300,
			width: 350,
			modal: true
		});

		$("#btn-inscription").button().click(function() {
			$("#dlg-inscription").dialog("open");
		});
	});
</script>

<div id="dlg-inscription" title="S'inscrire à l'atelier">
	<form id="frm-inscription" action="Actions/inscriptionAtelier.php" method="POST">
		<fieldset>
			<input type="hidden" name="id_atelier" value="<?= $id ?>" /></br>
			<label for="presence-mere">Inscrire :</label></br>
			<input type="radio" id="presence-mere" name="presence" value="0" />Seulement la mère
			<br/>
			<input type="radio" name="presence" value="1" />Seulement le père
			<br/>
			<input type="radio" name="presence" value="2" />Le couple
			<br/>
			<input type="submit" />
		</fieldset>
	</form>
</div>

<div>
	<h1><?= $valAtelier['nom'] ?></h1>

	<debut-article>
		Le <?= strftime('%A %e %B à %H:%I', $dateDebut) ?>
	</debut-article>

	<ul>
		<li>Durée : <?= $intervalle->format('%h heures et %I minutes') ?></li>
		<li>Prix : <?= (($valAtelier['prix'] == 0) ? "gratuit" : $valAtelier['prix'] . ".00$") ?></li>

		<?php if (isset($valAtelier['animatrice'])) { ?>
			<li>Animatrice : <?= $valAtelier['animatrice'] ?></li>
		<?php } ?>
	</ul>

	<p>
		<?= $valAtelier['description'] ?>
	</p>
	
	<?php
	$message = "";
	if ($dateDebut >= time()) {
		if ($connecte) {
			if ($compte == 0) {
				$message = "<button id=\"btn-inscription\">S'inscrire</button>";
			}
			else {
				$message = "Vous êtes inscrit à cet atelier";
			}
		}
		else {
			$returnUrl = $_SERVER['REQUEST_URI'];
			$message = "Vous devez être <a href=\"inscription.php\">inscrit</a> et <a href=\"connexion.php?ReturnUrl=$returnUrl\">connecté</a> pour vous inscrire à l'atelier.";
		}
	}
	else {
		$message = "Cet atelier a déjà débuté.";
	}

	echo $message;
	?>
	
	<p><a href="calendrier.php">Retourner au calendrier</a></p>
</div>

<?php include("footer.php"); ?>

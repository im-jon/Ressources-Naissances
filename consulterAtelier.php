<?php
session_start();

$id = $_REQUEST['id'];

include('Actions/fonctions.php');
$connecte = estConnecte();

include("Actions/mysql.php");

$requete = "SELECT a.id, t.nom, a.date_debut, a.date_fin, t.description, a.id_type_atelier
	    FROM atelier a
	    INNER JOIN type_atelier t
	    ON a.id_type_atelier = t.id
	    WHERE a.id = $id";

$resultats = mysql_query($requete) or die(mysql_error());
$valAtelier = mysql_fetch_array($resultats);

$idType = $valAtelier['id_type_atelier'];

$requete = "SELECT p.chemin
	    FROM photo_type_atelier pt
	    INNER JOIN photo p
	    ON p.id = pt.id_photo
	    WHERE pt.id_type_atelier = $idType";

$resultatsPhotos = mysql_query($requete) or die(mysql_error());

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

<?php if ($connecte && $compte == 0) { ?>
	<div id="dlg-inscription" title="S'inscrire à l'atelier">
		<form action="Actions/inscriptionAtelier.php" method="POST">
			<fieldset>
				<input type="hidden" name="id_atelier" value="<?= $id ?>" />
				<label for="presence-mere">Inscrire :</label>
				<input type="radio" id="presence-mere" name="presence" value="0" />Seulement la mère
				<input type="radio" name="presence" value="1" />Seulement le père
				<input type="radio" name="presence" value="2" />Le couple
				<input type="submit" />
			</fieldset>
		</form>
	</div>
<?php } ?>

<div>
	<h1><?= $valAtelier['nom'] ?></h1>
	<p>Le <?= date('l j F o à G:i', strtotime($valAtelier['date_debut'])) ?></p>
	<p>
		<?= $valAtelier['description'] ?>
	</p>
	
	<?php if ($connecte) { 
		if ($compte == 0) {
		?>
			<button id="btn-inscription">S'inscrire</button>
		<?php }
		else { ?>
			Vous êtes inscrit à cet atelier
		<?php }?>
	<?php } 
	else { ?>
		Vous devez être connecté pour vous inscrire à l'atelier
	<?php } ?>

	<?php
		while ($valPhoto = mysql_fetch_array($resultatsPhotos)) {
			//echo '<img src="img/' . $valPhoto['chemin'] . '" />'; 
		}
	?>

</div>

<?php include("footer.php"); ?>

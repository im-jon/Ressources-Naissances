<?php
$id = $_REQUEST['id'];

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

$resultats = mysql_query($requete) or die(mysql_error());

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

<div id="dlg-inscription" title="Create new user">
	<form>
	<fieldset>
		<label for="presence-mere">Inscrire :</label>
		<input type="radio" id="presence-mere" name="presence" value="0" />Seulement la mère
		<input type="radio" name="presence" value="1" />Seulement le père
		<input type="radio" name="presence" value="2" />Le couple
	</fieldset>
	<form>
</div>

<div>
	<h1><?php echo $valAtelier['nom'] ?></h1>
	<p>Le <?php echo date('l j F o à G:i', strtotime($valAtelier['date_debut'])) ?></p>
	<p>
		<?php echo $valAtelier['description'] ?>
	</p>
	
	<button id="btn-inscription">S'inscrire</button>

	<?php
		while ($valPhoto = mysql_fetch_array($resultats)) {
			echo '<img src="img/' . $valPhoto['chemin'] . '" />'; 
		}
	?>

</div>

<?php include("footer.php"); ?>

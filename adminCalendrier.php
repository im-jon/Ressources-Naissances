<?php
$pasArticle = 1;
session_start();
include('Actions/fonctions.php');

if (!estAutorise(2)) {
	die();
}

include("Actions/mysql.php");

$requete = "SELECT id, nom, couleur FROM type_atelier";

$resultats = mysql_query($requete) or die(mysql_error());
?>

<?php include("header.php"); ?>

<link rel='stylesheet' type='text/css' href='css/fullcalendar.css' />
<script type='text/javascript' src='js/fullcalendar.js'></script>
<script type='text/javascript' src='js/pages/adminCalendrier.js'></script>

<article id="article-cal-admin">
	<div id="dlg-modif" title="Modifier l'atelier">
		<button id="btn-supprimer">Supprimer l'atelier</button>
		<form>
			<label for="animatrice">Animatrice</label>
			<input type="text" name="animatrice" id="animatrice"></input>
			<input type="submit"></unput>
		</form>
	</div>

	<div id='calendrier-admin'></div>
</article>

	<div id='types-atelier'>
	Types d'atelier
		<?php while($val = mysql_fetch_array($resultats)) { 
			echo "<div class='external-event' id_type_atelier=\"" . $val['id'] . "\" style=\"background-color: #" . $val['couleur'] . ";\">". $val['nom'] . "</div>";
		} ?>
	</div>

<?php include("footer.php"); ?>

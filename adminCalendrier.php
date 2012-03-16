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
<link rel="stylesheet" type="text/css" href="css/carousel.css" />


<style type="text/css">

.jcarousel-skin-tango .jcarousel-container-vertical {
    width: auto;
	height: 450px;
}

.jcarousel-skin-tango .jcarousel-clip-vertical {
    width: auto;
	height: 450px;
}

.jcarousel {
}
</style>

<script type='text/javascript' src='js/fullcalendar.js'></script>
<script type='text/javascript' src='js/pages/adminCalendrier.js'></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>

<article id="article-cal-admin">
	<div id="dlg-modif" title="Modifier l'atelier">
		<button id="btn-supprimer">Supprimer l'atelier</button><br/>
			<input type="hidden" name="id" id="id"></input><br/>
			<label for="animatrice">Animatrice</label><br/>
			<input type="text" name="animatrice" id="animatrice"></input><br/>
			<button id="btn-envoyer">Modifier</button>
	</div>

	<div id='calendrier-admin'></div>
</article>

<div id="types-atelier">
	Types d'atelier
	<ul id="carousel-types" class="jcarousel jcarousel-skin-tango">
		<?php while($val = mysql_fetch_array($resultats)) { 
			echo "<li>";
			echo "<div class='external-event' id_type_atelier=\"" . $val['id'] . "\" style=\"background-color: #" . $val['couleur'] . ";\">". $val['nom'] . "</div>";
			echo "</li>";
		} ?>
	</ul>
</div>

<?php include("footer.php"); ?>

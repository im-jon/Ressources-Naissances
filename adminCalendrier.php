<?php
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

<div id='types-atelier'>
<h4>Types d'atelier</h4>
	<?php while($val = mysql_fetch_array($resultats)) { 
		echo "<div class='external-event' id_type_atelier=\"" . $val['id'] . "\" style=\"background-color: #" . $val['couleur'] . ";\">". $val['nom'] . "</div>";
	} ?>
</div>


<div id='calendrier-admin'></div>

<?php include("footer.php"); ?>

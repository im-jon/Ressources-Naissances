<?php

include("Actions/mysql.php");

$requete = "SELECT a.id, a.date_debut, a.date_fin, t.nom
	    FROM atelier a
	    INNER JOIN type_atelier t
	    ON a.id_type_atelier = t.id
	    WHERE a.date_debut BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)
	    ORDER BY a.date_debut";

$resultats = mysql_query($requete) or die(mysql_error());

?>

<?php include("header.php"); ?>

<link rel='stylesheet' type='text/css' href='css/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='css/jquery.qtip.min.css' />
<script type='text/javascript' src='js/fullcalendar.js'></script>
<script type='text/javascript' src='js/jquery.qtip.min.js'></script>
<script type='text/javascript' src='js/pages/calendrier.js'></script>

<h2>Ateliers à venir</h2>
<div id="ateliers-futurs">
	<?php 
		while ($val = mysql_fetch_array($resultats)) {
			$intervalle = new DateTime(date('c', strtotime($val['date_debut'])));
			$intervalle = $intervalle->diff(new DateTime(date('c', strtotime($val['date_fin']))));
			echo '<a href="consulterAtelier.php?id=' . $val['id'] . '">';
			echo $val['date_debut'] . " " . $val['nom'] . " " . $intervalle->format('(%h heures et %I minutes)')  . "<br/>";
			echo '</a>';
		} 
	?>
</div>

<h2>Calendrier</h2>
<div id="calendar"></div>
<small>* Un atelier transparant indique que celui-ci a déjà débuté.</small>
<?php include("footer.php"); ?>

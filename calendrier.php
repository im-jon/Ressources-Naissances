<?php

include("Actions/mysql.php");

$requete = "SELECT a.id, a.date_debut, a.date_fin, t.nom
	    FROM atelier a
	    INNER JOIN type_atelier t
	    ON a.id_type_atelier = t.id
	    WHERE a.date_debut BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 7 DAY)
	    ORDER BY a.date_debut";

$resultats = mysql_query($requete) or die(mysql_error());

?>

<?php include("header.php"); ?>

<link rel='stylesheet' type='text/css' href='css/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='css/jquery.qtip.min.css' />
<script type='text/javascript' src='js/fullcalendar.js'></script>
<script type='text/javascript' src='js/jquery.qtip.min.js'></script>
<script type='text/javascript' src='js/pages/calendrier.js'></script>

<h1>Ateliers à venir</h1>
<div id="ateliers-futurs">
	<ul>
	<?php 
		if (mysql_num_rows($resultats) > 0) {
			while ($val = mysql_fetch_array($resultats)) { ?>
				<li>
					<a href="consulterAtelier.php?id=<?= $val['id'] ?>" >
						<?= $val['nom'] ?> le <?= date('j F à H:i (l)', strtotime($val['date_debut'])) ?>
					</a>
				</li>
			<?php }
		}
		else {
			echo "Il n'y à aucun atelier à venir.";		
		}
	?>
	</ul>
</div>

<h1>Calendrier</h1>
<div id="calendar"><div id='loading' style='display:none'><img src="img/ajax-loader.gif" /></div></div>
<small>* Un atelier transparant indique que celui-ci a déjà débuté.</small>
<?php include("footer.php"); ?>

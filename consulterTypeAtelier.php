<?php
	$id = $_REQUEST['id'];

	include("Actions/mysql.php");

	$requete = "SELECT *
		    FROM type_atelier
		    WHERE id = $id";

	$resultats = mysql_query($requete) or die(mysql_error());
	$valAtelier = mysql_fetch_array($resultats);
?>

<?php include("header.php"); ?>

<h1>Atelier: <?= $valAtelier['nom'] ?></h1>

<ul>
	<?php if ($valAtelier['qte_rencontres'] > 0) { ?>
		<li>Nombre de rencontres : <?= $valAtelier['qte_rencontres'] ?></li>
	<?php } ?>
	
	<?php if ($valAtelier['max_personnes'] > 0) { ?>
		<li>Inscriptions maximales : <?= $valAtelier['max_personnes'] ?></li>
	<?php } ?>
	
	<li>Prix habituel : <?= (($valAtelier['prix'] == 0) ? "gratuit" : $valAtelier['prix'] . ".00$") ?></li>
</ul>

<p>
	<?= $valAtelier['description'] ?>
</p>

<h2>Ateliers à venir</h2>
<?php
	$requete = "SELECT a.id, a.date_debut, a.date_fin, t.nom
		    FROM atelier a
		    INNER JOIN type_atelier t
		    ON a.id_type_atelier = t.id
		    WHERE t.id = $id
		    AND a.date_debut BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 1 MONTH)
		    ORDER BY a.date_debut
		    LIMIT 10";

	$resultatsAteliersVenir = mysql_query($requete) or die(mysql_error());

	if (mysql_num_rows($resultatsAteliersVenir) > 0) {
		while ($val = mysql_fetch_array($resultatsAteliersVenir)) { ?>
			<a href="consulterAtelier.php?id=<?= $val['id'] ?>"><?= $val['date_debut'] ?></a>
		<?php }
	}
	else { ?>
		Cet atelier n'est pas planifié d'ici un mois.
	<?php } 
?>

<?php include("footer.php"); ?>

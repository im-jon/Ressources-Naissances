<?php
include("Actions/mysql.php");
//Affiche l'article le plus récent
$requete = "SELECT titre, id FROM nouvelle ORDER BY date_creation DESC;";
$resultat = mysql_query($requete);

?>

<?php include("header.php"); ?>

<h1>Archive des nouvelles</h1>

<ul>
<?php while ($article = mysql_fetch_array($resultat)) { ?>
	<li><a href="consulterNouvelle.php?id=<?= $article["id"] ?>"><?= $article["titre"] ?></a></li>
<?php } ?>
</ul>

<?php 
include("footer.php");
mysql_close();
?>



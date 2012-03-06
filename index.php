<?php
include("Actions/mysql.php");
//Affiche l'article le plus récent
$requete = "SELECT * FROM nouvelle ORDER BY date_creation DESC LIMIT 5;";
$resultat = mysql_query($requete);

?>

<?php include("header.php"); ?>

<?php while ($article = mysql_fetch_array($resultat)) { ?>
	<nouvelle>
		<h2><?= ShortenText($article["titre"], 60) ?></h2>
		<p>publié le <?= $article["date_creation"] ?><p>
		<div class="desc"><tgauche><?= $article["contenu"] ?></tgauche></div>
	</nouvelle>
<?php } ?>

<?php 
include("footer.php");
mysql_close();

function ShortenText($text, $chars) { 
	$length = strlen($text); 

	$text = $text." "; 
	$text = substr($text, 0, $chars); 
	$text = substr($text, 0, strrpos($text,' '));
	$text = strip_tags($text); 

	if($length > $chars) {
		$text = $text."..."; 
	} 

	return $text; 
} 
?>



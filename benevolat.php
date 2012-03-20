<?php 
$titre = "Bénévolat";
include("header.php"); 
include("Actions/mysql.php");
$query = "SELECT * FROM benevole";
$result = mysql_query($query)
?>
		 
<script type="text/javascript" src="js/afficherCacher.js"></script>
<H2>Bénévolat</H2>
<?php
	while($val = mysql_fetch_array($result)) {
		$nom = $val['nom'];
		$description = $val['lienPage'];
	if($nom)
	{	
		echo "<div class='titreTexte' id='titrePage'>
		<div class='titre'><span>$nom</span></div>";
		echo "</div>";
	
		echo "<div class='contenuTexte'>";
		include($description);
		echo "</div>";
	}
	else
	{
		include($description);
	}
}

echo "</br><A HREF='benevolat.php'>Retour affichage initial</A>";
 ?>



<?php include('footer.php'); ?>

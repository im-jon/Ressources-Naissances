<?php 
$titre = "Assistance périnatale";
include("Actions/mysql.php");
$query = "SELECT * FROM assistancePer";
$result = mysql_query($query);

include("header.php");
?>

<script type="text/javascript" src="js/afficherCacher.js"></script>

<div id="texte">
	<h2>Assistance périnatale à domicile</h2>
<?php
	while($val = mysql_fetch_array($result)) {
		$nom = $val['titre'];
		$description = $val['lienPage'];
	
	echo "<div class='titreTexte' id='titrePage'>
			 <a href='#'>$nom</a></div>";


	echo "<div class='contenuTexte'>";
include($description);
echo "</br></br>";
echo "</div>";
}
 ?>


			
<?php include("footer.php"); ?> 

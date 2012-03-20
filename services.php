<?php 
$titre = "Services";
include("Actions/mysql.php");
$query = "SELECT * FROM service";
$result = mysql_query($query);

include("header.php");
?>

<script type="text/javascript" src="js/afficherCacher.js"></script>

<div id="texte">
	<h2>Services</h2>
<?php
	while($val = mysql_fetch_array($result)) {
		$nom = $val['titrePage'];
		$description = $val['lienPage'];
	
	echo "<div class='titreTexte' id='titrePage'><div class='titre'>
			 <span>$nom</span></div></div>";


	echo "<div class='contenuTexte'>";
include($description);
echo "</div>";
}

echo "</br><A HREF='services.php'>Retour affichage initial</A>";
 
include "temoignages.html";			

?>			
<?php include("footer.php"); ?> 

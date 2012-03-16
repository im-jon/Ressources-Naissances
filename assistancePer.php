<?php 
$titre = "Assistance périnatale";
include("Actions/mysql.php");
$query = "SELECT * FROM assistancePer";
$result = mysql_query($query);

include("header.php");
?>

<script type="text/javascript" src="js/afficherCacher.js"></script>

<div id="texte">
<?php
	while($val = mysql_fetch_array($result)) {
		$nom = $val['titre'];
		$description = $val['lienPage'];
	echo "<h2>$nom</h2>";


	



include($description);


}
 ?>


			
<?php include("footer.php"); ?> 

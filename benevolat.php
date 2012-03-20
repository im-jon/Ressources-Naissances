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
	
	echo "<div class='titreTexte' id='titrePage'>
			 <a href='#'>$nom</a></div>";


	echo "<div class='contenuTexte'>";
include($description);
echo "</div>";
}
 ?>


<div id="photos">
<img src="">
</div>

<?php include('footer.php'); ?>

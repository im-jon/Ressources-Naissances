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
	
	echo "<div class='titreTexte' id='titrePage'>
			 <a href='#'>$nom</a></div>";


	echo "<div class='contenuTexte'>";
include($description);
echo "</div>";
}
 ?>
			
			<h2>Témoignages</h2>
			<P>"L'énergie et la bonne humeur de l'assistante périnatale me donnent de l'énergie pour le reste de la semaine." </P>
			<P>"... Cette aide ne m'a pas seulement aidée dans mon rôle de mère, elle m'a aussi aidée à maintenir une bonne santé physique et mentale."</P>
			</div>
			</div>
			

			<div id="allaitement">
				<p class="titreTexte">
				 <a href="#"><STRONG>Consultation individuelle en allaitement</a></STRONG>
				</p>
				<div class="contenuTexte">
				<P><?php include("test.html"); ?></P>
				</div>
			</div>
			<div id="consultationTel">
				<p class="titreTexte">
				 <a href="#"><STRONG>Consultation téléphonique</a></STRONG>
				</p>
			<div class="contenuTexte">
				<p id=préambule>
				Pour répondre à des demandes spécifiques concernant la grossesse, l'accouchement, l'allaitement, le postnatal, etc.
				</p>
				<P><U>Gratuitement</U>,&nbsp;une conseillère est disponible par téléphone pour répondre à des demandes spécifiques.</P>
				<P>Du lundi au vendredi, aux heures de bureau.&nbsp; Voir la section 'Nous joindre'.</P>
			
<?php include("footer.php"); ?> 

<?php
$titre = "Modifierarticle";
include("header.php");
$erreur = $_REQUEST["erreur"];
if($erreur == 1)
        echo "<div class=\"erreur\">Tous les champs sont obligatoires</div>";

?>

	<form action="traite_ajout_lienutile.php" method="post" >
		<labe>Nom du lien:</label>
		</br>
		<input type="text" name="titre" />
		</br>
		<label>Renseignement:</label>
		<textarea name="desc" row="4"  col="50"></textarea>
		</br>
		<input type="submit" id="btn" value="Ajouter un lien"/>
	</form>
	
<?php include("footer.php"); ?>

<?php
$titre = "Modifiernotreequipe";
include("header.php");
$erreur = $_REQUEST["erreur"];
if($erreur == 1)
        echo "<div class=\"erreur\">Tous les champs sont obligatoires</div>";

?>

	<form action="traite_ajout_notreequipe.php" method="post" >
		<label>Nom de la personne</label>
		</br>
		<input type="text" name="titre" />
		</br>
		<label>Rang de la personne</label>
		</br>
		<input type="text" name="rang" />
		</br>
		<label>Description:</label></br>
		<textarea name="desc" row="4"  col="50"></textarea>
		</br>
		<input type="submit" id="btn" value="Ajouter un lien"/>
	</form>
	
<?php include("footer.php"); ?>

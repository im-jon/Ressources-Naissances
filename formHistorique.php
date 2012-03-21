<?php
$titre = "Modifierhistorique";
include("header.php");
$erreur = $_REQUEST["erreur"];
if($erreur == 1)
        echo "<div class=\"erreur\">Tous les champs sont obligatoires</div>";

?>

	<form action="traite_ajout_historique.php" method="post" >
		<labe>Titre de la periode:</label>
		</br>
		<input type="text" name="titre" />
		</br>
		<label>Texte de la periode:</label></br>
		<textarea name="desc" row="4"  col="50"></textarea>
		</br>
		<input type="submit" id="btn" value="Ajouter une periode"/>
	</form>
	
<?php include("footer.php"); ?>

<?php 
	//Antoine Laroche
	//Page admin qui contient le formulaire pour un upload d'une publication

	session_start();
	include('Actions/fonctions.php');

	if (!estAutorise(2)) {
		die();
	}

	$titre = "AjoutPublications";
	include("header.php");
?>
	<h2>Ajout d'une publication</h2>
	<form method="post" action="upload_publications.php" enctype="multipart/form-data">
			La publication à ajouté
			<input type="file" name="fichier"></input></br>
			<input type="hidden" name="MAX_FILE_SIZE" value="100000000"></input></br>
			Cocher si la publication est une gazette des poussettes
			<input type="checkbox" name="gazette" /></br>
			<input type="submit" name="Submit" value="Envoyez votre publications"></input>
	</form>

<?php include("footer.php"); ?> 

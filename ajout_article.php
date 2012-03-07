<?php
//Antoine Laroche
//Page qui contient le formulaire pour ajouter un formulaire 
$titre = "Ajout_Article";
include("header.php"); ?>

	<form action="ajout_article.php" method="post" >
		<labe>Titre:</label>
		<input type="text" id="titre" />
		</br>
		<label>Source (auteur et date):</label>
		<input type="text" id="source" />
		</br>
		<label>Texte de l'article:</label>
		<input type="textarea" id="desc" />
		</br>
		<input type="submit" id="btn" />
	</form>

<?php include("footer.php"); ?>
<?php
//Antoine Laroche
//Page qui contient le formulaire pour ajouter un formulaire 
$titre = "Ajout_Article";
include("header.php"); ?>

	<form action="traite_ajout_article.php" method="post" >
		<labe>Titre:</label>
		</br>
		<input type="text" name="titre" />
		</br>
		<label>Source (auteur et date):</label>
		</br>
		<input type="text" name="source" />
		</br>
		<label>Texte de l'article:</label>
		</br>
		<textarea name="desc" row="4"  col="50"></textarea>
		</br>
		<input type="submit" id="btn" />
	</form>

<?php include("footer.php"); ?>
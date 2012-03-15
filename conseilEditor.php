<?php include("header.php"); ?>
	<fieldset>
		<legend>
			<b>Ajout d'une personne au conseil d'administration</b>
		</legend>
		<form action="conseilEditor2.php" method="POST" enctype="multipart/form-data" >
			Choisissez l'image de la personne à ajouté:<br/>
			<center>
				<input type="hidden" name="max_file_size" value="1048576">
				<input type="file" name="fichier"><br/><br/>
				Nom de la personne à ajouté: <input type="text" name="nomPersonne"><br/><br/>
				<input type="submit" name="envoyer" value="Envoyer">
				<input type="reset" name="annuler" value="Annuler"/>
			</center>
		</form>
	</fieldset>
<?php include("footer.php"); ?>

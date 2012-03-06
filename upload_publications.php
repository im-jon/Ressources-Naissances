<?php 
	//Antoine Laroche
	//Page admin qui traite l'ajout d'une publication sur le serveur
	$titre = "Traiter Publications";
	include("header.php");
	include("Actions//mysql.php");
	
	//vérification si la publication est une gazette des pousettes. Si elle on met a 1 le gazette dans la bd
	$dossier = "PUBLICATIONS/";
	if ($_REQUEST['gazette'] == "on")
		$gazette = 1;
	else
		$gazette = 0;
		
	if(isset($_FILES["fichier"])){
				echo "Envois du fichier ".$_FILES["fichier"]["name"]." en cours...<P>";
			}
	else
		echo "Erreur le fichier n'existe pas";
				
	if(@copy($_FILES["fichier"]["tmp_name"], $dossier.$_FILES["fichier"]["name"]))
	{
		echo "Envois réussi!"; 
		$nom = $_FILES["fichier"]["name"];
		echo $chemin = $dossier.$_FILES["fichier"]["name"];
		$requete = "INSERT INTO publications(
					id,
					nom,
					chemin,
					gazette)
					VALUES(
					NULL,  
					'".$nom."',  
					'".$chemin."',  
					'".$gazette."'
					);";
		
		$resultat = mysql_query($requete);
		if($resultat == NULL)
			echo "erreur dans l'ajout de la publications dans la bd";
	}
	else{
		echo "Envois non-réussi!";
		echo "erreur".$_FILES["fichier"]["error"];
	}

	mysql_close();
	include("footer.php"); 
?>
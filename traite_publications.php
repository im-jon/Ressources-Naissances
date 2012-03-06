<?php 
	//Antoine Laroche
	//Page admin qui traite l'ajout d'une publication sur le serveur
	$titre = "Traiter Publications";
	include("header.php");
	include("Actions//mysql.php");
	
	$dossier = "/Ressources-Naissances/PUBLICATIONS";
	$requete = "";
	$gazette = 0;
	if(isset($_FILES["fichier"])){
				echo "Envois du fichier ".$_FILES["fichier"]["name"]." en cours...<P>";
			}
	else
		echo "Erreur le fichier n'existe pas";
				
	if(@copy($_FILES["fichier"]["tmp_name"], $dossier.$_FILES["fichier"]["name"]))
	{
		echo "Envois réussi!";
		//vérification si la publication est une gazette des pousettes. Si elle l'est alors on c'est dans un dossier différent
		if ($_REQUEST['gazette'] == "on"){
			$dossier = $dossier."/Journal des membres ";
			$gazette = 1;
		}
			
		$requete = "INSERT INTO  `ressources_naissances`.`publications` (
					`id` ,
					`nom` ,
					`chemin` ,
					`gazette`)
					
					VALUES (
					NULL ,  
					'$_FILES["fichier"]["name"]',  
					'$dossier.$_FILES["fichier"]["name"]',  
					'$gazette'
					);"
		
		
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
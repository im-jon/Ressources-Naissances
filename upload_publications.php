<?php 
	//Antoine Laroche
	//Page admin qui traite l'ajout d'une publication sur le serveur
	$titre = "Traiter Publications";
	include("header.php");
	echo $_REQUEST['gazette'];
# 	include("Actions//mysql.php");
# 	
# 	$dossier = "/Ressources-Naissances/PUBLICATIONS";
# 	
# 	if(isset($_FILES["fichier"])){
# 				echo "Envois du fichier ".$_FILES["fichier"]["name"]." en cours...<P>";
# 			}
# 	else
# 		echo "Erreur le fichier n'existe pas";
# 				
# 	if(@copy($_FILES["fichier"]["tmp_name"], $dossier.$_FILES["fichier"]["name"]))
# 	{
# 		echo "Envois réussi!<BR>dans le dossier /Ressources-Naissances/PUBLICATIONS<P>";
# 		$requete = "INSERT INTO  `ressources_naissances`.`publications` (
# 					`id` ,
# 					`nom` ,
# 					`chemin` ,
# 					`gazette`)
# 					
# 					VALUES (
# 					NULL ,  
# 					'$_FILES["fichier"]["name"]',  
# 					'',  
# 					''
# 					);"
# 		
# 		$resultat = mysql_query($requete);
# 	}
# 	else{
# 		echo "Envois non-réussi!";
# 		echo "erreur".$_FILES["fichier"]["error"];
# 	}
#
# 	mysql_close();
# 	include("footer.php"); 
?>
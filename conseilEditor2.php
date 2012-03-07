<!DOCTYPE html>
<?php include("header.php"); ?>
<?php
	//fonction succes ou echec
	function code()
	{
		if($_FILES["fichier"]["error"] == 0)
		{
			echo " (réussi)";
		}
		elseif($_FILES["fichier"]["error"] == 1)
		{
			echo " (taille trop grande selon php.ini)";				
		}
		elseif($_FILES["fichier"]["error"] == 2)
		{
			echo " ( taille du fichier trop grande selon le formulaire)";				
		}
		elseif($_FILES["fichier"]["error"] == 3)
		{
			echo " ( partiellement transmis)";				
		}
		elseif($_FILES["fichier"]["error"] == 4)
		{
			echo " ( fichier non transmis)";				
		}
	}
	//chemin pour l'enregistrement du fichier
	$dir="/var/antho/html/Ressources-Naissances/img/conseilAdministration/";
	$nom = $_REQUEST['nomPersonne'];
	$nomImage = $nom.".jpg";
	echo $nomImage;
	//si le fichier existe
	if(isset($_FILES["fichier"]))
	{
		echo "Upload du fichier ".$_FILES["fichier"]["name"]." en cours...<br/><br/>";			
	}
	//copie du fichier du dossier temporaire au bon endroit
	if(@copy($_FILES["fichier"]["tmp_name"],$dir.$nomImage))
	{
		echo "Transmission réussis!!!!<br/>dans le dossier /var/antho/html/Ressources-Naissances/img/conseilAdministration/ <br/><br/>";
		echo "Code d'erreur=".$_FILES["fichier"]["error"];
		code();
	}
	else
	{
		echo "Transmission non-réussis !<br/>";
		echo "Code d'erreur=".$_FILES["fichier"]["error"];
		code();		
	}
?>

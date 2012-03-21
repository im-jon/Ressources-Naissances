<?php
//Antoine Laroche
//Page qui traite l'upload d'image pour le diaporama de la page d'accueil
$titre = "Ajout_Diapo";
include("header.php");

$dossier = "img/diaporama/";
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
	}
	else{
		echo "Envois non-réussi!";
		echo "erreur".$_FILES["fichier"]["error"];
	}
	 

 include("footer.php"); ?>
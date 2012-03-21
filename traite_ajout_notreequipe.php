<?php
include("header.php");

$titre = $_REQUEST['titre'];
$rang = $_REQUEST['rang'];
$desc = $_REQUEST['desc'];
	
//Ouverture du fichier qui contient le html. On l'ouvre en append pour ajouter le html à la fin
if($hfichier = fopen("notreEquipe.txt", "a")){

	//ajout dans le fichier article.txt des div pour que le jquery fonctionne
	$LigneTitre = '<div class="titre"><span>'.$titre.":".$rang."</span></div>";
	$LigneDesc = '<div class="desc"><tgauche>'.$desc."</tgauche></div></br>";
	
	if(fwrite($hfichier,$LigneTitre.$LigneSource.$LigneDesc))
		echo "Ajout d'une nouvelle personne réussi";
	else
		echo "Erreur dans l'écriture du fichier article.txt";
		
	fclose($hfichier);
}
else
	echo "Erreur dans l'ouverture du fichier historique.txt";


include("footer.php");?>

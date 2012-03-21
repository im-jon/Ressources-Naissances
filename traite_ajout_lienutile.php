<?php
include("header.php");

$titre = $_REQUEST['titre'];
$desc = $_REQUEST['desc'];
	
//Ouverture du fichier qui contient le html. On l'ouvre en append pour ajouter le html à la fin
if($hfichier = fopen("lienUtile.txt", "a")){

	//ajout dans le fichier article.txt des div pour que le jquery fonctionne
	$LigneTitre = '<div class="titre"><span>'.$titre."</span></div>";
	$LigneDesc = '<div class="desc"><tgauche>'.$desc."</tgauche></div></br>";
	
	if(fwrite($hfichier,$LigneTitre.$LigneSource.$LigneDesc))
		echo "Ajout d'un nouveau lien réussi";
	else
		echo "Erreur dans l'écriture du fichier lienUtile.txt";
		
	fclose($hfichier);
}
else
	echo "Erreur dans l'ouverture du fichier lienUtile.txt";


include("footer.php");?>

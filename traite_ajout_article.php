<?php
//Antoine Laroche
//Page qui traite le formulaire pour ajouter un article
$titre = "Ajout_Article";
include("header.php");

$titre = $_REQUEST['titre'];
$desc = $_REQUEST['desc'];
$source = $_REQUEST['source'];
// Si la personne a oublié un paramètre on la redirige vers le formulaire pour qu'elle recommence, en lui indiquant le ou les champs oubliés.
if(empty($titre) || empty($desc) || empty($source))
	echo "<SCRIPT>parent.location='ajout_article.php?erreur=1'</SCRIPT>";
	
else{	
	
//Ouverture du fichier qui contient le html. On l'ouvre en append pour ajouter le html à la fin
if($hfichier = fopen("article.txt", "a")){

	//ajout dans le fichier article.txt des div pour que le jquery fonctionne
	$LigneTitre = '<div class="titre"><a href="#">'.$titre."</a></br>";
	$LigneSource = "<reference>".$source."</reference></div>";
	$LigneDesc = '<div class="desc"><tgauche>'.$desc."</tgauche></div></br>";
	
	if(fwrite($hfichier,$LigneTitre.$LigneSource.$LigneDesc)){
		echo "Ajout d'un nouvel article réussi";}
	else
		echo "Erreur dans l'écriture du fichier article.txt";
		
	fclose($hfichier);
}
else
	echo "Erreur dans l'ouverture du fichier article.txt";


include("footer.php"); }?>
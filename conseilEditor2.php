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
	$dir="img/conseil administration/";
	$nom = $_REQUEST['nomPersonne'];
	$prenom = $_REQUEST['prenomPersonne'];
	$nomImage = $nom.".jpg";
	echo $nomImage;
	//si le fichier existe
	if(isset($_FILES["fichier"]))
	{
		echo "Upload du fichier ".$_FILES["fichier"]["name"]." en cours...<br/><br/>";			
	}
	$ok = 0;
	//copie du fichier du dossier temporaire au bon endroit
	if(@copy($_FILES["fichier"]["tmp_name"],$dir.$nomImage))
	{
		echo "Transmission réussis!!!!<br/>dans le dossier img/conseil administration/ <br/><br/>";
		echo "Code d'erreur=".$_FILES["fichier"]["error"];
		code();
		$ok = 1;
	}
	else
	{
		echo "Transmission non-réussis !<br/>";
		echo "Code d'erreur=".$_FILES["fichier"]["error"];
		code();		
	}
?>
<?php
/************************************************************/
/* La fonction miniature crée à la volée l'image miniature  */
/************************************************************/

function miniature( $imgSrc, $nomImage){
   // Largeur et hauteur des images miniatures
   $largeur = 50; $hauteur=60;


   // quelle taille fait notre image ?
   $largeurSrc = imagesx($imgSrc);
   $hauteurSrc = imagesy($imgSrc);
   
   // Création de l'image miniature en essayant de respecter le format portrait ou paysage
   if($hauteurSrc > $largeurSrc){
      $l = $largeur; $h = $hauteur;
      $lSrc = $largeurSrc; $hSrc = $hauteurSrc;
   } else{
      $l = $largeur; $h = $hauteur;
      $lSrc = $largeurSrc; $hSrc = $hauteurSrc;
   }
   $mini = @ImageCreateTrueColor ($l, $h);

   // On ressample l'image initiale pour en créer une copie en miniature
   ImageCopyResampled($mini, $imgSrc, 0, 0, 0, 0, $l, $h, $lSrc, $hSrc);
   
   // On enregistre l'image dans le répertoire des miniatures
   imageJpeg ( $mini,"img/miniConseilAdministration/$nomImage.jpg");
   return $nomImage;
}
/********************************************/
/* Définition des constantes pour le script */
/********************************************/

// Répertoire dans lequel sont situées les différentes photos
$imageDir = "img/conseil administration/";
$i=0;
$c=1;

/*************************************/
/* Affichage des images dans la page */
/*************************************/
echo "<table border=0>";
$dossier = opendir("$imageDir");
while($image = readdir($dossier)){
	$i=$i+1;

	$info = pathinfo($image);

	$extension = strtolower ( $info["extension"]);

	$nomImg = substr($image,0,strrpos($image,"."));
	if($nomImg == $nom){
	switch($extension){
	case "jpg":
	  $imgSrc = imagecreatefromjpeg("$imageDir/$image");
	  break;
	case "png":
	  $imgSrc = imagecreatefrompng("$imageDir/$image");
	  break;
	case "gif":
	  $imgSrc = imagecreatefromgif("$imageDir/$image");
	  break;
	default:
	  unset($imgSrc);
	  break;
}

if(isset($imgSrc)){ // Sinon il ne s'agit pas d'un type d'image supporté par notre application
	if ($c>1){
		$c = 1;
		echo "<tr>";
	}
	echo "<td>";
	$c++;
	// Affichage de l'image miniature dans la page (X)Html
	printf ("<a href=\"%s/%s\" target=\"Photos\"><img src=\"./img/miniConseilAdministration//%s.%s\" alt=\"Miniature générée dynamiquement\" /></a>", $imageDir,$image, miniature( $imgSrc, $nomImage),$extension);
	echo "</td>";
	echo "<td>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$nomImage;
	echo "</td>";
	} 
    }           
}
if($ok ==1)
{
	include("Actions/mysql.php");

	 $requete = "insert into photo(chemin)
		     values('miniConseilAdministration/$nomImage');"; 
	 $resultat = mysql_query($requete) or die(mysql_error());

	 $idPhoto = "select id from photo where chemin='miniConseilAdministration/$nomImage';";
	 $res = mysql_query($idPhoto) or die(mysql_error());
	 $ligne = mysql_fetch_array($res);
		$id = $ligne['id'];

	 $insertConseil = "insert into conseil_administration(nom, prenom, id_photo)
		           values('$nom','$prenom',$id);";
	 $resultat2 = mysql_query($insertConseil) or die(mysql_error());
 
  	mysql_close();
}
?>
</table>

<?php include("footer.php"); ?>

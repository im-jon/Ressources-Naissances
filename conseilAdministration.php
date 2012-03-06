<!DOCTYPE html>
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
$testDir= "img/miniConseilAdministration/";
if(!opendir("$testDir"))
{
   mkdir("img/miniConseilAdministration/");
   chmod ("img/miniConseilAdministration/", 0755); 
   // On ressample l'image initiale pour en créer une copie en miniature
   ImageCopyResampled($mini, $imgSrc, 0, 0, 0, 0, $l, $h, $lSrc, $hSrc);
   
   // On enregistre l'image dans le répertoire des miniatures
   imageJpeg ( $mini,"img/miniConseilAdministration/$nomImage.jpg");
}
   return $nomImage;
}
?> 
<?php include("header.php"); ?>
			<div id="titre">
			<h2>Notre conseil d'administration</h2>
			</div>
			<?php
				 /********************************************/
				 /* Définition des constantes pour le script */
				 /********************************************/
				 
				 // Répertoire dans lequel sont situées les différentes photos
				 $imageDir = "img/conseilAdministration/";
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
				   
				    $nomImage = substr($image,0,strrpos($image,"."));
				   
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
			      ?>
			   </table>
<?php include("footer.php"); ?>

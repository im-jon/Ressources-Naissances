<?php
function miniature( $imgSrc, $nomImage){
   // Largeur et hauteur des images miniatures
   $largeur = 200; $hauteur=150;


   // quelle taille fait notre image ?
   $largeurSrc = imagesx($imgSrc);
   $hauteurSrc = imagesy($imgSrc);
   
   // Création de l'image miniature en essayant de respecter le format portrait ou paysage

if($hauteurSrc > $largeurSrc){
      $l = $hauteur; $h = $largeur;
      $hSrc = $hauteurSrc; $lSrc = $largeurSrc;
   } else{
      $l = $largeur; $h = $hauteur;
      $lSrc = $largeurSrc; $hSrc = $hauteurSrc;
   }
   
   $mini = @ImageCreateTrueColor ($l, $h);

   
   // Création de quelques couleurs pour le cadre de la miniature
   $blanc = ImageColorAllocate ($mini, 255, 255, 255); 
 /*  $gris[0] = ImageColorAllocate ($mini, 90, 90, 90);  
   $gris[1] = ImageColorAllocate ($mini, 110, 110, 110);         
   $gris[2] = ImageColorAllocate ($mini, 130, 130, 130);  
   $gris[3] = ImageColorAllocate ($mini, 150, 150, 150);  
   $gris[4] = ImageColorAllocate ($mini, 170, 170, 170);  
   $gris[5] = ImageColorAllocate ($mini, 190, 190, 190);  
   $gris[6] = ImageColorAllocate ($mini, 210, 210, 210);  
   $gris[7] = ImageColorAllocate ($mini, 230, 230, 230);  

   // Dessin du cadre de la miniature
   for ($i=0; $i<=7; $i++) { 
     ImageFilledRectangle ($mini, $i, $i, $l-$i, $h-$i, $gris[$i]);
   }*/
   
   // On ressample l'image initiale pour en créer une copie en miniature
   ImageCopyResampled($mini, $imgSrc, 8, 8, 0, 0, $l-(2*8), $h-(2*8), $lSrc, $hSrc);

   // On écrit en blanc en bas à gauche le nom et la taille de l'image d'origine
   ImageString($mini, 0, 12, $h-18, "$nomImage - ($lSrc x $hSrc)", $blanc);
   
   // On enregistre l'image dans le répertoire des miniatures
   imageJpeg ( $mini,"img/mini/$nomImage.jpg");
   return $nomImage;
}

?>

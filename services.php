<?php 
$titre = "Bénévolat";
include("header.php"); ?>
		 
		 <link rel="stylesheet" type="text/css" href="css/styles.css">
		 <link rel="stylesheet" type="text/css" media="screen" href="jquery.ui.potato.menu.css" />

			
					 <script type="text/javascript" src="jquery.nivo.slider.js"></script>
		 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.ui.potato.menu.js"></script>
		<script type="text/javascript" src="js/afficherCacher.js"></script>


			<div id="texte">
			<p class="titreTexte">
			 <a href="#"><STRONG>Assistance à domicile</a></STRONG>&emsp;&emsp;&emsp;
			</p>
			<div class="contenuTexte">
			<p id=préambule>
			Vous avez besoin d'un peu de répit, d'un peu d'aide à la maison ? Vous manquez de temps et/ou d'énergie ? Une assistante périnatale ("une grand-maman sur mesure") peut vous offrir du soutien à domicile, prendre soin du nouveau-né ou des autres enfants, vous apporter une aide pour l’allaitement, les soins au bébé, effectuer de légères tâches ménagères et préparer de bons petits plats. Un ou deux services par semaine peuvent faire toute la différen
			</p>
			<p id=préambule>
				<fieldset><P><STRONG>Une assistante, c'est une femme qui :</STRONG></P>
				<UL>
				<LI>a été sélectionnée selon les exigences de Ressources-Naissances; 
				<LI>a des aptitudes en relation d'aide et une formation continue en ce qui a trait à la périnatalité; 
				<LI>adore les enfants et connaît bien les étapes de leur développement; 
				<LI>est sensibilisée à la réalité des nouvelles familles.</LI></UL>
				<P>Elle vous informe sur les ressources disponibles&nbsp;selon vos besoins.&nbsp; Elle vous écoute, vous supporte tout en vous permettant de prendre le répit dont vous avez besoin. </P>
				<P><STRONG>À qui s'adresse ce service ?</STRONG></P>
				<UL>
				<LI>aux femmes enceintes ayant besoin de repos en période prénatale; 
				<LI>aux familles, aux pères, aux mères durant la première année de vie de leur enfant.</LI></UL>
			</p>
			<p id=témoignage>
			<STRONG>Témoignages :</STRONG>
			<P>"L'énergie et la bonne humeur de l'assistante périnatale me donnent de l'énergie pour le reste de la semaine." </P>
<P>"... Cette aide ne m'a pas seulement aidée dans mon rôle de mère, elle m'a aussi aidée à maintenir une bonne santé physique et mentale."</P>
			</p>
			</fieldset>
			<fieldset></fieldset>
			</div>
			</div>
			

			<div id="allaitement">
				<p class="titreTexte">
				 <a href="#"><STRONG>Consultation individuelle en allaitement</a></STRONG>
				</p>
				<div class="contenuTexte">
				<fieldset><P><U>Sur rendez-vous seulement</U>,&nbsp;possibilité d'une rencontre individuelle pour vous soutenir dans votre allaitement.</P>
<P>Tarif : 20$ pour une heure de consultation.&nbsp; </P>

<P>Du lundi au vendredi, aux heures de bureau.&nbsp; Voir la section 'Nous joindre'.</P></fieldset>
			<fieldset></fieldset>
				</div>
			</div>
			<div id="consultationTel">
				<p class="titreTexte">
				 <a href="#"><STRONG>Consultation téléphonique</a></STRONG>
				</p>
			<div class="contenuTexte">
				<p id=préambule>
				Pour répondre à des demandes spécifiques concernant la grossesse, l'accouchement, l'allaitement, le postnatal, etc.
				</p>
				<fieldset><P><U>Gratuitement</U>,&nbsp;une conseillère est disponible par téléphone pour répondre à des demandes spécifiques.</P>
				<P>Du lundi au vendredi, aux heures de bureau.&nbsp; Voir la section 'Nous joindre'.</P></fieldset>
<fieldset></fieldset>
			<?php include("Actions/miniature.php");

     // Répertoire dans lequel sont situées les différentes photos
         $imageDir = "img/Photos/dossierTel";
         $i=0;
	 $c=1;
         
         /*************************************/
         /* Affichage des images dans la page */
         /*************************************/
         echo "<div><fieldset>";
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
            }	echo "</fieldset></div>";
            if(isset($imgSrc)){ // Sinon il ne s'agit pas d'un type d'image supporté par notre application
		if ($c>4){
	       	$c = 1;
		echo "<tr>";
		}
	       echo "<td>";
	       $c++;

               // Affichage de l'image miniature dans la page (X)Html
   	     echo "<center>";  printf ("<a href=\"%s/%s\" target=\"_self\"><img src=\"./img/mini/%s.%s\" alt=\"Miniature générée dynamiquement\" /></a>", $imageDir,$image, miniature( $imgSrc, $nomImage),$extension);
	     echo "</center>";  echo "</td>";
	
            }
	}  
		?>
				</div>
			</div>
	
			<div id="photos">
		
			</div>
		</div>
	</body>
</html>

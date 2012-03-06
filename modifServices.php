<?php 
$titre = "modifServices";
include("Actions/mysql.php");
include("header.php");
include("/var/cbeauvil/html/fckeditor/fckeditor.php");	// endroit où se situe FCKeditor
 $query="select * from service";
$result=mysql_query($query);
?>
		 
		 <link rel="stylesheet" type="text/css" href="css/styles.css">
		 <link rel="stylesheet" type="text/css" media="screen" href="jquery.ui.potato.menu.css" />

			
					 <script type="text/javascript" src="jquery.nivo.slider.js"></script>
		 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.ui.potato.menu.js"></script>
		<script type="text/javascript" src="js/afficherCacher.js"></script>

<form action="modifServiceEnregistrePage" method="post">
<?php
$x=0;
 while($val = mysql_fetch_array($result))
{
	
	$nom=$val['titrePage'];
	$description=$val['lienPage'];
echo "Titre du paragraphe :</br>";
echo "<input type='text' name='titre".$x."' value='$nom' size='50'></br></br>";


$i=0;  #Checker avec ou sans cacher les corps
$j=1;  #Checker contenu corps ou fckEditor
#Ideal afficher tout contenu corps et bouton modifier sous chaque -> un fckEditor max d'ouvert ou + si affinité
if($i==1)
{
echo "<div class='titreTexte'>";
echo "Afficher/Cacher contenu :</br>";
echo "</div>";
echo "<div class='contenuTexte'>";
}

if($j==1)
{

include($description);

}
else
{
$fp = fopen($description, "r"); // Ouverture du fichier
while(!feof($fp)) // On parcout toutes les lignes
{
$leFichier.=fgets($fp,4096); // Lecture du contenu de la ligne
}
fclose($fp);

$oFCKeditor = new FCKeditor('FCKeditor'.$x); // nouvelle instance de FCKeditor
$oFCKeditor->Width = '100%';
$oFCKeditor->Height = '400';
$oFCKeditor->BasePath = '/fckeditor/';
$oFCKeditor->Value = $leFichier;
echo "<table border=1 width='85%' Height='400'><TR><TD>";
$oFCKeditor->Create();
echo "</TD></TR></table>";

#echo "Enregistrer le fichier sous :<input type = 'text' name = ('nomFichier'.$x) size='20' value = '".$description."'></br>";

$x++;
$leFichier=null;
echo '<input type="submit" value="Enregistrer">';

echo "</br>";
}  # } du if(j==1)

if($i==1)
{
echo "</div>";
}

echo "</br>";
echo "</br>";
} # } du while

?>
</form>



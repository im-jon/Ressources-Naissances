<?php 
$titre = "modifServices";
include("Actions/mysql.php");
include("header.php");
 $query="select * from service";
$result=mysql_query($query);
?>
		 
		 <link rel="stylesheet" type="text/css" href="css/styles.css">
		 <link rel="stylesheet" type="text/css" media="screen" href="jquery.ui.potato.menu.css" />

			
					 <script type="text/javascript" src="jquery.nivo.slider.js"></script>
		 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.ui.potato.menu.js"></script>
		<script type="text/javascript" src="js/afficherCacher.js"></script>


<HTML>
<HEAD>
<TITLE></TITLE>
</HEAD>
<BODY>


<?php  
echo "<H1>Modification Services</H1>";
$x=1;
while($val = mysql_fetch_array($result))
{
	
	$nom=$val['titrePage'];
	$description=$val['lienPage'];


if(isset($_REQUEST['numBut']) && $_REQUEST['numBut']==$x)
{
echo "<form action='modifServiceEnregistrePage.php?idRecup=$x' method='post'>";
echo"<fieldset id=modifService>";
echo "<div class='titreTexte'>";
echo "<a href='#'>Titre du paragraphe :</a>";
echo "</div>";
echo "</br></br>";
echo "<input type='text' name='titre".$x."' value='$nom' size='50'></br></br>";


$fp = fopen($description, "r"); // Ouverture du fichier
$leFichier=null;
while(!feof($fp)) // On parcout toutes les lignes
{
$leFichier.=fgets($fp,4096); // Lecture du contenu de la ligne
}
fclose($fp);

include("ckeditor/ckeditor.php");

$CKEditor = new CKEditor();
$CKEditor->basePath = 'ckeditor/';
$CKEditor->config['height'] = '400px';


echo "<table border=1 width='85%' Height='400'><TR><TD>";
$CKEditor->editor('ckeditor' . $x, $leFichier);
echo "</TD></TR></table>";

$leFichier=null;
echo "</br>";
echo '<input type="submit" value="Enregistrer">';
echo"</fieldset>";
echo "</br>";
} # } du if


else
{
echo "<form action='modifServices?numBut=".$x."' method='post'>";

echo "<div class='titreTexte'>";
echo "<a href='#'>$nom</a></br>";
echo "</div>";
echo "<div class='contenuTexte'>";
include($description);
echo "";
echo "</div>";
echo "</br>";
echo '<input type="submit" value="Modifier">'; echo '&nbsp;&nbsp;Attention, si une édition est déjà ouverte et non sauvegardée, les données seront supprimées';
#echo "</br></br>";
}  # } du else



$x++;
?>
</form>
<?php
} # } du while

echo "</br><A HREF='modifServices.php'>Retour affichage initial</A>";
?>

</BODY>
</HTML>
<?php include('footer.php') ?>


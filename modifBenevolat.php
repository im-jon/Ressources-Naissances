<?php 
$titre = "modifBenevolat";
include("Actions/mysql.php");
include("header.php");
include("/var/cbeauvil/html/fckeditor/fckeditor.php");	// endroit où se situe FCKeditor
 $query="select * from benevole";
$result=mysql_query($query);
?>
		 
		 <link rel="stylesheet" type="text/css" href="css/styles.css">
		 <link rel="stylesheet" type="text/css" media="screen" href="jquery.ui.potato.menu.css" />

			
					 <script type="text/javascript" src="jquery.nivo.slider.js"></script>
		 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.ui.potato.menu.js"></script>
		<script type="text/javascript" src="js/afficherCacher.js"></script>


<?php  
echo "<H1>Modification Benevolat</H1>";
$x=1;
while($val = mysql_fetch_array($result))
{
	
	$nom=$val['nom'];
	$description=$val['lienPage'];




if($_REQUEST['numBut']==$x)
{
echo "<form action='modifBenevolatEnregistrePage.php?idRecup=$x' method='post'>";
echo"<fieldset id=modifService>";
echo "<div class='titreTexte'>";
echo "<a href='#'>Titre du paragraphe :</a>";
echo "</div>";
echo "</br></br>";
echo "<input type=\"text\" name=\"titre".$x."\" value=\"$nom\" size=\"50\"></br></br>";


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

$leFichier=null;
echo "</br>";
echo '<input type="submit" value="Enregistrer">';
echo"</fieldset>";
echo "</br>";
} # } du if


else
{
echo "<form action='modifBenevolat?numBut=".$x."' method='post'>";

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

echo "</br><A HREF='modifBenevolat.php'>Retour affichage initial</A>";
?>

<?php include('footer.php') ?>


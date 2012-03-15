<?php 
$titre = "nouveauBenevolat";
include("Actions/mysql.php");
include("header.php");
include("/var/cbeauvil/html/fckeditor/fckeditor.php");	// endroit où se situe FCKeditor
$query="select count(id) from benevole";
$result=mysql_query($query);
?>
		 
		 <link rel="stylesheet" type="text/css" href="css/styles.css">
		 <link rel="stylesheet" type="text/css" media="screen" href="jquery.ui.potato.menu.css" />

			
					 <script type="text/javascript" src="jquery.nivo.slider.js"></script>
		 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.ui.potato.menu.js"></script>
		<script type="text/javascript" src="js/afficherCacher.js"></script>


<?php  

echo "$result</br>";
	
	$num=$result++;
	$description="benevolat".$num.".html";

echo $description;


echo "<H1>Nouveau \"Benevolat\"</H1>";
echo "<form action='enregistreNouveauBenevolat.php?description=".$description."' method='post'>";
echo"<fieldset id=modifService>";
echo "<div class='titreTexte'>";
echo "<a href='#'>Titre du paragraphe :</a>";
echo "</div>";
echo "</br></br>";
echo "<input type='text' name='titre' value='' size='50'></br></br>";


$fp = fopen($description, "w"); // Ouverture du fichier


fclose($fp);

$oFCKeditor = new FCKeditor('FCKeditor'); // nouvelle instance de FCKeditor
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







$x++;
?>
</form>
<?php


?>

<?php include('footer.php') ?>


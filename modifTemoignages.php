<?php 
$titre = "modifTemoignages";
include("Actions/mysql.php");
include("header.php");
 $query="select * from evaluation";
$result=mysql_query($query);
?>
		 
		 <link rel="stylesheet" type="text/css" href="css/styles.css">
		 <link rel="stylesheet" type="text/css" media="screen" href="jquery.ui.potato.menu.css" />

			
					 <script type="text/javascript" src="jquery.nivo.slider.js"></script>
		 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.ui.potato.menu.js"></script>
		<script type="text/javascript" src="js/afficherCacher.js"></script>





<H1>Modifier témoignages</H1>

<form action="enregistreTemoignages.php" method="post">
<?php echo "<fieldset id=modifService>";


while($val = mysql_fetch_array($result))
{
	$description=$val['lienPage'];
}

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
$CKEditor->editor('ckeditor', $leFichier);
echo "</TD></TR></table>";

$leFichier=null;
echo "</br>";
echo '<input type="submit" value="Enregistrer">';
echo"</fieldset>";
echo "</br>";







?>
</form>
<?php


?>

<?php include('footer.php') ?>


<?php 
$titre = "nouveauService";
include("Actions/mysql.php");
include("header.php");

?>
		 
		 <link rel="stylesheet" type="text/css" href="css/styles.css">
		 <link rel="stylesheet" type="text/css" media="screen" href="jquery.ui.potato.menu.css" />

			
					 <script type="text/javascript" src="jquery.nivo.slider.js"></script>
		 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.ui.potato.menu.js"></script>
		<script type="text/javascript" src="js/afficherCacher.js"></script>





<H1>Nouveau Service</H1>
<form action="enregistreNouveauService.php" method="post">
<?php echo "<fieldset id=modifService>";
echo "<div class='titreTexte'>";
echo "<a href='#'>Titre du paragraphe :</a>";
echo "</div>";
echo "</br></br>";
echo "<input type='text' name='titre' size='50'></br></br>";


include("ckeditor/ckeditor.php");

$CKEditor = new CKEditor();
$CKEditor->basePath = 'ckeditor/';
$CKEditor->config['height'] = '400px';

echo "<table border=1 width='85%' Height='400'><TR><TD>";
$CKEditor->editor("description");
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


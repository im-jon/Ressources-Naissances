<?php
session_start();
include('Actions/fonctions.php');

if (!estAutorise(2)) {
	die();
}

if(isset($_REQUEST['submit'])) {
	include('Actions/mysql.php');
	
	$titre = mysql_real_escape_string($_REQUEST['titre']);
	$contenu = mysql_real_escape_string($_REQUEST['description']);

	$requete = "INSERT INTO nouvelle (date_creation, titre, contenu) VALUES(NOW(), '$titre', '$contenu')";
	mysql_query($requete) or die(mysql_error());

	header('Location: panneau.php');
}

include("ckeditor/ckeditor.php");

$CKEditor = new CKEditor();
$CKEditor->basePath = 'ckeditor/';
$CKEditor->config['height'] = '600px';

?>

<?php include("header.php"); ?>

<h1>Ajouter une nouvelle</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
		<label for="titre">Titre :</label><br/>
		<input type="text" name="titre" id="titre" size="70"/><br/>

		<label for="CKEditor">Description :</label><br/>
		<?php $CKEditor->editor("description"); ?>

		<input type="submit" name="submit" id="submit" value="Enregistrer">
	</form>

<?php include("footer.php"); ?>

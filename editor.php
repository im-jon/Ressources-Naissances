<?php
session_start();
include('Actions/fonctions.php');

if (!estAutorise(2)) {
	die();
}



include("ckeditor/ckeditor.php");
$nom = $_REQUEST['nomfichierouvrir'];
$lefichier = '';

$fp = fopen($nom,"r");

while(!feof($fp)) {
	$lefichier .= fgets($fp, 4096);
}

fclose($fp);

$CKEditor = new CKEditor();
$CKEditor->basePath = 'ckeditor/';
$CKEditor->config['height'] = '600px';

?>

<?php include("header.php"); ?>

<div id="titre"><h2>Editez vos pages</h2></div>
<center>
	<form action="editor2.php" method="POST">
		<?php $CKEditor->editor("CKEditor", $lefichier); ?>
		<input type="hidden" name="nomfichier" value="<?= $nom ?>">		
		<input type="submit" value="Enregistrer">
	</form>
	<br/><br/>
	
</center>

<?php include("footer.php"); ?>

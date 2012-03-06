<?php
session_start();
include('Actions/fonctions.php');

if (!estAutorise(2)) {
	die();
}


if (!isset($_REQUEST['nomfichier']) || !isset($_REQUEST['CKEditor'])) {
	header('Location: panneau.php');
	die();
}
?>

<?php include("header.php"); ?>

<div id="titre">
<h2>Editez vos pages</h2>
</div>
<center>
	<?php
		$nomfichier = $_REQUEST['nomfichier'];
		$letout = stripslashes($_REQUEST['CKEditor']);
	
		$fp = fopen($nomfichier,"w");
		fputs($fp, $letout);
		fclose($fp);

		echo $letout;
	?>
</center>

<?php include("footer.php"); ?>

<?php 
session_start();
include('Actions/fonctions.php');

if (!estAutorise(2)) {
	die();
}

?>

<?php include("header.php"); ?>

<div id="titre">
<h2>Editez vos pages</h2>
</div>
<center>
	<form action="editor.php" method="post">
		Ouvrir le fichier:
		<select name="nomfichierouvrir">
			<option value="mission.txt">mission</option>
			<option value="historique.txt">historique</option>
			<option value="nousJoindre.txt">nous joindre</option>
			<option value="NousSoutenir.txt">Nous Soutenir</option>
			<option value="lienUtile.txt">lien utile</option>
			<option value="membres.txt">membres</option>
		 </select>
		<input type="submit" value="Editer">
	</form>
</center>

<?php include("footer.php"); ?>

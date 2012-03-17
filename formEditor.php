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
	<form action="editor.php" method="GET">
		Ouvrir le fichier:
		<select name="nomfichierouvrir">
			<option value="mission.txt">mission</option>
			<option value="historique.txt">historique</option>
			<option value="nousJoindre.txt">nous joindre</option>
			<option value="NousSoutenir.txt">Nous Soutenir</option>
			<option value="lienUtile.txt">lien utile</option>
			<option value="membres.txt">membres</option>
			<option value="benevole.txt">benevole</option>
			<option value="article.txt">article</option>
			<option value="notreEquipe.txt">notre equipe</option>
			<option value="partenariat.txt">partenariat</option>
		 </select>
		<input type="submit" value="Editer">
	</form>
</center>

<?php include("footer.php"); ?>

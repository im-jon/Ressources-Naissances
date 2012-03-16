<?php
//Antoine Laroche
//Page qui sert à modifier la page d'accueil
$titre = "Modifier_Accueil";
include("header.php"); 
include("ckeditor/ckeditor.php");

$CKEditor = new CKEditor();
$CKEditor->basePath = 'ckeditor/';
$CKEditor->config['height'] = '600px';?>

<script src="js/slides.min.jquery.js" type="text/javascript"></script>
<script src="js/pages/index.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
    // function s'active à la fin du chargement de la page
	$('.desc').hide();
	$('.titre').click(function() {
                    $(this).next().slideToggle();
	});
});
</script>

<div class="titre"><a href="#">Ajouter une image pour le diaporama</a></div>

<div class="desc">
	<h2>Ajout d'une publication</h2>
	<form method="post" action="upload_diapo.php" enctype="multipart/form-data">
			La publication a ajouter
			<input type="file" name="fichier"></input></br>
			<input type="hidden" name="MAX_FILE_SIZE" value="100000000"></input></br>
			Cocher si la publication est une gazette des poussettes
			<input type="checkbox" name="gazette" /></br>
			<input type="submit" name="Submit" value="Envoyez votre publications"></input>
	</form>
</div>

<div class="titre"><a href="#">Changer le vidéo promotionel</a></div>

<div class="desc">
	
</div>

<div class="titre"><a href="#">Changer le texte pour les certificats-cadeau</a></div>

<div class="desc">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
		<label for="titre">Titre :</label><br/>
		<input type="text" name="titre" id="titre" size="70"/><br/>

		<label for="CKEditor">Description :</label><br/>
		<?php $CKEditor->editor("description"); ?>

		<input type="submit" name="submit" id="submit" value="Enregistrer">
	</form>
</div>

<div class="titre"><a href="#">Changer le texte de présentation</a></div>

<div class="desc">
	
</div>

<?php include("footer.php"); ?>
<?php
//Antoine Laroche
//Page qui sert à modifier la page d'accueil
//Si la page se rappelle elle-même avec le paramètre Cadeau alors il a fait appel au formulaire pour changer les Certificats-Cadeau
if(isset($_REQUEST['cadeau'])){
	$fichier1 = fopen("certificat-cadeau.txt","w");
	fwrite($fichier1,$_REQUEST['txtcadeau']);
	fclose($fichier1);
	
}
//Si le paramètre est presentation alors il modifie le texte de présentation
elseif(isset($_REQUEST['presentation'])){
	$fichier2 = fopen("presentation.txt","w");
	fwrite($fichier2,$_REQUEST['txtpresentation']);
	fclose($fichier2);
}

$titre = "Modifier_Accueil";
include("header.php"); 
include("ckeditor/ckeditor.php");

$CKEditor1 = new CKEditor();
$CKEditor1->basePath = 'ckeditor/';
$CKEditor1->config['height'] = '600px';

$CKEditor2 = new CKEditor();
$CKEditor2->basePath = 'ckeditor/';
$CKEditor2->config['height'] = '600px';
?>

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

<h1>Modifier la page d'accueil</h1>

<div class="titre"><a href="#">Ajouter une image pour le diaporama</a></div>

<div class="desc">
	<h2>Ajout d'une image</h2>
	Taille recommandé pour l'image 950 par 250
	<form method="post" action="upload_diapo.php" enctype="multipart/form-data">
			L'image a ajouter
			<input type="file" name="fichier"></input></br>
			<input type="hidden" name="MAX_FILE_SIZE" value="10000000000"></input></br>
			<input type="submit" name="Submit" value="Envoyez votre image"></input>
	</form>
</div>

<div class="titre"><a href="#">Changer le texte pour les certificats-cadeau</a></div>

<div class="desc">
	<?php 
		$fp1 = fopen("certificat-cadeau.txt","r");
		$contenu1=null;
		while(!feof($fp1))
			$contenu1.= fgets($fp1,4096);
		fclose($fp1);
		
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">

		<label for="CKEditor">Description :</label><br/>
		<?php $CKEditor1->editor("txtcadeau", $contenu1); ?>

		<input type="submit" name="cadeau" id="submit" value="Enregistrer">
	</form>
</div>

<div class="titre"><a href="#">Changer le texte de présentation</a></div>
	
<div class="desc">
	<?php 
		$fp2 = fopen("presentation.txt","r");
		$contenu2=null;
		while(!feof($fp2))
			$contenu2.= fgets($fp2,4096);
		fclose($fp2);
		
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">

		<label for="CKEditor">Description :</label><br/>
		<?php $CKEditor2->editor("txtpresentation", $contenu2); ?>

		<input type="submit" name="presentation" id="submit" value="Enregistrer">
	</form>
</div>

<?php include("footer.php"); ?>
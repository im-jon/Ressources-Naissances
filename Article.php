<?php
//Antoine Laroche, page qui sert à affiche les articles contenu dans le fichier article.txt
$titre = "Article";
include("header.php"); ?>
<script type="text/javascript">
$(function() {
    // function s'active à la fin du chargement de la page
	$('.desc').hide();
	$('.titre').click(function() {
                    $(this).next().slideToggle('slow');
	});
});
</script>
	
<?php  include("article.txt");	
	include("footer.php"); ?>

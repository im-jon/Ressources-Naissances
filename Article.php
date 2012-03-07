<?php 
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
	
	<?php  
	 include("article.txt");
# 	   include("Actions//mysql.php");
# 	   //Affiche l'article le plus récent
# 	   $requete = "SELECT contenu,titre,source FROM article ORDER BY id;";
# 	   $resultat = mysql_query($requete);
# 	   while($article = mysql_fetch_array($resultat))
# 	   {
# 		echo '<div class="titre"><a href="#">'.$article["titre"]."</a></br>";
# 		echo "<reference>".$article["source"]."</reference></div>";
# 		echo '<div class="desc"><tgauche>'.$article["contenu"]."</tgauche></div></br>";
# 	   }
# 	   
# 	   mysql_close();
		
	include("footer.php"); ?>
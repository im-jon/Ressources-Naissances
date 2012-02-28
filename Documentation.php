<?php 
$titre = "Nous Soutenir";
include("header.php"); ?>
<script type="text/javascript">
$(function() {
    // function s'active à la fin du chargement de la page
	$('.desc').hide();
	$('.titre').click(function() {
                    $(this).next().slideToggle();
	});
});
</script>
    
         <h1>Documentation>Articles</h1>
        </br>
        <?php  
	   mysql_connect('localhost','root','fullmetal');
	   mysql_select_db('test');
	   
	   //Affiche l'article le plus récent
	   $requete = "SELECT Texte,Titre,Source FROM Article ORDER BY IdArticle;";
	   $resultat = mysql_query($requete);
	   while($article = mysql_fetch_array($resultat))
	   {
		echo '<div class="titre"><a href="#">'.$article["Titre"]."</a></br>";
		echo "<reference>".$article["Source"]."</reference></div>";
		echo '<div class="desc"><tgauche>'.$article["Texte"]."</tgauche></div></br>";
	   }
	   
	   mysql_close();
	?>
	
    
    
<?php include("footer.php"); ?>
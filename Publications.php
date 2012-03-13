<?php 
	//Antoine Laroche
	//Cette page affiche les publications qui sont dans la bd
	$titre = "Publications";
	include("header.php"); 
	include("Actions//mysql.php");

	 echo "<h1>Publications</h1>";
	 //On va chercher dans les publications qui sont des gazette des pousettes
	 $gazette = "SELECT nom,chemin FROM publications WHERE gazette = 1 ORDER BY id DESC;";
	 $resultat = mysql_query($gazette);
	 $i = 1;
	 while($publications = mysql_fetch_array($resultat))
	   {
		if($i == 1)
			echo '<h2>Dernière gazette des pousettes</h2><div class="titre"><a href="'. $publications["chemin"]. '">' . $publications["nom"] . "</a>";
		else if($i == 2)
			echo '<h2>Archive</h2><div class="titre"><a href="'. $publications["chemin"]. '">' . $publications["nom"] . "</a>";
		else
			echo '<div class="titre"><a href="'. $publications["chemin"]. '">' . $publications["nom"] . "</a>";
		$i = $i + 1;
	   }
	   $i = 1;
	   echo "<h2> Autre publications</h2>";
	 $autrepub = "SELECT nom,chemin FROM publications WHERE gazette = 0 ORDER BY id DESC;";
	 $resultat2 = mysql_query($autrepub);
	 
	 while($pub2 = mysql_fetch_array($resultat2))
			echo '<div class="titre"><a href="'. $pub2["chemin"]. '">' . $pub2["nom"] . "</a>";
	
	mysql_close();
	include("footer.php"); 
?>

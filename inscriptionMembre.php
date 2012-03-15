	<!DOCTYPE html>
<?php include("header.php"); ?>	
				<div id="titre">
					<h2>Resultat de l'inscription</h2>
				</div>		
				<?php
					$nom = $_REQUEST['nomMembre'];

					include("Actions/mysql.php");

					$requete = "insert into membre(nom)
						    value('".$nom."');";
					
					$resultat = mysql_query($requete);

					if($resultat)
					{
						echo "<center>";
						echo "Vous etes devenu membre: ".$nom;
						echo "</center>";
					}
					else
					{
						echo "<center>";
						echo "Une erreur est survenu lors de votre isncription !";	
						echo "</center>";				
					}
				?>
			
<?php include("footer.php");

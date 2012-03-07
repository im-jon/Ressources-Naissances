	<!DOCTYPE html>
<?php include("header.php"); ?>	
			<div id="titre">
				<h2>Formulaire pour devenir membre</h2>
			</div>	
			<center>			
				<form method="post" action="inscriptionMembre.php"><br/><br/>
					Nom:&nbsp;&nbsp;&nbsp;<input type="text" id="nomMembre" name="nomMembre" size="25" required /><br/><br/>
					<input type="submit" name="soumettre" value="S'inscrire"/>
			   		<input type="reset" value="Annuler"/>
				</form>
			</center>
<?php include("footer.php");

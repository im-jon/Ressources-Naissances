<!DOCTYPE html>
<?php include("header.php"); ?>
	<script type="text/javascript">
		$(function() {
		    // function s'active à la fin du chargement de la page
			$('.desc').hide();
			$('.titre').click(function() {
				    $(this).next().slideToggle();
			});
		});
	</script>
	<div id="titre">
		<h2>Liens utiles</h2>
	</div>
	<ul>
		<li><a href="lienUtile.php#allaitement">Allaitement</a></li>
		<li><a href="lienUtile.php#familles">Familles et parents</a></li>
		<li><a href="lienUtile.php#gardiennage">Gardiennage et répit</a></li>
		<li><a href="lienUtile.php#ligneEcoute">Ligne d'écoute</a></li>
		<li><a href="lienUtile.php#prenatal">Prénatal et postnatal</a></li>
		<li><a href="lienUtile.php#ressourcesFemmes">Ressources pour femmes</a></li>
		<li><a href="lienUtile.php#ressourcesHommes">Ressources pour hommes</a></li>
		<li><a href="lienUtile.php#entraide">Services d'entraide et dépannage</a></li>
		<li><a href="lienUtile.php#servicePublics">Services publics</a></li>
		<li><a href="lienUtile.php#urgence">Urgence</a></li>
	</ul>
	<div id="allaitement"><h2>Allaitement</h2>
		<div class="titre"><a href="#">Allaitement Québec</a></div>
		<div class="desc">
			<tgauche>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Allaitement Québec est un organisme d'entraide mère à mère qui a comme principal objectif<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d'offrir du soutien aux femmes enceintes qui allaitent.<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tél. : 418-623-0971<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mail : allaitementquebec@ccapcable.com
			</tgauche>
		</div>
	</div>
	
<?php include("footer.php"); ?>

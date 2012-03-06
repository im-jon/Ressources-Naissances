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
			<h2>Historique de l'association</h2>
			</div>
			<?php include("historique.txt"); ?>
<?php include("footer.php"); ?>

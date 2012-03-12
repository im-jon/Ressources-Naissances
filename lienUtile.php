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

<?php 
	include("lienUtile.txt");
	include("footer.php"); 
?>

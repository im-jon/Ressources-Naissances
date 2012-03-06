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

<?php include("NousSoutenir.txt");

include("footer.php"); ?>
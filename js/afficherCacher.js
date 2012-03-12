$(function() {		// function s'active à la fin du chargement de la page
	$('.contenuTexte').hide();
	$('.titreTexte').click(function() {
		// Va chercher l'élément après (normalement le paragraphe). ATTENTION: pas testé!
		$(this).next().slideToggle();
	});
});


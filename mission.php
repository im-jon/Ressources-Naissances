<!DOCTYPE html>
                   
<html>
	<head>
	<!-- informations sur le document -->
		 <meta name="language" content="fr">
		 <meta name="author" content="Laroche Antoine & Maurin Anthony">
		 <meta name="subject" content="Ressources naissance">
		 <meta name="description" content="Un éventail de services et d’activités pour les futurs parents afin de répondre aux nombreux besoins durant la période prénatale et pour les familles durant la première année du nouveau-né.">
		 <meta http-equiv="content-type" content="text/html; charset=utf-8">
		 <title>Ressources-naissances</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
		 <link rel="stylesheet" type="text/css" media="screen" href="jquery.ui.potato.menu.css" />
		 <script type="text/javascript" src="jquery.nivo.slider.js"></script>
		 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.ui.potato.menu.js"></script>
		<script type="text/javascript">
			(function($) 
			{
				$(document).ready(function()
				{
					$('#menu1').ptMenu();
				});
			})(jQuery);
		</script>
	</head>
	<body>
	<!-- corps du document -->
		<div id="banniere">
		<h1> Ressources-naissances bannière</h1>
		</div>
		<div id="contenu">
			<div id="titre">
			<h2>Accueil ressources-naissances</h2>
			</div>
			<div id="menu-bas">

				<ul id="menu1">
					<li><a href="squelette.php">ACCUEIL</a></li>
					<li>
						<a href="#">À PROPOS DE NOUS</a>
						<ul>
							<li><a href="mission.php">Mission</a></li>
							<li><a href="historique.php">Historique</a></li>
							<li><a href="conseilAdministration.php">Conseil d'administration</a></li>
							<li><a href="notreEquipe.php">Notre équipe</a></li>
							<li><a href="membres.php">Membres</a></li>
							<li><a href="#">Bénévoles</a></li>
						</ul>
					</li>
					<li>
						<a href="#">ATELIERS/ACTIVITÉS</a>
						<ul>
							<li><a href="#">BÉBÉ S'EN VIENT</a></li>
							<li><a href="#">BÉBÉ EST ARRIVÉ</a></li>
							<li><a href="#">Cafés-rencontres</a></li>
							<li><a href="#">Espace allaitement</a></li>
							<li><a href="#">Balado poussette</a></li>
							<li><a href="#">Conférences</a></li>
						</ul>
					</li>
					<li>
						<a href="#">SERVICES</a>
						<ul>
							<li><a href="#">Consultation individuelle en allaitement</a></li>
							<li><a href="#">Consultation téléphone</a></li>
							<li><a href="#">Marrainage en allaitement</a></li>
						</ul>
					</li>
					<li><a href="#">ASSISTANCE PÉRINATALE À DOMICILE</a></li>
					<li>
						<a href="#">PARTENARIAT</a>
						<ul>
							<li><a href="#">Partenaires financiers</a></li>
							<li><a href="#">Organismes partenaires</a></li>
							<li><a href="#">Participation à des regroupements</a></li>
						</ul>
					</li>
					<li><a href="#">NOUS SOUTENIR</a></li>
					<li><a href="#">BÉNÉVOLAT</a></li>
					<li>
						<a href="#">DOCUMENTATION</a>
						<ul>
							<li><a href="#">Articles</a></li>
							<li><a href="#">Publications</a></li>
						</ul>
					</li>
					<li><a href="nousJoindre.php">NOUS JOINDRE</a></li>
					<li><a href="#">LIENS UTILES</a></li>

				</ul>
			</div>
			<div id="menu-droite">
		
			</div>
			
			<table>
				<tr>
					<td>
						<!--Image mission-->
						<img src="images/logoPetit.jpg" >
					</td>
					<td>
						<br/><u><b>Mission:</b></u><br/><br/>
						&nbsp;&nbsp;&nbsp;Ressources-Naissances est un organisme sans but lucratif qui offre des services et des activités accessibles <br/>
						&nbsp;&nbsp;&nbsp;à tous durant la grossesse et la première année de l'enfant tout en favorisant les échanges entre les familles,<br/>
						&nbsp;&nbsp;&nbsp;l'entraide et l'implication communautaire.<br/><br/>
						&nbsp;&nbsp;&nbsp;Ressources-Naissances adapte et intensifie son offre de services pour les familles vivant des situations difficiles:
						<ul>
							<li> gratuité</li>
							<li> accompagnement individuel</li>
							<li> activités de groupe planifiés selon les besoins</li>
						</ul>
					</td>
				</tr>
			</table>
			
			
			<?php
				include('bloc_partage.html');
			?>
		</div>
	</body>
</html>

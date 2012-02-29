<!DOCTYPE html>
                   
<html>
	<head>
	<!-- informations sur le document -->
		 <meta name="language" content="fr">
		 <meta name="author" content="Laroche Antoine & Maurin Anthony">
		 <meta name="subject" content="Ressources naissance">
		 <meta name="description" content="Un éventail de services et dactivités pour les futurs parents afin de répondre aux nombreux besoins durant la période prénatale et pour les familles durant la première année du nouveau-né.">
		 <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
		 <title>Ressources-naissances</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
		 <link rel="stylesheet" type="text/css" media="screen" href="jquery.ui.potato.menu.css" />
		 <script type="text/javascript" src="jquery.nivo.slider.js"></script>
		 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.ui.potato.menu.js"></script>
		<script type="text/javascript" src="js/bloc.js"></script>
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
			<div>
				<ul>
					<li>
						<a href="" onclick="bascule('directrice'); return false;">Céline Béland: Directrice</a><br/>				
						<p id='directrice' style='display:none;'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Formée en psychologie et suite à la naissance de sa fille, elle s’est engagée dans le milieu communautaire<br/>	
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;de Lévis notamment pour la fondation de la Maison de la Famille Rive-Sud. En 1987, elle devenait<br/>	
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coordonnatrice de Mère-Contact ; avec les bénévoles et d’autres salariées, elle a développé les services<br/>	 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;et activités que vous retrouvez aujourd’hui à Ressources-Naissances.<br/><br/> 
						</p>
					</li>
					<li>
						<a href="" onclick="bascule('adjointeAdministrative'); return false;">Esther Bolduc: Adjointe administrative</a><br/>				
						<p id='adjointeAdministrative' style='display:none;'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D’abord formée en service social, elle choisit de se consacrer à ses 3 enfants et investit ses nombreux<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;talents dans la communauté à titre bénévole : service d’entraide, comité d’école, co-fondatrice de <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l’organisme « Au grenier de mon enfance ». Elle fait aussi des études collégiales en techniques de <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bureautique.  Elle travaille à Ressources-Naissances depuis septembre 2000.<br/><br/> 
						</p>
					</li>
					<li>
						<a href="" onclick="bascule('coordonnatrice'); return false;">Marie-Josée Nadeau: Coordonnatrice des activités communautaires et bénévoles</a><br/>				
						<p id='coordonnatrice' style='display:none;'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sa formation en technique d’assistance sociale, enrichie d’un certificat universitaire dans le même <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;domaine, l’a amenée à travailler en CLSC et au sein d’organismes communautaires variés (santé mentale, <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;service d’entraide, personnes handicapées). Elle a eu un enfant en 1992. Depuis 1996, elle a assumé différentes<br/>
						        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fonctions au sein de l’organisme : assistance à domicile, responsable des cafés-rencontres, soutien <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;des bénévoles, concertation dans le milieu, organisation d’activités communautaires. Au fil des ans, <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elle s’est perfectionnée par diverses formations en intervention communautaire et en périnatalité.<br/><br/>
						</p>
					</li>
					<li>
						<a href="" onclick="bascule('assistanteADomicile'); return false;">Diane Cantin: Assistante à domicile</a><br/>				
						<p id='assistanteADomicile' style='display:none;'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mère de 2 enfants, elle a été éducatrice au foyer. Elle a travaillé surtout dans l’alimentation et <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;la restauration ; elle a gardé des enfants à la maison pendant 10 ans et travaille dans notre <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;organisme à titre d’assistante depuis août 1998. <br/><br/>
						</p>
					</li>
					<li>
						<a href="" onclick="bascule('assistanteADomicile2'); return false;">Lise Vermette: Assistante à domicile</a><br/>				
						<p id='assistanteADomicile2' style='display:none;'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Elle est mère de 2 enfants ; elle a travaillé comme commis de bureau. Pendant 2 ans, elle a été <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gardienne d’enfants à son domicile. Elle a plusieurs activités bénévoles à son actif : bibliothèque, <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;marché aux puces au profit d’une halte-garderie, comité de pastorale, catéchète, etc.) Elle est <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assistante depuis avril 1999. <br/><br/>
						</p>
					</li>
					<li>
						<a href="" onclick="bascule('assistanteADomicile3'); return false;">Louise Ouellet: Assistante à domicile</a><br/>				
						<p id='assistanteADomicile3' style='display:none;'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mère de 2 enfants, elle a combiné son rôle de mère au foyer avec le gardiennage d’enfants. Elle <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;s’est aussi occupée de personnes âgées à titre de dame de compagnie. Elle est aussi couturière. <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Elle est à l’emploi de l’organisme depuis mai 2005. <br/><br/>
						</p>
					</li>
					<li>
						<a href="" onclick="bascule('assistanteADomicile4'); return false;">Julie Lavoie: Assistante à domicile</a><br/>				
						<p id='assistanteADomicile4' style='display:none;'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mère de 3 enfants, elle a opéré à la maison pendant 16 ans une garderie pour les petits de 2 mois <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;et plus. Elle a aussi travaillé pendant 1 an à l'accueil pédiatrique de l'Hôtel-Dieu de Lévis. <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Elle s'est engagée bénévolement à l'école primaire de ses enfants, elle y a travaillé à l'organisation <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d'activités et a été membre du conseil d'établissement pendant 8 ans.  Elle est à l'emploi de <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ressources-Naissances depuis mars 2009. <br/><br/>
						</p>
					</li>
					<li>
						<a href="" onclick="bascule('animatriceCoordonatrice'); return false;">Julie Bolduc: Animatrice d'ateliers, coordonnatrice des marraines d'allaitement</a><br/>				
						<p id='animatriceCoordonatrice' style='display:none;'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mère de 2 enfants, elle possède plusieurs formations: Éducatrice spécialisée, Certificat en orientation <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scolaire et professionnelle, Conseillère santé (EESNQ), Instructrice en massage bébé (AIMB), Instructrice <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;en yoga prénatal, Microprogramme en nutrition (U. Laval) et elle est  en voie d'obtention d'IBCLC. Après avoir<br/> 								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;travaillé plus de 17 ans en communication et publicité, elle quitte ce milieu pour animer des ateliers prénatals <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;en allaitement. De formation en formation, elle anime à présent plusieurs ateliers chez Ressources-Naissances. <br/><br/>
						</p>
					</li>
					<li>
						<a href="" onclick="bascule('animatrice'); return false;">Stéphanie Moisan: Animatrice d'ateliers</a><br/>				
						<p id='animatrice' style='display:none;'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Formée en service social, elle a travaillé dans ce domaine quelques années.  Suite à ses deux maternités, <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elle s'intéresse à la périnatalité  et prend une formation en enseignement du yoga prénatal.  Elle acquiert <br/> 							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d'autres formations relatives à l'accouchement physiologique(Dre Bernadette de Gasquet), l'allaitement, <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;la cuisine saine; elle est aussi instructrice en massage-bébé.<br/>
						</p>
					</li>
					<li>
						<a href="" onclick="bascule('intervenante'); return false;">Amélie Francoeur: Intervenante communautaire</a><br/>				
						<p id='intervenante' style='display:none;'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Après des études collégiales en service social, elle travaille pendant 8 ans comme intervenante dans un <br/>	
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;groupe d'entraide en santé mentale.  Suite à la naissance de ses deux enfants, elle décide de poursuivre <br/>	
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sa carrière auprès des familles en période périnatale, un rêve qu'elle chérissait depuis longtemps ! Elle <br/>	
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;joint l'équipe de Ressource-Naissances à l'été 2007. <br/><br/>	
						</p>
					</li>
					<li>
						<a href="" onclick="bascule('secretaire'); return false;">Marcelle Boutin: Secrétaire-réceptionniste</a><br/>				
						<p id='secretaire' style='display:none;'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Elle a travaillé 8 ans comme technologue en génie industriel.  Après la naissance de ses 3 enfants, <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elle se réoriente vers le secrétariat et rejoint l'équipe de Ressources-Naissances. <br/><br/>
						</p>
					</li>
					<li>Beaudoin Marie-Claude: Agente relations publiques et communication</li>
					<li>Lydia Bellerose: Intervenante communautaire</li>
				</ul>
			</div>
			<?php
				include('bloc_partage.html');
			?>
		</div>
	</body>
</html>

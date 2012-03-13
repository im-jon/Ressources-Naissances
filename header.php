<?php
	include('Actions/mysql.php');
	$requeteTete = "SELECT sous_titre FROM parametres_systeme ORDER BY id LIMIT 1";

	$resultatsTete = mysql_query($requeteTete) or die(mysql_error());
	$valTete = mysql_fetch_array($resultatsTete);

	// Va chercher le sous-titre de l'en-tête dans la base de données
	$sousTitre = $valTete['sous_titre'];

	$requeteAteliers = "SELECT id, nom
			    FROM type_atelier";

	$resultatsAteliers = mysql_query($requeteAteliers) or die(mysql_error());
?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title>
		<?php
			echo isset($titre) ? $titre : 'Ressources-Naissances';
		?>
	</title>

	<link href='http://fonts.googleapis.com/css?family=Emilys+Candy' rel='stylesheet' type='text/css'>
	<link media="screen" REL="stylesheet" TYPE="text/css" href="css/styles.css">
	<link media="screen" REL="stylesheet" TYPE="text/css" href="css/smoothness/jquery-ui-1.8.18.custom.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>
	<script src="js/pages/maitre.js"></script> 
</head>
<body>

<header>
    <hgroup>
        <h1><a href="index.php">Ressources-Naissances</a></h1>
        <h2><?= $sousTitre ?></h2>
    </hgroup>
    <nav>
        <ul id="menu" class="sf-menu">
		<li><div id="iconeMaison"><a href="index.php"><img src="img/house.png" /></a></div></li>
		<li>
			<a href="#">Compte</a>
			<ul>
			<?php @session_start(); ?>
			<?php if (isset($_SESSION['role']) && $_SESSION['role'] >= 2) { ?>
				<li><a href="panneau.php">Panneau</a></li>
			<?php }
			if (isset($_SESSION['valid']) && $_SESSION['valid']) { ?>
				<li><a href="Actions/deconnexion.php?ReturnUrl=<?= $_SERVER['REQUEST_URI'] ?>">Déconnexion</a></li>
			<?php } else { ?>
				<li><a href="connexion.php?ReturnUrl=<?= $_SERVER['REQUEST_URI'] ?>">Connexion</a></li>
				<li><a href="inscription.php">Inscription</a></li>
			<?php } ?>
			</ul>
		</li>
		<li><a href="#">À propos</a>
			<ul>
				<li><a href="mission.php">Mission</a>
				<li><a href="historique.php">Historique</a></li>
				<li><a href="conseilAdministration.php">Conseil d'administration</a></li>
				<li><a href="notreEquipe.php">Notre équipe</a></li>
				<li><a href="membres.php">Membres</a></li>
				<li><a href="benevole.php">Bénévoles</a></li>
			</ul>
		</li>
		<li><a href="calendrier.php">Calendrier</a></li>
		<li>
			<a href="#">Ateliers/Activités</a>
			<ul>
				<?php while ($val = mysql_fetch_array($resultatsAteliers)) { ?>
					<li><a href="consulterTypeAtelier.php?id=<?=$val['id']?>"><?= $val['nom'] ?></a></li>
				<?php } ?>
			</ul>
		</li>
		<li>
			<a href="services.php">Services</a>
			<ul>
				<li><a href="#">Consultation individuelle en allaitement</a></li>
				<li><a href="#">Consultation téléphone</a></li>
				<li><a href="#">Marrainage en allaitement</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Partenariat</a>
			<ul>
				<li><a href="#">Partenaires financiers</a></li>
				<li><a href="#">Organismes partenaires</a></li>
				<li><a href="#">Participation à des regroupements</a></li>
			</ul>
		</li>
		<li><a href="Nous_Soutenir.php">Nous soutenir</a></li>
		<li><a href="benevolat.php">Bénévolat</a></li>
		<li>
			<a href="#">Documentation</a>
			<ul>
				<li><a href="Article.php">Articles</a></li>
				<li><a href="#">Publications</a></li>
			</ul>
		</li>
		<li><a href="nousJoindre.php">Nous joindre</a></li>
		<li><a href="lienUtile.php">Liens utiles</a></li>
        </ul>
    </nav>
</header>

<?php if(!isset($pasArticle)) { ?>
	<article>
<?php } ?>

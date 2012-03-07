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
	<link media="screen" REL="stylesheet" TYPE="text/css" href="css/styles.css">
	<link media="screen" REL="stylesheet" TYPE="text/css" href="css/smoothness/jquery-ui-1.8.18.custom.css">
	<link rel="stylesheet" media="screen" href="css/superfish.css" />  

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>
	<script src="js/superfish.js"></script> 
</head>
<body>

<header>
    <hgroup>
        <h1>Ressources-Naissances</h1>
        <h2>Nous aidons les mamans (et les papas)</h2>
    </hgroup>
    <nav>
        <ul class="sf-menu">
		<?php @session_start(); ?>
		<li><a href="index.php">Accueil</a></li>
		<?php if (isset($_SESSION['role']) && $_SESSION['role'] >= 2) { ?>
			<li><a href="panneau.php">Panneau</a></li>
		<?php } ?>
		<li>
			<a href="#">Compte</a>
			<ul>
			<?php 	
			if (isset($_SESSION['valid']) && $_SESSION['valid']) { ?>
				<li><a href="Actions/deconnexion.php?ReturnUrl=<?= $_SERVER['REQUEST_URI'] ?>">Déconnexion</a></li>
			<?php } else { ?>
				<li><a href="connexion.php?ReturnUrl=<?= $_SERVER['REQUEST_URI'] ?>">Connexion</a></li>
				<li><a href="inscription.php">Inscription</a></li>
			<?php } ?>
			</ul>
		</li>

		<li><a href="calendrier.php">Calendrier</a></li>
        </ul>
    </nav>
</header>

<?php if(!isset($pasArticle)) { ?>
	<article>
<?php } ?>

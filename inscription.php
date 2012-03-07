<?php
	$titre = "Inscription";
	session_start();
	include('Actions/fonctions.php');

	if (estConnecte()) {
		header('Location: index.php');
	}

	if(isset($_POST['submit'])) {

		include('Actions/mysql.php');
		include('Classes/Personne.php');
		include('Classes/Compte.php');

		$personnes = array();
		$personnes['mere'] = new Personne();
		$personnes['pere'] = new Personne();
		
		// Itère pour obtenir les informations de la mère et du père.
		// Ex: le formulaire envoi nom-mere et nom-pere. Cette boucle permet d'attribuer ces informations aux bonnes classes.
		foreach ($personnes as $k => $v) {
			// Il faudrait valider les champs
			$v->setNom($_REQUEST['nom-' . $k]);
			$v->setPrenom($_REQUEST['prenom-' . $k]);
			$v->setAdresse($_REQUEST['adresse-' . $k]);
			$v->setVille($_REQUEST['ville-' . $k]);
			$v->setCodePostal($_REQUEST['codepostal-' . $k]);
			$v->setTelephone($_REQUEST['telephone-' . $k]);
			$v->setTelephoneBureau($_REQUEST['telephonebureau-' . $k]);
			$v->setCourriel($_REQUEST['courriel-' . $k]);
			$v->setDateNaissance($_REQUEST['datenaissance-' . $k]);
		}

		$personnes['mere']->ajouter();	
		$personnes['pere']->ajouter();

		$compte = new Compte();
		$compte->setMere($personnes['mere']->getId());
		$compte->setPere($personnes['pere']->getId());

		// La personne liée au compte dépend du radio du formulaire
		if ($_REQUEST['comptelie'] == 'pere') {
			$compte->setPersonneLiee($personnes['pere']->getId());
			$personneLiee = $personnes['pere'];
			$titrePersonneLiee = "père";
		}
 		else {	
			$compte->setPersonneLiee($personnes['mere']->getId());
			$personneLiee = $personnes['mere'];
			$titrePersonneLiee = "mère";
		}
		
		$compte->setMotDePasse($_REQUEST['motdepasse']);
		$compte->setDatePrevueAccouchement($_REQUEST['dateprevue']);
		$compte->setDateNaissanceBebe($_REQUEST['datenaissancebebe']);
		$compte->setPrenomBebe($_REQUEST['prenombebe']);

		$compte->ajouter();
	
		$requete = "SELECT courriel_secretaire FROM parametres_systeme ORDER BY id LIMIT 1";

		$resultats = mysql_query($requete) or die(mysql_error());
		$val = mysql_fetch_array($resultats);
	
		// pogne le courriel de la secrétaire dans la BD
		$destination = $val['courriel_secretaire'];

		mysql_close();	

		// Génère le contenu du courriel
		$sujet = "Nouvelle inscription sur Ressources-Naissances";
		$message = "Personne liée : " . $personneLiee->getPrenom() . " " . $personneLiee->getNom() . " ($titrePersonneLiee)" . "\r\n"
			 . "Mère : " . "\r\n"
			 . " - Nom : " . $personnes['mere']->getNom() . "\r\n"
			 . " - Prénom : " . $personnes['mere']->getPrenom()  . "\r\n"
			 . " - Téléphone : " . $personnes['mere']->getTelephone() . "\r\n"
			 . " - Téléphone bureau : " . $personnes['mere']->getTelephoneBureau() . "\r\n"
			 . " - Courriel : " . $personnes['mere']->getCourriel() . "\r\n"
			 . "Père : " . "\r\n"
			 . " - Nom : " . $personnes['pere']->getNom() . "\r\n"
			 . " - Prénom : " . $personnes['pere']->getPrenom()  . "\r\n"
			 . " - Téléphone : " . $personnes['pere']->getTelephone() . "\r\n"
			 . " - Téléphone bureau : " . $personnes['pere']->getTelephoneBureau() . "\r\n"
			 . " - Courriel : " . $personnes['pere']->getCourriel() . "\r\n";

		// Si l'inscription marche, envoyer un courriel
		mail($destination, $sujet, $message);
	}
?>

<?php include("header.php"); ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<fieldset>
		<legend>Mère</legend>

		<label for="nom-mere">Nom *</label><br/>
		<input type="text" name="nom-mere" id="nom-mere"></input><br/>

		<label for="prenom-mere">Prénom *</label><br/>
		<input type="text" name="prenom-mere" id="prenom-mere"></input><br/>

		<label for="adresse-mere">Adresse *</label><br/>
		<input type="text" name="adresse-mere" id="adresse-mere"></input><br/>

		<label for="ville-mere">Ville *</label><br/>
		<input type="text" name="ville-mere" id="ville-mere"></input><br/>

		<label for="codepostal-mere">Code postal *</label><br/>
		<input type="text" name="codepostal-mere" id="codepostal-mere"></input><br/>

		<label for="telephone-mere">Téléphone *</label><br/>
		<input type="text" name="telephone-mere" id="telephone-mere"></input><br/>

		<label for="telephonebureau-mere">Téléphone au bureau</label><br/>
		<input type="text" name="telephonebureau-mere" id="telephonebureau-mere"></input><br/>

		<label for="courriel-mere">Courriel *</label><br/>
		<input type="text" name="courriel-mere" id="courriel-mere"></input><br/>

		<label for="datenaissance-mere">Date de naissance *</label><br/>
		<input type="text" name="datenaissance-mere" id="datenaissance-mere"></input>
	</fieldset>

	<fieldset>
		<legend>Père</legend>

		<label for="nom-pere">Nom *</label><br/>
		<input type="text" name="nom-pere" id="nom-pere"></input><br/>

		<label for="prenom-pere">Prénom *</label><br/>
		<input type="text" name="prenom-pere" id="prenom-pere"></input><br/>

		<label for="adresse-pere">Adresse *</label><br/>
		<input type="text" name="adresse-pere" id="adresse-pere"></input><br/>

		<label for="ville-pere">Ville *</label><br/>
		<input type="text" name="ville-pere" id="ville-pere"></input><br/>

		<label for="codepostal-pere">Code postal *</label><br/>
		<input type="text" name="codepostal-pere" id="codepostal-pere"></input><br/>

		<label for="telephone-pere">Téléphone *</label><br/>
		<input type="text" name="telephone-pere" id="telephone-pere"></input><br/>

		<label for="telephonebureau-pere">Téléphone au bureau</label><br/>
		<input type="text" name="telephonebureau-pere" id="telephonebureau-pere"></input><br/>

		<label for="courriel-pere">Courriel *</label><br/>
		<input type="text" name="courriel-pere" id="courriel-pere"></input><br/>

		<label for="datenaissance-pere">Date de naissance *</label><br/>
		<input type="text" name="datenaissance-pere" id="datenaissance-pere"></input>
	</fieldset>

	<fieldset>
		<legend>Bébé</legend>
		<label for="dateprevue">Date prévue de l'accouchement</label><br/>
		<input type="text" name="dateprevue" id="dateprevue"></input><br/>

		<label for="datenaissancebebe">Date de naissance du bébé</label><br/>
		<input type="text" name="datenaissancebebe" id="datenaissancebebe"></input><br/>

		<label for="prenombebe">Prénom du bébé</label><br/>
		<input type="text" name="prenombebe" id="prenombebe"></input><br/>
	</fieldset>

	<fieldset>
		<legend>Compte</legend>

		<label for="comptelie">Lier le compte à la/au</label><br/>
		<input type="radio" name="comptelie" value="mere" id="comptelie" checked>Mère
		<input type="radio" name="comptelie" value="pere">Père
		<br/>
		<label for="motdepasse">Mot de passe</label><br/>
		<input type="password" name="motdepasse" id="motdepasse"></input><br/>
	</fieldset>

	<input type="submit" name="submit"></input>
</form>

<?php include("footer.php"); ?>

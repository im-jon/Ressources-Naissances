<?php
	$titre = "Inscription";

	if(isset($_POST['submit'])) {

		include('Actions/mysql.php');
		include('Classes/Personne.php');
		include('Classes/Compte.php');

		$personnes = array();
		$personnes['mere'] = new Personne();
		$personnes['pere'] = new Personne();
		
		foreach ($personnes as $k => $v) {
			// Valider les champs
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
		}
 		else {	
			$compte->setPersonneLiee($personnes['mere']->getId());
		}
		
		$compte->setMotDePasse($_REQUEST['motdepasse']);
		$compte->setDatePrevueAccouchement($_REQUEST['dateprevue']);
		$compte->setDateNaissanceBebe($_REQUEST['datenaissancebebe']);
		$compte->setPrenomBebe($_REQUEST['prenombebe']);

		$compte->ajouter();
	
		mysql_close();	
	
		// pogne le courriel de la secrétaire dans la BD
		$destination = "pouliot.jonathan@gmail.com";
		// Génère le contenu du courriel
		$sujet = "Nouvelle inscription sur Ressources-Naissances";
		$message = "lol";

		// Si l'inscription marche, envoyer un courriel
		mail($destination, $sujet, $message);
	}
?>

<?php include("header.php"); ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<fieldset>
		<legend>Mère</legend>

		<label for="nom-mere">Nom *</label>
		<input type="text" name="nom-mere" id="nom-mere"></input>

		<label for="prenom-mere">Prénom *</label>
		<input type="text" name="prenom-mere" id="prenom-mere"></input>

		<label for="adresse-mere">Adresse *</label>
		<input type="text" name="adresse-mere" id="adresse-mere"></input>

		<label for="ville-mere">Ville *</label>
		<input type="text" name="ville-mere" id="ville-mere"></input>

		<label for="codepostal-mere">Code postal *</label>
		<input type="text" name="codepostal-mere" id="codepostal-mere"></input>

		<label for="telephone-mere">Téléphone *</label>
		<input type="text" name="telephone-mere" id="telephone-mere"></input>

		<label for="telephonebureau-mere">Téléphone au bureau</label>
		<input type="text" name="telephonebureau-mere" id="telephonebureau-mere"></input>

		<label for="courriel-mere">Courriel *</label>
		<input type="text" name="courriel-mere" id="courriel-mere"></input>

		<label for="datenaissance-mere">Date de naissance *</label>
		<input type="text" name="datenaissance-mere" id="datenaissance-mere"></input>
	</fieldset>

	<fieldset>
		<legend>Père</legend>

		<label for="nom-pere">Nom *</label>
		<input type="text" name="nom-pere" id="nom-pere"></input>

		<label for="prenom-pere">Prénom *</label>
		<input type="text" name="prenom-pere" id="prenom-pere"></input>

		<label for="adresse-pere">Adresse *</label>
		<input type="text" name="adresse-pere" id="adresse-pere"></input>

		<label for="ville-pere">Ville *</label>
		<input type="text" name="ville-pere" id="ville-pere"></input>

		<label for="codepostal-pere">Code postal *</label>
		<input type="text" name="codepostal-pere" id="codepostal-pere"></input>

		<label for="telephone-pere">Téléphone *</label>
		<input type="text" name="telephone-pere" id="telephone-pere"></input>

		<label for="telephonebureau-pere">Téléphone au bureau</label>
		<input type="text" name="telephonebureau-pere" id="telephonebureau-pere"></input>

		<label for="courriel-pere">Courriel *</label>
		<input type="text" name="courriel-pere" id="courriel-pere"></input>

		<label for="datenaissance-pere">Date de naissance *</label>
		<input type="text" name="datenaissance-pere" id="datenaissance-pere"></input>
	</fieldset>

	<fieldset>
		<legend>Bébé</legend>
		<label for="dateprevue">Date prévue de l'accouchement</label>
		<input type="text" name="dateprevue" id="dateprevue"></input>

		<label for="datenaissancebebe">Date de naissance du bébé</label>
		<input type="text" name="datenaissancebebe" id="datenaissancebebe"></input>

		<label for="prenombebe">Prénom du bébé</label>
		<input type="text" name="prenombebe" id="prenombebe"></input>
	</fieldset>

	<fieldset>
		<legend>Compte</legend>

		<label for="comptelie">Lier le compte à la/au</label>
		<input type="radio" name="comptelie" value="mere" id="comptelie" checked>Mère
		<input type="radio" name="comptelie" value="pere">Père

		<label for="motdepasse">Mot de passe</label>
		<input type="password" name="motdepasse" id="motdepasse"></input>
	</fieldset>

	<input type="submit" name="submit"></input>
</form>

<?php include("footer.php"); ?>

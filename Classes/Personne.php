<?php

class Personne {
	public $id;
	public $nom;
	public $prenom;
	public $adresse;
	public $ville;
	public $codepostal;
	public $telephone;
	public $telephonebureau;
	public $courriel;
	public $datenaissance;

	public function ajouter() {
		$date = date('Y-m-d H:i:s');
		$requete = "INSERT INTO personne
			    (nom, prenom, adresse, ville, code_postal, telephone, telephone_bureau, courriel, 				     date_naissance, date_inscription)
			    VALUES('$this->nom',
				   '$this->prenom',
				   '$this->adresse',
				   '$this->ville',
				   '$this->codepostal',
				   '$this->telephone',
				   '$this->telephonebureau',
				   '$this->courriel',
				   '$this->datenaissance',
				   '$date')";

		mysql_query($requete) or die(mysql_error());
		$this->id = mysql_insert_id();	
	}

	public function setNom($nom) {
		$this->nom = $nom;	
	}

	public function setPrenom($prenom) {
		$this->prenom = $prenom;	
	}

	public function setAdresse($adresse) {
		$this->adresse = $adresse;	
	}

	public function setVille($ville) {
		$this->ville = $ville;	
	}

	public function setCodePostal($codepostal) {
		$this->codepostal = $codepostal;	
	}

	public function setTelephone($telephone) {
		$this->telephone = $telephone;	
	}

	public function setTelephoneBureau($telephonebureau) {
		$this->telephonebureau = $telephonebureau;	
	}

	public function setCourriel($courriel) {
		$this->courriel = $courriel;	
	}

	public function setDateNaissance($datenaissance) {
		$this->datenaissance = $datenaissance;	
	}

	public function getId() {
		echo $this->id;	
	}

	public function getNom() {
		echo $this->nom;	
	}
}

?>

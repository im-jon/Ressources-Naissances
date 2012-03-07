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
		$requete = "INSERT INTO personne
			    (nom, prenom, adresse, ville, code_postal, telephone, telephone_bureau, courriel, date_naissance)
			    VALUES('$this->nom',
				   '$this->prenom',
				   '$this->adresse',
				   '$this->ville',
				   '$this->codepostal',
				   '$this->telephone',
				   '$this->telephonebureau',
				   '$this->courriel',
				   '$this->datenaissance')";

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
		return $this->id;	
	}

	public function getPrenom() {
		return $this->prenom;	
	}

	public function getNom() {
		return $this->nom;	
	}

	public function getTelephone() {
		return $this->telephone;	
	}

	public function getTelephoneBureau() {
		return $this->telephonebureau;	
	}

	public function getCourriel() {
		return $this->courriel;	
	}
}

?>

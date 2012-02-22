<?php

class Personne {
	public $nom;
	public $prenom;
	public $adresse;
	public $ville;
	public $codepostal;
	public $telephone;
	public $telephonebureau;
	public $courriel;
	public $datenaissance;

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

	public function getNom() {
		echo $this->nom;	
	}
}

?>

<?php

class Compte {
	public $id;
	public $id_mere;
	public $id_pere;
	public $id_personne_liee;
	public $date_inscription;
	public $mot_de_passe;
	public $date_prevue_accouchement;
	public $date_naissance_bebe;
	public $prenom_bebe;

	public function charger($courriel) {
		/*$requete = "SELECT * FROM compte
			    INNER JOIN personne
			    ON compte.id_personne_liee = personne.id
			    WHERE personne.courriel = '$courriel'";

		$resultats = mysql_query($requete) or die(mysql_error());

		$val = mysql_fetch_array($resultats);
		$this->id = $val['id'];
		$this->id_mere = $val['id_mere'];
		$this->id_pere = $val['id_pere'];
		$this->id_personne_liee = $val['id_personne_liee'];*/
	}

	public function ajouter() {
		$date = date('Y-m-d H:i:s');
		$requete = "INSERT INTO compte
			    (id_mere,
			     id_pere,
			     id_personne_liee,
			     date_inscription,
			     mot_de_passe,
			     date_prevue_accouchement,
			     date_naissance_bebe,
			     prenom_bebe)
			    VALUES('$this->id_mere',
				   '$this->id_pere',
				   '$this->id_personne_liee',
				   '$date',
				   '$this->mot_de_passe',
				   '$this->date_prevue_accouchement',
				   '$this->date_naissance_bebe',
				   '$this->prenom_bebe')";

		mysql_query($requete) or die(mysql_error());
		$this->id = mysql_insert_id();	
	}

	public function setMere($valeur) {
		$this->id_mere = $valeur;
	}

	public function setPere($valeur) {
		$this->id_pere = $valeur;
	}

	public function setPersonneLiee($valeur) {
		$this->id_personne_liee = $valeur;
	}

	public function setMotDePasse($valeur) {
		$this->mot_de_passe = $valeur;
	}

	public function setDatePrevueAccouchement($valeur) {
		$this->date_prevue_accouchement = $valeur;	
	}

	public function setDateNaissanceBebe($valeur) {
		$this->date_naissance_bebe = $valeur;
	}

	public function setPrenomBebe($valeur) {
		$this->prenom_bebe = $valeur;
	}
}

?>

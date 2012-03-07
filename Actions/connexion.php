<?php

$courriel = $_REQUEST['courriel'];
$motdepasse = $_REQUEST['motdepasse'];

include('mysql.php');

// Hasher le mdp

$requete = "SELECT compte.id, compte.id_role FROM compte
	    INNER JOIN personne
	    ON compte.id_personne_liee = personne.id
	    WHERE personne.courriel = '$courriel' AND compte.mot_de_passe = '$motdepasse'";

$resultats = mysql_query($requete) or die(mysql_error());
// Si succès
if (mysql_num_rows($resultats) > 0) {
	$val = mysql_fetch_array($resultats);
	session_start();
	session_regenerate_id ();
	$_SESSION['valid'] = 1;
	$_SESSION['id_compte'] = $val['id'];
	$_SESSION['role'] = $val['id_role'];

	if (isset($_REQUEST['ReturnUrl'])) {
		header('Location: ' . $_REQUEST['ReturnUrl']);
	} else {
		header('Location: ../index.php');
	}
}
else {
	echo "Mot de passe ou courriel invalide";
}

?>

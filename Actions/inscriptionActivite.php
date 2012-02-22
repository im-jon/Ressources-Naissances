<?php
	$noUtilisateur = $_REQUEST['noUtilisateur'];
	$noActivite = $_REQUEST['noActivite'];

	include('mysql.php');
	
	requete = "INSERT INTO utilisateur_activite VALUES('$noUtilisateur', '$noactivite')";
	mysql_query($requete) or die(mysql_error());

	mysql_close();

	// Valide si les deux id existent
	// Ajouter une inscription dans la BD
	// Redirection
?>

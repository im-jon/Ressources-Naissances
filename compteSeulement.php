<?php
	session_start();
	include('Actions/fonctions.php');

	if (!estConnecte()) {
		die(); // Le PHP s'arrête
	}

	// Si le compte est connecté, on continue !

	echo "ID du compte: " . $_SESSION['id_compte'];
	echo "</br>Votre rôle:" . $_SESSION['role'];
?>

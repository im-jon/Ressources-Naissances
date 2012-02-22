<?php

// Fonctions globales du système

function estConnecte() {
	return isset($_SESSION['valid']) && $_SESSION['valid'];	
}

?>

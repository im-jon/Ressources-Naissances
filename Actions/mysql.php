<?php
	$hote = "localhost";
	$usager = "root"; 
	$mdp = "admin123";
	$nomBD = "ressources_naissances";

	$bd = mysql_connect($hote, $usager, $mdp);
	mysql_select_db($nomBD);

	mysql_query("SET NAMES utf8");
?>

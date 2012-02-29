<?php
	$hote = "205.236.12.70";
	$usager = "ResNes"; 
	$mdp = "admin123";
	$nomBD = "ressources_naissances";

	$bd = mysql_connect($hote, $usager, $mdp);
	mysql_select_db($nomBD);

	mysql_query("SET NAMES utf8");
?>

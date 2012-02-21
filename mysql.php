<?php
	$host = "localhost";
	$user = "root"; 
	$pass = "admin123";
	$db_name = "ressources_naissances";

	$bd = mysql_connect($host, $user, $pass);
	mysql_select_db($db_name);

	mysql_query("SET NAMES utf8");
?>

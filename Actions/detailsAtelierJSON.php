<?php
$idAtelier = $_REQUEST['id'];

include("mysql.php");

$requete = "SELECT t.nom, a.nom_animatrice, t.prix
	    FROM atelier a
	    INNER JOIN type_atelier t
	    ON a.id_type_atelier = t.id
	    WHERE a.id = $idAtelier";

$resultats = mysql_query($requete) or die(mysql_error());
$val = mysql_fetch_array($resultats);

$arr = array("nom" => $val['nom'],
	     "animatrice" => $val['nom_animatrice'],
	     "prix" => $val['prix']);

echo json_encode($arr);
?>

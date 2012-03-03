<?php
$dateDebut = date('c', $_REQUEST['start']);
$dateFin = date('c', $_REQUEST['end']);

include("mysql.php");

$requete = "SELECT a.id, t.nom, a.date_debut, a.date_fin, t.couleur
	    FROM atelier a
	    INNER JOIN type_atelier t
	    ON a.id_type_atelier = t.id
	    WHERE a.date_debut BETWEEN '$dateDebut' AND '$dateFin'";

$resultats = mysql_query($requete) or die(mysql_error());

// Trouver un moyen de directement traduire un tableau en JSON serait plus optimisé !
echo '[';

$nb = mysql_num_rows($resultats);
$i = 1;

while ($val = mysql_fetch_array($resultats)) {
	$arr = array("id" => $val['id'], 
		     "title" => $val['nom'],
		     "start" => date('c', strtotime($val['date_debut'])),
		     "end" => date("c", strtotime($val['date_fin'])),
		     "url" => "consulterAtelier?id=" . $val['id'],
		     "backgroundColor" => "#" . $val['couleur']);
	echo json_encode($arr);
	
	if ($i < $nb) {
		echo ',';
	}

	$i++;
}

echo ']';
?>

<?php 
$titre = "Benevolat";
include("Actions/mysql.php");
include("header.php"); 
$id=$_REQUEST['idRecup'];
?>

<HTML>
<HEAD>
<TITLE>Fichier de test FCKeditor2</TITLE>
</HEAD>
<BODY>
<CENTER>
<?php

 
	

	$nom=$_REQUEST['titre'];

	echo $description=$_REQUEST['description'];
	
	echo $query="insert into benevole(nom, lienPage) values('$nom', '$description')";
	$result=mysql_query($query);
	



	$letout=stripslashes($_REQUEST['FCKeditor']); //endroit où se situe FCKeditor

	$fp=fopen($description, "w");
	fputs($fp, $letout);
	fclose($fp);
	echo "</center>Enregistrement effectué</br>Article modifié : </br></br>";
	echo "$nom </br></br>";
	echo $letout;
	echo "<center>";
	
	
	$nomFichier=null;



?>
</CENTER>
</BODY>
</HTML>

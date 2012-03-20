<?php 
$titre = "Service";
include("Actions/mysql.php");
include("header.php"); 
$query="SELECT id FROM service ORDER BY id DESC LIMIT 1 ";
$result=mysql_query($query);
?>

<HTML>
<HEAD>
<TITLE>Fichier de test FCKeditor2</TITLE>
</HEAD>
<BODY>
<CENTER>
<?php

 while($val = mysql_fetch_array($result))
{
	$test=$val['id'];
}	
	 $num = $test + 1;
	 $description="service".$num.".html";
	

	$nom=$_REQUEST['titre'];


	
	$query="insert into service(titrePage, lienPage) values('$nom', '$description')";
	$result=mysql_query($query);
	



	$letout=stripslashes($_REQUEST['description']); //endroit où se situe FCKeditor

	$fp=fopen($description, "w");
	fputs($fp, $letout);
	fclose($fp);
	echo "</center>Enregistrement effectué</br>Nouvel article : </br></br>";
	echo "$nom </br></br>";
	echo $letout;
	echo "<center>";
	
	
	$nomFichier=null;



?>
</CENTER>
</BODY>
</HTML>

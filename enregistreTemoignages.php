<?php 
$titre = "modifTemoignages";
include("Actions/mysql.php");
include("header.php"); 
 $query="select * from evaluation";
$result=mysql_query($query);

?>

<HTML>
<HEAD>
<TITLE></TITLE>
</HEAD>
<BODY>
<CENTER>
<?php

 while($val = mysql_fetch_array($result))
{


	$nomFichier=$val['lienPage'];
}
	
		
	



	$letout=stripslashes($_REQUEST['ckeditor']); //endroit où se situe CKeditor

	$fp=fopen($nomFichier, "w");
	fputs($fp, $letout);
	fclose($fp);
	echo "</center>Enregistrement effectué</br>Affichage actuel : </br></br>";
	echo $letout;
	echo "<center>";
	
	$x++;
	$nomFichier=null;


echo "<P><A HREF='modifTemoignages.php'>Retour sur la page précédente</A><P>";
?>
</CENTER>
</BODY>
</HTML>

<?php include('footer.php') ?>

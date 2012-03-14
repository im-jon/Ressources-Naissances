<?php 
$titre = "Services";
include("Actions/mysql.php");
include("header.php"); 
$id=$_REQUEST['idRecup'];
$query="select * from service where id=$id";
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
	$nomFichier=$val['lienPage'];

	$title=$_REQUEST[('titre'.$id)];

	$titrePageAncien=$val['titrePage'];

	
		$query2="update service set titrePage='$title' where id=$id ";

		$result2=mysql_query($query2);
	



	$letout=stripslashes($_REQUEST['FCKeditor'.$id]); //endroit où se situe FCKeditor

	$fp=fopen($nomFichier, "w");
	fputs($fp, $letout);
	fclose($fp);
	echo "</center>Article modifié : </br></br>";
	echo "$title </br></br>";
	echo $letout;
	echo "<center>";
	
	$x++;
	$nomFichier=null;
}

echo "<P><A HREF='modifServices.php?numBut=$id#'>Retour sur la page précédente</A><P>";
?>
</CENTER>
</BODY>
</HTML>

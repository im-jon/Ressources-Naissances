<?php 
$titre = "Services";
include("Actions/mysql.php");
include("header.php"); 
$query="select * from service";
$result=mysql_query($query);
?>

<HTML>
<HEAD>
<TITLE>Fichier de test FCKeditor2</TITLE>
</HEAD>
<BODY>
<CENTER>
<?php
$x=0;
 while($val = mysql_fetch_array($result))
{
$nomFichier=$val['lienPage'];
echo "$nomFichier</br>";
$title=$_REQUEST[('titre'.$x)];
echo "$title";
$titrePageAncien=$val['titrePage'];
echo "$titrePageAncien";
$query2="update service set titrePage='$title' when titrePage='$titrePageAncien' ;";
if(($result2=mysql_query($query2))==true)
{
echo "coucou";
}

$letout=stripslashes($_REQUEST['FCKeditor'.$x]); //endroit où se situe FCKeditor

$fp=fopen($nomFichier, "w");
fputs($fp, $letout);
fclose($fp);

echo $letout;
$x++;
$nomFichier=null;
}
?>
<P><A HREF="fckeditor0.php">Retour sur la page 1</A><P>
</CENTER>
</BODY>
</HTML>

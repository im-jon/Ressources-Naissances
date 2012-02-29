<HTML>
<HEAD>
<TITLE>Fichier de test FCKeditor2</TITLE>
</HEAD>
<BODY>
<CENTER>
<?php

$nomFichier=$_REQUEST['nomFichier'];

$letout=stripslashes($_REQUEST['FCKeditor1']); //endroit où se situe FCKeditor

$fp=fopen($nomFichier, "w");
fputs($fp, $letout);
fclose($fp);

echo $letout;
?>
<P><A HREF="fckeditor0.php">Retour sur la page 1</A><P>
</CENTER>
</BODY>
</HTML>

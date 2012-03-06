<HTML>

<?php
include("/var/cbeauvil/html/fckeditor/fckeditor.php");	// endroit où se situe FCKeditor
?>

<form action="fckeditor2.php" method="post">

<?php
$nom=$_REQUEST['nomFichierAOuvrir'];

$fp = fopen($nom, "r"); // Ouverture du fichier
while(!feof($fp)) // On parcout toutes les lignes
{
$leFichier.=fgets($fp,4096); // Lecture du contenu de la ligne
}
fclose($fp);

$oFCKeditor = new FCKeditor('FCKeditor1'); // nouvelle instance de FCKeditor
$oFCKeditor->Width = '100%';
$oFCKeditor->Height = '400';
$oFCKeditor->BasePath = '/fckeditor/';
$oFCKeditor->Value = $leFichier;
echo "<table border=1 width='85%' Height='400'><TR><TD>";
$oFCKeditor->Create();
echo "</TD></TR></table>";

echo "Enregistrer le fichier sous :<input type = 'text' name = 'nomFichier' size='20' value = '".$nom."'></br>";

?>

</form>
<P><A HREF="fckeditor0.php">Retour sur la page 1</A><P>
</HTML>


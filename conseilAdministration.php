<?php
	include("Actions/mysql.php");
	$requete = "SELECT nom, prenom, chemin, id_photo
                    FROM conseil_administration ca, photo p
		    WHERE p.id = ca.id_photo";
	$resultats = mysql_query($requete) or die(mysql_error());
?>

<?php include("header.php"); ?>

<h1>Conseil d'administration</h1>

<table>
	<tr>
		<th>Nom</th>
		<th>Photo</th>
	</tr>
	<?php while($val = mysql_fetch_array($resultats)) {?>
		<tr>
			<td><?= $val['prenom'] . " " . $val['nom'] ?></td>
			<td>
				<?php 
					if (isset($val['id_photo'])) 
					{
						echo "<img src='img/".$val['chemin'].".jpg'/>";
					}
				?>
			</td>
		</tr>
	<?php } ?>
</table>

<?php 
	include("footer.php"); 
?>

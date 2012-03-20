<?php 
$titre = "SupprService";
include("Actions/mysql.php");
include("header.php");
 $query="select * from service";
$result=mysql_query($query);
?>
		 
		 <link rel="stylesheet" type="text/css" href="css/styles.css">
		 <link rel="stylesheet" type="text/css" media="screen" href="jquery.ui.potato.menu.css" />

			
					 <script type="text/javascript" src="jquery.nivo.slider.js"></script>
		 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.ui.potato.menu.js"></script>
		<script type="text/javascript" src="js/afficherCacher.js"></script>


<?php  
echo "<H1>Supression Services</H1>";
$x=1;
while($val = mysql_fetch_array($result))
{
	
	$nom=$val['titrePage'];






echo "<form action='supprServiceTraitement.php?idRecup=$x' method='post'>";

echo "<div class='titre'>";
echo "<a href='#'>$nom</a></br>";
echo "</div>";
echo "</br>";
echo '<input type="submit" value="Supprimer">';
#echo "</br></br>";




$x++;
?>
</form>
<?php
} # } du while

?>

<?php include('footer.php') ?>


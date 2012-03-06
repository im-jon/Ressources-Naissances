<?php include("header.php"); ?>
			<div id="titre">
			<h2>Editez vos pages</h2>
			</div>
			<center>
				<?php
					$nomfichier = $_REQUEST['nomfichier'];
					$letout = stripslashes($_REQUEST['FCKeditor1']);
					
					$fp = fopen($nomfichier,"w");
					fputs($fp, $letout);
					fclose($fp);

					echo $letout;
				?>
			</center>
<?php include("footer.php"); ?>

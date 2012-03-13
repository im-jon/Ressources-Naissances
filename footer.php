<?php if(!isset($pasArticle)) { ?>
	</article>
<?php } ?>

<footer>
	<p>Design par <a href="http://www.webdezign.co.uk" title="web design london">Webdezign</a> <br/>
	 modifié par Jonathan Pouliot, Antoine Laroche, Corentin Beauvilain et Anthony Maurin</p>
</footer>
</body>
</html>

<?php
	if (isset($bd)) {
		@mysql_close($bd);
	}
?>

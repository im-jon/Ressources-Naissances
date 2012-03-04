</article>

<section>
	<h1>Navigation</h1>
    <ul>
	<?php @session_start();
	      if (isset($_SESSION['role']) && $_SESSION['role'] >= 2) { ?>
		<li><a href="panneau.php">Panneau</a></li>
	<?php } ?>
	
	<li><a href="index.php">Accueil</a></li>
        <li><a href="calendrier.php">Calendrier</a></li>
    </ul>
</section>

<footer>
	<p>Design par <a href="http://www.webdezign.co.uk" title="web design london">Webdezign</a></p>
</footer>
</body>
</html>

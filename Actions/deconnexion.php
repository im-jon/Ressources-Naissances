<?php
	session_start();
	$_SESSION = array();
	session_destroy();

	if (isset($_REQUEST['ReturnUrl'])) {
		header('Location: ' . $_REQUEST['ReturnUrl']);
	} else {
		header('Location: ../index.php');
	}
?>

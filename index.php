<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];

	#header('Location: '.$uri.'/inventario_dependencia/Views/home.php');
	header('Location: '.$uri.'/soures/code.php');
	exit;
?>
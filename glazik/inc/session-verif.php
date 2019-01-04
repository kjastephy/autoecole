<?php

	session_start();

	if(!isset($_SESSION['logged']) || !$_SESSION['logged']){

		header('Location: http://localhost:8888/StructureSite%20V1-2/index.php#header2-3');
	}

	$loggin = isset($_SESSION['login']) ? $_SESSION['login'] : '';

?>
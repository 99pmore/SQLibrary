<?php

	ini_set('display_errors', '1');
	error_reporting(E_ALL);

	require_once('connection.php');

	if (isset($_GET['controller']) && isset($_GET['action'])) {
		$controller = $_GET['controller'];
		$action = $_GET['action'];

	} else {
		$controller = 'Library';
		$action = 'index';
	}

	require_once('Views/Layouts/layout.php');

 ?>
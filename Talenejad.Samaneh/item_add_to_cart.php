<?php

include_once "lib/php/functions.php";
// print_p([$_GET,$_POST]);


if(isset($_GET['action'])) {

	switch ($_GET['action']) {
		case 'update':
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;

		case 'create':
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;

		case 'delete':
			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}


}
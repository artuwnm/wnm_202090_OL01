<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>



<?php 
	include "../lib/php/functions.php";
	$users = file_get_json("../data/users.json");
?>

<?php
	
	if($_GET['action'] == "delete") {
		header('Location:users.php');
		unset($users[$_GET['id']]);
		$users = array_values($users);

		file_put_contents("../data/users.json", json_encode($users)); 

	} 

	if($_GET['action'] == "put") {
		header('Location:users.php');
		$classes = explode(',', $_POST['classes']);

		$user_array = array('name' => $_POST['name'] ,
		'type' => $_POST['type'], 
		'email' => $_POST['email'], 
		'classes' => $classes 
		);

		$users[$_GET['id']] = $user_array;
		file_put_contents("../data/users.json", json_encode($users)); 
	} else if($_GET['action'] == "post") {
		header('Location:users.php');
		$classes = explode(',', $_POST['classes']);
		$user_array = array('name' => $_POST['name'] ,
			'type' => $_POST['type'], 
			'email' => $_POST['email'], 
			'classes' => $classes 
		);

		$users[count($users)] = $user_array;
		file_put_contents("../data/users.json", json_encode($users)); 
	}

?>
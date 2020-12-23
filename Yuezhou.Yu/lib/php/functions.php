<?php


session_start();



function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}
function getData($str) {
	return json_decode(file_get_contents($str));
}


// include, require, include_once, require_once
include_once "auth.php";
function makeConn() {
	@$conn = new mysqli(...makeAuth());

	if($conn->connect_errno) die($conn->connect_error);

	$conn->set_charset('utf8');

	return $conn;
}
function makePDOConn() {
	try {
		$conn = new PDO(...makePDOAuth());
	} catch(PDOException $e) {
		die($e->getMessage());
	}
	return $conn;
}


function getRows($conn,$sql) {
	$a = [];

	$result = $conn->query($sql);

	if($conn->errno) die($conn->error);

	while($row = $result->fetch_object()) {
		$a[] = $row;
	}

	return $a;
}









// CART FUNCTIONS

function array_find($array,$fn) {
	foreach($array as $o) if($fn($o)) return $o;
	return false;
}


function getCart() {
	if(!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) $_SESSION['cart'] = [];
	return $_SESSION['cart'];
}

function addToCart($params) {
	$cart = getCart();
	$id = $params['product_id'];
	$p = cartItemByID($id);
    $info = getRows(makeConn(),"SELECT * FROM `products` WHERE id = {$id}");
    $info = $info[0];
    $amount = $info->price * $params['quantity'];
	if($p) {
		$p->amount += $amount;
		$p->quantity += $params['quantity'];
	} else {
		$price = getRows(makeConn(),"SELECT `price` FROM `products` WHERE `id` = $id")[0]->price;
		$_SESSION['cart'][] = (object) [
			"id"=>$id,
			"amount"=>$amount,
			"quantity"=>$params['quantity'],
            "color" => $params['color'],
            "price"=>$info->price,
            "name" => $info->name,
            "thumb" => $info->thumb,
		];
	}

}


function getCartItems() {
	$cart = getCart();
	return $cart;
}

function cartItemByID($id) {
	return array_find(getCart(),function($o) use ($id){return $o->id==$id;});
}
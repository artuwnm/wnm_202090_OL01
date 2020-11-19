  <?php
session_start();

include "auth.php";

function print_p($v) {
	   	 	echo "<pre>", print_r($v),"</pre>";

}
function file_get_json ($filename){
		$file = file_get_contents($filename);
		$notes_object = json_decode($file);
		return $notes_object;
}

function makeConn() {
	$auth = getAuth();
	$conn = new mysqli($auth[0], $auth[1], $auth[2], $auth[3]);
	$conn->set_charset('utf8');
	if($conn->connect_errno) die($conn->connect_error);
	return $conn;
}

function makeQuery($conn, $query) {
	$result = $conn->query($query);
	if($conn->errno) die($conn->error);
	$a = [];
	while($row = $result->fetch_object()) {
		$a[] = $row;
	}
	return $a;
}

function array_find($arr, $fn) {
    foreach($arr as $o) if($fn($o)) return $o;
    return false;
}

function countItemsInCart() {
	$cart = getCart();
	if(count($cart) == 0) return 0;
	return array_reduce($cart, function($r, $o) { return $r + $o->quantity; }, 0);
}

function makeCartBadge() {
	$count = countItemsInCart();
	return $count > 0 ? "(" . $count . ")" : "";
}

/* PRODUCT FUNCTIONS */

function getProductById($id) {
	$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=" . $id . ";")[0];
	$cartItem = getCartItemById($id);
	$product->quantity = $cartItem->quantity;
	return $product;
}

// Return a currency-formatted number
function cur($number) {
	if(!is_numeric($number)) return null;
	return '$' . number_format(floatval($number),2,'.','');
}

/* CART FUNCTIONS */

function getCart() {
    return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}

function resetCart() {
    $_SESSION['cart'] = [];
}

function getCartItemById($id) {
	return array_find(getCart(), function($o) use($id) { return $o->id == $id; });
}

function getCartItemsIds() {
	$cart = getCart();
	if(empty($cart)) return [];
	$ids = implode(",", array_map(function($o) { return $o->id;	}, $cart));
	return $ids;
}

function getCartItems() {
	$ids = getCartItemsIds();
	if(empty($ids)) return [];
	$data = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (" . getCartItemsIds() . ");");
	return array_map(function($o) {
		$p = getCartItemById($o->id);
		$o->quantity = $p->quantity;
		$o->total = $p->quantity * $o->price;
		return $o;
	}, $data);
}

function addToCart($product, $quantity) {
    $cart = getCart();
    $product_id = $product->id;
	$in_cart = getCartItemById($product_id);
	
	if(!$in_cart) {
		updateCart($product, $quantity);
	} else {
		updateCart($product, $in_cart->quantity + $quantity);
	}
}

// Add and delete just call update with different quantities
function updateCart($product, $quantity) {
	$cart = getCart();
	$product_id = $product->id;
	$in_cart = getCartItemById($product_id);

	if(!$in_cart) {
        $_SESSION['cart'][] = (object) [
            "id" => $product_id,
            "quantity" => $quantity
        ];
    } else {
		$in_cart->quantity = $quantity;
		
		// Loop through the array, and splice out products with 0 as their quantity
		for($i = count($cart); $i >= 0; $i--) {
			if($cart[$i]->quantity == 0) {
				array_splice($cart, $i, 1);
			}
		}

		// Set the cart in the the session to the updated array
		$_SESSION['cart'] = $cart;
	}
}

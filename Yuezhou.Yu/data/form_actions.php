<?php
include_once "../lib/php/functions.php";

if(!isset($_GET['action'])) die("No Action Set");

switch($_GET['action']) {
	case "add-to-cart":
		addToCart($_GET);
		header("location:../product_added_to_cart.php?n=4&id={$_GET['product_id']}");
		break;
	case "update-cart-amount":
		cartItemByID($_GET['id'])->amount = $_GET['amount'];
		header("location:../product_cart.php?n=4");
		break;
	case "delete-cart-item":
	    $new_cart = [];
	    if(!empty($_SESSION['cart'])){
	        echo $_GET['id'];
	        foreach ($_SESSION['cart'] as $key=>$val){
                if($val->id == $_GET['id']){
                    unset($_SESSION['cart'][$key]);
                }
            }
        }
        header("location:../product_cart.php?n=4");
        break;
//		$_SESSION['cart'] = array_filter($_SESSION['cart'],function($o){ return $o->id!=$_GET['id']; });
	case "update-cart-choice": break;
}

print_p([$_GET,$_SESSION]);
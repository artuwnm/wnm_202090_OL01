<?php
include_once "lib/php/functions.php";

$self = $_SERVER['PHP_SELF'];
$id = $_POST['id'];
$quantity = $_POST['quantity'];

if(isset($_GET['action'])) {
    switch($_GET['action']) {
        case "reset":
            resetCart();
            break;

    }
}

if(isset($_POST['action'])){
    /*
    Get the product object from the database
    */
    $product = getProductById($id);
    if($product) {
        switch($_POST['action']){
            case "update":
                updateCart($product, $quantity);
                header("location:product_cart.php");
                break;
            case "add":
                addToCart($product, $quantity);
                header("location:product_added_to_cart.php?id={$product->id}");
                break;
            case "delete":
                updateCart($product, 0);
                header("location:product_cart.php");
                break;	
        }
    }
}
?>
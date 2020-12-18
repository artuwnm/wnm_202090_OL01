<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?>
<?php
$n = isset($_GET['n']) ? $_GET['n'] : 1;
$keywords = isset($_GET['keywords']) ? $_GET['keywords'] : '';
?>
<header style="width: 95%; margin: 0 auto;">
    <div class="toplogo">
        <p class="p-admin"><a href="./admin/admin.php">Admin</a></p>
        <img src="img/LOGO1.png" style="width:300px; height:135px" >
    </div>
    <br>
    <div class="form-control display-flex">
    </div>
    <br>
    <ul class="nav clearfix">
        <li><a href="index.php?n=1" class="<?= $n == 1 ? 'nav-current' : ''?>">Home</a></li>
        <li><a href="product_list.php?n=2" class="<?= $n == 2 ? 'nav-current' : ''?>">Shop</a></li>
        <li><a href="about.php?n=3" class="<?= $n == 3 ? 'nav-current' : ''?>">About</a></li>
        <li><a href="product_cart.php?n=4" class="<?= $n == 4 ? 'nav-current' : ''?>">Carts</a></li>
        <div class="rel tac fr">
            <form action="product_list.php" method="get">
                <input type="hidden" name="n" value="2">
                <input type="text" name="keywords" class="searchbar" value="<?=$keywords?>" placeholder="Search">
                <input type="submit" class="search-button abs" value="Search">
            </form>
        </div>
    </ul>
</header>
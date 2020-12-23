<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Learning PHP</title>
</head>
<body>
	<?php

	// phpinfo();

	// php is a loosely typed, backend (server-side) scripting language

	echo "<div>Hello World</div>";

	// Variables
	$a = 5;

	echo $a;



	// String Interpolation
	echo "<div>I have $a things</div>";
	echo '<div>I have $a things</div>';

	?>

	<hr>
	<div>Here's some other stuff.</div>

	<?php

	// Value Types


	// Numbers
	// Float
	$b = 0.33333;
	// Integer
	$b = 15;

	// String
	$name = "Yerguy2";

	// Boolean
	$isYes = true;


	// Math
	// PEMDAS (Order of Operation)
	echo (5 - 4) * 2;

	// Concatenation
	echo "<div>b + a " . " = c</div>";
	echo "<div>$b + $a = " . ($a+$b) . "</div>";

	?>


	<hr>
	<div>This is my name</div>
	<div>
	<?php

	$firstname = "Yuezhou";
	$lastname = "Yu";
	$fullname = "$firstname $lastname";
	echo $fullname;

	?>
	</div>


	<hr>

	<div>
		<a href="?name=Yuezhou">Yuezhou</a>
		<a href="?name=Joe">Joe</a>
	</div>

	<?php

	// Superglobal
	echo "<div>My name is {$_GET['name']}</div>";

	?>

	<div>
		<a href="?name=Ham&type=h1">H1</a>
		<a href="?name=Ham&type=textarea">textarea</a>
	</div>

	<?php

	// Superglobal
	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";

	?>

	<hr>

	<?php

	// Array
	$colors = array("red","green","blue");

	echo $colors[1];

	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]
		";

	echo count($colors);

	?>

	<hr>

	<?php 

	// Associative Array
	$colorsAssociative = [
		"red"=>"#f00",
		"green"=>"#0f0",
		"blue"=>"#00f"
	];

	echo $colorsAssociative['red']."<br>";

	?>

	<div style="color:<?= $colorsAssociative['green'] ?>">
		This text is green.
	</div>

	<hr>

	<?php

	// Casting
	$c = "$a";
	$d = $c*1;

	$colorsObject = (object)$colorsAssociative;

	// echo $colorsObject;

	echo "<hr>";

	// Array Index Notation
	echo $colors[0]."<br>";
	echo $colorsAssociative['red']."<br>";
	echo $colorsAssociative[$colors[0]]."<br>";

	// Object Property Notation
	echo $colorsObject->red."<br>";
	echo $colorsObject->{$colors[0]}."<br>";

	echo "<hr>";

	print_r($colors);
	echo "<hr>";
	print_r($colorsAssociative);
	echo "<hr>";
	echo "<pre>",print_r($colorsObject),"</pre>";



	// Functions
	function print_p($v) {
		echo "<pre>",print_r($v),"</pre>";
	}

	print_p($_GET);

	?>


</body>
</html>
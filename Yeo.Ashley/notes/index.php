<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
	<?php



//http://ashleyyeodesign.com/development/AAU/WNM608/notes

	echo "<div>Hello World</div>";
	echo "<div>Goodbye World</div>";

	//variables
	$a = 5;

	echo $a;


	//string interpolation
	echo "<div>I have $a things</div>";


	//number
	//integer
	$b =  15;
	//Float
	$b = 0.576;

	$b = 10;

	// String
	$name = "Yerguy2";

	// Boolean
	$isOn = true;

	//math
	//PEMDAS

	echo 5 + 4 - 2;

	//Concatenation
	echo "<div>$b + $a=".($a + $b)."</div>";

	?>

	<hr>
	<div>This is my name</div>
	<div>
	<?php

	$firstname = "Ashley";
	$lastname = "Yeo";
	$fullname = "$firstname $lastname";



	echo $fullname;

	?>
	<hr>
	<?php

	// superglobal
	//?name=Sam
	echo "<a href='name=Sam'>Visit</a>";
	echo $_GET['name'];

	echo "<div>My name is {$_GET['name']}</div>";

	//?name=Sam&type=textarea
	echo "<a href='?name=am&type=textarea'>Visit</a>";
	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";


	//array
	$colors = array("red","green","blue");

	echo $colors[2];
	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]
	";


	echo count($colors);

	?>

	<div style="color:<?=$colors[1]?>">
		This text is green
	</div>

	<hr>
	<?php

	//associative array
	$colorsAssociative = [
		"red" => "#f00",
		"green" => "#0f0",
		"blue" => "#00f"

	];

	echo $colorsAssociative['green'];

	?>
	<hr>
	<?php
	//casting
	$c = "$a";
	$d = $c*1;

	$colorsObject = (object)$colorsAssociative;

	//echo $colorsObject;


	echo "<hr>";

	//array index notation
	echo $colors[0]. "<br>";
	echo $colorsAssociative['red']."<br>";
	echo $colorsAssociative[$colors[0]]."<br>";

	//object property notation
	echo $colorsObject->red."<br>";
	echo $colorsObject->{$colors[0]}."<br>";

	?>
	<hr>
	<?php

	print_r($colors);
	echo "<hr>";
	print_r($colorsAssociative);
	echo "<hr>";
	echo "<pre>",print_r($colorsObject),"</pre>";

	//function
	function print_p($value) {
		echo "<pre>",print_r($value),"</pre>";
	}
	print_p($_GET);

	?>

	
</body>
</html>
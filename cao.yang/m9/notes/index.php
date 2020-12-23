<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<?php 
	
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL);
	?>

	<?php 
	echo "<div>Hello World</div>";

	echo "<div>Goodbye World</div>";
	

	//variables
	$a = 5;
	echo $a;

	//string interpolation
	echo "<div>I have $a things</div>";
	echo '<div>I have $a things</div>';

	//number
	//integer
	$b = 15;
	//float
	$b = 0.576;
	$b = 10;

	//string
	$name = "Yerguy2";

	//Boolean
	$isOn = true; 

	//Math

	echo 5 - 4 * 2;

	//Concatenation

	echo "<div>b + a" . "= c</div>";
	echo "<div>$b + $a = ".($a+$b)."</div>";

	?>

	<hr>
	<div>This is my name</div>
	<div>
		<?php  

		$firstname = "Yang";
		$lastname = "Cao";
		$fullname = "$firstname" . " $lastname";

		echo $fullname;

		?>

	<hr>
	<?php 

	//superglobal
	//?name=Joey
	echo "<div>My name is {$_GET['name']}</div>";

	//?name=Joey&type=button
	echo "<{$_GET['type']}> My name is {$_GET['name']}</{$_GET['type']}>";

	 ?>

	 <hr>
	 <?php 

	 //array
	 $colors = array("red" , "green" , "blue" );

	 echo $colors[1];

	 echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]

	 "; 

	 echo count($colors);
	 
	 ?>

	  <div style="color: <?= $colors[1] ?>">
	  	This text is green
	  </div>


	  <hr>
	  <?php
	  //associative array
	  $colorsAssociative = [
	  		"red" => "#f00" ,
	  		"green" => "#0f0" ,
	  		"blue" => "#00f" 
	  ];

	  echo $colorsAssociative ["green"];
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

	  echo $colors[0]."<br>";
	  echo $colorsAssociative["red"]."<br>";
	  echo $colorsAssociative[$colors[0]]."<br>";

	  //object property notation
	  echo $colorsObject-> red."<br>" ;
	  echo $colorsObject-> {$colors[0]}."<br>" ;


	   ?>


	   <hr>
	   <?php 

	   print_r($colors);
	   echo "<hr>";
	   print_r($colorsAssociative);
	   echo "<hr>";
	   echo "<pre>",print_r($colorsObject),"</pre>";

	   //function
	   function print_p($v) {
	   		echo "<pre>",print_r($v),"</pre>";	
	   }

	   print_p($GLOBALS);



	    ?>





























</body>
</html>

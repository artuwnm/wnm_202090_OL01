
<?php

$root = $_SERVER["DOCUMENT_ROOT"];
$base = strpos($root, 'Desktop') > 0 ? 'http://localhost:3000' : 'http://katy-smith.com/Development/katy-smith/aau/wnm608/website/';

error_log($base);

?>

	<base href="<?php echo($base); ?>">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/website.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="https://use.typekit.net/rzf6qiq.css">
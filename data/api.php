<?php

include_once "../lib/php/functions.php";

$output = [];

$data = json_decode(file_get_contents("php://input"));

//print_p($data);

switch ($data->type) {
	case "products_all":
		# code...
	 $output['result'] = makeQuery(makeConn(),"SELECT * 
	 	FROM `products` 
	 	ORDER BY `date_create` DESC 
	 	LIMIT 12");
	 break;	
	case "product_search":
	$output['result'] = makeQuery(makeConn(),"SELECT *
		FROM `products`
		WHERE 
		`name` LIKE '%$data->search%' OR
		`description` LIKE '%$data->search%' OR
		`description` LIKE '%$data->search%' 
		ORDER BY `date_create` DESC
		LIMIT 12");
		# code...
		break;
	default: $output['error'] = "No Valid Type";
}

echo json_encode($output,JSON_NUMERIC_CHECK/JSON_UNESCAPED_UNICODE);

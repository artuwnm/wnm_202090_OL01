<?php

include_once "../lib/php/functions.php";

$output =[];

// receive JSON POST with PHP
$data = json_decode(file_get_contents('php://input'));
// print_r($data);

switch ($data->type) {

	case "products_all":
		$output['result'] = makeQuery(makeConn(),

			"SELECT * 
			FROM `products`
			ORDER BY `date_create` DESC
			LIMIT 12"
		);
		break;

	case "product_search":
		$output['result'] = makeQuery(makeConn(),

			"SELECT * 
			FROM `products`
			WHERE `product_designer` LIKE '%$data->search%' OR 
				  `product_name` LIKE '%$data->search%' OR
				  `product_description` LIKE '%$data->search%' OR
				  `product_category` LIKE '%$data->search%' 

			ORDER BY `date_create` DESC
			LIMIT 12"
		);
		break;


	case "product_filter":
		$output['result'] = makeQuery(makeConn(),

			"SELECT * 
			FROM `products`
			WHERE `$data->column` LIKE '$data->value'
			ORDER BY `date_create` DESC
			LIMIT 12"
		);
		break;

	case "product_sort":
		$output['result'] = makeQuery(makeConn(),

			"SELECT * 
			FROM `products`
			ORDER BY $data->column $data->dir
			LIMIT 12"
		);
		break;

	
	default: 
		$output['error'] = "No Valid Type";
		break;
}

echo json_encode($output,JSON_NUMERIC_CHECK/JSON_UNESCAPED_UNICODE);
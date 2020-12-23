<?php
include "../lib/php/functions.php";

$output = [];
$data = json_decode(file_get_contents("php://input"));
$conn = makeConn();

switch($data->type) {
    case "products_all":
        $output['result'] = makeQuery($conn, "SELECT * FROM `products` ORDER BY `category`;");
        break;

    case "products_search":
        $collection = strtolower($data->collection);
        $pricerange = strtolower($data->pricerange) != 'all' ? explode('-', $data->pricerange) : [];
        $sort = strtolower($data->sort);

        $query = "SELECT * FROM `products` WHERE" .
            "(`name` LIKE '%" . $data->search . "%' OR " .
            "`description` LIKE '%" . $data->search . "%' OR " .
            "`category` LIKE '%" . $data->search . "%') ";
        
        if($collection != 'all') {
            $query .= " AND `category` LIKE '" . $collection . "' ";
        } else {
            $query .= " ";
        }

        if(count($pricerange) == 2) {
            $query .= " AND `price` BETWEEN " . $pricerange[0] . " AND " . $pricerange[1] . " ";
        }

        if($sort == 'none') {
            $query .= "ORDER BY `category`;";
        } else {
            $query .= "ORDER BY `price` " . strtoupper($data->sort) . ";";
        }

        error_log($query);

        $output['result'] = makeQuery($conn, $query);

        break;
    default:
    $output['error'] = "No valid type";
}

echo json_encode($output, JSON_NUMERIC_CHECK|JSON_UNESCAPED_UNICODE);
?>
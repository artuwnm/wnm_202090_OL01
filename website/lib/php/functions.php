  <?php
include "auth.php";

function print_p($v) {
	   	 	echo "<pre>", print_r($v),"</pre>";

}
function file_get_json ($filename){
		$file = file_get_contents($filename);
		$notes_object = json_decode($file);
		return $notes_object;
}

function makeConn() {
	$auth = getAuth();
	$conn = new mysqli($auth[0], $auth[1], $auth[2], $auth[3]);
	$conn->set_charset('utf8');
	if($conn->connect_errno) die($conn->connect_error);
	return $conn;
}

function makeQuery($conn, $query) {
	$result = $conn->query($query);
	if($conn->errno) die($conn->error);
	$a = [];
	while($row = $result->fetch_object()) {
		$a[] = $row;
	}
	return $a;
}

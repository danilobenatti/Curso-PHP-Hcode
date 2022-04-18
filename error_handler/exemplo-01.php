<?php
function error_handler($code, $messasge, $file, $line) {
	echo json_encode(array(
		"code" => $code,
		"message" => $messasge,
		"file" => $file,
		"line" => $line
	));
}

set_error_handler("error_handler");

$total = 100 / 0;

?>

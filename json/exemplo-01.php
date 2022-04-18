<?php
$pessoas = array();

array_push($pessoas, array(
		"nome" => "João",
		"idade" => 50
));
array_push($pessoas, array(
		"nome" => "Maria",
		"idade" => 40
));

echo json_encode($pessoas);
?>

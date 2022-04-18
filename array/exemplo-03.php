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
print_r($pessoas);
print_r($pessoas[1]['nome']);
print_r($pessoas[1]['idade']);

echo '<br>';
print_r(end($pessoas));
?>

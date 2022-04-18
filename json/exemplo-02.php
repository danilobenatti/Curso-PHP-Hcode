<?php
$json = '[{"nome":"Jo\u00e3o","idade":50},{"nome":"Maria","idade":40}]';

$data = json_decode($json, TRUE); //parâmetro TRUE retorna um 'array'
var_dump($data);
?>

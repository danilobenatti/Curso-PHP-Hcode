<?php
$nome = $_GET["a"];
$sobrenome = $_GET["b"];
var_dump((int)$nome, (int)$sobrenome);

$ip = $_SERVER["REMOTE_ADDR"];
$url = $_SERVER["SCRIPT_NAME"];
echo '<br>', $ip;
echo '<br>', $url;
?>

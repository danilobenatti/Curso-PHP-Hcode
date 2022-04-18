<?php
$cep = "01001000";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$json = curl_exec($ch);
curl_close($ch);

echo $json;

// $data = json_decode($json, TRUE);
// print_r($data);

?>

<?php
require_once '../dao/config.php';
require_once '../dao/class/Sql.php';

$sql = new Sql();

$rawQuery = "SELECT * FROM tb_usuarios ORDER BY deslogin";
$usuarios = $sql->select($rawQuery);

$headers = array();
foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}

$filename = 'usuarios.csv';
$mode = 'w+';
$handle = fopen($filename, $mode);
$glue = ';';
fwrite($handle, implode($glue, $headers) . "\r\n");

foreach ($usuarios as $row) {
	$array = array();
	foreach ($row as $key => $value) {
		array_push($array, $value);
	}
	fwrite($handle, implode($glue, $array) . "\r\n");
}

fclose($handle);

?>

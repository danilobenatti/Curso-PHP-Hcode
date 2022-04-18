<?php
date_default_timezone_set("America/Sao_Paulo");
$filename = "log.txt";
// Open for reading and writing; otherwise it has the same behavior as 'w'.
// $mode = "w+";
// Open for reading and writing.
$mode = "a+";
$handle = fopen($filename, $mode);
$string = date("d/m/Y H:i:s") . "\r\n";
fwrite($handle, $string);
fclose($handle);
echo "Arquivo criado com sucesso.";
?>

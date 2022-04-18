<?php
$filename = 'teste.txt';
$mode = 'w+';
$handle = fopen($filename, $mode);
fclose($handle);
sleep(10);
unlink($filename);
echo 'Arquivo removido com sucesso!';
?>

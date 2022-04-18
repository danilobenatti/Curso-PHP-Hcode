<?php
$index = 10;
for ($i = 0; $i < $index; $i++) {
	echo '<br>', $i;
}

echo '<br>';

$index = 100;
for ($i = 0; $i < $index; $i+=5) {
	if ($i > 30 && $i < 70) {
		continue; //ignora o resto, continua para o próximo laço.
	}
	if ($i === 90) {
		break;
	}
	echo '<br>', $i;
}

?>

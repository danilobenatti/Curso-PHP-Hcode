<?php
function ola() {
	return "Olá Mundo!";
}

echo '<br>', ola();
echo '<br>', ola();

$string = ola();
echo '<br>', strlen($string);
?>

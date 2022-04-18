<?php
function soma(float ...$valores) {
	return array_sum($valores);
}
echo '<br>', soma(2, 2);
echo '<br>', soma(2, 2.2, 3);
echo '<br>', soma(2, 3, 4, 5.5);
?>

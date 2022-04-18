<?php
function soma(int ...$valores):float {
	return array_sum($valores);
}
echo '<br>';
var_dump(soma(2.2, 2));
echo '<br>', soma(2, 2.2, 3);
echo '<br>', soma(2, 3, 4, 5.5);
?>
